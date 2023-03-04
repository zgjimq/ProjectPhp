<?php
    if(empty($_POST["username"])){
        die("Username eshte empty!!");
    }
    if(strlen($_POST["username"])<3){
        die("Username duhet te permbaj me shume se 3 karaktere");
    }
    //if(isupper($_POST["username"])){
      //  die("Weong");
    //}
    if(! preg_match('~^\p{Lu}~u', $_POST["username"])){
        die("Username duhet te kete nje shkronje te madhe");
    }
    if(empty($_POST["email"])){
        die("Duhet te shkruajm email!!");
    }
    if(strlen($_POST["email"])<6){
        die("Email duhet te permaj se 6 karaktere");
    }
    if(empty($_POST["password"])){
        die("Passord eshte empty!!");
    }
    if(strlen($_POST["password"])<6){
        die("Password duhet te permbaj me shume se 6 karaktere");
    }
    if(! preg_match("/[A-Z]/i", $_POST["password"])){
        die("Passi duhet te permajn nje shkronje te madhe");
    }
    if(! preg_match("/[0-9]/i", $_POST["password"])){
        die("Passi duhet te permajn nje numer");
    }
    if(empty($_POST["password2"])){
        die("Passwordi i dyte duhet te mbushet");
    }
    if($_POST["password"] !== $_POST["password2"]){
        die("Passwordi doesnt match the first one");
    }
    $password_hash=password_hash($_POST["password"],PASSWORD_DEFAULT);

    $mysqli = require __DIR__ ."/database.php";// per me marr current directory of current file. pasi e kemi shenuar nje return statment ne fund te
    //database.php

    $sql="INSERT INTO user (username,email,password_hash)  
                            VALUES(?, ?, ?)";
    ///vlera e id ne database do te incementohet edhe nese nuk do ta specifikojm
    $stmt = $mysqli->stmt_init();

   // $stmt->prepare($sql);  // ne kete point cdo sintax error do te kapet nese prepare kthen false atehere ka problem ne sql

   if(! $stmt->prepare($sql)){
        die("Sql error");
   }
   // nese dojm me testu mujm me ndrru ne rreshtin 43 "user" ne "users" dhe do na jep nje error qe nuk ekziston ky.

   $stmt->bind_param("sss",
                      $_POST["username"],
                      $_POST["email"],
                      $password_hash);// sss eshte lloji i dates qe do ipet s-String.


   if($stmt->execute()){
    header("Location: successRegj.html");
    exit;
   }else{
        if($mysqli->errno === 1062){
                die("email taken");
        }else{
            die($mysqli->error . " ". $mysqli->errno);
        }

   }
   
   //print_r($_POST);
    //if( ! preg_match("/^[A-Z]+$/", $_POST["username"])){
      //  die("Duhet te permaj nje shkronje te madhe");
     //}
    ?>   