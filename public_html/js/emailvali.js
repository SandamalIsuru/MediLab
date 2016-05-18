// JavaScript Document

	function val(){
		if(frm.email.value==""){
				alert("Please enter the email address");
				frm.email.focus();
				return false;
		}
	
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	
		if(reg.test(frm.email.value) == false){
				alert('Invalid email address');
				frm.email.focus();
				return false;
				}
	return true;
	}

function phoneNoVal(){
	var phone = document.getElementById("tel").value;
	if(phone.length == 0){
		producePrompt("Phone Number is Required","commentPhonePrompt","tel","red");
		return false;
	}
	if(phone.length > 10){
		producePrompt("Wrong Number.Check It Again","commentPhonePrompt","tel","red");
		return false;
	}
	if(!phone.match(/^[0-9]+$/)){
		producePrompt("Please Only Include Digits","commentPhonePrompt","tel","red");
		return false;
	}
	if(phone.length < 10 && phone.length > 0){
		producePrompt("Number Should Contain 10 Digits","commentPhonePrompt","tel","red");
		return false;
	}
	producePrompt("Valied Number","commentPhonePrompt","tel","green");
	return true;
}

function genderVal(){
	var gender = document.getElementById("sex").value;
	var gender = document.getElementById("sex1").value;

	if(phone.length == 0){
		producePrompt("Select Gender Of The Patient","commentsexPrompt","sex","red");
		return false;
	}
	return true;
}

function emailVal(){
	var email = document.getElementById("email").value;
	if(email.length == 0){
		producePrompt("Email is Required","commentEmailPrompt","email","red");
		return false;
	}
	if(!email.match(/^[A-Za-z0-9_\-\.]*[@][A-Za-z0-9_\-\.]*[\.][A-Za-z]{2,4}$/)){
		producePrompt("Invalied Email Address","commentEmailPrompt","email","red");
		return false;
	}
	
	producePrompt("Valied Email","commentEmailPrompt","email","green");
	return true;
}


function producePrompt(message,promptLocation,textField,color){
	document.getElementById(promptLocation).innerHTML = message;
	document.getElementById(promptLocation).style.color = color;
	if(color=='red'){
		document.getElementById(textField).style.borderColor = color;
	}
	else{
		document.getElementById(textField).style.borderColor = null;		
	}
}