var params = new URLSearchParams(window.location.search);
var name = params.get('name');
var username = params.get('username');
let userStatus;
var header = document.getElementById('welcomeHeader');
if(name!= 'null' && username!=null){
    document.getElementById('userName').innerHTML = name;
    userStatus = true;
}
else{
    header.innerHTML = "User Not Found!";
    userStatus = false;
}

if(!userStatus){
    document.getElementById('navigation').style.display = 'none';
    document.getElementById('header').style.backgroundColor = '#ffcccc';
}

function gotoProfile() {
    window.location.href=`userProfile.html?name=${name}&username=${username}`;
}