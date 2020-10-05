<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href="https://fonts.googleapis.com/css2?family=Lato:wght@700;900&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css\fontawesome\css\all.css">

		<title>Najaf Patient Access</title>
	</head>

	<body>
	
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db="najaf_patient_access";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password,$db);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
   
    ?> 
			<nav class="navbar navbar-expand-lg bg-light shadow navbar-light fixed-top scrolling-navbar">

				<button class=" navbar-toggler   custom-toggler " type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span  class="navbar-toggler-icon"></span>
      </button>
				<a class="navbar-brand" href="home.php">
					<!--logo of Website-->
					<img src="/Najaf Patient Access Project/Logo/Repeat Grid 1.png" width="250px"></a>
				<div class="collapse navbar-collapse  " id="menu">
					<ul class="nav navbar-nav  ml-auto  nav-tabs " style="padding-right: 2em;">
						<li class="nav-item active smoth" style="padding-left:2em;"><a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
            </a></li>
						<li class="nav-item" style="padding-left:2em;"><a class="nav-link" href="#about">About us</a></li>
						<li class="nav-item" style="padding-left:2em;"><a class="nav-link" href="#team">Doctors</a></li>

					</ul>
					<div class="nav-item" style="padding-left:1em;padding-right: 1em; "><a href="" data-toggle="modal" data-target="#ModalForm" class="nav-link btn btn-outline-dark" role="button">
               Login</a></div>
				</div>
				<div class="nav-item" style="padding-left:1em;padding-right: 2em; "><a href="#appointment" class="nav-link btn btn-outline-dark" role="button">
                 Appointment</a></div>
				</div>

			</nav>
			<!----Login -->

			<section>
				<?php
$error = '';
//Variable to Store error message;
if (isset($_POST['submit'])) {
    if (empty($_POST['user']) || empty($_POST['pass'])) {
        $error = "Username or Password is Invalid";
    } else {
//Define $user and $pass
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $query = mysqli_query($conn, "SELECT * FROM doctor_record WHERE pass='$pass' AND user='$user'");
        $rows = mysqli_num_rows($query);

        if ($rows == 1) {
            header("Location: welcome.php"); // Redirecting to other page
        } else {
            $error = "Username of Password is Invalid";
        }

    }

}
$error = '';
//Variable to Store error message;
if (isset($_POST['submit'])) {
    if (empty($_POST['user']) || empty($_POST['pass'])) {
        $error = "Username or Password is Invalid";
    } else {
//Define $user and $pass
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $query = mysqli_query($conn, "SELECT * FROM admins_record WHERE admin_pass='$pass' AND admin_name='$user'");
        $rows = mysqli_num_rows($query);

        if ($rows == 1) {
            header("Location: admin.php"); // Redirecting to other page
        } else {
            $error = "Username of Password is Invalid";
        }

    }

}

?>
					<div class="modal" id="ModalForm">
						<div class="login-box">
							<div class=" modal-header" style="background-color:  rgb(68, 177, 132); padding-left: 35%;">
								<img src="images/login.png" alt="" width="100px">
							</div>
							<form method="post" action="">
								<div class="user-box pt-3">
									<input type="text" name="user" required>
									<label class=" pt-4">Username</label>
								</div>
								<div class="user-box">
									<input type="password" name="pass" required>
									<label>Password</label>
								</div>

								<button type="submit" name="submit" id="loginbtn" class="btn btn-outline-dark">
           Submit
</button>

								<button id="cancelbtn" type="cancel" class="btn btn-outline-dark" data-dismiss="modal">
              Cancel
</button>

							</form>
						</div>
					</div>
			</section>
			<!--Login End-->
			<!--Home-->
			<div id="carousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel" data-slide-to="0" class="active"></li>
					<li data-target="#carousel" data-slide-to="1" class=""></li>
					<li data-target="#carousel" data-slide-to="2" class=""></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="/Najaf Patient Access Project/images/1.jpg" alt="First slide">
						<div class="carousel-caption ">
							<h3>Let's make your life happier</h3>
							<h1>Healthy Living</h1>
							<a id="homebtn" href="#appointment" class="btn btn-outline-dark" role="button">Appointment</a>
						</div>
					</div>
					<div class="carousel-item">
						<img class=" d-block w-100" src="/Najaf Patient Access Project/images/2.jpg" alt="Second slide">
						<div class="carousel-caption">
							<h3>Take control of your healthcare</h3>
							<h1>New Lifestyle</h1>
							<a id="homebtn" href="#appointment" class="btn btn-outline-dark" role="button">Appointment</a>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="/Najaf Patient Access Project/images/slider1.jpg" alt="Third slide">
						<div class="carousel-caption">
							<h3>Smarter Way To Manage Your Healthcare</h3>
							<h1>Your Health Benefits</h1>
							<a id="homebtn" href="#appointment" class="btn btn-outline-dark" role="button">Appointment</a>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
      </a>
				<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
      </a>
			</div>
			<!--About-->
			<section id="about">
				<div class="container">
					<div class="row">

						<div class="col-md-6 col-sm-6">
							<div>
								<h2> Welcome To <img src="/Najaf Patient Access Project/images/NAJAF PATIENT ACCESS.png" class=" img-responsive" width="353px" alt="Najaf Patient Access"> </h2>
								<div class="wow fadeInUp" data-wow-delay="0.8s">
									<p>Your details and information are protected by the highest standards of online security, so all you need to worry about is what to do with the spare time you've earnt.</p>

								</div>
								<figure class="profile wow fadeInUp" data-wow-delay="1s">
									<img src="/Najaf Patient Access Project/images/author-image.jpg" class="img-responsive" alt="">
									<figcaption>
										<h3>Dr. Neil Jackson</h3>
										<p>General Principal</p>
									</figcaption>
								</figure>
							</div>
						</div>

					</div>
				</div>
			</section>

			<!-- TEAM -->
			<section id="team">

				<div class="row">
					<div class="col-md-12 col-sm-6">
						<h1 class=" font-weight-bold text-center">Our Doctors</h1>
					</div>
					<div class="col-md-4 col-sm-6 ">
						<div class="team-thumb">
							<img src="/Najaf Patient Access Project/images/team-image1.jpg" class="img-responsive" alt="">

							<div class="team-info">
								<h3>Nate Baston</h3>
								<p>General Principal</p>
								<div class="team-contact-info">
									<p><i class="fa fa-phone"></i> 010-020-0120</p>
									<p><i class="fa fa-envelope-o"></i> <a href="#">general@company.com</a></p>
								</div>

							</div>

						</div>
					</div>

					<div class="col-md-4 col-sm-6">
						<div class="team-thumb ">
							<img src="/Najaf Patient Access Project/images/team-image2.jpg" class="img-responsive" alt="">

							<div class="team-info">
								<h3>Jason Stewart</h3>
								<p>Pregnancy</p>
								<div class="team-contact-info">
									<p><i class="fa fa-phone"></i> 010-070-0170</p>
									<p><i class="fa fa-envelope-o"></i> <a href="#">pregnancy@company.com</a></p>
								</div>

							</div>

						</div>
					</div>

					<div class="col-md-4 col-sm-6">
						<div class="team-thumb">
							<img src="/Najaf Patient Access Project/images/team-image3.jpg" class="img-responsive" alt="">

							<div class="team-info">
								<h3>Miasha Nakahara</h3>
								<p>Cardiology</p>
								<div class="team-contact-info">
									<p><i class="fa fa-phone"></i> 010-040-0140</p>
									<p><i class="fa fa-envelope-o"></i> <a href="#">cardio@company.com</a></p>
								</div>

							</div>

						</div>
					</div>

				</div>

			</section>

			<!-- MAKE AN APPOINTMENT -->
			<?php

if (isset($_POST["Submit"])) {
    $fname = $_POST["fname"];
    $email = $_POST["email"];
    $b_date = $_POST["b_date"];
    $m_phone = $_POST["m_phone"];
    $dept = $_POST["dept"];
    $a_message = $_POST["a_message"];

    $sql = "INSERT INTO appo_record(fname,email,b_date,m_phone,dept,a_message)VALUES ('$fname','$email','$b_date','$m_phone','$dept','$a_message')";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();

}

?>

				<section id="appointment">

					<div class="container" style="margin-top: 2em;">

						<div class="row">
							<img src="images/appointment-image.jpg" alt="" width="50%">
							<div class="col-md-6 col-sm-6">
								<div class="card " style="left: 20%; margin-top: 3em;">

									<h5 class="card-header  text-center py-4" style="background-color: rgb(68, 177, 132);">
										<strong>Make An Appointment</strong>
									</h5>

									<div class="card-body px-lg-4 pt-3 ">

										<form class="md-form" method="post" style="color: #000000;" action="">

											<label for="Name">Full name</label>
											<input type="text" placeholder="Your Name" name="fname" id="Name" class="form-control" style="background-color:#f9f9f9 ;border-radius: 20px; margin-bottom: 15px;" required>

											<label for="Email">E-mail</label>
											<input type="email" name="email" id="Email" class="form-control" placeholder="name@example.com" style="background-color:#f9f9f9 ;border-radius: 20px; margin-bottom: 15px;" required>

											<label for="date"> Select  Date</label>
											<input type="date" name="b_date" id="date" class="form-control" style="background-color:#f9f9f9 ; border-radius: 20px; margin-bottom: 15px;" required>

											<label for="select"> Select Department</label>
											<select id="select" name="dept" class="form-control" style="background-color:#f9f9f9 ; border-radius: 20px; margin-bottom: 15px;" required data-error="Please select one option.">
                                   <option>General Health</option>
                                   <option>Cardiology</option>
                                   <option>Dental</option>
                                   <option>Medical Research</option>
                    </select>

											<label for="Phone">Phone number</label>
											<input type="tel" name="m_phone" placeholder="07812345678" id="Phone" class="form-control" style="background-color:#f9f9f9 ; border-radius: 20px; margin-bottom: 15px;" required pattern="[0-9]{11}">

											<label for=" message"> Message </label>
											<textarea class=" form-control" name="a_message" rows="2" id="message" style="background-color:#f9f9f9 ; border-radius: 20px; margin-bottom: 15px;">
                               </textarea>

											<div class=" d-inline-block  mb-n3" style="margin-left: 10em; ">
												<button class="btn btn-outline-dark btn-rounded btn-block my-3" name="Submit" type="submit" data-toggle="modal" data-target="#myModal">Appointment

                       </button>
											</div>

									</div>

									</form>
								</div>
							</div>
						</div>
					</div>
					</div>

				</section>

				<!--Back To Top-->
				<button onclick="topFunction()" id="myBtn" title="Return to top">
          <span class="mat-button-wrapper"><svg _ngcontent-grc-c16="" height="26" viewBox="0 0 24 24" width="26" xmlns="http://www.w3.org/2000/svg">
               <path _ngcontent-grc-c16="" d="M0 0h24v24H0V0z" fill="none"></path><path _ngcontent-grc-c16="" d="M4 12l1.41 1.41L11 7.83V20h2V7.83l5.58 5.59L20 12l-8-8-8 8z"></path></svg></span></button>

				<section>
					<footer class="footer">
						<div class="footer-left col-md-4 col-sm-6">
							<p class="about">
								<span> About the company</span>
								......
							</p>
							<div class="icons">
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-linkedin-in"></i></a>
								<a href="#"><i class="fab fa-google-plus-g"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
							</div>
						</div>
						<div class="footer-center col-md-4 col-sm-6">
							<div>
								<i class="fa fa-map-marker"></i>
								<p><span> Al Askan Street</span> Najaf, Iraq</p>
							</div>
							<div>
								<i class="fa fa-phone"></i>
								<p> (+00) 123456789</p>
							</div>
							<div>
								<i class="fa fa-envelope"></i>
								<p><a href="#"> office@company.com</a></p>
							</div>
						</div>
						<div class="footer-right col-md-4 col-sm-6">
							<img src="/Najaf Patient Access Project/images/NAJAF PATIENT ACCESS.png" alt="Logo" width="300px">
							<p class="menu">
								<a href="#"> Home</a> |
								<a href="#about"> About</a> |
								<a href="#team"> Doctors</a> |

							</p>
							<p class="name"> Najaf Patient Access &copy; 2020 </p>
						</div>
					</footer>
				</section>
				<!-- End-->

				<script src="js/jquery-3.5.1.min.js"></script>
				<script src="js/jquery-3.5.1.slim.min.js"></script>
				<script src="js/bootstrap.min.js"></script>

				<script src="js/js.js"></script>

	</body>

</html>      </div>
