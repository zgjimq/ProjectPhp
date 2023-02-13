<?php
$eshte_valid=false;// e bejm per me shiku nese data e dhen nga useri jane te sakta
if($_SERVER["REQUEST_METHOD"]==="POST"){//per me keqyr nese forma eshte bere sumbit
                 //get           post  //mundemi me shiku request method
    $mysqli = require __DIR__ . "/database.php";//fillojm duhet connektu ne databaz 

    $sql = sprintf("SELECT * FROM user 
                where email='%s'",// e insertojm direkt ne sql, masi eshte string duhet te perdorim ''
                // per me insertu e perdorim sprint edhe e perdorim %s
               $mysqli->real_escape_string( $_POST["email"])); //per me u be sigurt qe po provide nje sqp injecion attack 
               //duhet me escape value qe vjen prej form

   $result=$mysqli->query($sql); // per me ekzekutu qete sql e perdorim mysql->query($sql) dhe kjo kthen nje result object ata 
   //e ruajm ne nje variabel
   $user= $result->fetch_assoc();//per me marr data prej result object e thirrum fetch_assoc, kjo do te kthej nje rekord nese 
   //nje eshte gjetur si nje associativ array.

   
  if($user){// e shikon a ka nje array of data edhe nuk eshte null 
    //e nese gjehet nje redord per ate adres tanaj mund ta shikojm passwordin
    if(password_verify($_POST["password"], $user["password_hash"])){// kjo e shikon a jane te njejt passwordat edhe kthen true ose flase
            //die("Login successul");
            session_start();
            $_SESSION["user_id"]=$user["id"];

            header("Location: index.php");
            exit;
    }
  }
   
  $eshte_valid=true;// nese vjen deri ketu atehere gjithqka eshte mire tanaj posht e merr kete edhe e qet nese eshte valid ose jo
   //var_dump($user);
   //exit;
 
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log/Regjistro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--LINKU PER IKONAT -->
    <style>
        .sm{
        color: black;
            font-family: 'Segoe UI';
            font-weight: bolder;
            padding: 10px;
            font-size: 20px; 
            text-decoration: none;
       }
       .sm a{
        font-size: 30px;
        text-decoration: none;
       }
       #div2{
        background-color:   white;
        height: 350px;
        width: 600px;
        padding: 50px;
        margin: 90px;
        border-radius: 10px;
       }
       .User{
        width: 450px;
        height: 26px;
        background-color: rgba(0, 0, 0, 0.123);
        color : black;
        border: white;
        border-radius: 500px;
        margin: 10px;
        padding: 10px;
       }
       .Regjister{
        width: 30px;
        height: 40px;
        
       }
       #button{
        background-color: blue;
        color: white;
        border: cornflowerblue;
        width: 450px;
        margin: 10px;
        padding: 10px;
        border-radius:500px;
        height: 36px;
       }
       #regjistro{
        color: blue;
        font-style: oblique;
        font-size: 20px;
        border: 2px solid green;
       }
       #back{
        font-size: 20px;
        border: 2px solid green;
        padding: 2px;
       }
       
    </style>
    </head>
    <body style="background-color: rgb(73, 105, 247);">
    <div id="div1">
        <label class="sm"><a href="HomePage.html" style="color: white;">Home</a></label>
        <label class="sm"> <a href="About.HTML" style="color: white;">About us</a> </label>
        
     <center> <div id="div2">
        <h1  >Login form</h1>
        <form method="post">
            <?php if($eshte_valid):?>
                <em>Invalid login</em>
            <?php endif; ?>    
        <br>
            <input class="User" id="email" type="email" placeholder="Enter email" name="email" 
            value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">  
            <br>
            <br>
            <input class="User" id="password" type="password" placeholder="Enter password" name="password">
            <br>
            <button onclick="valido()" id="button" name="sumbit">Submit</button>
            <br>
            <label id="back"><a href="HomePage.html" style="color: black;text-decoration: none;">Back</a></label>
            <br>
            <br>
            <label id="regjistro"><a href="regjistrimi.html" style="color: black;text-decoration: none;">Regjitro</a></label>
        </form>
    </div></center>
</div>
 <script src="javaS/java.js"></script>
</body>
</html>
    
</body>
</html>