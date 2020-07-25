<title>booking_withoutreg</title>
      <link rel="stylesheet" type="text/css" href="../css/stylebooking_withoutreg.css">
  </head>

<body>
<section class="intro">
<div class="logo"><img src="../images/GetTaxi_Logo.jpeg"></div>

<section class="nav">
	<ul>
		<li><a href="new_home.php">Home</a></li>
		<li><a href="new_home.php #contacts">Contact Us</a></li>
		<li><a href="book_online.php"><div class="urgent_booking">urgent Booking</div></a></li>
		<li><a href="book_now.php">Register</a></li>
	</ul>
</section>

<section class="form_withoutreg">
	<form method="POST" action="booking_database.php">
		<div name="text">
		<input type="text" name="name" placeholder="Name"></br>
		<input type="tel" name="user_phonenumber" placeholder="Phone Number"></br>
		<div class="date"><p1>Date:</p1></div>
		
		<input type="date" name="pickUpDate" placeholder="Pick Up Date"></br>
		<div class="time">
		<p2>Time:</p2></div>
		
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
		<input type="submit" name="submit" value="I Am Done!!" class="booking_btn"/>
	
	</form>
		