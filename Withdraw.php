<?php

    include('./home.html');
    include './logindb.php';
    $withdraw = $_SESSION['w'];
    $username = $_SESSION['U'];
    $updateAmount1 =$_SESSION['x'] ;
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .contaner{
            font-size: 35px;
            line-height: 80px;
            padding: 0 100px;
            font-weight: bold;
            color: #293ba3;
            width: 1117px;
            height: 155px;
        
            margin-top: 54px;
            border-radius: 25px;
          
        }
        .inp{
            margin-left: 39%;
            margin-top: 1%;
        }
        .heder{
            margin-top: 10%;
        }
        #btn1{
            background-color: #EA4C89;
    border-radius: 8px;
    border-style: none;
    box-sizing: border-box;
    color: #FFFFFF;
    cursor: pointer;
    display: inline-block;
    font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 14px;
    font-weight: 500;
    height: 35px;
    line-height: 20px;
    list-style: none;
    margin-left: 1%;
    outline: none;
    padding: 10px 16px;
    position: relative;
    text-align: center;
    text-decoration: none;
    transition: color 100ms;
    vertical-align: baseline;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
        }
    </style>
</head>
<body> 
     <div class="contaner">
        <h1 class = "heder">Your Amount is <?php  echo $updateAmount1 ?></h1>
        <form action="" method = "POST">
            <label  class = "heder" for=""> How much would you like to Withdraw</label> 
    </div>
    <div class="inp">
            <input type="text" name = "widthdraw1">

            
            <input type="submit" value="Withdraw" name = "withdraw" id = "btn1">
            <input type="submit" value = "Go Back" name = "goBack" id = "btn1">
    </div>
        </form>
        <?php
    if(isset($_POST['withdraw'])){

        $conn = mysqli_connect('localhost', 'Jascharan', 'Mannus1234', 'ninja_pizza');
        
        
        $updateAmount =  $updateAmount1- $_POST['widthdraw1']  ;
        
        $sqlInsert = "update userdb set withdraw='".$_POST['widthdraw1']."', Amount='".$updateAmount."' where Username ='".$username."' ";
        
        $run = mysqli_query($conn,$sqlInsert);
       
        mysqli_close($conn);
    }
    if(isset($_POST['goBack'])){
        header("Location: loginsucess.php");
        
    }
   
?>

</body>
</html>