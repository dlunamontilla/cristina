const init = async () => {

    /**
     * 
     * @param { string } selector 
     * @returns { NodeListOf<HTMLElement> }
     */
    const getElements = (selector) => document.querySelectorAll(selector);


    const [taskList, addTask] = getElements("#lista-nav, #add-tasklist");

    if (!addTask || !taskList) return;

    const getData = async () => {
        const response = await fetch('api/?tasklist');
        if (!response.ok) {
            console.error("Lamentablemente, no se pudo procesar la petición. Por favor, vuelve a intentarlo");
            return [];
        }

        const data = await response.text();

        if (!(data.length > 0)) {
            return [];
        }

        return JSON.parse(data);
    }

    let elements = await getData();
    let id = elements[0]?.tasklist_id | 0;

    /**
     * @type { number } Contiene el identificador de un usuario autenticado.
     */
    const usersId = elements[0]?.users_id;
    /**
     * 
     * @param {Object<string, string|number} element 
     * @returns { string }
     */
    function addList(element) {
        const { tasklist_id, tasklist_name, users_id } = element;

        // console.log({ tasklist_id, users_id });

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
    const post = async (e, form, isFormData = false) => {
        const { action = 'api/', method = "POST" } = form;
        const formData = isFormData
            ? form
            : new FormData(form);

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

        // Almacenar las tareas en la tabla dl_tasklist
        /**
         * Almacenar las tareas en la tabla dl_tasklist
         * @type { Object<string, string|number> }
         */
        const data = await post(e, e.target);

        console.log({ data });

        if (!data.info) return;

        /**
         * Obtener una lista actualizada de elementos con sus ID.
         * @type { Array<Object<string, string|number>> }
         */
        elements = await getData();

        const formData = new FormData(e.target);
        const fields = Object.fromEntries(formData.entries());

        let maxIndex = 0;

        elements.forEach((element, index) => {
            if (index === 0) {
                maxIndex = element.tasklist_id;
            }

            if (maxIndex < element.tasklist_id) {
                maxIndex = element.tasklist_id;
            }
        });

        fields.tasklist_id = maxIndex;
        fields.users_id = usersId;

        const html = addList(fields);
        taskList.insertAdjacentHTML('afterbegin', html);
    };

    const actions = {
        "delete": function (element, ids) {
            element.parentNode.parentNode.remove();
        }
    };

    taskList.onclick = async (e) => {
        const element = e.target;
        const { action, id, userId } = element.dataset;

        const formData = new FormData();
        formData.set('id', Number(id));
        formData.set('user_id', Number(userId));

        await post(e, formData, true);

        if (action) {
            if (typeof actions[action] === "function") {
                actions[action](element, {
                    id, userId
                });
            }
        }
    }

}

init();

export { };