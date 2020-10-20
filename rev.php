<?php
///include_once ("server.php");
//echo "page";
//	$myname ="";
//echo "<script>window.alert('i am here')</script>";
session_start();
if ($_SERVER['REQUEST_METHOD']=='POST')
//if(isset($_POST['post'])

{
        //echo "<script>window.alert('i am here')</script>";
        //$rate=$_POST['experience'];
        $comment= $_POST['comments'];
        $name= $_POST['name'];
        
        $email= $_POST['email'];
        
        echo "<script>window.alert('$comment $name $email');</script>";
        
        
        
        echo "<script>window.alert('$sql')</script>";
    //echo "<script>window.alert('your feedback is submitted')</script>";
        
        //$db= 'easycafe';
      //mysqli_query($db,$sql);
        ///connect('easycafe',$sql);
        
        
        try{
            $conn=new PDO("mysql:host=localhost;dbname=easycafe", "root" ,"");
            
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO review (comment,name,email) VALUES ('$comment','$name','$email')";
            
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