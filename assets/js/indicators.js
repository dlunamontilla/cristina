import { getData } from "./saveToServer.js";

async function indicators() {
    const data = await getData('api/?indicators');

    const tbody = document.querySelector("#tbody-indicators");
    if (!tbody) return;

    /**
     * Genera el código HTML necesario por cada registro de la base de datos.
     * @param { Array<Object<string, string|number>> } element
     * @returns { string }
     */
    const addRow = (element) => {
        const {access_date, ip, device_type, device_name, operating_system, browser} = element;

        const html = `
            <tr>
                <td>${access_date}</td>
                <td>${ip}</td>
                <td>${device_type}</td>
                <td>${device_name}</td>
                <td>${operating_system}</td>
                <td>${browser}</td>
            </tr>
        `;

        return html;
    }

    if (!Array.isArray(data)) return;

    data.forEach(element => {
        const html = addRow(element);
        tbody.insertAdjacentHTML('beforeend', html);
    });
}

// Se trae los datos y renderiza la tabla indicadores.
indicators();

export {}