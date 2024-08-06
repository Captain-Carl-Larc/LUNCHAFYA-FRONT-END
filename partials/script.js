console.log("File is connected");

const harmbMenu=document.getElementById("menu-btn");
const closeMenuBtn=document.getElementById("sm-menu");

//function to open harmburger menu
function openMenu(){
    harmbMenu.classList.add("hide-menu")
    closeMenuBtn.classList.remove("hide-menu")
    console.log("button opened!");
}

//function to close harmburger menu
function closeMenu(){
    harmbMenu.classList.remove("hide-menu")
    closeMenuBtn.classList.add("hide-menu")
    console.log("button closed!");
}