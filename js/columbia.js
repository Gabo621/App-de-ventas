const nav = document.querySelector("#nav");
const abrir = document.querySelector("#abrir");
const cerrar = document.querySelector("#cerrar");

abrir.addEventListener("click", () => {
    navi.classList.add("visible");
    body.classList.add('no-scroll');
})

cerrar.addEventListener("click", () =>{
    navi.classList.remove("visible");
    body.classList.remove('no-scroll');
})


const abrirMenu = document.getElementById('abrir');
const cerrarMenu = document.getElementById('cerrar');
const navMenu = document.getElementById('nav-menu');
const body = document.body;