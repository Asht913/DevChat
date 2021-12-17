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
