<?php
    include('connection.php');
    // error_reporting(0);
    $QUERY = "SELECT * FROM STUDENT";
    $data = mysqli_query($conn,$QUERY);
    $result = mysqli_num_rows($data);

?>
 <table border="1" cellspacing="0" cellpadding="7px">
    <tr>
        <th>Roll No</th>
        <th>Student Name</th>
        <th>Class</th>
    </tr>
<?php
   
    if($result!=0){
        while($tabledata = mysqli_fetch_assoc($data)){
           echo "<tr>
            <td>".$tabledata['rollno']."</td>
            <td>".$tabledata['name']."</td>
            <td>".$tabledata['class']."</td>
           </tr>
           ";
            // echo $tabledata['rollno']." ".$tabledata['name']." ".$tabledata['class'];
        }
    }else{
        echo "Record not found";
    }
?>
</table>