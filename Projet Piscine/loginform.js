var message="";

function validate() {
 testEmpty();
 uservalid();
 mdpvalid();
 message="";
}

function testEmpty() {
 document.getElementById("errordiv").style.visibility = 'hidden';
 if ((document.getElementById("nomdutili").value ==='') ||
 (document.getElementById("mdp").value ==='') ||)
 {
 alert("Un ou plusieurs champs sont vides");
 }
}

function uservalid() {
 if (document.getElementById("nomdutili").value === ''){
 var messageName1 = "<br/>Le champ nom d'utilisateur est vide.";
 message += messageName1;
 document.getElementById("errordiv").innerHTML = message;
document.getElementById("errordiv").style.visibility = 'visible';
 }
}

function mdpvalid() {
 if (document.getElementById("mdp").value === ''){
 var messageAge1 = "<br/>Le champ mot de passe est vide.";
 message += messageAge1;
 document.getElementById("errordiv").innerHTML = message;
document.getElementById("errordiv").style.visibility = 'visible';
 }
}