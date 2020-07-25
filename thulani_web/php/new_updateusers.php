<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    $fname = $_POST['User_Name'];
    $address = $_POST['User_Address'];
    $mobileno = $_POST['User_phonenum'];
    $query = "UPDATE `users` SET `User_Name`='".$fname."',`User_Address`='".$address."',`User_phonenum`='".$mobileno."' WHERE `User_Id` ='".$valueToSearch."'";
    filter($query);
    $query1 = "SELECT * FROM `users`";
    $search_result = filter($query1);

}
 else {
    $query = "SELECT * FROM `users`";
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

            Update Users

          </div>

      </div>

      <div class="formsection">

        <form action="" method="post" name="updateform">

          <input type="text" name="valueToSearch" class="newform top" placeholder="User ID Number" required><br>

          <input type="text" name="name" class="newform" placeholder="New First Name" required></br>

          
          <input type="text" name="address" class="newform" placeholder="New Address" required></br>

          <input type="text" name="user_phonenumber" class="newform" placeholder="New Phone Number" required></br>

          <input type="reset" name="cancel" value="Cancel" class="search newsearch1">

          <input type="submit" name="search" value="Update" class="search newsearch2">

        </form>

      </div>

      <div class="section02">

        <table>

            <tr>
                <th>
                  User ID
                </th>

                <th>
                Name
                </th>
				<th>
                Address
                </th>

                <th>
                  Phone No.
                </th>

                <th>
                  Email Address
                </th>

            
            </tr>


            <?php while($row = mysqli_fetch_array($search_result)):?>
            <tr>

                <td>
                  <?php echo $row['User_Id'];?>
                </td>

                <td>
                  <?php echo $row['User_Name'];?>
                </td>

               
                <td>
                  <?php echo $row['User_Address'];?>
                </td>

                <td>
                  <?php echo $row['User_phonenum'];?>
                </td>

                <td>
                  <?php echo $row['User_email'];?>
                </td>

              
            </tr>

            <?php endwhile;?>

        </table>

      </div>

    </body>

</html>
