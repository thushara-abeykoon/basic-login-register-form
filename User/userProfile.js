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
    document.getElementById('header').style.backgroundColor = '#ffcccc';
    document.getElementById('fetchBtn').style.display = 'none';
}






function fetchData(){
    var usernameInput = document.getElementById('username');
    var nameInput = document.getElementById('name');

    usernameInput.value = `${username}`;
    nameInput.value = `${name}`;
    return true;
}