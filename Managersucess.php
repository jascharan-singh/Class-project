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
    <style>
            table{
                border : bold 2px white;
                width : 90%;
                padding-left : 2%;
                background-color: rgba(0, 0, 0, 0.1); 
            }
            .heading{
                font-size : 20px;
                color: navy;
                text-align : center;
            }
            .data{
                color: white;
                text-align : center;
            }
            .btn{
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
                height: 40px;
                line-height: 20px;
                list-style: none;
                margin-left: 27%;
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
                margin-bottom: 20%;
            }
    </style>
</head>
<body>
<?php
                    if(isset($_POST['Edit1'])){
                       echo "h1";
                        header("Location:update1.php");
                    }
                    if(isset($_POST['delete1'])){
                        mysqli_query($conn,"delete from userdb where Username= '".$data[0]['Username']."'");
                    }
                    if(isset($_POST['Edit2'])){
                        header("Location:update2.php");
                    }
                    if(isset($_POST['delete2'])){
                        mysqli_query($conn,"delete from userdb where Username= '".$data[1]['Username']."'");
                    }
                    if(isset($_POST['Edit3'])){
                        header("Location:update3.php");
                    }
                    if(isset($_POST['delete3'])){
                        mysqli_query($conn,"delete from userdb where Username= '".$data[2]['Username']."'");
                    }
                    if(isset($_POST['Edit14'])){
                        header("Location:update4.php");
                    }
                    if(isset($_POST['delete4'])){
                        mysqli_query($conn,"delete from userdb where Username= '".$data[3]['Username']."'");
                    }
                ?>
    <form action="" method = "POST">
      <table >
                <tr class = "heading">
                    <td>Username</td>
                    <td>Password</td>
                    <td>Confirm Password</td>
                    <td>Email</td>
                    <td>Amount</td>
                    <td>Deposit</td>
                    <td>Withdraw</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>

            
                
                <tr >
                    <td class="data"><?php echo $data[0]['Username']?></td>
                    <td class="data"><?php echo $data[0]['Password']?></td>
                    <td class="data"><?php echo $data[0]['ConPassword']?></td>
                    <td class="data"><?php echo $data[0]['Email']?></td>
                    <td class="data"><?php echo $data[0]['Amount']?></td>
                    <td class="data"><?php echo $data[0]['deposit']?></td>
                    <td class="data"><?php echo $data[0]['withdraw']?></td>
              
                    
                    <td><input type="submit" value="Edit"  class="btn" name = "Edit1"></td>
                    <td><input type="submit" value="Delete" class="btn" name = "delete1" ></td>
                    
                </tr>
                <tr >
                    <td class="data"><?php echo $data[1]['Username']?></td>
                    <td class="data"><?php echo $data[1]['Password']?></td>
                    <td class="data"><?php echo $data[1]['ConPassword']?></td>
                    <td class="data"><?php echo $data[1]['Email']?></td>
                    <td class="data"><?php echo $data[1]['Amount']?></td>
                    <td class="data"><?php echo $data[1]['deposit']?></td>
                    <td class="data"><?php echo $data[1]['withdraw']?></td>
              
                    <td><input type="submit" value="Edit"  class="btn" name = "Edit2"></td>
                    <td><input type="submit" value="Delete" class="btn" name = "delete2" ></td>
                    
                </tr>
                <tr >
                    <td class="data"><?php echo $data[2]['Username']?></td>
                    <td class="data"><?php echo $data[2]['Password']?></td>
                    <td class="data"><?php echo $data[2]['ConPassword']?></td>
                    <td class="data"><?php echo $data[2]['Email']?></td>
                    <td class="data"><?php echo $data[2]['Amount']?></td>
                    <td class="data"><?php echo $data[2]['deposit']?></td>
                    <td class="data"><?php echo $data[2]['withdraw']?></td>
              
                    <td><input type="submit" value="Edit"  class="btn" name = "Edit3"></td>
                    <td><input type="submit" value="Delete" class="btn" name = "delete3" ></td>
                    
                </tr>

                
               
      </table>
      </form>
 
</body>
</html>
