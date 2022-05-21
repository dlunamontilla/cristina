(function() {
    /**
     * 
     * @param { string } selector 
     * @returns { NodeListOf<HTMLElement> }
     */
    const getElements = (selector) => document.querySelectorAll(selector);


    const [taskList, addTask] = getElements("#add-task, #lista-nav");

    if (!addTask || !taskList) return;

    let count = 0;

    const elements = [];

    const stringElements = localStorage.getItem("elements");

    if (stringElements) {
        elements.push(...JSON.parse(stringElements));
    }

    /**
     * 
     * @param {Object<string, string|number} element 
     * @returns { string }
     */
    function addList(element) {
        const { id, text } = element;

        if (!id, !text) return "";

        const list = `<li class="list fadeIn" data-id="${id}">
                <label class="list__label">
                    <input type="checkbox" name="list[${id}]" value="${text}">
                    <span autofocus="autofocus">${text}</span>
                </label>
    
                <div class="list__options" id="options">
                    <div class="list__options__icon" data-action="delete" data-id="${id}">
                        <button class="button">
                            &times;
                        </button>
                    </div>
                </div>
            </li>`;

        return list;
    }

    elements.forEach(element => {
        const list = addList(element);
        taskList.insertAdjacentHTML('beforeend', list);
    });


    addTask.onclick = () => {
        let textContent = prompt("Ingrese una descripción: ");
        if (!textContent) return;

        const element = {
            id: ++count,
            taskname: textContent.replace(" ", "-"),
            text: textContent
        };

        elements.push(element);
        localStorage.setItem("elements", JSON.stringify(elements));

        const list = addList(element);
        taskList.insertAdjacentHTML('beforeend', list);
    };

    const actions = {
        "delete": function(element, id) {
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