/*
function valido (){
    let name = document.getElementById("username").value;
    let emaili=document.getElementById("email").value;
    let pasi = document.getElementById("password").value;
    let pasi2=document.getElementById("password2").value;
    var number = /[0-9]/;
    var upper  =/[A-Z]/;

    if(name.length<3){
        alert("Emri duhet te jete me i gjat se 3 karaktere");
        return;
    }
*/

function val(){
    let emri = document.getElementById("nameS").value;
    let nr= document.getElementById("numriS").value;
    let email= document.getElementById("emailS").value;
    let mesazhi= document.getElementById("mesageS").value;
    var number = /[0-9]/;
    var upper  =/[A-Z]/;
    var re = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{3})$/;//Validim per numri e telefonit

    if(emri==""){
        alert("Emri nuk mund te jete i zbrazet");
        return;
    }else if(emri.length<3){
        alert("Gjatesia e emrit duhet te jete me i gjat se 3");
        return;
    }else if(number.test(emri)){
        alert("Emri nuk mund te permbaj numra");
        return;
    }
    
    if(nr==""){
        alert("Numri i telefonit nuk mund te jete bosh");
        return;
    }else if(!re.test(nr)){
        alert("Numri i telefonit nuk mund te jete ne rregull");
        return;
    }
    
    if(email.length<6 ){
        alert("Email duhet te jete me i gjat se 6 karatere");
        return;
    }

    if(mesazhi==""){
        alert("Na duhet te vendosim nje mesazh ose perndryshe nuk pranohet rezervimi");
        return;
    }else if(mesazhi.length<15){
        alert("Mesazhi duhet te jetet me i gjat se qaq");
        return;
    }else{
        alert("Keni bere rezervimin me sukses");
    }



}

