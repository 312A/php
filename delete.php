<?php
    include('connection.php');
    $rollno =$_GET['rn'];
    $QUERY= "DELETE FROM STUDENT WHERE ROLLNO=' $rollno '";
    $data = mysqli_query($conn,$QUERY);
    if($data){
        echo "<script>alert('data deleted Successfully');</script>";
        echo "Data deleted succefully";
        ?>
    <meta   HTTP-EQUIV="Refresh" content="0"; URL=http://localhost/php/display.php">
        <?php
    }else{
        echo "data not deleted";
    }
?>