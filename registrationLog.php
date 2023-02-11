
<?php 

 $name=$email=$password=$confirm_password=$phone=$country=$agree="";
 $nameErr=$emailErr=$passwordErr=$confirm_passwordErr=$phoneErr=$countryErr=$agreeErr="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $name=test($_POST["naame"]);
    $email=test($_POST["Email"]);
    $password=test($_POST["Password"]);
    $confirm_password=test($_POST["Confirm_Password"]);
    $phone=test($_POST["Phone"]);
    $country=test($_POST["countries"]);
    //$agree=$_POST["Terms"];

    //Pattern matching patterns
    $patname="/^[A-Za-z]+[\s][A-Za-z]+$/i";
    $patemail="/^[A-Za-z]+@[a-z]{2,}.[a-z]{2,}$/";
    $patpassword="/^[a-zA-Z]+[0-9]+/";
   // $patpassword2="/([0-9]+)([a-zA-Z]+)/gm";
    $patphone="/^[0-9]{10}$/";
         
         //pattern matching codes
        if($name==""|| $email==""||$password==""||$confirm_password==""||$phone==""||$country=="")
            {  
                $nameErr="No input fields are allowed to be empty";
                echo $nameErr;
            }
        else{       
              //name validation
                if(empty($name)){
                     $nameErr="Name can't be empty";
                   die($nameErr);
                     
                }
               
                else{
                      if(preg_match($patname,$name))
                        {
                            // echo "name sucess <br>";
                         if(empty($email)){
                            $emailErr="Email can't be empty";
                            die($emailErr);
                         }
                         else{

                             if(preg_match($patemail,$email))
                             {        
                                //   echo "email sucess <br>";
                                     if(empty($country)){
                                         $countryErr="Select the your country";
                                        die($countryErr);
                                     }
                                     else{
                                          if(empty($password)){
                                                 $passwordErr="Password can't be empty";
                                                 die($passwordErr);
                                             }
                                             else{
                                                if(preg_match($patpassword,$password))
                                                {   
                                                    //  echo "password sucess <br>";
                                                    if(empty($confirm_password)){
                                                        $confirm_passwordErr="Confirmation Password can't be empty";
                                                        die($confirm_passwordErr);
                                                    }
                                                    else{
                                                        if($password==$confirm_password && strlen($password)>8){
                                                             if(preg_match($patphone,$phone)){
                                                                    $success=1;
                                                                    // echo " All Success";
                                                               }
                                                             else{
                                                              die("Pattern of phone and doesn't match");
                                                              echo $phone;
                                                             }
                                                        }
                                                        else{
                                                            die("Password and Confirm Password doesn't match");
                                                        }
                                                    }
                                               }
                                               else{
                                                die("Either Pattern of Password doesn't match <br>OR<br>Length of the string is less than 8 characters");
                                               }
                                          } 
                                     }
                            }
                            else{
                                die("Pattern of Email doesn't match");
                            }
                       }
                   }
                else{
                    die("Pattern of name doesn't match");
                    echo $name;
                }
             }
        }
  }

function test($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>

<?php 
include('mysql.php');
include('insert.php');
 if($success){
    echo $name . "<br>";
    echo $email . "<br>";
    echo $password . "<br>";
    echo $country . "<br>";
    echo $phone . "<br>";
 }
 else{
     echo "Error";
 }
?>