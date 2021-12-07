<?php
       include('./home.html');
       require('logindb.php');
       $username = $_SESSION['U'];
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
            <h1>LOAN</h1>
        </div>
        <div class="main">    
    <form action="" method = "POST">
    <div class="input1">
    <label for="firstName">First Name:</label> <input type="text" id = "username" name = "firstName" required >
    <br>
    <br>
    <label for="passLastName">Last Name:</label> <input type="text" id = "password" name = "passLastName" required >
    <br>
    <br>
    <label for="Adress">Adress:</label> <input type="text" id = "conpassword" name = "Adress" required>
    <br>
    <br>
    <label for="GrossIncome">Gross Income:</label> <input type="text" id = "Email" name = "GrossIncome" required>
    <br>
    <br>
</div >
    <input type="submit" value="Apply Loan"   name = "submit" id = "btn1">
    
    

       

    </form>
</div>
</div>
</body>
</html>

<?php
    $conn = mysqli_connect('localhost', 'Jascharan', 'Mannus1234', 'ninja_pizza');
    if(isset($_POST["submit"])){
        if($_POST['password'] == $_POST['Compassword']){
        
        $firstName = $_POST['firstName'];
        $lastName = $_POST['passLastName'];
        $adress = $_POST['Adress'];
        $gIncome = $_POST['GrossIncome'];
        
        $sqlInsert = "insert into loandb (firstname, lastname, adress, gIncome) values ('$firstName', '$lastName', '$adress' , '$gIncome') ";

        $run = mysqli_query($conn,$sqlInsert);
        if($run){
            header("Location:login.php");
        }
        else{

            echo "Please try Again";
        }
        mysqli_close($conn);
    }
    else{
        echo "Your Password and REP-PASSWD is not correct has to be same";
    }
}

?>