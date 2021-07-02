var age=0;
var pj=0;
var pv=0;
var pm=0;

while(age<100)
{
    age=parseInt(window.prompt("entrez l'age"));
 if(age < 20){
    
     pj++;
 }
     else if(age >= 20 && age <= 40){
       
        pm++;
     
     }
      else
    
    pv++;
      
     
}
     alert("nombre de persons jeune est :" +pj+ "\n nombre de persons moyens est :" +pm+ "\n nombre de persons vieux est :"+pv);
     