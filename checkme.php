<?php
///include_once ("server.php");
//echo "page";
//	$myname ="";
//echo "<script>window.alert('i am here')</script>";
session_start();
if ($_SERVER['REQUEST_METHOD']=='POST')
{
        echo "<script>window.alert('i am here')</script>";
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $password= $_POST['password'];
        $DOB= $_POST['birthday'];
        $email= $_POST['email'];
        $phone= $_POST['phone'];
        
        echo "<script>window.alert('$fname $lname $password $DOB $email $phone');</script>";
        
        $sql = "INSERT INTO user (FirstName,LastName,pass,DOB,email,phonenumber) VALUES ('$fname','$lname','$password','$DOB','$email','$phone')";
        
        echo "<script>window.alert('$sql')</script>";
        
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
            echo "<script>window.alert('get method');</script>";
   } 
//$servername = "localhost"; $username = "username"; $password = "password"; $dbname = "easycafe"; 

//if($_SERVER['REQUEST_METHOD'] == "GET"){
//               
//            }
//            elseif($_SERVER['REQUEST_METHOD'] == "POST"){
//                $id=$name=$dob=$email=$address="";
//                if(isset($_POST['first_name'])) $fname = $_POST['first_name'];
//                if(isset($_POST['last_name'])) $lname = $_POST['last_name'];
//                if(isset($_POST['password'])) $password = $_POST['password'];
//                if(isset($_POST['birthday'])) $DOB = $_POST['birthday'];
//                if(isset($_POST['email'])) $email = $_POST['email'];
//             if(isset($_POST['phone'])) $phone = $_POST['phone'];
//             
//                try{ 
//                     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);         
//                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
//                    $sqlQuery = "INSERT INTO user (FirstName,LastName,pass,DOB,email,phonenumber) VALUES ('$fname','$lname','$password','$DOB','$email','$phone')";
//                    $conn->exec($sqlQuery);
//                    //echo "<script>window.alert('Data insert successful'); </script>";
//                }catch(PDOException $exception){
//                    //echo "<script>window.alert('Database connection error'); </script>";
//                }
//            }
?>