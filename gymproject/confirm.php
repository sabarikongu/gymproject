<?php
include_once 'connection.php';

$result = mysqli_query($conn,"SELECT * FROM payment WHERE id='" . $_GET['id'] . "'");
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
<body style="background; background-image:url(gym-equipment-picjumbo-com.jpg) ;  background-repeat: no-repeat;   background-size: 100% 100%;  background-attachment: fixed;">
    <script src="nav.js"></script>
    
       
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
                                <div class="col-5 div1 shadow-none p-5 mb-4 bg-body rounded" style="background-image:url(WhatsApp Image 2022-11-03 at 11.14.44 (1).png); ">
                                <form name="form-group" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<button style="background-color:rgb(122, 145, 146)"><a href="./payment.php" style="text-decoration:none; color:white;">PAYMENT LIST</a></button>
</div>
 <br>
<input type="hidden" name="id" class="form-control" value="<?php echo $row['id']; ?>"/>

<br>
<h4>Name: <?php echo $row['name']; ?></h4>
<br>
<h4>Gender : <?php echo $row['gender']; ?></h4>
<br>
<h4>DOJ: <?php echo $row['DOR']; ?></h4>
<br>
<h4>Year: <?php echo $row['year']; ?></h4>
<br>
<h4>Contact NO: <?php echo $row['phno']; ?></h4>
<br>

<h4>Service: <?php echo $row['s1']; ?></h4>
<br>
<h4>Total: <?php echo $row['total']; ?></h4>
<br>
<center><button onClick="window.print()" style="background-color:rgb(122, 145, 146); color:white">Print</button></center>

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






