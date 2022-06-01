/**
 * 
 * @param {HTMLFormElement} form Formulario HTML
 * 
 * @param { boolean } jsonFormat
 * 
 * Guardar datos del formulario al servidor.
 */
const saveFormDataToServer = async (form, jsonFormat = false) => {
    const { action, method } = form;
    const formData = new FormData(form);

    const methods = {
        get: async function () {
            /** @type { Array<string> } */
            const fields = [];
            formData.forEach((value, index) => {
                fields.push(`${index}=${value}`);
            });

            /** @type { string } */
            const queryString = `?${fields.join("&")}`;

            const response = await fetch(`${action}${queryString}`, { method, mode: 'cors' });
            if (!response.ok) console.error(response.status);

            if (jsonFormat) {
                const data = await response.json();
                return data;
            }

            const data = await response.json();
            // form.reset();
            return data;
        },

        post: async function () {
            const response = await fetch(action, {
                method,
                body: formData,
                credentials: 'same-origin',
                mode: 'same-origin'
            });

            if (!response.ok) console.error(response.status);

            if (jsonFormat) {
                const data = await response.text();

                if (!(data.length)) {
                    return [];
                }

                return JSON.parse(data);
            }

            const data = await response.text();
            // form.reset();

            console.log({ data });
            
            if (!(data.length > 0)) {
                return [];
            }

            return JSON.parse(data);
        }
    };

    if (typeof methods[method] === "function") {
        const data = await methods[method]();
        return data;
    }
}

/**
 * 
 * @param {string} path Ruta de la API
 * 
 * @return { Promise<Array<Object<string, string|number>>> }
 */
async function getData(path) {
    const response = await fetch(path, {
        method: "GET",
        credentials: 'same-origin',
        mode: 'same-origin'
    });

    if (!response.ok) console.error(response.status);

    const data = await response.text();

    if (!(data.length > 0)) {
        return [];
    }

    return JSON.parse(data);
}

export {
    saveFormDataToServer,
    getData
}