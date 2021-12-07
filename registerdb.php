<?php
    $conn = mysqli_connect('localhost', 'Jascharan', 'Mannus1234', 'ninja_pizza');
    if(isset($_POST["submit"])){
        if($_POST['password'] == $_POST['Compassword']){
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $comPassword = $_POST['Compassword'];
        $email = $_POST['email'];
        
        $sqlInsert = "insert into userdb (Username, Password, conPassword, Email) values ('$username', '$password', '$comPassword' , '$email') ";

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