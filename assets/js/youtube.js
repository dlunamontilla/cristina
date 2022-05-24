/* CARGA DE VIDEOS YOUTUBE */
"use strict";

(
    (async function () {
        /**
         * @param { string } path 
         * @returns { Promise<Object<string, string|number|Array<Object<string, string|number>>> }
         * 'fetch' lee el archivo .json, devuelve la información del archivo y se convierte la cadena en un array de objetos JS 
         * y ya se utiliza para cargar los videos
         */
        async function getData(path) { 
            const response = await fetch(path); 
            const data = await response.json();
            return data;
        }

        const youtube = document.createElement("div");
        youtube.classList.add("youtube"); /* añade la clase al elemento */


        /**
         * @param { Object<string, string> } videos 
         * @returns { string }
         * agrega las tarjetas html con los videos y titulos en funcion que se tenga en el array de objetos
         * la funcion se ejecuta varias veces dependiendo de la cantidad de arrays
         */
        function renderCard(videos) {
            const { href, title } = videos;

            const html = `
                    <div class="youtube__item">
                        <div class="youtube__item__frame">
                            <iframe src="${href}"></iframe>
                        </div>

                        <div class="youtube__item__title">
                            <h5>${title}</h5>
                        </div>
                    </div>
                `;

            return html;
        }

        const data = await getData("./api/videos.json");

        console.log(data);


        const navigation = document.querySelector("#navigation-tab");
        const container = document.querySelector("#tab-container");

        if (!navigation || !container) return;

        navigation.addEventListener("click", function (e) {
            const { show } = e.target.dataset;

            if (!show) return;

            youtube.textContent = "";
            if (show in data) data[show].forEach(video => {
                const html = renderCard(video);
                youtube.insertAdjacentHTML('beforeend', html);
            });

            container.textContent = "";
            container.appendChild(youtube);
        });

        data["cardio"]?.forEach(video => {
            const html = renderCard(video);
            youtube.insertAdjacentHTML('beforeend', html);
        });

        container.textContent = "";
        container.appendChild(youtube);

    })()
);
