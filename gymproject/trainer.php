<?php
include("connection.php");
$tname=$_POST["tname"];
$gender=$_POST["gender"];
$DOJ=$_POST["DOJ"];
$phno=$_POST["phno"];
$address=$_POST["address"];
$mail=$_POST["mail"];

if(isset($_POST['submit'])){
$sql="INSERT INTO trainer(tname,gender,DOJ,phno,address,mail)VALUES('$tname','$gender','$DOJ','$phno','$address','$mail')";

if($conn->query($sql)===TRUE){
    echo '<script>alert("Data Inserted Successfully</script>';
}
else{
    echo "error:".$sql."<br>".$conn->error;
}
}
$conn->close();
?>