<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="r.css">

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
    <h3>Please fill in this form to create an account.</h3>
    <hr>

  <div class="x">
    <b>User Name:</b>
    <input type="text" placeholder="User Name" name="username" required size="20%"><br>
</div>

  <div class="x">
    <b>Email</b>
    <input type="text" placeholder="Enter Email" name="email" required>
</div>
  <div class="x">
   <b>Password</b>
    <input  type="password" placeholder="password" name="password" class="input-field" id="password" ><br>
</div>

  <div class="x">
  <b>Repeat Password</b>
    <input  type="password" placeholder="confirm pass" name="confirm_pass" class="input-field" id="confirm_pass"><br>
   
</div>

  <div class="x">
    <h1>PERSONAL INFORMATION</h1>
    <b>FIRST NAME</b>
    <input type="text" placeholder="FIRST NAME" name="fname" required>
</div>

  <div class="x">
   <b>LAST NAME</b>
    <input type="text" placeholder="LAST NAME" name="lname" required>
</div>

  <div class="x">
   <b>DATE_OF_BIRTH</b>
    <input type="number" placeholder="DATE_OF_BIRTH" name="dob" required>
</div>

  <div class="x">
    <b>GENDER :</b>
   <input type="radio" name="gender" value="male"> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other<br>
</div>

  <div class="x">
    <label for="adress"><b>ADDRESS :</b></label>
    <textarea placeholder="address" name="address" >
   </textarea>
 </div>

  <div class="x">
  <b>STATUS</b>
    <input type="radio" name="status" value="married"> married
  <input type="radio" name="status" value="unmarried"> unmarried
  <input type="radio" name="status" value="divorced"> divorced
</div>
  <div class="x">
 <b>PHONE NUMBER</b>
  <input type="number" placeholder="PHONE NUMBER" name="phoneno" required>
</div>

  <div class="x">
<b>ONE WORD</b>
  <input type="text" placeholder="Describe yourself in one word " name="word" required><br>
</div>

  <div class="x">
  <b>HOBY</b>
  <input type="text" placeholder="HOBY" name="hoby" required>
</div>

  <div class="x">
   <b>ABOUT YOU</b>
  <input type="text" placeholder="ABOUT YOU" name="about_you" required><br>
</div>

  <div class="x">
   <b>WHAT?</b>
  <input type="text" placeholder="What you think can do as program" name="what" required>
</div>
  <div class="x">
  <b>YOUR SKILLS :</b>
   <input type="checkbox" name="skills[]" value="php">PHP
   <input type="checkbox" name="skills[]" value="java">Java
   <input type="checkbox" name="skills[]" value="DS">Data Structure
   <input type="checkbox" name="skills[]" value="c'languge">C'language
   <input type="checkbox" name="skills[]" value="os">OS
   <input type="checkbox" name="skills[]" value="networking">Networking
</div>

<input   type="submit" name="submit" value="Submit" class="registerbtn" onclick="validate()">
    
  </div>
  
  
</form>

</body>
</html>
