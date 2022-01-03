function matchPassword() {
let pswd1 = document.getElementById("usrpwd");
let pswd2 = document.getElementById("confpwd");

if(pswd1 != pswd2) {
    alert("Account Not Created!");


 } else {
        alert("Account created successfully!");
    }
}

//Changes Theme from DarkMode to LightMode
function swapStyleSheet() {
    let themeSwap = document.getElementsByTagName('link')[0]; 
    let imgSwap = document.getElementById('ldimg');   // calls for new image on
    if(themeSwap.getAttribute('href') == 'darkmode.css')
    { 
        themeSwap.setAttribute('href' , 'lightmode.css')
        imgSwap.src = '/devchatmain/images/Lightmode.png' 
        
    } 
    else{
        themeSwap.setAttribute('href' , 'darkmode.css')
        imgSwap.src = '/devchatmain/images/Darkmode.png'
        

    }
}

