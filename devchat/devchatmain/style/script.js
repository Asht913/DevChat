function matchPassword() {
let pswd1 = document.getElementById("usrpwd");
let pswd2 = document.getElementById("confpwd");

if(pswd1 != pswd2) {
    alert("Account Not Created!");


 } else {
        alert("Account created successfully!");
    }
}


function swapStyleSheet(sheet) {
    document.getElementById('pagestyle').setAttribute('href', sheet);
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
    const greets = documt.getElementById('greets').getElementsByTagName('ul')[0];
    const newerGreetLi = greets.appendChild(newGreetLi);
    newerGreetLi.appendChild(newGreetAvatar);
    newerGreetLi.appendChild(newGreetText);
    devBlog.greet.value = "";
}