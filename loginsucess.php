<?php
  
  
   include('./home.html');
   require('logindb.php');

    $username = $_SESSION['U'];
    $amount =  $_SESSION['A'];
    $deposit = $_SESSION['d'];
    $withdraw = $_SESSION['w'];


    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="loginSucess.css">
</head>
<body>
        <h1>Welcome <?php echo $username; ?></h1>
        <div class="container">
            <label for="Amount">Amount : </label> <?php echo $amount?><br>
            
            <label for="Deposit">Last Deposit : </label> <?php echo $deposit?><br>
            <label for="withdraw">Last Withdraw : </label> <?php echo $withdraw?>
        </div>
        <div >
            <form action="" method="post">
                <input type="submit" value="Deposit" class="button2" name = "deposit">
                <input type="submit" value="Withdraw" class="button3" name = "withdraw">
                <input type="submit" value="Apply For Loan" class="button3" name = "Loan">
            </form>
        </div>
        <?php
                if(isset($_POST['deposit'])){
                    header("Location: Deposit.php");
                    
                }
                if(isset($_POST['withdraw'])){
                    header("Location: Withdraw.php");
                }
                if(isset($_POST['Loan'])){
                    header("Location: insert.php");
                }
                
                
        ?>
</body>
</html>