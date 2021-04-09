<!DOCTYPE html>
<html lang="en">
<head>
	<title>Create user</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<?php
    
    $user_name = "root";
    $password = "";
    $database = "Banking";
    $host_name = "localhost"; 
    $conn=mysqli_connect($host_name, $user_name, $password, $database);
  
  if(!$conn){
    die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
  }
///////////////
  
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>

<?php
  include 'navbar.php';
?>
<style>
	h2{
		color: black;
		padding: 20px 0 20px;
		font-size: 50px;
	}
</style>
<h2 class=" heading text-center">Register Form</h2>
<div>
  <div class="imgcontainer">
    <img src="img/man.jpg" alt="Avatar" class="avatar">
  </div>
  <div class="container text-center">
    <form class="" method="post">

    <label><b>Name &nbsp;&nbsp;&nbsp;</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>
    <br>
    <label><b>Email &nbsp;&nbsp;&nbsp;</b></label>
    <input type="text" placeholder="Enter Mail-id" name="email" required>
    <br>
    <label><b>Balance</b></label>
    <input type="Number" placeholder="Enter Amount to Deposit" name="balance" required>
    <br>
    <label class="check">
    <input type="checkbox" checked="checked" name="remember"> Remember me</label>

   <div class="press text-center">
    <input class="button" type="submit" value="Sign Up" name="submit"></input>
   </div> 
  </form>
  </div>
</div>  		
</body>
</html>