var i=0;
function addTextField(div){

     

              var newElement = document.createElement('div');

              newElement.innerHTML = "<br><input type='text' name='s" +i+" class='form-control name-form' style='border:none; border-bottom: 2px solid darkred';><a id=delete href=''>delete</a><br><br>";
              i++;
              document.getElementById(div).appendChild(newElement);

        

    }

function deleteSkill(id) {
  var xmlhttp = new XMLHttpRequest();
  var value= document.getElementById(id+"s").value;
  xmlhttp.onreadystatechange = function() {
    if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ) {

    }
  };
  xmlhttp.open("GET","editHelper.php?val="+value,true);
  xmlhttp.send();
}
function deletePortfolio(id) {
  var xmlhttp = new XMLHttpRequest();
  var value= id;
  xmlhttp.onreadystatechange = function() {
    if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ) {

    }
  };
  xmlhttp.open("GET","anotherEditHelper.php?im="+value,true);
  xmlhttp.send();
}

window.getElemCount = function(parent){
  var totalChildren = 0;
  var children = parent.childNodes.length;
  for(var i=0;i<children;i++) {
      if(parent.childNodes[i].nodeType !=3){
        totalChildren += getElemCount(parent.childNodes[i]);
        totalChildren ++;
      }
  }

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ) {

    }
  };
  xmlhttp.open("GET","processEditForm.php?c="+totalChildren,true);
  xmlhttp.send();
  return true;
}
function removeDelete(id) {
    var del = document.getElementById(id);
    del.parentNode.removeChild(del);
    return false;
}
function removePortfolio(id) {
    var del = document.getElementById(id);
    del.parentNode.removeChild(del);
    return false;
}