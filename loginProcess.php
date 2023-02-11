
<?php 
session_start();
?>

<?php
//checking the connection
$conn=mysqli_connect('localhost','root','','auctionInfo');
 
if(!$conn){
  echo "connection successful";
}

   $email=test($_POST["userid"]);
   $password=test($_POST["password"]);
 

   $sql="SELECT * FROM auction_table WHERE email='$email' AND password='$password'";
  
   $result=mysqli_query($conn,$sql);

   $row=mysqli_num_rows($result);
   $array=mysqli_fetch_assoc($result);
     
   if($row==1){
     $_SESSION['username']= $array['name'];
     header('Location:welcome.php');
     echo "success";
   }else{
    $_SESSION['Lerror']="Email Or Password is incorrect";
     header('Location:loginPage.php');
   }

  
function test($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
 ?>
    