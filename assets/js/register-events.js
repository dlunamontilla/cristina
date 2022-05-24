(function() {
    const formRegisterEvents = document.querySelector("#form-register-event");
    
    if (formRegisterEvents) formRegisterEvents.onsubmit = async function(e) {
        e.preventDefault();
        const data = await saveFormDataToServer(this);
        console.log({ data });
    }
}());