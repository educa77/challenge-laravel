var dropdownMenu = document.querySelector("#dropdownMenu");
var menu = document.querySelector(".dropdown__menu");

if (dropdownMenu && menu) {
    dropdownMenu.onclick = function() {
        activateShow();
    };

    function activateShow() {
        if (menu.className === "dropdown__menu") {
            menu.className = "dropdown__menu active";
        } else {
            menu.className = "dropdown__menu";
        }
    }
}
