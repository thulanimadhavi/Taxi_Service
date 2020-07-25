<?php

if(!empty($_POST['Booking_date']) && !empty($_POST['Booking_time']) && !empty($_POST['pickUp']) && !empty($_POST['Drop_adress']) && !empty($_POST['Vehicle_type'])){

$pickUpDate = $_POST['Booking_date'];
$PickUpTime= $_POST['Booking_time'];
$pickUpLocation = $_POST['PickUp'];
$dropLocation = $_POST['Drop_address'];
$vehicle = $_POST['vehicle'];
$conn = new mysqli(' 127.0.0.1', 'root', 'taxiadminthul') or die (mysqli_error()); // DB Connection
$db = mysqli_select_db($conn, 'get taxi') or die("DB Error"); // Select DB from database
//Selecting Database
$query = mysqli_query($conn, "SELECT * FROM booking");
$numrows = mysqli_num_rows($query);

  //Insert to Mysqli Query
  $sql = "INSERT INTO booking(User_id,Booking_date,Booking_time,pickUp,Drop_address,Vehicle_type) VALUES('$id','$pickUpDate','$PickUpTime','$pickUpLocation','$dropLocation','$vehicle')";
  $result = mysqli_query($conn, $sql);

  if($result){
    ?>
     <script type="text/javascript">
     window.location="new_booked.php";
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
<script>alert('Required all fields');</script>
<?php
}
?>
