<?php  

echo '

<!-- funzioni javascript ini -->
<script>
 function w_a_0_0_DARKMODE(){
    // alert("w_a_0_0_DARKMODE");
    document.querySelector("#w_a_0_0_DARKMODE").style.display="none";
    document.querySelector("#w_a_0_0_LIGHTMODE").style.display="inline-block";    

    document.querySelector("#w_a_0_0_area_immissione_testo__").style.backgroundColor="navy";    
    document.querySelector("#w_a_0_0_area_immissione_testo__").style.backgroundColor="rgba(0, 20, 60, 1)";
    document.querySelector("#w_a_0_0_area_immissione_testo__").style.color="white";

     }
     
  function w_a_0_0_LIGHTMODE(){
    // alert("w_a_0_0_LIGHTMODE");
    document.querySelector("#w_a_0_0_DARKMODE").style.display="inline-block";
    document.querySelector("#w_a_0_0_LIGHTMODE").style.display="none";    
    
    document.querySelector("#w_a_0_0_area_immissione_testo__").style.backgroundColor="initial";
    document.querySelector("#w_a_0_0_area_immissione_testo__").style.color="initial";
     
     }

function  w_a_0_0_BACKDOOR_FORM_SI(){
// alert("w_a_0_0_BACKDOOR_FORM_SI");

document.querySelector("#w_a_0_0_BACKDOOR_FORM_SI").style.display="none";
document.querySelector("#w_a_0_0_BACKDOOR_FORM_NO").style.display="inline-block";

document.querySelector("#w_a_0_0_SSAP__").style.display="block";
document.querySelector("#w_a_0_0_SSAP__").style.border="solid 0.00rem purple";

document.querySelector("#w_a_0_0_post_uno__").style.width="90%";
document.querySelector("#w_a_0_0_post_due__").style.width="90%";
document.querySelector("#w_a_0_0_post_tre__").style.width="90%";
document.querySelector("#w_a_0_0_post_qua__").style.width="90%";

document.querySelector("#w_a_0_0_post_uno__").style.marginTop="1.00rem";
document.querySelector("#w_a_0_0_post_due__").style.marginTop="1.00rem";
document.querySelector("#w_a_0_0_post_tre__").style.marginTop="1.00rem";
document.querySelector("#w_a_0_0_post_qua__").style.marginTop="1.00rem";
document.querySelector("#w_a_0_0_post_uno__").style.marginBottom="1.00rem";
document.querySelector("#w_a_0_0_post_due__").style.marginBottom="1.00rem";
document.querySelector("#w_a_0_0_post_tre__").style.marginBottom="1.00rem";
document.querySelector("#w_a_0_0_post_qua__").style.marginBottom="1.00rem";



};

function  w_a_0_0_BACKDOOR_FORM_NO(){
//alert("w_a_0_0_BACKDOOR_FORM_NO");

document.querySelector("#w_a_0_0_BACKDOOR_FORM_SI").style.display="inline-block";
document.querySelector("#w_a_0_0_BACKDOOR_FORM_NO").style.display="none";

document.querySelector("#w_a_0_0_SSAP__").style.display="none";
document.querySelector("#w_a_0_0_SSAP__").style.display="block";


document.querySelector("#w_a_0_0_post_uno__").style.width="20%";
document.querySelector("#w_a_0_0_post_due__").style.width="20%";
document.querySelector("#w_a_0_0_post_tre__").style.width="20%";
document.querySelector("#w_a_0_0_post_qua__").style.width="20%";



};



function GO_UP(){
alert("GO_UP()");

};

function GO_DOWN(){
alert("GO_DOWN()");


};


function w_a_0_0_INDEX(){};



</script>
<!-- funzioni javascript fin -->



';



?>
