var params = new URLSearchParams(window.location.search);
var username = params.get('username');



function selectRow(rowNum){
    var checkAllBox = document.getElementById("checkAll");
    var checkbox = document.getElementById("ch"+rowNum);
    var dataTable = document.getElementById("fetchTable");
    var checkboxChilds = dataTable.querySelectorAll('input[type=checkbox]');
    var row = document.getElementById("row"+rowNum);
    var childs = Array.from(row.children);

        if (checkbox.checked) {
            for(let x of childs){
                x.style.backgroundColor = "rgb(225,225,225)";
            }
        } else {
            for(let x of childs){
                x.style.backgroundColor = "white";
            }
        }
    if(checkboxVisibility(checkboxChilds)){
        checkAllBox.checked = true;
    }
    else{
        checkAllBox.checked = false;
    }
}

function selectAll(){
    var checkbox = document.getElementById("checkAll");
    var dataTable = document.getElementById("fetchTable");
    var checkboxChilds = dataTable.querySelectorAll('input[type=checkbox]');


    checkbox.addEventListener('change', function() {
         if (this.checked) {
                for(let x=1; x<checkboxChilds.length; x++){
                    checkboxChilds[x].checked=true;
                    selectRow(checkboxChilds[x].id.substring(2,3));
                }
        
            } else {
                for(let x=1; x<checkboxChilds.length; x++){
                    checkboxChilds[x].checked=false;
                    selectRow(checkboxChilds[x].id.substring(2,3));
                }
            }
        });
    }
function checkboxVisibility(checkboxChilds){
    for(let x=1; x<checkboxChilds.length; x++){
        if(checkboxChilds[x].checked===false){
            return false;
        }
    }
    return true;
}

function displayAllFetch(){
    window.location.search = "www.google.com";
}



  
  
  