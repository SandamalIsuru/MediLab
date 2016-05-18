function nicVal(){
	var username = document.getElementById("pId").value;
	if(username.length == 0){
		producePrompt('<i class="fa fa-times"></i>',"commentUserNamePrompt","pId","red");
		return false;
	}
	if(!username.match(/^[0-9]{9,9}[V][0-9]{1,1}$/)){
		producePrompt('<i class="fa fa-times"></i>',"commentUserNamePrompt","pId","red");
		return false;
	}
	
	producePrompt('<i class="fa fa-check"></i>',"commentUserNamePrompt","pId","green");
	return true;
}

function LNameVal(){
	var name = document.getElementById("LName").value;
	if(name.length == 0){
		producePrompt('<i class="fa fa-times"></i>',"commentNamePrompt","LName","red");
		return false;
	}
	producePrompt('<i class="fa fa-check"></i>',"commentNamePrompt","LName","green");
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