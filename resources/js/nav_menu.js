console.log("hola");

var btnOpen = document.querySelector(".btn-menu");
var btnClose = document.querySelector(".btn-menu-close");
var menuList = document.querySelector(".menu");

btnOpen.onclick = function() {
    activateShow();
};

btnClose.onclick = function(e) {
    e.preventDefault();
    menuList.className = "menu";
};

function activateShow() {
    if (menuList.className === "menu") {
        menuList.className = "menu show";
    } else {
        menuList.className = "menu";
    }
}
