<?php
    include('connection.php');
    // error_reporting(0);
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
        RollNo <input type="text" name="rollno"  value=""><br><br>
        Student <input type="text" name="studentname" value=""><br><br>
        Class <input type="text" name="class" value="" ><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    
        if($_GET['submit']){
            $rn = $_GET['rollno'];
            $sn = $_GET['studentname'];
            $cl = $_GET['class'];
            if($rn!= "" && $sn!="" && $cl!= "")
            {
                $QUERY = "INSERT INTO STUDENT VALUES ('$rn','$sn','$cl')";
                $result = mysqli_query($conn,$QUERY);
                if($result){
                    echo "Data successfully added";
                }else{
                    echo "Please fill the form again";
                }
            }
        }
     ?>
</body>
</html>