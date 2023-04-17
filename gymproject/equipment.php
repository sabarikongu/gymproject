<?php
include("connection.php");
$ename=$_POST["ename"];
$des=$_POST["des"];
$DOP=$_POST["DOP"];
$quantity=$_POST["quantity"];
$phno=$_POST["phno"];
$vendor=$_POST["vendor"];
$address=$_POST["address"];
$price=$_POST["price"];

if(isset($_POST['submit'])){
$sql="INSERT INTO equipment(ename,des,DOP,quantity,phno,vendor,address,price)VALUES('$ename','$des','$DOP','$quantity','$phno','$vendor','$address','$price')";

if($conn->query($sql)===TRUE){
    echo '<script>alert("Data Inserted Successfully</script>';
}
else{
    echo "error:".$sql."<br>".$conn->error;
}
}
$conn->close();
?>