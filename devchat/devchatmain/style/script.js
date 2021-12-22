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
    let imgSwap = document.getElementById('ldimg');
    if(themeSwap.getAttribute('href') == 'darkmode.css')
    { 
        themeSwap.setAttribute('href' , 'lightmode.css')
        imgSwap.src = '/devchatmain/images/Darkmode.png'
        
    } 
    else{
        themeSwap.setAttribute('href' , 'darkmode.css')
        imgSwap.src = '/devchatmain/images/Lightmode.png'
        
    }
}

//event handlers

function addGreet(event) {
    event.preventDefault();
    const greet = devBlog.greet.value;
    const newGreetLi = document.createElement('li');
    const newGreetAvatar = document.createElement('div');
    newGreetAvatar.className="avatar";
    const newGreetText= document.createElement('span');
    newGreetText.innerText = greet;
    const greets = document.getElementById('greets').getElementsByTagName('ul')[0];
    const newerGreetLi = greets.appendChild(newGreetLi);
    newerGreetLi.appendChild(newGreetAvatar);
    newerGreetLi.appendChild(newGreetText);
    devBlog.greet.value = "";
}
