
<!DOCTYPE html>
<html lang="en" >

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css\fontawesome\css\all.css">

    <title>Najaf Patient Access</title>
    <style>
caption{
  color:#0dcda5;
  font-weight: bolder;
  font-family: lato,sans-serif;
  font-size:2.5em;
  
  
}
h1{
  position: relative;
  display: inline-block;
  color:#0dcda5;
  font-weight: bolder;
  font-family: lato,sans-serif;
  margin-top:125px;
  font-size: 4em;
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
   
    ?> 
 
    <div class="container text-center">
      <h1> Hello Admin <h1>
  </div>
     <div class="container min-vh-100">
    <div class="table-responsive">
    <table class="table w " border="1" align="center" style="margin-top:10em;">
    <a style=" border-width:0; top:51%; left:10%;" class="btn d-block  position-absolute" role="button" href="insert_doctor.php">
<img src=icons/add-user.svg width="70px"></a>

        <caption class="text-center" style="caption-side: top;"> List Of Doctors </caption>
            <thead class="thead-dark">
              <tr class=" text-center">
                <th scope="col">ID</th>
                <th scope="col">Full Name</th>
                <th scope="col">E-mail</th>
                <th scope="col">Department</th>
                <th scope="col">Delete</th>
                <th scope="col">Edit</th>

              </tr>
            </thead>
            <?php
 $viewQuery="SELECT * From doctor_record";
 $Execute=mysqli_query($conn,$viewQuery);
 while($DataRows=mysqli_fetch_array($Execute)){
   $id=$DataRows['id'];
   $fname=$DataRows['user'];
   $email=$DataRows['email'];
   $department=$DataRows['department'];

 
 
            ?>
   
       <tr class=" text-center">
<td><?php echo $id; ?></td>
<td><?php echo $fname; ?></td>
<td><?php echo $email; ?></td>
<td><?php echo $department; ?></td>
<td ><a style="width:40px; border-width:0;" class="btn " role="button" href="admin_delete.php?Delete=<?php echo $id ?>">
<img src=icons/x-circle-fill.svg >
</a></td>
<td ><a style="width:40px; border-width:0;" class="btn " role="button" href="update_doctor.php?GetID=<?php echo $id ?>">
<img src=icons/edit-24px.svg>
</a></td>

</tr>
                 
<?php
 }
  ?>
</table>   
    </div> 
    </div>
   
    <div class="container min-vh-100">
    <div class="table-responsive">
    <table class="table w " border="1" align="center" style="margin-top:6em;">
        <caption class="text-center" style="caption-side: top;"> List Of Appointment </caption>
            <thead class="thead-dark">
              <tr class=" text-center">
                <th scope="col">ID</th>
                <th scope="col">Full Name</th>
                <th scope="col">E-mail</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Department</th>
                <th scope="col">Date</th>
                <th scope="col">Message</th>
                <th scope="col">Delete</th>
                <th scope="col">Edit</th>

              </tr>
            </thead>
            <?php
 $viewQuery="SELECT * From appo_record";
 $Execute=mysqli_query($conn,$viewQuery);
 while($DataRows=mysqli_fetch_array($Execute)){
   $id=$DataRows['id'];
   $fname=$DataRows['fname'];
   $email=$DataRows['email'];
   $m_Phone=$DataRows['m_phone'];
   $dept=$DataRows['dept'];
   $b_date=$DataRows['b_date'];
   $a_message=$DataRows['a_message'];
 
 
            ?>
   
       <tr class=" text-center">
<td><?php echo $id; ?></td>
<td><?php echo $fname; ?></td>
<td><?php echo $email; ?></td>
<td><?php echo $m_Phone; ?></td>
<td><?php echo $dept; ?></td>
<td><?php echo $b_date; ?></td>
<td><?php echo $a_message; ?></td>
<td ><a style="width:40px; border-width:0;" class="btn " role="button" href="admin_delete.php?Delete=<?php echo $id; ?>">
<img src=icons/x-circle-fill.svg >
</a></td>
<td ><a style="width:40px; border-width:0;" class="btn " role="button" href="update.php?GetID=<?php echo $id; ?>">
<img src=icons/edit-24px.svg>
</a></td>

</tr>
                 
<?php
 }
  ?>
</table>   
    </div> 
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