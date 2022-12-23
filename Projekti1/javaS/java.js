function valido(){
    let emriUserit=document.getElementById('Useri').value;
   let Passwordii=document.getElementById('Passi').value;
    if(emriUserit==""){
        alert("Email is empty!!");
        return;
    }else if(emriUserit.length<3){
        alert("Email length needs to be bigger then 3!!");
    }
   else if(Passwordii==""){
   alert("Password is empty !!!")
   return;
   }else if(Passwordii.length<6){
    alert("Password nuk mund te jete mire!");
    return;
   }
   else{
    alert("Keni hyre me sukses");
   }
}

