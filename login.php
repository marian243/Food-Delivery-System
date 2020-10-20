<?php
///include_once ("server.php");
//echo "page";
//	$myname ="";
//echo "<script>window.alert('i am here')</script>";
session_start();
if ($_SERVER['REQUEST_METHOD']=='POST')
{
        echo "<script>window.alert('i am here')</script>";
        //$fname = $_POST['first_name'];
        //$lname = $_POST['last_name'];
        $password= $_POST['pass'];
        //$DOB= $_POST['birthday'];
        $email= $_POST['email'];
        //$phone= $_POST['phone'];
        
        echo "<script>window.alert('$password $email');</script>";
        
        $sql = "SELECT  (pass,email) from user WHERE pass='$password' AND email='$email' ";
        
        echo "<script>window.alert('$sql')</script>"; 
    
    if ($_POST['email'] == '$email' && 
                  $_POST['pass'] == '$password') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  //$_SESSION['username'] = 'tutorialspoint';
                  
                  echo 'You have entered valid use name and password';
               }else {
                  $msg = 'Wrong username or password';
               }
        
        //$db= 'easycafe';
      //mysqli_query($db,$sql);
        ///connect('easycafe',$sql);
        
        
        try{
            $conn=new PDO("mysql:host=localhost;dbname=easycafe", "root" ,"");
            
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $no_of_rows=$conn->exec($sql);
            if($no_of_rows>0){
                echo "<script>window.alert('Insertion Success');</script>";
                header('Location:home.php');
            }
            else{
                echo "<script>window.alert('Insertion Error');</script>";
            }
            
        }
        
        catch(PDOException $ex){
            echo "<script>window.alert('DB Error');</script>";
        }
         
         
      } 
        else {
         //$error = "Your Login Name or Password is invalid";
            //echo "<script>window.alert('get method');</script>";
   } 

?>