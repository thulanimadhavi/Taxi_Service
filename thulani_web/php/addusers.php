<?php

if(isset($_POST['search']))
{	$bookid = $_POST['Booking_Id'];
    $date = $_POST['Booking_date'];
    $time = $_POST['Booking_time'];
    $from = $_POST['Pick_up'];
	$to = $_POST['Drop_address'];
	$vehicle = $_POST['Vehicle_type'];
	
    $query = "INSERT INTO urgent_booking(Booking_Id,Booking_date,Booking_time,Pick_up,Drop_address,Vehicle_type) VALUES ('$bookid','$date','$time','$from','$to','$vehicle')";
    filter($query);
    $query1 = "SELECT * FROM `urgent_booking`";
    $search_result = filter($query1);

}
 else {
    $query = "SELECT * FROM `urgent_booking`";
    $search_result = filter($query);
}

function filter($query)
{
    $connect = mysqli_connect("localhost", "root", "taxiadminthul", "get taxi");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<html>
    <head>

		<title>GET TAXI</title>

    <link rel="stylesheet" type="text/css" href="../css/stylecustomers.css">

    </head>

    <body>

      <div class="section01">

          <div class="para1">

            Add Users

          </div>

      </div>

      <div class="formsection">

        <form action="" method="post" name="updateform">

          <input type="text" name="valueToSearch" class="newform top" placeholder="Booking ID Number" required><br>

          <input type="date" name="Booking_date" class="newform" placeholder="Booking Date " required></br>

          
          <input type="time" name="Booking_time" class="newform" placeholder="Booking Time" required></br>

          <input type="text" name="Pick_up" class="newform" placeholder="Pick Up Address" required></br>
		  
		  <input type="text" name="Drop_address" class="newform" placeholder="Drop Address" required></br>
		  
		  <input type="text" name="Vehicle_type" class="newform" placeholder="Vehicle Type" required></br>

          <input type="submit" name="search" value="Add" class="search newsearch2">

        </form>

      </div>

      <div class="section02">

        <table>

            <tr>
                <th>
                  Booking ID
                </th>

                <th>
                Booking Date
                </th>
				<th>
                Booking Time
                </th>

                <th>
                  Pick Up Address
                </th>

                <th>
                  Drop Address
                </th>
				
				
				 <th>
                 Vehicle Type
                </th>
            
            </tr>


            <?php while($row = mysqli_fetch_array($search_result)):?>
            <tr>

                <td>
                  <?php echo $row['Booking_Id'];?>
                </td>

                <td>
                  <?php echo $row['Booking_date'];?>
                </td>

               
                <td>
                  <?php echo $row['Booking_time'];?>
                </td>

                <td>
                  <?php echo $row['Pick_up'];?>
                </td>

                <td>
                  <?php echo $row['Drop_address'];?>
                </td>
				 <td>
                  <?php echo $row['Vehicle_type'];?>
                </td>

              
            </tr>

            <?php endwhile;?>

        </table>

      </div>

    </body>

</html>
