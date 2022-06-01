import { getData, saveFormDataToServer } from "./saveToServer.js";

async function getProfile() {
    const data = await getData('api/?getProfile');

    console.log({ data });

    /**
     * @type { HTMLHeadingElement }
     */
    const usernameProfile = document.querySelector("#username-profile");

    if (usernameProfile) {
        usernameProfile.textContent = `${data.name} ${data.lastname}`;
    }

    /**
     * @type { HTMLHeadingElement } Título donde aparece el nombre de usuario.
     */
    const username = document.querySelector("#username");

    if (username) {
        username.textContent = `${data.name} ${data.lastname}`;
    }

    /**
     * @type { HTMLSpanElement } Se muestra la tarifa de suscripción del usuario en el menú.
     */
    const rate = document.querySelector("#tarifa");

    if (rate) {
        rate.textContent = `${data.plan_name} (${data.plan_price} €)`;
    }

    /**
     * @type { HTMLSpanElement } Tarifa de suscripción del usuario ubicada en la vista principal
     */
    const usernameRate = document.querySelector("#username-rate");

    if (usernameRate) {
        usernameRate.textContent = `${data.plan_name} (${data.plan_price} €)`;
    }

    /**
     * @type [ HTMLElement ] Género
     */
    const gender = document.querySelector("#gender");

    if (gender) {
        gender.textContent = `${data.gender}`;
    }

    /**
     * @type { HTMLElement } Nombre
     */
    const name = document.querySelector("#name");

    if (name) {
        name.textContent = `${data.name}`;
    }

    /**
     * @type { HTMLElement } Apellidos
     */
    const lastname = document.querySelector("#lastname");

    if (lastname) {
        lastname.textContent = `${data.lastname}`;
    }

    /**
     * @type { HTMLElement } Documento de Identificación Nacional
     */
    const dni = document.querySelector("#dni");

    if (dni) {
        dni.textContent = `${data.DNI}`;
    }

    /**
     * @type { HTMLElement } Fecha de nacimiento
     */
    const dateOfBirth = document.querySelector("#date-of-birth");

    if (dateOfBirth) {
        dateOfBirth.textContent = `${data.date_of_birth}`;
    }

    /**
     * @type { HTMLElement } Correo electrónico
     */
    const email = document.querySelector("#email");

    if (email) {
        email.textContent = `${data.email}`;
    }

    /**
     * @type { HTMLElement } Teléfono de contacto.
     */
    const phone = document.querySelector("#phone");

    if (phone) {
        phone.textContent = `${data.phone}`;
    }

    /**
     * @type { HTMLElement } Dirección postal
     */
    const postalAddress = document.querySelector("#postal-address");

    if (postalAddress) {
        postalAddress.textContent = `${data.postal_address}`;
    }

    /**
     * @type { HTMLElement } Provincia
     */
    const province = document.querySelector("#province");

    if (province) {
        province.textContent = `${data.province_name}`;
    }

    /**
     * @type { HTMLElement } Localidad
     */
    const locality = document.querySelector("#locality");

    if (locality) {
        locality.textContent = `${data.locality}`;
    }

    /**
     * @type { HTMLInputElement } Nombre de la persona en un campo de texto.
     */
    const inputName = document.querySelector("#input-name");

    if (inputName) {
        inputName.value = `${data.name}`;
    }

    /**
     * @type { HTMLInputElement } Campo del formulario apellidos.
     */
    const inputLastname = document.querySelector("#input-lastname");

    if (inputLastname) {
        inputLastname.value = `${data.lastname}`;
    }

    /**
     * @type { HTMLInputElement } DNI en un campo de texto.
     */
    const inputDNI = document.querySelector("#input-dni");

    if (inputDNI) {
        inputDNI.value = `${data.DNI}`;
    }

    /**
     * @type { HTMLInputElement } Campo de la fecha de nacimiento
     */
    const inputDateOfBirth = document.querySelector("#input-date-of-birth");

    if (inputDateOfBirth) {
        inputDateOfBirth.value = `${data.date_of_birth_original}`;
    }

    /**
     * @type { HTMLInputElement } Teléfono | Campo de texto
     */
    const inputPhone = document.querySelector("#input-phone");

    if (inputPhone) {
        inputPhone.value = `${data.phone}`;
    }

    /**
     * @type { HTMLInputElement } Dirección Postal | Campo de formulario.
     */
    const inputPostalAddress = document.querySelector("#input-postal-address");

    if (inputPostalAddress) {
        inputPostalAddress.value = `${data.postal_address}`;
    }

    /**
     * @type { HTMLInputElement } Localidad | Campo de Formulario.
     */
    const inputLocality = document.querySelector("#input-locality");

    if (inputLocality) {
        inputLocality.value = `${data.locality}`;
    }

    /**
     * @type { HTMLInputElement } Cuenta Bancaria | Campo de formulario.
     */
    const inputBankAccount = document.querySelector("#input-bank-account");

    if (inputBankAccount) {
        inputBankAccount.value = `${data.bank_account}`;
    }

    /**
     * @type { HTMLInputElement } Correo electrónico | Campo de formulario.
     */
    const inputEmail = document.querySelector("#input-email");

    if (inputEmail) {
        inputEmail.value = `${data.email}`;
    }

    // ÁREA DE ACTUALIZACIÓN DE CONTRASEÑAS
    const passwordUpdateForm = document.querySelector("#password-update-form");

    if (passwordUpdateForm) passwordUpdateForm.onsubmit = async function (e) {
        e.preventDefault();

        const match = window.coinciden;

        if (match) {
            const data = await saveFormDataToServer(e.target);
            console.log(data);
        }

        if (!match) {
            alert("Las contraseñas no coinciden");
        }
    }

    const password = document.querySelector("#password");
    const passwordRepeat = document.querySelector("#password-repeat");

    if (password && passwordRepeat) {

        password.oninput = function () {
            window.coinciden = this.value === passwordRepeat.value;
            console.log(this.value)
        }

        passwordRepeat.oninput = function () {
            window.coinciden = this.value === password.value;
            console.log(this.value)
        }
    }

    // Área de cierre de sesión:
    const logout = document.querySelector("#logout");
    if (logout) {
        logout.onclick = async () => {
            const response = await fetch("api/?logout", {
                credentials: "same-origin",
                mode: "same-origin"
            });

            const data = await response.json();

            console.log({data})

            if (data.info) {
                location.href = "./";
            }
        }
    }

}


// Llamar la función obtener perfil
getProfile();

export { }