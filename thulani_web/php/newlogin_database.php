<?php
if(isset($_POST["submit"])){
if(!empty($_POST['user_email']) && !empty($_POST['password'])){
$user_email = $_POST['User_email'];
$password = $_POST['User_password'];
$conn = new mysqli('localhost', 'get taxi', 'taxiadminthul') or die (mysqli_error()); // DB Connection
$db = mysqli_select_db($conn, 'get taxi') or die("DB Error"); // Select DB from database
//Selecting Database
$query= mysqli_query($conn, "SELECT * FROM users WHERE user_email='".$User_email."' AND password='".$User_password."'");
$query2=mysqli_fetch_assoc($query);
	$id=$query2['User_id'];

$numrows = mysqli_num_rows($query);
if($numrows == 0)
{
  ?>
  <script>alert("Sorry! You don't have an Account. Please Sign Up befor you Log In");</script>
  <?php
}
else
{
  if($user_email==("get_taxi@gmail.com") && $password==("taxiadmin")){
  			header("location:new_adminpage.php");
  		}
  else{
  			header("location:book_online.php?id=$User_id");
  		}
}
}
else
{
?>
<!--Javascript Alert -->
<script>alert('Required all felds');</script>
<?php
}
}
?>
