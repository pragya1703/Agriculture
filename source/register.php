<?php
	include_once 'connect.php';
    // If the values are posted, insert them into the database.
	//if(isset($_POST['submit']))
    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['register'])){
        $username = $_POST['username'];
	$email = $_POST['email'];
        $password = $_POST['password'];
 
        $query = "INSERT INTO `user` (username, password, email) VALUES ('$username', '$password', '$email')";
        $result = mysql_query($query);
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }
    }
    ?>
	<?php
session_start();
	include_once 'connect.php';
    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['login'])){
        $username = $_POST['username'];
	$email = $_POST['email'];
        $password = $_POST['password'];
 
         $query1 = "Select * from `user` where username='$username' and password='$password'";
        $result1 = mysql_query( $query1);
echo $count = mysql_num_rows($result1);
if ($count == 1){
//$_SESSION['username'] = $username;
//echo "<a href='index.php'>index</a>";
header('location: index.php');
//echo $count;
}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
$fmsg = "Invalid Login Credentials.";
}
    }
    ?>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

<link rel="stylesheet" href="styles.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	body {
	background:none repeat scroll 0 0 #d3d3d3;
	
	background-image:url(contact-bg.jpg);
	
	font-size:100%;
  font-family:"Open Sans",Arial,sans-serif;
  color:#D59429;
  }
	.dear {
		align="center";

	      }
	.mytext {
    width: 400px;
    height:40px;
	font-size: 16px;
	background:none;
	box sizing:border box;
}
	.gear{
		color:#ffffff;
		margin-top:40px;
		}
	.mytext1{
		 background-color: #42444e; /* Green */
    border-radius:6px;
    color: #2db34a;
    padding: 10px 32px;
    text-align: center;
    text-decoration: none;
    display:inline-block;
    font-size: 30px;
   
		}
	.mytext2{
		width: 20px;
                height:10px;

		}
		.mytext3{
		 background-color: #42444e; /* Green */
    border-radius:6px;
    color: #2db34a;
	font-size:30px;
    padding: 10px 32px;
    text-align: center;
    text-decoration: none;
    display:inline-block;
    
	margin-left:40px;
		}	a:hover{
		color:#ff7b29;

}
.h11
{
	color:#ff7b29;
	font-size:50px;
	margin-top:25px;
}
.hv:hover
  {
  color:#ff7b29;
  }
.hv
  {
  color:white;
  font-size:20px;
	margin-left:70px;
  }
	</style>
</head>
<div class="dear">
<center>
      <form class="form-signin" method="POST">
        <p class="h11"><u>Please  Register</u></p>
		<br/><br/><br/>
        <div class="input-group">
	  
	  <input type="text" name="username" class="mytext" placeholder="Username" required>
	</div>
        <br/><br/>
        <input type="email" name="email" id="inputEmail" class="mytext" placeholder="Email address" required autofocus>
        <br/><br/><br/>
        <input type="password" name="password" id="inputPassword" class="mytext" placeholder="Password" required>
		<br/><br/><br/><br/><br/>
        <button class="mytext1" type="submit" name="register" value="register">Register</button>
		
        <button class="mytext3" type="submit" name="login" value="login">Login</button>
		      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
      </form>
	  </center>
</div>

</html>