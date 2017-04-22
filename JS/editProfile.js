var limit = 8;
var curr = 0;
    function addTextField(div, count){
        curr = count;
         if (count== limit)  {

              alert("The limit is 8 skills");

         }

         else {

              var newElement = document.createElement('div');

              newElement.innerHTML = "Skill " + (count + 1) + " <br><input type='text' name='myInputs[]'>";

              document.getElementById(div).appendChild(newElement);

              curr++;

         }

    }
