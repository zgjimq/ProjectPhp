<?php

$name = $_POST["name"];
$numriTEL = $_POST['numriTEL'];
$email = $_POST["email"];
$message = $_POST["message"];
//var_dump($name, $numriTEL, $email, $message);
//print_r($_POST);

$host = "localhost";
$dbname= "message_db";
$username="root";
$password="";

$conn = mysqli_connect($host, $username,$password,$dbname);

if(mysqli_connect_errno()){
    die("connection error: ". mysqli_connect_erorr());
}
//echo("mire");

$sql= "INSERT INTO message(Emri, Numri, email, Mesazhi)
            VALUES(?, ?, ?, ?)";
    
  $stmt=  mysqli_stmt_init($conn);

  if(! mysqli_stmt_prepare($stmt, $sql)){
        die(mysqli_error($conn));
  }

  mysqli_stmt_bind_param($stmt, "siss",$name, $numriTEL,$email, $message);

/*  if(!$_SERVER['REQUEST_METHOD']== 'post'){
  if(empty($name)){
    error('Duet te kete emre');
  }
   
  if(strlen(trim($name)) <3 ){
    return ;
 }
 /*
 if(is_numeric($name)){
  return;
 } 

 if (!preg_match('/^[0-9]*$/', $name)) {
  echo("Emri nuk mund te jete me numra");
  return ;
}
  }*/
  if(isset($_POST['sumbit'])){
    if(empty($name)){
      die("Emri nuk mund te jete bosh");
      //$name_error="Te lutem mbusheni emrin";
    } 
    if(strlen(trim($name)) <3 ){
      die("Emri duhet te jete me i gjat se 3 karaktere");
    }
    if(is_numeric($name)){
    die("Emri nuk te jete number");
    }
     if (preg_match('~[0-9]+~', $name)) {
    die ("Emri permban numra");
    }
    if(!preg_match('/^[0-9]{9}+$/', $numriTEL)) {
      die ("Numri i telefonit nuk mund te jete ne rregull");
    }
    if(strlen($email)<6){
      die("Email duhet te jete me i madh se 6 karaktere");
    } 
    if(empty($message)){
      die("message nuk mund te jete bosh");
      //$name_error="Te lutem mbusheni emrin";
    } 
    if(strlen($message)<15){
      die("Mesazhi duhet te jete me i madh");
    } 
}
  
if(mysqli_stmt_execute($stmt)){
  header("Location: rezerSucc.html");
}
 // mysqli_stmt_execute($stmt);
  //echo "Rekodri eshte bere save";
?>