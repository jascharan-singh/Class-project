<?php
    
    include('./home.html');
    include './logindb.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login1.css" type = "text/css">
    
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>LOGIN</h1>
        </div>
             <div class="main">
                <form action="" method = "POST" >
                    <div class="input1">
                    <label for="username">USERNAME:</label> <input type="text" id = "username" name = "Username" required autocomplete="off" onkeypress="return /[a-z]/i.test(event.key)"    onblur="if (this.value == '') {this.value = '';}"
        onfocus="if (this.vSalue == '') {this.value = '';}">
                    <br>
                    <br>
                    <label for="password">PASSWORD:</label> <input type="password" id = "password" name = "password" required >
                    </div>
                    <br>
                    
                    
                    <input type="submit" value="Login"   name = "submit" id = "btn1">
                    
                    <input type="submit" value="Register"  name = "register" id = "btn2">      
                    <br> 
                
                </form>
             </div>
    </div>
</body>
</html>