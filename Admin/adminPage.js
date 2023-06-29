var params = new URLSearchParams(window.location.search);
var name = params.get('name');
var username = params.get('username');

document.getElementById("adminName").innerHTML = name;
console.log(username);


function visible(id){
    document.getElementById(id).style.display = "block"
}

function gotoProfile(){
    window.location.href = `../User/userProfile.html?name=${name}&username=${username}`;
}