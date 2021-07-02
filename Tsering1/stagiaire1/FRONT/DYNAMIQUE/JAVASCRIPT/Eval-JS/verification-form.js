
     
     
     
     
     
     let form=document.getElementById('form');
     form.addEventListener('submit', function(e){
          // VALIDATION DE NOM
         let nom=document.getElementById('nom');
         let regex=/^[a_zA-z-\s]+$/;
         
         
         // VALIDATION DE NOM
         if(nom.value.trim() == ''){
             let nomError=document.getElementById('Error');
             nomError.innerHTML="le champ pour nom est vide";
             nomError.style.color = 'red';
             e.preventDefault();
            }
            else if(regex.test(nom.value)== false){
                let nomError=document.getElementById('Error');
                nomError.innerHTML="le nom doit comporte lettres et tires uniquement";
                nomError.style.color = 'red';
                e.preventDefault();
            }
            else {
                return true;
            }
            /*
            //  VALIDATION DE PRENOM
            
            let prenom=document.getElementById('prenom');
            let regex=/^[a_zA-z-\s]+$/;
            
            
            if(prenom.value.trim() == ''){
                let prenomError=document.getElementById('pError');
                prenomError.innerHTML="le champ prenom est vide";
                prenomError.style.color = 'red';
                e.preventDefault();
            }
            else if(regex.test(prenom.value) == false){
                let prenomError=document.getElementById('pError');
                prenomError.innerHTML="le prenom doit comporte lettres et tires uniquement";
                prenomError.style.color = 'red';
                e.preventDefault();
            }
            else {
                return true;
            }
            
            //  VALIDATION DE SEXE
            let sexe=document.getElementById('femme');
            let sexe=document.getElementById('homme');
            
            
            if(femme.value.trim() == '' && homme.value.trim() ==''){
                let sexeError=document.getElementById('Error');
                sexeError.innerHTML="le champ est vide";
                sexeError.style.color = 'red';
                e.preventDefault();
            }
            
            else {
                return true;
            }
            
            
            //  VALIDATION DE DATE DE NAISSANCE
            let ddn=document.getElementById('ddn');
            let regexn=/^[0-9-\/]+$/;
            
            if(ddn.value.trim() == ''){
                let ddnError=document.getElementById('Error');
                ddnError.innerHTML="le champ est vide";
                ddnError.style.color = 'red';
                e.preventDefault();
            }
            else if(regexn.test(ddn.value)== false){
                let ddnError=document.getElementById('Error');
                ddnError.innerHTML="le date de naissance doit comportechiffres et slache uniquement";
                ddnError.style.color = 'red';
                e.preventDefault();
            }
            else {
                return true;
            }
            
            //  VALIDATION DE CODE POSTALE
            let CP=document.getElementById('CP');
            let regexn=/^[0-9-\/]+$/;
            
            
            if(CP.value.trim() == ''){
                let CPError=document.getElementById('Error');
                CPError.innerHTML="le champ est vide";
                CPError.style.color = 'red';
                e.preventDefault();
            }
            else if(regexn.test(CP.value)== false){
                let CPError=document.getElementById('Error');
                CPError.innerHTML="le code postale doit comporte des chiffres uniquement";
                CPError.style.color = 'red';
                e.preventDefault();
            }
            else {
                return true;
            }
            
            //  VALIDATION DE ADRESSE
            let adresse=document.getElementById('adresse');
            let regex=/^[a_zA-z-\s]+[0-9]+$/;
            
            
            if(adresse.value.trim() == ''){
                let adresseError=document.getElementById('Error');
                adresseError.innerHTML="le champ est vide";
                adresseError.style.color = 'red';
                e.preventDefault();
            }
            else if(regex.test(adresse.value)== false){
                let adresseError=document.getElementById('Error');
                adresseError.innerHTML="l'adresse doit comporte lettres et chiffres uniquement";
                adresseError.style.color = 'red';
                e.preventDefault();
            }
                else{
                    return true;
                }
            
            
            
            //  VALIDATION DE VILLE
            let ville=document.getElementById('ville');
            let regex=/^[a_zA-z-\s]+$/;
            
            
            
            if(ville.value.trim() == ''){
                let villeError=document.getElementById('Error');
                villeError.innerHTML="le champ est vide";
                villeError.style.color = 'red';
                e.preventDefault();
            }
            else if(regex.test(ville.value)== false){
                let villeError=document.getElementById('Error');
                villeError.innerHTML="le ville doit comporte lettres  uniquement";
                villeError.style.color = 'red';
                e.preventDefault();
            }
            
            else {
                return true;
            }


            //  VALIDATION DE MAIL
            let mail=document.getElementById('mail');
            let regexe=/^([\w-\.]+)@((?:[\w]+\.)+)([a-zA-Z]{2,4})/i;
            
            
            if(mail.value.trim() == ''){
                let mailError=document.getElementById('Error');
                mailError.innerHTML="le champ est vide";
                mailError.style.color = 'red';
                e.preventDefault();
            }
            else if(regexe.test(mail.value)== false){
                let mailError=document.getElementById('Error');
                mailError.innerHTML="le doit comporte lettres et tires uniquement";
                mailError.style.color = 'red';
                e.preventDefault();
            }

            else {
                return true;
            }
            
            
            //  VALIDATION DE SUJET
            let sujet=document.getElementById('sujet');
            
            
            
            if(sujet.value.trim() == ''){
                let sujetError=document.getElementById('Error');
                sujetError.innerHTML="le champ est vide";
                sujetError.style.color = 'red';
                e.preventDefault();
            }
            
            else {
                return true;
            }
            
            
            //  VALIDATION DE QUESTION
            let question=document.getElementById('question');

            if(question.value.trim() == ''){
                let questionError=document.getElementById('Error');
                questionError.innerHTML="le champ est vide";
                questionError.style.color = 'red';
                 e.preventDefault();
             }
        
        else{
              return true;
           }
           */
        });
         
        