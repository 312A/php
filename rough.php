// include('connection.php');
    // $QUERY = "INSERT INTO STUDENT VALUES (3,'RAM','BCOM')";
    // $result = mysqli_query($conn,$QUERY);
    // $rn =$_GET['rollno'];
        // $sn = $_GET['studentname'];
        // $cl = $_GET['class'];
        // echo $rn;
        // echo $sn;
        // echo $cl;
        // $QUERY = "INSERT INTO student VALUES ('$rn','$sn','$cl')";
        // $result = mysqli_query($conn,$QUERY);
        // if($result){
        //     echo "Data successully inserted";
        // }

        <!-- include('connection.php');
    error_reporting(0);
    $QUERY = "SELECT * FROM STUDENT WHERE CLASS='MCA' ";
    $data  = mysqli_query($conn,$QUERY);
    $result = mysqli_num_rows($data);
    $tabledata = mysqli_fetch_assoc($data);
    
   // echo " ". $result;
    if($result!=0){
        $a=4;
        while(a>0){
            echo "Hello World";
            $a--;
        }
        // echo $tabledata['rollno']. " ".$tabledata['name'] ." " .$tabledata['class'] ;
        // echo "Database has records";
    }else{
        echo "Record not found";
    }         -->

    <!-- // echo  $_GET['rn'];
    // echo  $_GET['sn'];
    // echo  $_GET['cl']; -->