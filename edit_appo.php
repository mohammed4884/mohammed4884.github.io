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
        $fname = $_POST["fname"];
        $email = $_POST["email"];
        $b_date = $_POST["b_date"];
        $m_phone = $_POST["m_phone"];
        $dept = $_POST["dept"];
        $a_message = $_POST["a_message"];
        $sql="UPDATE appo_record SET fname='".$fname."', email='".$email."', b_date='".$b_date."',m_phone='".$m_phone."', dept='".$dept."', a_message='".$a_message."' WHERE id='".$id."' ";
        $result=mysqli_query($conn,$sql);
        if($result){
            header("location:admin.php");
        }
        else{
            echo 'Please Check Your Query';
        }
    }
    
   
    ?> 