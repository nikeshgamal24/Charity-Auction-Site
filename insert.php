<?php
session_start();
?>
<?php 
$server='localhost';
$username='root';
$pass='';
$dbName='auctionInfo';


//Connecting to the server
$conn=mysqli_connect($server,$username,$pass,$dbName);

if(!$conn){
  die("Connection failed");
}

$sqlI="SELECT * FROM auction_table WHERE name='$name' OR password='$password'";
$result=mysqli_query($conn,$sqlI);

//to check whether the enter credentials are already been used or not 
 $row=mysqli_num_rows($result);
 
 if($row==1){
    echo "Duplicated data"."<br>";
    header("Location:form.php");
 }
 else{
    $sqlI="INSERT INTO auction_table(id,name,email,password,country,phone)
    VALUES('','$name','$email','$password','$country','$phone')";

    $resultC=mysqli_query($conn,$sqlI);

    $sqlC="SELECT * FROM auction_table WHERE email='$email' AND passwor='$password'";

    $result=mysqli_query($conn,$sqlC);

    if($resultC){
       $_SESSION['username']= $name;
         header('Location:welcome.php');
        }
      else{
           die("Data insertion failed");
        }
    }

?>