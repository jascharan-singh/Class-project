<?php
    session_start();
    include('./home.html');
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="manager.css" type = "text/css">
    
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>MANAGER LOGIN</h2>
        </div>
             <div class="main">
                <form action="" method = "POST" >
                    <div class="input1">
                    <label for="username">USERNAME:</label> <input type="text" id = "username" name = "Username" required autocomplete="off" onkeypress="return /[a-z]/i.test(event.key)"    onblur="if (this.value == '') {this.value = '';}"
    onfocus="if (this.vSalue == '') {this.value = '';}">
                    <br>
                    <br>
                    <label for="password">PASSWORD:</label> <input type="password" id = "password" name = "password" required>
                    </div>
                    <br>
                    
                    
                    <input type="submit" value="Login"   name = "submit" id = "btn1">
                    
                      
                    <br> 
                
                </form>
             </div>
    </div>
    <?php
        if(isset($_POST['submit'])){
        $conn = mysqli_connect('localhost', 'Jascharan', 'Mannus1234', 'ninja_pizza');
        $sqlUNP = 'SELECT Username, Password FROM managerdb';
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

        }
    }
    if($is_bool == TRUE){
        $_SESSION['U'] = $username ;

        header("Location:Managersucess.php");
    }
    else if($is_bool == FALSE){
        echo "User not found";
    }
    mysqli_close($conn);
}
    ?>
</body>
</html>