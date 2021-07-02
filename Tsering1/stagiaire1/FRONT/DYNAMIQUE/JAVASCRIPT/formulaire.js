
var Valid = /^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/;

var envoyer=document.getElementById("envoyer").innerHTML.value;
var effacer=document.getElementById("effacer");
var Societé = document.getElementById('societé').innerHTML.value;
var missSocieté = document.getElementById('missSocieté');



if(Societé.value.trim() == ''){
    let missSocieté=document.getElementById('missSocieté');
    missSocieté.innerHTML="le champ pour nom est vide";
    missSocieté.style.color = 'red';
    e.preventDefault();
   }
var person = document.getElementById('person');
var adresse = document.getElementById('adresse');
var cp = document.getElementById('cp');
var ville = document.getElementById('vile');
var mail = document.getElementById('mail');
var tel = document.getElementById('tel');
var choisissez = document.getElementById('choisissez');

envoyer.addEventListener('click', validation);
annuler.addEventListener('click', validation);

function validation(event){
    //Si le champ est vide
    if (societé.validity.valueMissing){
        event.preventDefault();
        missSocieté.textContent = 'tesxt manquant';
        missocieté.style.color = 'red';
    }
}