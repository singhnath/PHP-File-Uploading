
<?php 
     $conn = mysqli_connect('localhost' , 'root' ,'aaa@123' , 'dbtuts');
     if($conn->connect_error)
     {
       echo "connection error";
     }
?>