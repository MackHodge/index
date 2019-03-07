<?php 
include 'server.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create Account</title>

	
<script type="text/javascript"  src="http://code.jquery.com/jquery-2.1.1.min.js" >

</script>
<style>
.error {
color: #FF0000;
}

.logo {
	cursor :pointer;
  display: flex;
  align-items: center;
  justify-content: center;

}
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #c8a7ef;
  color: white;
  padding: 10px 15px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
 
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: center;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
  text-align: center;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

  
	<div class="logo">
<a href="../layout/masterpage.php">    
	<img   src="images/HadouLogo.png">
</a>
</div>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" style="border:1px solid #ccc">
  
  <div class="container">
    <h1>Create Account</h1>

    <hr>
    <label for="UserNameform"><b>Name</b></label>
    <input type="text" name="username" value="<?php echo $name;?>">
  <span class="error"> <?php echo $nameErr;?></span>
  <br><br>
     <label for="UserNameform"><b>Last Name</b></label>
    <input type="text" name="lastname" value="<?php echo $lastname;?>">
  <span class="error"> <?php echo $lastnameErr;?></span>
  <br><br>
    <label><b>Email</b></label>
    <input type="text"  name="email" value="<?php echo $email;?>" required>
    <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
    <label><b>Password</b></label>
    <input type="password"  name="password" required>

    <label ><b>Repeat Password</b></label>
    <input type="password" placeholder="" name="rpassword" required>
    
  
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
     
      <button type="submit" class="signupbtn" name="reg_user">Create Account</button>
    </div>
  </div>
</form>

</body>
</html>