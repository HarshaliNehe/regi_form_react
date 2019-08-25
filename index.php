<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="index.css">
<!--validation of password and confirm password using js-->
   <script>
        function validate()
        {

            var a = document.getElementById("password").value;
            var b = document.getElementById("confirm_pass").value;
            if (a!=b)
            {

               alert("Passwords do no match");
               return false;
            }
        }
                            
</script>
</head>
<body>

<form action="registration_details.php" method="POST">

  <div class="container">
   
    <h1>Register</h1>

     <center>
       
     <b><p>Please fill in this form to create an account.</p></b>
        
        </center>

        <hr>

    <label for="User Name"><b>User Name</b></label>
    <input type="text" placeholder="User Name" name="username" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input  type="password" placeholder="password" name="password" class="input-field" id="password" >
    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input  type="password" placeholder="confirm pass" name="confirm_pass" class="input-field" id="confirm_pass">
    <hr>

    <h1>PERSONAL INFORMATION</h1>

     <label for="firstname"><b>FIRST NAME</b></label>
    <input type="text" placeholder="FIRST NAME" name="fname" required>

    <label for="lastname"><b>LAST NAME</b></label>
    <input type="text" placeholder="LAST NAME" name="lname" required>

    <label for="dob"><b>DATE_OF_BIRTH</b></label>
    <input type="number" placeholder="DATE_OF_BIRTH" name="dob" required>

    <label for="Gender"><b>GENDER :</b></label><br>
   <input type="radio" name="gender" value="male"> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other<br>

 
    <label for="adress"><b>ADDRESS :</b></label>
    <textarea placeholder="address" name="address" >
   </textarea><br>


   <label for="status"><b>STATUS</b></label>
    <input type="radio" name="status" value="married"> married<br>
  <input type="radio" name="status" value="unmarried"> unmarried<br>
  <input type="radio" name="status" value="divorced"> divorced<br><br>

  <label for="phone no"><b>PHONE NUMBER</b></label>
  <input type="number" placeholder="PHONE NUMBER" name="phoneno" required><br>

<label for="one word"><b>ONE WORD</b></label>
  <input type="text" placeholder="Describe yourself in one word " name="word" required>

  <label for="hoby"><b>HOBY</b></label>
  <input type="text" placeholder="HOBY" name="hoby" required>

 <label for="about you"><b>ABOUT YOU</b></label>
  <input type="text" placeholder="ABOUT YOU" name="about_you" required>


 <label for="what"><b>WHAT?</b></label>
  <input type="text" placeholder="What you think can do as program" name="what" required>

   <label for="skills"><b>YOUR SKILLS :</b></label>
   <input type="checkbox" name="skills[]" value="php">PHP
   <input type="checkbox" name="skills[]" value="java">Java
   <input type="checkbox" name="skills[]" value="DS">Data Structure
   <input type="checkbox" name="skills[]" value="c'languge">C'language
   <input type="checkbox" name="skills[]" value="os">OS
   <input type="checkbox" name="skills[]" value="networking">Networking

<input   type="submit" name="submit" value="Submit" class="registerbtn" onclick="validate()">
    
  </div>
  
  
</form>

</body>
</html>
