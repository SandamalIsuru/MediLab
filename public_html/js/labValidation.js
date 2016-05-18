// JavaScript Document
// JavaScript Document

	

function phoneNoVal(){
	var phone = document.getElementById("tel").value;
	if(phone.length == 0){
		producePrompt('<i class="fa fa-times"></i>',"commentPhonePrompt","tel","red");
		return false;
	}
	if(phone.length > 10){
		producePrompt('<i class="fa fa-times"></i>',"commentPhonePrompt","tel","red");
		return false;
	}
	if(!phone.match(/^[0-9]+$/)){
		producePrompt("Please Only Include Digits","commentPhonePrompt","tel","red");
		return false;
	}
	if(phone.length < 10 && phone.length > 0){
		producePrompt('<i class="fa fa-times"></i>',"commentPhonePrompt","tel","red");
		return false;
	}
	producePrompt('<i class="fa fa-check"></i>',"commentPhonePrompt","tel","green");
	return true;
}

function phone2NoVal(){
	var phone = document.getElementById("tel2").value;
	if(phone.length == 0){
		producePrompt('',"commentPhone2Prompt","tel2",null);
		return true;
	}
	if(phone.length > 10){
		producePrompt('<i class="fa fa-times"></i>',"commentPhone2Prompt","tel2","red");
		return false;
	}
	if(!phone.match(/^[0-9]+$/)){
		producePrompt("Please Only Include Digits","commentPhone2Prompt","tel2","red");
		return false;
	}
	if(phone.length < 10 && phone.length > 0){
		producePrompt('<i class="fa fa-times"></i>',"commentPhone2Prompt","tel2","red");
		return false;
	}
	producePrompt('<i class="fa fa-check"></i>',"commentPhone2Prompt","tel2","green");
	return true;
}


function emailVal(){
	var email = document.getElementById("email").value;
	if(email.length == 0){
		producePrompt('<i class="fa fa-times"></i>',"commentEmailPrompt","email",'red');
		return false;
	}
	if(!email.match(/^[A-Za-z0-9_\-\.]*[@][A-Za-z0-9_\-\.]*[\.][A-Za-z]{2,4}$/)){
		producePrompt('<i class="fa fa-times"></i>',"commentEmailPrompt","email","red");
		return false;
	}
	
	producePrompt('<i class="fa fa-check"></i>',"commentEmailPrompt","email","green");
	return true;
}

function usernameVal(){
	var username = document.getElementById("username").value;
	if(username.length == 0){
		producePrompt('<i class="fa fa-times"></i>',"commentUserNamePrompt","username","red");
		return false;
	}
	if(!username.match(/^[A-Z]{4,4}[\/][A-Z][\/][0-9]{3,3}$/)){
		producePrompt('<i class="fa fa-times"></i>',"commentUserNamePrompt","username","red");
		return false;
	}
	producePrompt('<i class="fa fa-check"></i>',"commentUserNamePrompt","username","green");
	return true;
}



function passwordVal(){
	var password = document.getElementById("password").value;
	if(password.length == 0){
		producePrompt('<i class="fa fa-times"></i>',"commentPasswordPrompt","password","red");
		return false;
	}
	producePrompt('<i class="fa fa-check"></i>',"commentPasswordPrompt","password","green");
	return true;
}

function confirmPass() {
    var pass1 = document.getElementById("password").value;
    var pass2 = document.getElementById("cpassword").value;
    var ok = true;
    if (pass1 != pass2) {
		producePrompt('<i class="fa fa-times"></i>',"commentCPasswordPrompt","cpassword","red");
        
        ok = false;
    }
    else {
		producePrompt('<i class="fa fa-check"></i>',"commentCPasswordPrompt","cpassword","green");
    }
    return ok;
}


function addressVal(){
	var address = document.getElementById("staddress").value;
	if(address.length == 0){
		producePrompt('<i class="fa fa-times"></i>',"commentAddressPrompt1","staddress","red");
		return false;
	}
	producePrompt('<i class="fa fa-check"></i>',"commentAddressPrompt1","staddress","green");
	return true;
}

function cityVal(){
	var city = document.getElementById("city").value;
	if(city.length == 0){
		producePrompt('<i class="fa fa-times"></i>',"commentAddressPrompt","city","red");
		return false;
	}
	if(!city.match(/^[A-Za-z]+$/)){
		producePrompt('<i class="fa fa-times"></i>',"commentAddressPrompt","city","red");
		return false;
	}
	producePrompt('<i class="fa fa-check"></i>',"commentAddressPrompt","city","green");
	return true;
}

function nameVal(){
	var name = document.getElementById("fname").value;
	if(name.length == 0){
		producePrompt('<i class="fa fa-times"></i>',"commentNamePrompt","fname","red");
		return false;
	}
	if(!name.match(/^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/)){
		producePrompt('<i class="fa fa-times"></i>',"commentNamePrompt","fname","red");
		return false;
	}
	producePrompt('<i class="fa fa-check"></i>',"commentNamePrompt","fname","green");
	return true;
}




function textFieldShouldNotEmpty(){
	var name = document.getElementById("fname").value;
	var address = document.getElementById("staddress").value;
	var city = document.getElementById("city").value;		
	var username = document.getElementById("username").value;	
	var password = document.getElementById("password").value;
	var cpassword = document.getElementById("cpassword").value;
	var tel = document.getElementById("tel").value;	
	var email = document.getElementById("email").value;
	var x = 1;
	
	if(name.length==0){
		producePrompt('<i class="fa fa-times"></i>',"commentNamePrompt","fname","red");
		x=0;
	}
	
	if(username.length==0){
		producePrompt('<i class="fa fa-times"></i>',"commentUserNamePrompt","username","red");
		x=0;
	}
	if(password.length==0){
		producePrompt('<i class="fa fa-times"></i>',"commentPasswordPrompt","password","red");
		
		x=0;
	}
	
	if(cpassword.length==0){
		producePrompt('<i class="fa fa-times"></i>',"commentCPasswordPrompt","cpassword","red");
		
		x=0;
	}	
	if(address.length==0){
		producePrompt('<i class="fa fa-times"></i>',"commentAddressPrompt1","staddress","red");
		
		x=0;
	}
	
	if(city.length==0){
		producePrompt('<i class="fa fa-times"></i>',"commentAddressPrompt","city","red");
		x=0;
	}
	
	
	if(tel.length==0){
		producePrompt('<i class="fa fa-times"></i>',"commentPhonePrompt","tel","red");
		x=0;
	}
	
	if(email.length==0){
		producePrompt('<i class="fa fa-times"></i>',"commentEmailPrompt","email","red");
		x=0;
	}
	
	
	if(x==0){
		return false;	
	}
	else{
		return true;
	}
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

function trueVal(){
	
	if(textFieldShouldNotEmpty() && phoneNoVal() && emailVal() && confirmPass()){
		return true;
	}
return false;
}

function confirmAdd() {
  
  if (trueVal()) {
	  var answer=confirm("Confirm");
	  if(answer){
	  	return true;
	  }else{
		return false;  
	  }
  }
  return false;
}


