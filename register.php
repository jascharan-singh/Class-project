<?php

   require('./home.html');
    include './registerdb.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register1.css" type = "text/css">
   
    </style>
</head>
<body>
<div class="container">
        <div class="header">
            <h1>REGISTER</h1>
        </div>
        <div class="main">    
    <form action="" method = "POST">
    <div class="input1">
    <label for="username">USERNAME:</label> <input type="text" id = "username" name = "username" required autocomplete="off" onkeypress="return /[a-z]/i.test(event.key)"    onblur="if (this.value == '') {this.value = '';}"
        onfocus="if (this.vSalue == '') {this.value = '';}">
    <br>
    <br>
    <label for="password">PASSWORD:</label> <input type="password" id = "password" name = "password" required >
    <br>
    <br>
    <label for="conpassword">CON-PASS:</label> <input type="password" id = "conpassword" name = "Compassword" required>
    <br>
    <br>
    <label for="Email">EMAIL:</label> <input type="text" id = "Email" name = "email" required>
    <br>
    <br>
</div >
    <input type="submit" value="REGISTER"   name = "submit" id = "btn1">
    
    

       

    </form>
</div>
</div>
</body>
</html>