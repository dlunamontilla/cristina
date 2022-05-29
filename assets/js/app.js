import { saveFormDataToServer } from "./saveToServer.js";

const formLogin = document.querySelector("#form-login");

if (formLogin) formLogin.onsubmit = async function (e) {
    e.preventDefault();

    const info = document.querySelector("#info");
    if (!info) return;

    /**
     * @type { HTMl }
     */
    const data = await saveFormDataToServer(this);

    console.log({ data });

    if (!data.info) {
        info.classList.add("error");
        info.textContent = "Revise que las credenciales sean correctas";

        setTimeout(function () {
            info.classList.remove("error");
            info.textContent = "";
        }, 3500);

        return;
    }

    info.classList.add("passed");
    info.textContent = "Sesión iniciada correctamente";

    setTimeout(function () {
        info.classList.remove("passed");
        info.textContent = "";
        parent.location = "./user.php";
    }, 2000);
}

// Registro de usuarios:
const formRegisterUser = document.querySelector("#user-register");

if (formRegisterUser) formRegisterUser.onsubmit = async function (e) {
    e.preventDefault();
    const data = await saveFormDataToServer(this);
    console.log({ data });

    const info = document.querySelector("#info");
    if (!info) return;

    if (!data.info) {
        const text = "Lamentablemente, no se pudo crear el usuario, por favor, vuelva intentarlo";

        console.error(text);
        info.textContent = text;
        info.classList.add("error");


        setTimeout(function () {
            info.textContent = "";
            info.classList.remove("error");
        }, 5000);

        return;
    }

    info.textContent = "Se ha suscrito exitosamente. Ya puede iniciar sesión";
    info.classList.add("passed");

    setTimeout(() => {
        info.textContent = "";
        info.classList.remove("passed");
        parent.location = "./mi-cuenta.html";
    }, 4000);
}

// Abrir la ventana modal:
const buttons = document.querySelectorAll("[data-bs-target='#modal-register']");

buttons.forEach(button => {
    const { suscription } = button.dataset;

    if (!suscription ) return;
    const radio = document.querySelector(`#${suscription}`);

    console.log({ suscription, radio });
    
    button.onclick = () => {
        radio.checked = true;
    }
});