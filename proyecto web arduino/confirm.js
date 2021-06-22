var pass="";
var	cpass="";
var decision=false;
var ini=false;
function tomavalor(){
	if (document.getElementById("pass").value != "" && document.getElementById("cpass").value!="") {
		if (document.getElementById("pass").value==document.getElementById("cpass").value) {
			pass=document.getElementById("pass").value;
			cpass=document.getElementById("cpass").value;
			decision=true;
		}
	}
} 
	
function cambio(){
	if (decision==true) {
		document.getElementById("boton").disabled=false;
	}else if(document.getElementById("pass").value != "" && document.getElementById("cpass").value!=""){
		alert("los datos no coiniciden");
	}
}