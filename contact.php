<?php

   require('./home.html');
    
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
            <h1>CONTACT</h1>
        </div>
        <div class="main">    
    <form action="" method = "POST">
    <div class="input1">
    <label for="username">First Name:</label> <input type="text" id = "username" name = "firstname" required autocomplete="off" onkeypress="return /[a-z]/i.test(event.key)"    onblur="if (this.value == '') {this.value = '';}"
    onfocus="if (this.vSalue == '') {this.value = '';}">
    <br>
    <br>
    <label for="password">Last Name:</label> <input type="text" id = "password" name = "lastname"  required autocomplete="off" onkeypress="return /[a-z]/i.test(event.key)"    onblur="if (this.value == '') {this.value = '';}"
    onfocus="if (this.vSalue == '') {this.value = '';}">
    <br>
    <br>
    <label for="">Phone:</label> <input type="text" id = "conpassword" name = "phone" required>
    <br>
    <br>
    <label for="">EMAIL:</label> <input type="text" id = "Email" name = "email" required>
    <br>
    <br>
</div >
    <input type="submit" value="Submit"   name = "submit" id = "btn1">
    
    

       

    </form>
</div>
</div>
<?php

    if(isset($_POST["submit"])){
        
        $conn = mysqli_connect('localhost', 'Jascharan', 'Mannus1234', 'ninja_pizza');
        $username = $_POST['firstname'];
        $password = $_POST['lastname'];
        $comPassword = $_POST['phone'];
        $email = $_POST['email'];
        
        $sqlInsert = "insert into contactdb (first, last, Phone, Email) values ('$username', '$password', '$comPassword' , '$email') ";

        $run = mysqli_query($conn,$sqlInsert);

        mysqli_close($conn);

}

?>
</body>
</html>