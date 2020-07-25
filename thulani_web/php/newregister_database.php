<?php
if(isset($_POST["Register"])){
if(!empty($_POST['User_Name']) && !empty($_POST['User_Address']) && !empty($_POST['User_phonenum']) && !empty($_POST['User_email']) && !empty($_POST['User_password'])){
$name = $_POST['User_Name'];
$address = $_POST['User_Address'];
$user_phonenumber = $_POST['User_phonenum'];
$user_email = $_POST['User_email'];
$password = $_POST['User_password'];
$conn = new mysqli('localhost', 'root', 'taxiadminthul') or die (mysqli_error()); // DB Connection
$db = mysqli_select_db($conn, 'get taxi') or die("DB Error"); // Select DB from database
//Selecting Database
$query = mysqli_query($conn, "SELECT * FROM users WHERE user_email='".$User_email."'");
$numrows = mysqli_num_rows($query);
if($numrows == 0)
{
//Insert to Mysqli Query
$sql = "INSERT INTO users(User_Name,User_Address,User_phonenum,User_Name,User_password) VALUES('$name','$address','$user_phonenumber','$user_email','$password')";
$result = mysqli_query($conn, $sql);
//Result Message

if($result){
  ?>
   <script type="text/javascript">
   window.location="book_online.php";
   </script>
  <?php
}
else
{
echo "Failure!";
}
}
else
{
  ?>
  <script>alert("This Email address already exists! Please try again");</script>
  <?php
}
}
else
{
?>
<!--Javascript Alert -->
<script>alert('Required all fields');</script>
<?php
}
}
?>