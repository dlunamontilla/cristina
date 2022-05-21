const toggleBtn = document.querySelector('.toggle-sidebar-btn');
const sideBar = document.getElementById('sidebar');
const mainCtn = document.getElementById('main');

    if (window.innerWidth > 500) { //cuando el tamaño es mayor a 500 la barra lateral se muestra y el contenido se desplaza a la izquierda
        toggleBtn.addEventListener('click', () => {
            if (sideBar.style.left == '0px') {
                mainCtn.style.marginLeft = "0px";
                sideBar.style.left = '-300px';
            } else {
                sideBar.style.left = '0px';
                mainCtn.style.marginLeft = "300px";
            }

    })

    } else { //cuando el tamaño es inferior a 500 la barra lateral se pone encima del contenido
        toggleBtn.addEventListener("click", () => {
            if (sideBar.style.left == "0px") {
                    sideBar.style.left = "-300px";
            } else {
                    sideBar.style.left = "0px";
            }
        });
    }
