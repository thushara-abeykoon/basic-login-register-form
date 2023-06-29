var regNow = document.getElementById("regNow");
var logNow = document.getElementById("logNow");

function transformForm(){
    var loginForm = document.getElementById("loginForm");
    var regForm = document.getElementById("registerForm");
    
    if(loginForm.style.display=="block"){
        regForm.style.display = "block";
        loginForm.style.display = "none";
    }
    else{
        regForm.style.display = "none";
        loginForm.style.display = "block";
    }

}
