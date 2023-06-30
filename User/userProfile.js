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


let confirm = false;;

function accountDeletion(){
    var deleteForm = document.getElementById('deleteForm');
    var deleteErrorDiv = document.getElementById('adminErrorDiv');
    var confirmBox = document.getElementById('confirm');
    
    deleteForm.action = `accountDelete.php?username=${username}`;
    if(username === 'admin'){
        deleteErrorDiv.style.display='block';
    }
    else{
        confirmBox.style.display = 'block';
    }
}

function invisible(id){
    document.getElementById(id).style.display="none";
}

function modifiyAcc(){
    
}