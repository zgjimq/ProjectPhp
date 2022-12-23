/* 
function validoMeRegex(){
    var usernameRegex= / ^[A-Z]{1}}[a-zA-Z0-9]+[0-9]{1}$/;//^ duhet me fillu ne kete menyer    $ kjo si mbran
    //regex
    var useri = document.getElementById('useri').value;

    if(usernameRegex.test(useri)){
        console.log("username eshte ne rregull")
    }else{
        console.log("username nuk eshte ne rregull")
    }
}
*/


/*

function valido(){
    var usernameRegex= / ^[A-Z]{1}}[a-zA-Z0-9]+[0-9]{1}$/;
    var emriUserit=document.getElementById('username').value;
   if(usernameRegex.test(emriUserit)){
    alert("Emri nuk eshte shenuar");
    return;
   }
   var emaili=document.getElementById('email').value;
   if(emaili==""){
    alert("Email nuk mund te jet bosh");
    return;
   }
   var pas=document.getElementById('password').value;
   if(pas==""){
    alert("Passi nuk mund te jete zbrazet");
   }
   var pas2=document.getElementById('password2').value;
   if(pas2!=pas){
    alert("Pasi nuk eshte i njejt");
   }



   
} 
//valido();   */

function valido (){
    var name = document.getElementById("username").value;
    var emaili=document.getElementById("email").value;
    var pasi = document.getElementById("password").value;
    var pasi2=document.getElementById("password2").value;
    var number = /[0-9]/;
    var upper  =/[A-Z]/;

    if(name.length<3){
        alert("Emri duhet te jete me i gjat se 3 karaktere");
        return;
    }
    else if(!upper.test(name)){
        alert("Emri duhet te permbaj nje Shkronje te madhe");
        return;
    }
    if(emaili.length<6 ){
        alert("Email duhet te jete me i gjat se 6 karatere");
        return ;
    }
    if(pasi.length<6){
        alert("Pasi duhet te jete me i gjat se 6 karaktere");
        
    }
    else if(!number.test(pasi)){
        alert("Pasi duhet te permbaj se paku nje numer");
    } 
    else if(!upper.test(pasi)){
        alert("Pasi duhet te permbaj se paku nje Shronje te madhe");
        
    }
   else if(pasi2!=pasi){
        alert("Pasi nuk eshte i indektik me ate fillestar");
    }
    
}



