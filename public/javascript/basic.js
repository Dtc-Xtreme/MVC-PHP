window.addEventListener('DOMContentLoaded', (event) => {
    document.getElementById("menu-button").addEventListener("click", openMenu);
    document.getElementById("black-box").addEventListener("click", closeMenu);
});

function openMenu(){
    document.getElementById("nav-menu").classList.toggle("visible");
    console.log("menu button is clicked");
}

function closeMenu(t){
    console.log("menu button is clicked");
    t.currentTarget.classList.replace("visible","hide");
}