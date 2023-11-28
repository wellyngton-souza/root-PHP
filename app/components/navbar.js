let navMenu = document.getElementById("perfilbusca");
let aberto = false;

const abrir = () => {
    if(!aberto){
        navMenu.style.backgroundColor = "none";
    } else{
        navMenu.style.backgroundColor = "block";
    }
};