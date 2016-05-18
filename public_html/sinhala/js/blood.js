function UIDVal(){
	var field = document.getElementById("UID").value;
	if(field.length == 0){
		producePrompt("UID","red");
		return false;
	}
	if(!field.match(/^[0-9]{9,9}[V][0-9]{1,1}$/)){
		producePrompt('<i class="fa fa-times"></i>',"commentUserNamePrompt","username","red");
		return false;
	}
	producePrompt("UID","green");
	return true;
}

function pNameVal(){
	var field = document.getElementById("pName").value;
	if(field.length == 0){
		producePrompt("UID","red");
		return false;
	}
	producePrompt("UID","green");
	return true;
}

function ageVal(){
	var field = document.getElementById("age").value;
	if(field.length == 0){
		producePrompt("age","red");
		return false;
	}
	producePrompt("UID","green");
	return true;
}

function LnameVal(){
	var field = document.getElementById("Lname").value;
	if(field.length == 0){
		producePrompt("Lname","red");
		return false;
	}
	producePrompt("UID","green");
	return true;
}

function fbsVal(){
	var field = document.getElementById("fbs").value;
	if(field.length == 0){
		producePrompt("fbs","red");
		return false;
	}
	if(field > 999 || field < 0){
		producePrompt("fbs","red");
		return false;
	}
	if(!field.match(/^-?\d*(\.\d+)?$/)){
		producePrompt("fbs","red");
		return false;
	}
	producePrompt("fbs","green");
	return true;
}

function serumVal(){
	var field1 = document.getElementById("serum").value;
	if(field1.length == 0){
		producePrompt("serum","red");
		return false;
	}
	if(field1 > 999 || field1 < 0){
		producePrompt("serum","red");
		return false;
	}
	if(!field1.match(/^-?\d*(\.\d+)?$/)){
		producePrompt("serum","red");
		return false;
	}
	producePrompt("serum","green");
	return true;
}

function ureaVal(){
	var field2 = document.getElementById("urea").value;
	if(field2.length == 0){
		producePrompt("urea","red");
		return false;
	}
	if(field2 > 999 || field2 < 0){
		producePrompt("urea","red");
		return false;
	}
	if(!field2.match(/^-?\d*(\.\d+)?$/)){
		producePrompt("urea","red");
		return false;
	}
	producePrompt("urea","green");
	return true;
}

function sgotVal(){
	var field3 = document.getElementById("sgot").value;
	if(field3.length == 0){
		producePrompt("sgot","red");
		return false;
	}
	if(field3 < 0){
		producePrompt("sgot","red");
		return false;
	}
	if(!field3.match(/^-?\d*(\.\d+)?$/)){
		producePrompt("sgot","red");
		return false;
	}
	producePrompt("sgot","green");
	return true;
}

function sgptVal(){
	var field4 = document.getElementById("sgpt").value;
	if(field4.length == 0){
		producePrompt("sgpt","red");
		return false;
	}
	if(field4 < 0){
		producePrompt("sgpt","red");
		return false;
	}
	if(!field4.match(/^-?\d*(\.\d+)?$/)){
		producePrompt("sgpt","red");
		return false;
	}
	producePrompt("sgpt","green");
	return true;
}

function alkalineVal(){
	var field5 = document.getElementById("alkaline").value;
	if(field5.length == 0){
		producePrompt("alkaline","red");
		return false;
	}
	if(field5 > 999 || field5 < 0){
		producePrompt("alkaline","red");
		return false;
	}
	if(!field5.match(/^-?\d*(\.\d+)?$/)){
		producePrompt("alkaline","red");
		return false;
	}
	producePrompt("alkaline","green");
	return true;
}

function proteinVal(){
	var field6 = document.getElementById("protein").value;
	if(field6.length == 0){
		producePrompt("protein","red");
		return false;
	}
	if(field6 > 99.99 || field6 < 0){
		producePrompt("protein","red");
		return false;
	}
	if(!field6.match(/^-?\d*(\.\d+)?$/)){
		producePrompt("protein","red");
		return false;
	}
	producePrompt("protein","green");
	return true;
}

function albuminVal(){
	var field7 = document.getElementById("albumin").value;
	if(field7.length == 0){
		producePrompt("albumin","red");
		return false;
	}
	if(field7 > 99.99 || field7 < 0){
		producePrompt("albumin","red");
		return false;
	}
	if(!field7.match(/^-?\d*(\.\d+)?$/)){
		producePrompt("albumin","red");
		return false;
	}
	producePrompt("albumin","green");
	return true;
}

function globuminVal(){
	var field8 = document.getElementById("globumin").value;
	if(field8.length == 0){
		producePrompt("globumin","red");
		return false;
	}
	if(field8 > 99.99 || field8 < 0){
		producePrompt("globumin","red");
		return false;
	}
	if(!field8.match(/^-?\d*(\.\d+)?$/)){
		producePrompt("globumin","red");
		return false;
	}
	producePrompt("globumin","green");
	return true;
}

function textFieldShouldNotEmpty(){
	var UID = document.getElementById("UID").value;
	var pName = document.getElementById("pName").value;
	var age = document.getElementById("age").value;
	var Lname = document.getElementById("Lname").value;
	var fbs = document.getElementById("fbs").value;
	var serum = document.getElementById("serum").value;
	var urea = document.getElementById("urea").value;
	var sgot = document.getElementById("sgot").value;		
	var sgpt = document.getElementById("sgpt").value;
	var alkaline = document.getElementById("alkaline").value;
	var protein = document.getElementById("protein").value;	
	var albumin = document.getElementById("albumin").value;
	var globumin = document.getElementById("globumin").value;
	var x = 1;
	
	if(UID.length==0){
		producePrompt("UID","red");
		x=0;
	}
	
	if(pName.length==0){
		producePrompt("pName","red");
		x=0;
	}
	
	if(age.length==0){
		producePrompt("age","red");
		x=0;
	}
	
	if(Lname.length==0){
		producePrompt("Lname","red");
		x=0;
	}
	
	if(fbs.length==0){
		producePrompt("fbs","red");
		x=0;
	}
	
	if(serum.length==0){
		producePrompt("serum","red");
		x=0;
	}
	
	if(urea.length==0){
		producePrompt("urea","red");
		x=0;
	}
	if(sgot.length==0){
		producePrompt("sgot","red");
		x=0;
	}
	
	if(sgpt.length==0){
		producePrompt("sgpt","red");
		x=0;
	}
		
	if(alkaline.length==0){
		producePrompt("alkaline","red");
		x=0;
	}
	
	if(protein.length==0){
		producePrompt("protein","red");
		x=0;
	}
	
	if(albumin.length == 0){
		producePrompt("albumin","red");
		x=0;;
	}
	
	if(globumin.length == 0){
		producePrompt("globumin","red");
		x=0;;
	}
	if(x==0){
		return false;	
	}
	else{
		return true;
	}
}

function producePrompt(textField,color){
	if(color=='red'){
		document.getElementById(textField).style.borderColor = color;
	}
	else{
		document.getElementById(textField).style.borderColor = null;		
	}
}

function trueVal(){
	
	if(textFieldShouldNotEmpty() && fbsVal() && serumVal() && ureaVal() && sgotVal() && sgptVal() && alkalineVal() && proteinVal() && albuminVal() && globuminVal() && UIDVal() && pNameVal() && ageVal() && LnameVal()){
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