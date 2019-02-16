//regular expressions work as global variables

var emailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
var nameFormat = /^[A-Za-z\s]+$/;
var passwordForamt = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/;
//Script onchange for email validation
function emailValidation(userinput, nametoprint) {

	if (userinput.value.match(emailformat)) {
		document.getElementById("pidforunwrong").innerHTML = nametoprint + " in a valid format";
		document.getElementById("pidforunwrong").style.color = 'green';
		document.jsun.focus();
		return true;
	} else {
		document.getElementById("pidforunwrong").innerHTML = "Please check the " + nametoprint + " again.";
		document.getElementById("pidforunwrong").style.color = 'red';
		document.jsun.focus();
		return false;
	}
}
//End of script for email validation

//Script for btn reset in login page

function btnReset() {
	document.getElementById("jsun").value = "";
	document.getElementById("jspw").value = "";
	document.getElementById("pidforunwrong").innerHTML = "";
	document.getElementById("idchboxremme").checked = false;

}
//End of Script for btn reset in login page

//validate pw

function validatePw(userInputPw){
	if (!userInputPw.value.match(passwordForamt)){
		document.getElementById("pidforpwwrong").innerHTML="Password not strong";
		document.getElementById("pidforpwwrong").style.color = 'red';
		document.getElementById("confirmPw").disabled = true;
		document.userInputPw.focus();
		return false;
	}else{
		document.getElementById("confirmPw").disabled = false;
		document.getElementById("pidforpwwrong").innerHTML="Password strong enough";
		document.getElementById("pidforpwwrong").style.color = 'green';
		document.userInputPw.focus();
			return true;
		}
		
	}
function onloadDisable(){
	document.getElementById("confirmPw").disabled = true;
}



//Script for pw match
function matchPw() {
	var x = document.getElementById('pw1').value
	var y = document.getElementById('confirmPw').value;
	if (x == y) {
		document.getElementById("matchpw").innerHTML="Password Matched";
		document.getElementById("matchpw").style.color = 'green';
		return true;
	} else {
		document.getElementById("matchpw").innerHTML="Please check both the password again";
		document.getElementById("matchpw").style.color = 'red';
		return false;
	}
}

//Script for name validation
function validateName() {
	var fullName = document.getElementById("jsname").value;

	if (fullName.match(nameFormat)) {
		document.getElementById("pidnamevalidate").innerHTML = "Name ok";
		document.getElementById("pidnamevalidate").style.color = 'green';
		return true;

	} else {
		document.getElementById("pidnamevalidate").innerHTML = "Name should be in a valid format";
		document.getElementById("pidnamevalidate").style.color = 'red';
		return false;
	}
}
//End of script for name validation


function validateForm() {

	//fetch id value

	var email = document.getElementById("jsun").value;		
	var fullName = document.getElementById("jsname").value;
	var pw = document.getElementById("pw1").value;
	var confirmPw1 = document.getElementById("confirmPw").value;	

	//onsubmit full name validation

	if (!(fullName.match(nameFormat))) {

		document.getElementById("pidnamevalidate").innerHTML = "Name should be in a valid format";
		document.getElementById("pidnamevalidate").style.color = 'red';
		return false;

		//onsubmit email validation

	}if(!(email.match(emailformat))){

		document.getElementById("pidforunwrong").innerHTML = "Email should be in a valid format";
		document.getElementById("pidforunwrong").style.color = 'Red';
		return false;	

		//Onsumbit password walidation
	}if (pw !== confirmPw1) {
		document.getElementById("pidforpwwrong").innerHTML = "Please check both passwords again";
		document.getElementById("pidforpwwrong").style.color = 'red';
		return false;
	}

	else {
		return true;
	}
}

//Script for user registration reset

function resetUserReg(){
	//reset values inside input boxes
	document.getElementById("jsname").value = "";
	document.getElementById("jsun").value = "";
	document.getElementById("txtPhomenumber").value= "";
	document.getElementById("pw1").value = "";
	document.getElementById("confirmPw").value = "";
	//reset warnings
	document.getElementById("pidnamevalidate").innerHTML = "";
	document.getElementById("pidforunwrong").innerHTML = "";
	document.getElementById("pidforpwwrong").innerHTML = "";
	}

	//script to go back
	function goBack(){
		window.history.back();	
	}

	
	function redirectToPage(link,member_list){ //redirect back to brand list

		alert("This page should be access through " + member_list + " page .Redirecting to " + member_list);
		window.location.href = link;
		
	}
	function deleteAlertPage(){
		alert("Please note that this operation cannot be undo . If you wish to procede please confirm deletion");
	}
	function memberToAdmin(){
		var role = document.getElementById("jsname");
		if(role.value = "a"){
			
			document.getElementById("pidRole").style.color ="yellow";
			document.getElementById("pidRole").innerHTML = "You are trying to change a member into ADMIN";
		}else{
			return false;
		}
	}
	function memberStatus(){
		var role = document.getElementById("jsStatus");
		if(role.value == 0){
			
			document.getElementById("pidStatus").style.color ="red";
			document.getElementById("pidStatus").innerHTML = "You are trying to Deactive a member ";
		}else{
			document.getElementById("pidStatus").innerHTML = " ";

			return false;
		}
	}
	