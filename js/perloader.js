
var loader = document.getElementById("preloader");
const fadeEffect = setInterval(() => 
{
    if (!preloader.style.opacity) 
    {
        preloader.style.opacity = 1;
    }
    if (preloader.style.opacity > 0) 
    {
        preloader.style.opacity -= 0.1;
    } 
    else 
    {
        clearInterval(fadeEffect);
        loader.style.display = "none";
    }
    
}, 100);

window.addEventListener('load', fadeEffect);