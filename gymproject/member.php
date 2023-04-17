<?php
include("connection.php");
$name=$_POST["name"];
$gender=$_POST["gender"];
$DOR=$_POST["DOR"];
$year=$_POST["year"];
$phno=$_POST["phno"];
$address=$_POST["address"];
$s1=$_POST["s1"];
$total=$_POST["total"];

if(isset($_POST['submit'])){
$sql="INSERT INTO member(name,gender,DOR,year,phno,address,s1,total)VALUES('$name','$gender','$DOR','$year','$phno','$address','$s1','$total')";
$sql1="INSERT INTO payment(name,gender,DOR,year,phno,s1,total)VALUES('$name','$gender','$DOR','$year','$phno','$s1','$total')";
if($conn->query($sql)===TRUE){
    echo '<script>alert("Data Inserted Successfully</script>';
}
else{
    echo "error:".$sql."<br>".$conn->error;
}

if($conn->query($sql1)===TRUE){
    echo '<script>alert("Data Inserted Successfully</script>';
}
else{
    echo "error:".$sql1."<br>".$conn->error;
}
}
$conn->close();
?>