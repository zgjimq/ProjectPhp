<?php
/*<?php if(isset($_SESSION["user_id"])):?>
   <p>You are logged in</p>
    <?php else: ?>
        <p><a href="Login.php">login or <a href="regjistrimi.html">regjitstrohu</a></a></p>
        <?php endif;?>*/


session_start();// kjo ja do ja nis nje session te ja do ta vazhdoj nje ekzistuar
//print_r($_SESSION);

if(isset($_SESSION["user_id"])){
    $mysqli= require __DIR__ ."/database.php";

    $sql="SELECT * FROM user 
                   Where id={$_SESSION["user_id"]}";
    $result=$mysqli->query($sql);   
    $user=$result->fetch_assoc();            
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: century 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        header{
            background-color: black;
            height: 100vh;
            background-size: cover;
            background-position: center;
        }
        .ulJa{
            float: right;
            list-style-type: none ;
            margin-top: 25px;
            color: white;
        }
        ul li a{
            text-decoration: none;
            color :#fff;
            padding: 20px 20px;
        }
        .liJa{
            display: inline-block;
            color: black;
            padding: 3px 20px;
            font-size: 20px;
        }
        .liJa :hover{
            background-color: #fff;
            color: #000;
        }
        .logo img{
            float: left;
            width: 150px;
            height: auto ;
        }
        .title{
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);
        }
        .title h1{
            color: white;
            font-size: 70px;
        }
        .butoni{
            position: absolute;
            top:80%;
            left:50%;
            transform: translate(-50%,-50%);
        }
        .btn{
            border: 1px solid aqua;
            padding: 10px 30px;
            color: white;
        }
        .btn:hover{
            background-color: #fff;
            color: #000;
        }
        .nav1{
            color: white;
            text-align: center;
            border: 3px solid green;
        }
        
    </style>
</head>
<body style="background-color: black;">
    <header>
        <div class="main">
            <div class="logo">
                <img src="fotoot/logo.jpg">
            </div>

            <ul class="ulJa">
            
                <li class="liJa"><a href="index.php">Home</a></li>
                <li class="liJa"><a href="Login.php">Login</a></li>
                <li class="liJa"><a href="About.html">About</a></li>
                
            </ul>
            <?php
            if(isset($user)):?>
            <h1 style="color:white">Hello <?= htmlspecialchars($user["username"])?></h2>
            <br>
            <h2><a href="logout.php" style="color:white;text-decoration:none">Logout</a></h2>    
           <?php endif?>
            


        </div>
        <div class="title">
            <h1>Welcome to our page</h1>
        </div>
        <div class="butoni">
            <a href="items.html" class="btn" style="text-decoration: none;">Page 2</a>
            <a href="Lokacioni.html" class="btn" style="text-decoration: none;">Lokacioni</a>
            <a href="rezervimi.html" class="btn" style="text-decoration: none;">Rezervo</a>
        </div>
    </header>
    <nav class="nav1"><h1 style="color: green;">
        --------- Contact us ---------
        <ul>
            <ul style="color: green;">Email : emailShmb@gmail.com</ul>
            <ul style="color: green;">Numri i telefonit : 045 *** ***</ul>
        </ul>
    </h1>
   
    </nav>
    
</body>
</html>