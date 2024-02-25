
    <!--  echo  $_GET['rn'];
 echo  $_GET['sn'];
     echo  $_GET['cl']; -->




<?php
    include('connection.php');
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert into Database</title>
</head>
<body>
    <form action="" method="GET">
        RollNo <input type="text" name="rollno"  value="<?php echo  $_GET['rn']; ?>"><br><br>
        Student <input type="text" name="studentname" value="<?php echo  $_GET['sn'];?>"><br><br>
        Class <input type="text" name="class" value="<?php echo  $_GET['cl'];?>"><br><br>
        <input type="submit" name="submit" value="UPDATE">
    </form>
    <?php
    
        if($_GET['submit']){
            $rollno = $_GET['rollno'];
            $sname = $_GET['studentname'];
            $class = $_GET['class'];
            
            $query ="UPDATE STUDENT SET NAME ='$sname' , CLASS='$class' WHERE ROLLNO='$rollno'  ";
            $data = mysqli_query($conn,$query);
            if($data){
                echo "Data Updated Successfully <a href='display.php'>See Updated List</a>";
            }else{
                echo "Data not Updated";
            }
        }
     ?>
</body>
</html>