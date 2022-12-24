function valido(){
    let emriUserit=document.getElementById('Useri').value;
   let Passwordii=document.getElementById('Passi').value;
   var number = /[0-9]/;
    var upper  =/[A-Z]/;
    if(emriUserit==""){
        alert("Email is empty!!");
        return;
    }else if(emriUserit.length<3){
        alert("Email length needs to be bigger then 3!!");
    }else if(!upper.test(emriUserit)){
        alert("User nuk mund te jete ne rregull");
    }
     if(Passwordii==""){
   alert("Password is empty !!!")
   return;
   }else if(Passwordii.length<6){
    alert("Password nuk mund te jete mire!");
    return;
   }else if(!upper.test(Passwordii)){
    alert("Password nuk mundet te jete mire(Duhet te permbaj nje upper case)");
   }else if(!number.test(Passwordii)){
    alert("Password nuk mundet te jete mire(duhet te permbaj numra)");
   }
   else{
    alert("Keni hyre me sukses");
   }
}

