<?php
session_start();
if(isset($_POST['submit'])){
    $conn = mysqli_connect('localhost', 'Jascharan', 'Mannus1234', 'ninja_pizza');
    $sqlUNP = 'SELECT Username, Password, Amount, deposit , withdraw FROM userdb';
    $result = mysqli_query($conn, $sqlUNP);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $is_bool = FALSE;
    $username = "0";
    $amount = "0";
    $deposit = "0";
    $withdraw = "0";
    for($i = 0; $i< mysqli_num_rows($result); $i++){
        if($data[$i]['Username'] == $_POST['Username'] && $data[$i]['Password'] == $_POST['password']){
            $is_bool = TRUE;
            $username = $data[$i]['Username'];
            $amount = $data[$i]['Amount'];
            $deposit = $data[$i]['deposit'];
            $withdraw = $data[$i]['withdraw'];
        }
    }
   
    if($is_bool == TRUE){
        $_SESSION['U'] = $username ;
        $_SESSION['A'] = $amount;
        $_SESSION['d'] = $deposit;
        $_SESSION['w'] = $withdraw;
        header("Location:loginsucess.php");
    }
    else if($is_bool == FALSE){
        echo "User not found";
    }
    mysqli_close($conn);

}
if(isset($_POST['register'])){
    header("Location:register.php");
}

?>