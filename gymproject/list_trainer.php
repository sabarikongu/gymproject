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
    <style>
        table{
            border-collapse:collapse;
            width:80%;
            
            background-color: aliceblue;
            
        }
        th,td{
            text-align:left;
            padding:8px;
        }
        tr:nth-child(even){
            background-color:#7EF5D7;
        }
        h2{
            color:white;
        }
        </style>
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
                    <center>
                    <?php
include("connection.php");
$result = mysqli_query($conn,"SELECT * FROM trainer");
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table>
	  <tr>
                    
                    <th>NAME</th>
                    <th>GENDER</th>
                    <th>DOJ</th>
                    <th>CONTENT NO</th>
                    <th>MAIL</th>
                    <th>ADDRESS</th>
                    <th>EDIT</th>
                    <th>REMOVE</th>
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
      
      <td ><?php echo $row['tname']; ?></td>
<td ><?php echo $row['gender']; ?></td>
<td ><?php echo $row['DOJ']; ?></td>
<td ><?php echo $row['phno']; ?></td>
<td ><?php echo $row['mail']; ?></td>
<td ><?php echo $row['address']; ?></td>
		<td><a href="trainer_upd.php?id=<?php echo $row['id']; ?>">Update</a></td>
        <td><a href="delete1.php?id=<?php echo $row['id']; ?>">remove</a></td>
      </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>
 </center>
                </div>
        </div>
    
        
</body>
</html> 

