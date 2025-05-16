const menuIcon = document.getElementById('menu_icon');
const sideBar = document.getElementById('side_bar');
const closeButton = document.getElementById('close_but');
const overlay = document.getElementById('overlay');
menuIcon.addEventListener('click', () =>{
    sideBar.style.left = "0";
    overlay.style.display = "block";
});
closeButton.addEventListener('click', () =>{
    sideBar.style.left = "-300px";
    overlay.style.display = "none";
})
overlay.addEventListener('click', () =>{
    sideBar.style.left = "-300px";
    overlay.style.display = "none";
})