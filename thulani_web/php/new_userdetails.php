<?php

    $query = "SELECT * FROM `users`";
    $search_result = Table($query);
function Table($query)
{
    $connect = mysqli_connect("localhost", "root", "taxiadminthul", "get taxi");
    $filter = mysqli_query($connect, $query);
    return $filter;
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
            User Details
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
