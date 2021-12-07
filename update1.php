<?php
     include('./home.html');
     $conn = mysqli_connect('localhost', 'Jascharan', 'Mannus1234', 'ninja_pizza');
     $sqlUNP = 'SELECT  Username, Password, ConPassword, Email, Amount, deposit , withdraw FROM userdb';
     $result = mysqli_query($conn, $sqlUNP);
     $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="edit.css" type = "text/css">
</head>
<body>
<div class="container">
        <div class="header">
            <h1>UPTATE</h1>
        </div>
        <div class="main">    
    <form action="" method = "POST">
    <div class="input1">
    <label for="username">USERNAME:</label> <input type="text" id = "username" name = "username" value = "<?php echo $data[0] ['Username'];?>">
    <br>
    <br>
    <label for="password">PASSWORD:</label> <input type="text" id = "password" name = "password" value = "<?php echo $data[0] ['Password'];?>" >
    <br>
    <br>
    <label for="conpassword">CON-PASS:</label> <input type="text" id = "conpassword" name = "Compassword" value = "<?php echo $data[0] ['ConPassword'];?>">
    <br>
    <br>
    <label for="Email">EMAIL:</label> <input type="text" id = "Email" name = "email" value = "<?php echo $data[0] ['Email'];?>">
    <br>
    <br>
</div >
    <input type="submit" value="UPDATE"   name = "submit" id = "btn1">
    
    

       

    </form>
</div>
</div>
</body>
</html>
<?php 
if(isset($_POST['submit'])){
        if($_POST['password'] == $_POST['Compassword']){
            mysqli_query($conn,"update userdb set Username='".$_POST['username']."', Password='".$_POST['password']."', conPassword='".$_POST['Compassword']."', Email='".$_POST['email']."' where Username ='".$data[0]['Username']."' ");
           ?>
            <script type = "text/javascript">  
            
               alert (" Information has been updated ");  
            
      </script>
    <?php 
            
        }
        else{

            echo "Make sure you type correct password in password and confirm password";
        }
        mysqli_close($conn);
}
     
?>