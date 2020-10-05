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

    if(isset($_POST['update'])){
        $id=$_GET['ID'];
        $user = $_POST["user"];
        
        $email = $_POST["email"];
        $department = $_POST["department"];
        $sql="UPDATE doctor_record SET user='".$user."', email='".$email."', department='".$department."' WHERE id='".$id."' ";
        $result=mysqli_query($conn,$sql);
        if($result){
            header("location:admin.php");
        }
        else{
            echo 'Please Check Your Query';
        }
    }
    
   
    ?> 