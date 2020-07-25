<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    $query = "DELETE FROM `users` WHERE `User_Id`='".$valueToSearch."'";
    filterTable($query);
    $query1 = "SELECT * FROM `users`";
    $search_result = filterTable($query1);
}
 else {
    $query = "SELECT * FROM `users`";
    $search_result = filterTable($query);
}

function filterTable($query)
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

            Delete Users

          </div>

          <div class="left">

          <form action="" name="form" method="post">

            <input type="text" name="valueToSearch" class="valueToSearch" placeholder="User ID Number">

            <input type="submit" name="search" class="search" value="Delete">

          </form>

          </div>

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