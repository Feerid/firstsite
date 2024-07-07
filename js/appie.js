
/** function sade_vuruga_ayir(eded){

    var bolen=2;
    
    var sade_vurug=[];
    
    while(true){
        if(eded%bolen==0){
           
            eded=eded/bolen;
            sade_vurug.push(bolen);
            
            continue;
        }
        else if(eded/bolen<1){
            break;
        }
        else{
            bolen+=1;
        }
        
    }

    return sade_vurug;
}


var eded1_sade=sade_vuruga_ayir(44);
var eded2_sade=sade_vuruga_ayir(36);

console.log(eded1_sade);
console.log(eded2_sade);

alert(Math.sqrt(25)); **/




$(document).ready(function () {

    $("#menu_toggle").click(function () {
        $(".menu-lt").toggleClass('d-none');
    });
   
});



