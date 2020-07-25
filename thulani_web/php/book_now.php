 <?php
 require 'db.php';
 session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <title>Book_now</title>
      <link rel="stylesheet" type="text/css" href="../css/stylebook_now.css">
  </head>
  <?php
  if($_SERVER['REQUEST_METHOD']=='POST'){
if(isset($_POST["Register"])){
	require 'booknow_database.php';
}
elseif(isset($_POST["Log_in"])){
	require 'booknow_database.php';
}
?>

<body>
<section class="intro">

<div class="logo"><img src="../images/GetTaxi_Logo.jpeg"></div>

<section class="nav">
	<ul>
		<li><a href="new_home.php">Home</a></li>
		<li><a href="new_home.php #who we are">Who we are</a></li>
		<li><a href="new_home.php #services">Services</a></li>
		<li><a href="new_home.php #contacts">Contact Us</a></li>
		<li><a href="book_now.php"><div class="book_now">Book now</div></a></li>
	</ul>
</section>
<div class="form_login">
<h1>Returning customer</h1>
	<form method="post" action="booknow_database.php">
	<div class="text">
	<input type="text" name="user_email" placeholder="Enter Email"/></br>
	<input type="password" name="password" placeholder="Enter Password"/>
	</div>
	<input type="submit" name="Log_in" value="Log In" class="login_btn"/>
	
	</form></div>
	
	<div class="form_register">
	<h2>1<sup>st</sup> time user</h2>
	<form method="post" action="booknow_database.php">
		<div name="text">
		<input type="text" name="name" placeholder="Name"></br>
		<input type="text" name="address" placeholder="Address"></br>
		<input type="tel" name="user_phonenumber" placeholder="Phone Number"></br>
		<input type="text" name="user_email" placeholder="Email address"></br>
		<input type="password" name="password" placeholder="Password"></br>
		
		</div>
		<input type="submit" name="register_btn" value="Register" class="register_btn"/>
	   <input type="submit" name="notregister_btn" value="Continue without Registering" class="notregister_btn"/>
	</form></div>

	</section>
</body>
</html>