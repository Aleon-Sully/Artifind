//a function to validate login
function validatelogin(){
var username = document.getElementById("uName");
var password = document.getElementById("pwd");
var ok = true;

/*check if the username and password fields are empty.
If they are, return a message notifying them
*/
if (username.value == "") {
	alert("Please enter a username");
	ok = false;
}

if (password.value == "") {
	alert("Please enter a password");
	ok = false;
}
return ok;
}