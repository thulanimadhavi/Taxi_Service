<title>Book_online</title>
      <link rel="stylesheet" type="text/css" href="../css/stylebook_online.css">
  </head>

<body>
<section class="intro">

<div class="logo"><img src="../images/GetTaxi_Logo.jpeg"></div>

<section class="nav">
	<ul>
		<li><a href="new_home.php">Home</a></li>
		<li><a href="new_home.php #contacts">Contact Us</a></li>
		<li><a href="book_online.php"><div class="book_online">Book Online</div></a></li>
		<li><a href="new_home.php">Log Out</a></li
	</ul>
</section>

<section class="form_bookonline">
	<form method="POST" action="booking_database.php">
		<div name="text">
		<div class="date"><p1>Date:</p1></div>
		<input type="date" name="pickUpDate" placeholder="Pick Up Date"></br>
		<div class="time">
		<p2>Time:</p2></div>
		<ul>
		<li><input type="radio" name="condition" value="Now">Now</li>
		<li><input type="radio" name="condition" value="Later">Later</li>
		</ul>
		<input type="time" name="PickUpTime" placeholder="Pick Up Time"></br>
		<div class="from"><p3>From:</p3></div>
		<input type="text" name="pickUpAddress" placeholder="Pick Up Address"></br>
		<div class="to"><p4>To:</p4></div>
		<input type="text" name="dropAdress" placeholder="Drop Address"></br>
		<div class="type"><p5>Vehicle Type</p5></div>
		<select class="form_in" name="vehicle">
		<option name="car" value="car" selected>

            Car

          </option>

          <option name="van" value="van">
           Van
          </option>
		</select>
		</div>
		<input type="submit" name="Register" value="I Am Done!!" class="booking_btn"/>
	
	</form>
	</section>
		</body>
		</html>