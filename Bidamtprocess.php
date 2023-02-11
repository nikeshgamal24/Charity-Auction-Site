<?php
session_start();  
  if(!isset($_SESSION['username']))
  {

  }
?>
<?php
$idft=$_SESSION['order'];
?>
<?php   
$bidAmt="";

if($_SERVER['REQUEST_METHOD']=="POST"){
//code related to database craetion, table creation and connections
    $con=mysqli_connect('localhost','root','');
    if(!$con){
        die("Connection falied");
    }else{
        $Bid="CREATE DATABASE IF NOT EXISTS Products";
        $resultB=mysqli_query($con,$Bid);

        if($resultB){

            $con=mysqli_connect('localhost','root','','Products');
            //query to create table
            $bids="CREATE TABLE IF NOT EXISTS auction_table(
                id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                amount INT(10) NOT NULL,
                name VARCHAR(30) NOT NULL 
            )";
    
               $resultB=mysqli_query($con,$bids);
                  if(!$resultB){
                          die("Table creation failed");
                             }
                    else{
                                echo "all work successfully done";
                        }
                    }
            else{
                die("Database creation failed");
            }

        }

     

        if(!$_SESSION['username']){
              $_SESSION['message']="Sign In To Bid";   
                header('Location:desciption.php');
            }
        else{
              //Codes to check the value is with the value of the data base 
               $bidAmt=$_POST['bidAmt'];
               $sqlB="SELECT * FROM auction_table WHERE id='$idft'";
               $resultB=mysqli_query($con,$sqlB);
               $rowB=mysqli_num_rows($resultB);
               $username=$_SESSION['username'];
             

               if($rowB==0){
                   $sqlB="INSERT INTO bidamt(id,amount,biduser)
                         VALUES('','$bidAmt','$username')";
                    $resultB=mysqli_query($con,$sqlB);
                    echo "<br>". $resultB;
                    if($resultB){
                        $_SESSION['message']="Amount recorded successfully<br>Thank you for bidding";
                           header('Location:wdesciption.php');
                    }
                    else{
                        echo ("Data inserion failed");
                    }
               }else{
                $con=mysqli_connect('localhost','root','','Products');
                   $sqlB="SELECT * FROM auction_table WHERE id='$idft'";
                    $resultB=mysqli_query($con,$sqlB);
                       $rowB=mysqli_fetch_assoc($resultB);
                   if($bidAmt>=$rowB["amount"]){
                     $sqlB="UPDATE auction_table
                            SET amount='$bidAmt',biduser='$username'
                            WHERE id='$idft'";
                        $resultB=mysqli_query($con,$sqlB);
                     if($resultB){
                           $_SESSION['message']="Amount recorded successfully<br>Thank you for bidding";
                           header('Location:wdesciption.php');
                            }  
                      else{
                           die("Data inserion failed");
                           }
                   }else{
                     $_SESSION['message']="Amount is insufficient<br>Try again";    
                     header('Location:wdesciption.php');
                    }     
               }
          }
    
    }
    else{

        echo "Problem in method request";
    }
?>