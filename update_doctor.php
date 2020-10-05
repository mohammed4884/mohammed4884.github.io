<!DOCTYPE html>
<html lang="en" >

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css\fontawesome\css\all.css">

    <title>Update Data</title>
    <style>
      label{
        color: #0dcda5;
        font-size: 17px;
        font-weight: 600;
        font-family: lato,sans-serif;
        
      }
    </style>
    
</head>
<body>

<nav  class="navbar navbar-expand-lg bg-light shadow navbar-light fixed-top scrolling-navbar"  >
<a class="navbar-brand" href="home.php"> 
                    <!--logo of Website-->
                    <img  src="/Najaf Patient Access Project/Logo/Repeat Grid 1.png" width="250px"></a>
</nav> 

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
$id=$_GET['GetID'];
$show_query="SELECT * FROM doctor_record 
WHERE id='".$id."'";
$update=mysqli_query($conn,$show_query);
while($DataRows=mysqli_fetch_array($update)){
  $id=$DataRows['id'];
  $user=$DataRows['user'];
  $email=$DataRows['email'];
  $department=$DataRows['department'];
 
}



?>

<div class="container " style="margin-top: 110px; display: flex; text-align: center; justify-content: center;">
<form class="md-form " action="edit_doctor.php?ID=<?php echo $id ?>" method="post" style="color: #000000; width:50%;" >

<label  for="Name">Full name</label>
<input type="text"value="<?php echo $user;?>" name="user" id="Name" class="form-control" style="background-color:#f9f9f9 ;border-radius: 20px; margin-bottom: 15px;" required>
<label for="Email">E-mail</label>
<input type="email" name="email" id="Email" value="<?php echo $email;?>" class="form-control" placeholder="name@example.com" style="background-color:#f9f9f9 ;border-radius: 20px; margin-bottom: 15px;" required>
<label for="select"> Select Department</label>
<select id="select" name="department" value="<?php echo $department;?>" class="form-control" style="background-color:#f9f9f9 ; border-radius: 20px; margin-bottom: 15px;" required data-error="Please select one option.">
<option>General Health</option>
<option>Cardiology</option>
<option>Dental</option>
<option>Medical Research</option>
</select>

<div class=" d-inline-block  mb-n3">
    <button class="btn btn-outline-dark btn-rounded btn-block my-3" name="update" type="submit">Update

</button>
</div>

</div>

</form>
</div>


     <!--Back To Top-->
     <button  onclick="topFunction()" id="myBtn" title="Return to top">
          <span class="mat-button-wrapper"><svg _ngcontent-grc-c16="" height="26" viewBox="0 0 24 24" width="26" xmlns="http://www.w3.org/2000/svg">
               <path _ngcontent-grc-c16="" d="M0 0h24v24H0V0z" fill="none"></path><path _ngcontent-grc-c16="" d="M4 12l1.41 1.41L11 7.83V20h2V7.83l5.58 5.59L20 12l-8-8-8 8z">

               </path></svg></span>
              </button>
   
              <footer id="footer_w" class="footer">
  <div class="footer-left col-md-4 col-sm-6">
    <p class="about">
      <span> About the company</span> Ut congue augue non tellus bibendum, in varius tellus condimentum. In scelerisque nibh tortor, sed rhoncus odio condimentum in. Sed sed est ut sapien ultrices eleifend. Integer tellus est, vehicula eu lectus tincidunt,
      ultricies feugiat leo. Suspendisse tellus elit, pharetra in hendrerit ut, aliquam quis augue. Nam ut nibh mollis, tristique ante sed, viverra massa.
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
    <p class="name"> Najaf Patient Access &copy; 2020 </p>
  </div>
</footer>
              <script src="js/jquery-3.5.1.min.js"></script>
              <script src="js/jquery-3.5.1.slim.min.js"></script>
              <script src="js/bootstrap.min.js"></script>
              <script src="js/js.js"></script>
</body>
</html>
