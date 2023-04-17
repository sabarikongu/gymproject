<?php
include_once 'connection.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE equipment set id='" . $_POST['id'] . "',ename='" . $_POST['ename'] . "',
des='" . $_POST['des'] . "', DOP='" . $_POST['DOP'] . "' ,quantity='" . $_POST['quantity'] . "',
vendor='" . $_POST['vendor'] . "', phno='" . $_POST['phno'] . "',address='" . $_POST['address'] . "',
price='" . $_POST['price'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "<p>Record Modified Successfully</p>";
}
$result = mysqli_query($conn,"SELECT * FROM equipment WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="member.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body style="background-color:burlywood ;">
    <script src="nav.js"></script>
    
        <div class="row">
            <div class="col-2">
                
                <div class="sidebar">
                    <header><span class="title1">BEAST</span> <span class="title2">FITNESS</span></header>
                    
                        <a href="./home.html"><i class="fa-solid fa-house-user fa-xl"></i> HOME</a>
                        <button class="dropdown-btn" onclick="list()"><i class="fa-solid fa-users-line fa-xl"></i>MANAGE MEMBER</button>
                        <div class="dropdown-container">
                            <a href="http://localhost/ctlab2/list_member.php"> LIST OF MEMBER</a>
                            <a href="./member.html"> INSERT MEMBER</a>
                               
                        </div>
                
                        <button class="dropdown-btn" onclick="list()"><i class="fa-solid fa-chalkboard-user fa-xl"> </i> TRAINER</button>
                        <div class="dropdown-container">
                            <a href="http://localhost/ctlab2/list_trainer.php"> LIST OF TRAINER</a>
                            <a href="./trainer.html"> INSERT TRAINER</a>
                            
                        </div>
                
                        <button class="dropdown-btn" onclick="list()"><i class="fa-solid fa-chalkboard-user fa-xl"></i> EQUIPMENT</button>
                        <div class="dropdown-container">
                            <a href="http://localhost/ctlab2/list_equipment.php"> LIST OF EQUIPMENT</a>
                            <a href="./equipment.html"> INSERT EQUIPMENT</a>
                             
                        </div>
                       
                        
                        <a href="http://localhost/ctlab2/payment.php"><i class="fa-solid fa-hand-holding-dollar"></i> PAYMENT</a>
                        <div>
        <a href="http://localhost/ctlab2/logout.php" style="size: 50px; text-decoration: none; font-size: 20px;"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
    </div>
                        
                    
                </div>
            </div>   
            
                <div class="col-10">
                    <div class="nav">
                    <span class="subtitle"><i class="fa-solid fa-house-user"></i><a href="./home.html">HOME</a>
                        <i class="fa-solid fa-angles-right"></i> MANAGE MEMBER 
                        <i class="fa-solid fa-angles-right"></i> INSERT MEMBER</span>
                    </div>
                    <div class="header">
                        <h3 class="head">ADD MEMBER DETAILS</h3>
                        <hr>

                        <div class="container">
                            <div class="row">
                                <div class="col-5 div1 shadow-none p-5 mb-4 bg-body rounded">
                                <form name="form-group" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="./list_equipment.php">Employee List</a>
</div>
 <br>
<input type="hidden" name="id" class="form-control" value="<?php echo $row['id']; ?>"/>

<br>
Name: <br>
<input type="text" name="ename" class="form-control" value="<?php echo $row['ename']; ?>"/>
<br>
Description :<br>
<input type="text" name="des" class="form-control" value="<?php echo $row['des']; ?>"/>
<br>
DOP:<br>
<input type="date" name="DOP" class="form-control" value="<?php echo $row['DOP']; ?>"/>
<br>
Quantity:<br>
<input type="text" name="quantity" class="form-control" value="<?php echo $row['quantity']; ?>"/>
<br>
Vendor:<br>
<input type="text" name="vendor" class="form-control" value="<?php echo $row['vendor']; ?>"/>
<br>
phno:<br>
<input type="number" name="phno" class="form-control" value="<?php echo $row['phno']; ?>"/>
<br>
address:<br>
<input type="text" name="address" class="form-control" value="<?php echo $row['address']; ?>"/>
<br>
price:<br>
<input type="text" name="price" class="form-control" value="<?php echo $row['price']; ?>"/>
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
                                </div>
                                
                                <hr>
                            </div>
                           
                        </div>
                    </div>
                </div>
        </div>
    
        
</body>
</html>






