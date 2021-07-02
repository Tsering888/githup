

var pu=parseInt(prompt("entrez le prix unitaire"));
var qtecom=parseInt(prompt("enttrez le quantité"));
var pap;
var rem;
var port=0;
var tot;
tot=pu*qtecom;
 if(tot>200){
     rem=(tot*10)/100;
     pap=tot-rem;
               if(pap>500){
                     port=0;
                        
                       }
               else {
                    port=(tot-rem)*2/100;
                        if(port<6){
                                  port=6;
                                   }
                }
            pap=(tot-rem)+port;
            console.log("le total est :"+tot);
            console.log("le remise est :"+rem);
            console.log("le frais de port est :"+port);
            console.log("le prix a payer est :"+pap);
        }

    else if(tot<=200 && tot>=100){
        rem=tot*5/100;
        pap=tot-rem;
           if(pap>500){
              port=0;
           }
           else{
               port=(tot-rem)*2/100;
                 if(port<6){
                           port=6;
                           }
                }
        pap=(tot-rem)+port;
        console.log("le total est :"+tot);
        console.log("le remise est :"+rem);
        console.log("le frais de port est :"+port);
        console.log("le prix a payer est :"+pap);
    }
else{
    rem=0;
    port=6;
    pap=tot+port;
    console.log("le total est :"+tot);
    console.log("le remise est :"+rem);
    console.log("le frais de port est :"+port);
    console.log("le prix a payer est :"+pap);
}