
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
    $delete_record_id=$_GET['Delete'];
    
    $delete_query="DELETE FROM appo_record
    WHERE id='$delete_record_id'";
    $Execute=mysqli_query($conn,$delete_query);
    if($Execute){
        echo'<script>window.open("welcome.php","_self")</script>';

    }
    
    ?>  
    