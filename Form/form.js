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

function invisible(id){
    document.getElementById(id).style.display="none";
}

function validate(formid){
    var formElm = document.getElementById(formid);
    var childElms = formElm.querySelectorAll('input[type=text], input[type=date], input[type=password], input[type=email]');

    if(!passwordValidate(formElm)){
        document.getElementById("passwdMatchStatus").style.display = "block";   
    }

    for(let x of childElms){
        if (x.value==='') {
            document.getElementById("insertError").style.display = "block";
            return false;  
        }
    }
    
    
    return passwordValidate(formElm);
}

function passwordValidate(formElm){
    var childElms = formElm.querySelectorAll('input[type=password]');
    console.log(childElms[0].value);
    console.log(childElms[1].value);
    return childElms[0].value===childElms[1].value;
}



