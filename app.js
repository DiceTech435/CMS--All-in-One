// HOME.HTML NAVBAR 
const menu = document.querySelector('#mobile-menu');
const menuLinks = document.querySelector('.navBar_menu');

menu.addEventListener('click', function(){
    menu.classList.toggle('is-active');
    menuLinks.classList.toggle('active');
});


// LIGHT-MODE 
let lightmode = localStorage.getItem('lightmode')
const themeSwitch = document.getElementById('theme-switch')

const enableLightmode = () => {
    document.body.classList.add('lightmode')
        localStorage.setItem('lightmode', 'active') 
}
const disableLightmode = () => {
    document.body.classList.remove('lightmode')
        localStorage.setItem('lightmode', 'null')    
}

if(lightmode === "active") enableLightmode()

themeSwitch.addEventListener("click", () => {
    lightmode = localStorage.getItem('lightmode')
    lightmode !== "active" ? enableLightmode() : disableLightmode()
})

