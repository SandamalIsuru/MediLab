// JavaScript Document
function UIDVal(){
	var field = document.getElementById("UID").value;
	if(field.length == 0){
		producePrompt("UID","red");
		return false;
	}
	if(!field.match(/^[0-9]{9,9}[V][0-9]{1,1}$/)){
		producePrompt("UID","red");
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

function colorVal(){
	var field1 = document.getElementById("color").value;
	if(field1.length == 0){
		producePrompt("color","red");
		return false;
	}
	if(!field1.match(/^[A-Za-z]+$/)){
		producePrompt("color","red");
		return false;
	}
	producePrompt("color","green");
	return true;
}

function TransVal(){
	var field1 = document.getElementById("Trans").value;
	if(field1.length == 0){
		producePrompt("Trans","red");
		return false;
	}
	if(!field1.match(/^[A-Za-z]+$/)){
		producePrompt("Trans","red");
		return false;
	}
	producePrompt("Trans","green");
	return true;
}

function phVal(){
	var field = document.getElementById("ph").value;
	if(field.length == 0){
		producePrompt("ph","red");
		return false;
	}
	if(field > 14 || field < 0){
		producePrompt("ph","red");
		return false;
	}
	if(!field.match(/^-?\d*(\.\d+)?$/)){
		producePrompt("ph","red");
		return false;
	}
	producePrompt("ph","green");
	return true;
}

function AlbVal(){
	var field1 = document.getElementById("Alb").value;
	if(field1.length == 0){
		producePrompt("Alb","red");
		return false;
	}
	if(!field1.match(/^[A-Za-z]+$/)){
		producePrompt("Alb","red");
		return false;
	}
	producePrompt("Alb","green");
	return true;
}

function sugarVal(){
	var field1 = document.getElementById("sugar").value;
	if(field1.length == 0){
		producePrompt("sugar","red");
		return false;
	}
	if(!field1.match(/^[A-Za-z]+$/)){
		producePrompt("sugar","red");
		return false;
	}
	producePrompt("sugar","green");
	return true;
}

function bileVal(){
	var field1 = document.getElementById("bile").value;
	if(field1.length == 0){
		producePrompt("bile","red");
		return false;
	}
	if(!field1.match(/^[A-Za-z]+$/)){
		producePrompt("bile","red");
		return false;
	}
	producePrompt("bile","green");
	return true;
}

function uroVal(){
	var field1 = document.getElementById("uro").value;
	if(field1.length == 0){
		producePrompt("uro","red");
		return false;
	}
	if(!field1.match(/^[A-Za-z]+$/)){
		producePrompt("uro","red");
		return false;
	}
	producePrompt("uro","green");
	return true;
}

function psVal(){
	var field1 = document.getElementById("ps").value;
	if(field1.length == 0){
		producePrompt("ps",null);
		return true;
	}
	if(!field1.match(/^[A-Za-z]+$/)){
		producePrompt("ps","red");
		return false;
	}
	producePrompt("ps","green");
	return true;
}

function rcellVal(){
	var field1 = document.getElementById("rcell").value;
	if(field1.length == 0){
		producePrompt("rcell",null);
		return true;
	}
	if(!field1.match(/^[A-Za-z]+$/)){
		producePrompt("rcell","red");
		return false;
	}
	producePrompt("rcell","green");
	return true;
}

function EcellVal(){
	var field1 = document.getElementById("Ecell").value;
	if(field1.length == 0){
		producePrompt("Ecell",null);
		return true;
	}
	if(!field1.match(/^[A-Za-z]+$/)){
		producePrompt("Ecell","red");
		return false;
	}
	producePrompt("Ecell","green");
	return true;
}

function castsVal(){
	var field1 = document.getElementById("casts").value;
	if(field1.length == 0){
		producePrompt("casts",null);
		return true;
	}
	if(!field1.match(/^[A-Za-z]+$/)){
		producePrompt("casts","red");
		return false;
	}
	producePrompt("casts","green");
	return true;
}

function crystalVal(){
	var field1 = document.getElementById("crystal").value;
	if(field1.length == 0){
		producePrompt("crystal",null);
		return true;
	}
	if(!field1.match(/^[A-Za-z]+$/)){
		producePrompt("crystal","red");
		return false;
	}
	producePrompt("crystal","green");
	return true;
}

function orgVal(){
	var field1 = document.getElementById("org").value;
	if(field1.length == 0){
		producePrompt("org",null);
		return true;
	}
	if(!field1.match(/^[A-Za-z]+$/)){
		producePrompt("org","red");
		return false;
	}
	producePrompt("org","green");
	return true;
}

function textFieldShouldNotEmpty(){
	var UID = document.getElementById("UID").value;
	var pName = document.getElementById("pName").value;
	var age = document.getElementById("age").value;
	var Lname = document.getElementById("Lname").value;
	var color = document.getElementById("color").value;
	var Trans = document.getElementById("Trans").value;
	var ph = document.getElementById("ph").value;		
	var Alb = document.getElementById("Alb").value;
	var sugar = document.getElementById("sugar").value;
	var bile = document.getElementById("bile").value;	
	var uro = document.getElementById("uro").value;
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
	
	if(color.length==0){
		producePrompt("color","red");
		x=0;
	}
	
	if(Trans.length==0){
		producePrompt("Trans","red");
		x=0;
	}
	
	if(ph.length==0){
		producePrompt("ph","red");
		x=0;
	}
	
	if(Alb.length==0){
		producePrompt("Alb","red");
		x=0;
	}
	
	if(sugar.length==0){
		producePrompt("sugar","red");
		x=0;
	}
	
	if(bile.length==0){
		producePrompt("bile","red");
		x=0;
	}
	
	if(uro.length==0){
		producePrompt("uro","red");
		x=0;
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
	
	if(textFieldShouldNotEmpty() && phVal() && AlbVal() && sugarVal() && bileVal() && uroVal() && colorVal() && TransVal() && UIDVal() && pNameVal() && ageVal() && LnameVal() && psVal() && rcellVal() && EcellVal() && castsVal() && crystalVal() && orgVal()){
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