import { saveFormDataToServer } from "./saveToServer.js";

const formLogin = document.querySelector("#form-login");

if (formLogin) formLogin.onsubmit = async function(e) {
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

        setTimeout(function() {
            info.classList.remove("error");
            info.textContent = "";
        }, 3500);
        
        return;
    }
    
    info.classList.add("passed");
    info.textContent = "Sesión iniciada correctamente";
    
    setTimeout(function() {
        info.classList.remove("passed");
        info.textContent = "";
        parent.location = "./user.php";
    }, 2000);
}

// Registro de usuarios:
const formRegisterUser = document.querySelector("#user-register");

if (formRegisterUser) formRegisterUser.onsubmit = async function(e) {
    e.preventDefault();
    const data = await saveFormDataToServer(this);

    if (!data.info) {
        console.error("Lamentablemente, no se pudo crear el usuario, por favor, vuelva intentarlo");
        return;
    }

    console.log({ data });
}