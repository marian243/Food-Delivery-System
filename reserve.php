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
        
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
       // $time= $_POST['time'];
        $date= $_POST['birthday'];
        $email= $_POST['email'];
        $phone= $_POST['phone'];
   
   
    
     
     
    
    
    
    
        
        
        //echo "<script>window.alert('$name $email $phone $date $time $person ');</script>";
        
        
        
        //echo "<script>window.alert('$sql')</script>";
    //echo "<script>window.alert('your feedback is submitted')</script>";
        
        //$db= 'easycafe';
      //mysqli_query($db,$sql);
        ///connect('easycafe',$sql);
        
        
        try{
            $conn=new PDO("mysql:host=localhost:3306;dbname=easycafe", "root" ,"");
            
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO reservation (FirstName,LastName, date,email,phonenumber) VALUES ('$fname','$lname','$date','$email','$phone')";
            
            $no_of_rows=$conn->exec($sql);
            if($no_of_rows>0){
                echo "<script>window.alert('Insertion Success');</script>";
                header('Location:test.php');
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