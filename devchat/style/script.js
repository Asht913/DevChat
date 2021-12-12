function matchPassword() {
let pswd1 = document.getElementById("usrpwd");
let pswd2 = document.getElementById("confpwd");

if(pswd1 != pswd2) {
    alert("Passwords did not match!");

 } else {
        alert("Password created successfully!");
    }
}
