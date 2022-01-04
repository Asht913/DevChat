
//Changes Theme from DarkMode to LightMode
function swapStyleSheet() {
    let themeSwap = document.getElementsByTagName('link')[0]; 
    let imgSwap = document.getElementById('ldimg');   // calls for new image on
    if(themeSwap.getAttribute('href') == '/css/darkmode.css')
    { 
        themeSwap.setAttribute('href' , '/css/lightmode.css')
        imgSwap.src = '/images/Lightmode.png' 
        
    } 
    else{
        themeSwap.setAttribute('href' , '/css/darkmode.css')
        imgSwap.src = '/images/Darkmode.png'
        

    }
}

