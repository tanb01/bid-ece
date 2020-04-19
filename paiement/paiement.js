var message="";
function validate() {
    testEmpty();
    validateprenom();
    validatenom();
    validatepays();
    validatedirection();
    validatezipcode();
    validatephone();
    validateemail(); 
    validatenumerodecarte();    
    validatecrypto();
    message="";
}//end function
function testEmpty() {
    document.getElementById("errordiv").style.visibility = 'hidden';
    if ((document.getElementById("nombre").value ==='') ||
        (document.getElementById("apellido").value ==='') ||
        (document.getElementById("pays").value ==='') ||
        (document.getElementById("direction").value ==='') ||
        (document.getElementById("zipcode").value ==='') ||
        (document.getElementById("phone").value ==='') ||
        (document.getElementById("email").value ==='') ||
        (document.getElementById("numerodecarte").value ==='') ||        
        (document.getElementById("crypto").value ==='')) {
        alert("Un champ est vide");
    }
}//end function
function validateprenom() {
 if (document.getElementById("nombre").value === ''){
 var messageName1 = "<br/>Le champ prenom est vide.";
 message += messageName1;
 document.getElementById("errordiv").innerHTML = message;
document.getElementById("errordiv").style.visibility = 'visible';
 }//end if

 function validatenom() {
    if (document.getElementById("apellido").value === ''){
    var messageName1 = "<br/>Le champ Nom est vide.";
    message += messageName1;
    document.getElementById("errordiv").innerHTML = message;
   document.getElementById("errordiv").style.visibility = 'visible';
    }//end if
}//end function

function validatepays() {
 if (document.getElementById("pays").value === ''){
    var messageAge1 = "<br/>Vous devez choisir un pays.";
    message += messageAge1;
    document.getElementById("errordiv").innerHTML = message;
   document.getElementById("errordiv").style.visibility = 'visible';
    }//end if
}//end function

function validatedirection() {
    if (document.getElementById("direction").value === ''){
       var messageAge1 = "<br/>Vous devez choisir un pays.";
       message += messageAge1;
       document.getElementById("errordiv").innerHTML = message;
      document.getElementById("errordiv").style.visibility = 'visible';
       }//end if
   }//end function

   function validatezipcode() {
    if (document.getElementById("zipcode").value === ''){
    var messageTel1 = "<br/>Le champ Code postale est vide.";
    message += messagecode1;
    document.getElementById("errordiv").innerHTML = message;
   document.getElementById("errordiv").style.visibility = 'visible';
    }//end if
    if ((document.getElementById("zipcode").value).match(/[a-z]/i)){
    var messageTel2 = "<br/>Le champ Code postale ne doit pas avoir des lettres.";
    message += messagecode2;
    document.getElementById("errordiv").innerHTML = message;
   document.getElementById("errordiv").style.visibility = 'visible';
    }//end if
    if ((document.getElementById("zipcode").value).length != 5){
    var messageTel3 = "<br/>Le champ Code postale doit avoir 5 chiffres.";
    message += messagecode3;
    document.getElementById("errordiv").innerHTML = message;
   document.getElementById("errordiv").style.visibility = 'visible';
    }//end if
}//end function         
    
   function validatephone() {
    if (document.getElementById("phone").value === ''){
    var messageTel1 = "<br/>Le champ Telephone est vide.";
    message += messageTel1;
    document.getElementById("errordiv").innerHTML = message;
   document.getElementById("errordiv").style.visibility = 'visible';
    }//end if
    if ((document.getElementById("phone").value).match(/[a-z]/i)){
    var messageTel2 = "<br/>Le champ Telephone ne doit pas avoir des lettres.";
    message += messageTel2;
    document.getElementById("errordiv").innerHTML = message;
   document.getElementById("errordiv").style.visibility = 'visible';
    }//end if
    if ((document.getElementById("phone").value).length != 10){
    var messageTel3 = "<br/>Le champ Telephone doit avoir 10 chiffres.";
    message += messageTel3;
    document.getElementById("errordiv").innerHTML = message;
   document.getElementById("errordiv").style.visibility = 'visible';
    }//end if
}//end function

   function validateemail() {
    if (document.getElementById("email").value === ''){
    var messageDate1 = "<br/>Le champ Email est vide.";
    message += messageDate1;
    document.getElementById("errordiv").innerHTML = message;
   document.getElementById("errordiv").style.visibility = 'visible';
    }//end if
    if ((document.getElementById("email").value).match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)){
        var messageTel2 = "<br/>Le champ Telephone ne doit pas avoir des lettres.";
        message += messageTel2;
        document.getElementById("errordiv").innerHTML = message;
       document.getElementById("errordiv").style.visibility = 'visible';
}//end function

function validatenumerodecarte() {
    if (document.getElementById("numerodecarte").value === ''){
    var messageTel1 = "<br/>Le champ Numero de carte est vide.";
    message += messageNUCA1;
    document.getElementById("errordiv").innerHTML = message;
   document.getElementById("errordiv").style.visibility = 'visible';
    }//end if
    if ((document.getElementById("numerodecarte").value).match(/[a-z]/i)){
    var messageTel2 = "<br/>Le champ Numero de carte ne doit pas avoir des lettres.";
    message += messageNUCA2;
    document.getElementById("errordiv").innerHTML = message;
   document.getElementById("errordiv").style.visibility = 'visible';
    }//end if
    if ((document.getElementById("numerodecarte").value).length != 16){
    var messageTel3 = "<br/>Le champ Numero de carte doit avoir 16 chiffres.";
    message += messageNUCA3;
    document.getElementById("errordiv").innerHTML = message;
   document.getElementById("errordiv").style.visibility = 'visible';
    }//end if
}//end function

function validatecrypto() {
    if (document.getElementById("crypto").value === ''){
    var messageTel1 = "<br/>Le champ Numero de cryptographie de la carte est vide.";
    message += messageNUCA1;
    document.getElementById("errordiv").innerHTML = message;
   document.getElementById("errordiv").style.visibility = 'visible';
    }//end if
    if ((document.getElementById("crypto").value).match(/[a-z]/i)){
    var messageTel2 = "<br/>Le champ Numero de cryptographie de la carte  ne doit pas avoir des lettres.";
    message += messageNUCA2;
    document.getElementById("errordiv").innerHTML = message;
   document.getElementById("errordiv").style.visibility = 'visible';
    }//end if
    if ((document.getElementById("crypto").value).length != 3){
    var messageTel3 = "<br/>Le champ Numero de cryptographie de la carte  doit avoir 3 chiffres.";
    message += messageNUCA3;
    document.getElementById("errordiv").innerHTML = message;
   document.getElementById("errordiv").style.visibility = 'visible';
    }//end if
}//end function


