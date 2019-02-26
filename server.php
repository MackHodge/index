<?php 
  session_start();
  
$host ='localhost' ;
$user ='root';
$pass= '1234'; 
$dbname ='signup'; 

  $nameErr = $emailErr = "" ; 
  $name = $email = "" ; 
$errors = array(); 


//connect to database 
$conn = mysqli_connect($host,$user,$pass,$dbname);
if($conn){
echo "Connected to signup";
}

//register user *
if(isset($_POST['reg_user'])){
  //get user inputs

  $user_name = mysqli_real_escape_string($conn,$_POST['username']) ;
  $user_Email = mysqli_real_escape_string($conn,$_POST['email']);
  $user_password = mysqli_real_escape_string($conn,$_POST['password']);
  $reapeat_pass = mysqli_real_escape_string($conn,$_POST['rpassword']);


 

  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

  if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if (empty($_POST["username"])) {

      $nameErr = "errors field is required" ;
    }else {
      $name = test_input($_POST["username"]);
      if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $nameErr = "Only letter and white space allowed" ;
      }
    }


   if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       // $emailErr = "Invalid email format"; 
        array_push($errors,"Sorry, $user_name the email you entered is not correct ") ; 
        print_r($errors);

      }
    }

      //form validation
  if ($user_password != $reapeat_pass ){
    array_push($errors,"Passwords do not match"); 
      print_r($errors);
  }

}

//rigister user if there are no errors in the form 
      if(count($errors) == 0){
        $Enc_Passwords = md5($user_password); //encrypt the password before saving in the database

      $sql = "INSERT INTO users2 (username , lastname ,email ) VALUES ('$user_name' , '$user_Email' ,'$user_password' )" ; 
        mysqli_query($conn,$sql);
        $_SESSION['username'] = $user_name;
        $_SESSION['success'] = "You are now logged in" ; 
        print_r($_SESSION['success']) ;

        //header('location: index.php');
      }
    //  $serverarr = array($_SERVER['PHP_SELF']);  print_r($serverarr);

    /*  $sql = "INSERT INTO users2 (username , lastname ,email ) VALUES ('$user_name' , '$user_Email' ,'$user_password' )" ; 


      if(mysqli_query($conn ,$sql)) {
        echo "Table updated";
      //header("location:index.php") ;
      }else{
        echo "Error ".$sql . "<br>".mysqli_error($conn) ;

          }*/
  
}

mysqli_close($conn);


  ?>