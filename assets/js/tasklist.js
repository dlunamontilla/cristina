(async function () {

    /**
     * 
     * @param { string } selector 
     * @returns { NodeListOf<HTMLElement> }
     */
    const getElements = (selector) => document.querySelectorAll(selector);


    const [taskList, addTask] = getElements("#lista-nav, #add-tasklist");

    if (!addTask || !taskList) return;

    console.log({ taskList, addTask });

    let count = 0;

    const getData = async () => {
        const response = await fetch('api/?tasklist');
        if (!response.ok) {
            console.error("Lamentablemente, no se pudo procesar la petición. Por favor, vuelve a intentarlo");
            return [];
        }

        const data = await response.json();
        return data;
    }

    const elements = await getData();
    let id = elements[0]?.tasklist_id | 0;

    /**
     * 
     * @param {Object<string, string|number} element 
     * @returns { string }
     */
    function addList(element) {
        const { tasklist_id, tasklist_name, users_id } = element;

        if (!tasklist_id || !users_id || !tasklist_name) return "";

        const list = `<li class="list fadeIn" data-id="${tasklist_id}" data-user-id="${users_id}">
                <label class="list__label">
                    <input type="checkbox" name="list[${tasklist_id}]" value="${tasklist_name}" data-user-id="${users_id}">
                    <span autofocus="autofocus">${tasklist_name}</span>
                </label>
    
                <div class="list__options" id="options">
                    <div class="list__options__icon" data-action="delete" data-id="${tasklist_id}" data-user-id="${users_id}">
                        <button class="button">
                            &times;
                        </button>
                    </div>
                </div>
            </li>`;

        return list;
    }

    const getList = async () => {
        taskList.textContent = "";

        const data = await getData();

        elements.length = 0;
        elements.push(...data);

        elements.forEach(element => {
            const list = addList(element);
            taskList.insertAdjacentHTML('beforeend', list);
        });
    }

    getList();

    /**
     * 
     * @param { SubmitEvent} e Evento de formulario
     * @param {HTMLFormElement} form 
     * @returns 
     */
    const saveTaskList = async (e, form) => {
        const { action, method } = form;
        const formData = new FormData(form);
        
        const response = await fetch(action, {
            method,
            body: formData,
            credentials: 'same-origin',
            mode: 'same-origin'
        });

        if (!response.ok) console.error(response.status);

        const data = await response.json();
        return data;
    }

    addTask.onsubmit = async (e) => {
        e.preventDefault();

        
        let textContent = prompt("Ingrese una descripción: ");
        if (!textContent) return;

        const tasklistName = e.target.querySelector("#tasklist_name");
        const userID = e.target.querySelector("#users_id");
        
        if (!tasklistName || !userID) {
            return;
        }

        tasklistName.value = textContent;
        userID.value = 1;

        const data = await saveTaskList(e, e.target);
        if (!data.info) return;

        const formData = new FormData(e.target);
        const fields = Object.fromEntries(formData.entries());

        fields.tasklist_id = ++id;

        const html = addList(fields);
        taskList.insertAdjacentHTML('afterbegin', html);
    };

    const actions = {
        "delete": function (element, id) {
            element.parentNode.parentNode.remove();

            const data = elements.filter(element => {
                return element.id !== +id;
            });

            elements.length = 0;
            elements.push(data);
            localStorage.setItem("elements", JSON.stringify(data));
        }
    };

    taskList.onclick = (e) => {
        const element = e.target;
        const { action, id } = element.dataset;

        if (action) {
            if (typeof actions[action] === "function") {
                actions[action](element, id);
            }
        }
    }
})();