<?php

session_start();

       $db=mysqli_connect('localhost','root',"",'register');

    //check connection 

    if($db->connect_error){
        die("connection failed:".$db);
    }
    
     else{
      echo "connection ok";
     }          


    if(isset($_POST['submit']))

    {


    	$username =$_POST['username'];
      $email =$_POST['email'];
      $password =$_POST['password'];
      $confirm_pass =$_POST['confirm_pass'];
      $fname=$_POST['fname'];
     $lname=$_POST['lname'];
      $dob =$_POST['dob'];
      $gender=$_POST['gender'];
      $address=$_POST['address'];
      $status=$_POST['status'];
      $phoneno=$_POST['phoneno'];
      $word=$_POST['word'];
      $hoby=$_POST['hoby'];
    	$about_you=$_POST['about_you'];
     $what=$_POST['what'];
     $skills=implode(',',$_POST['skills']);
  
         $hash_pass = password_hash($confirm_pass,PASSWORD_DEFAULT);//encrypt the password before saving in the database
    	
      $query ="INSERT INTO register(username,email,password,confirm_pass,fname,lname,gender,address,status,phoneno,word,hoby,about_you,what,skills) VALUES('$username','$email','$password','$confirm_pass','$fname','$lname','$gender','$address','$status','$phoneno','$word','$hoby','$about_you','$what','$skills')";

        mysqli_query($db,$query);
  
        header('Location:index.php');//rediect to index page after insertion



    }

    
     

?>


