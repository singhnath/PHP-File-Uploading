<?php
include_once 'db.php';
/*    
 $conn = mysqli_connect('localhost' , 'root' ,'aaa@123' , 'dbtuts');
     if($conn->connect_error)
     {
       echo "connection error";
     }
*/
define("BASE_URL","http://localhost/php");
//include('base_path.php');


if(isset($_POST['btn-upload']))
{    
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 

 // new file size in KB
 $new_size = $file_size/1024;  
 // new file size in KB
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);


 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $sql="INSERT INTO tbl_uploads(file,type,size) VALUES('$final_file','$file_type','$new_size')";
  mysql_query($sql);
  ?>
  <script>
  alert('successfully uploaded');
        window.location.href='upload_file.php?success';
        </script>
  <?php
 }
 else
 {
  ?>
  <script>
  alert('error while uploading file');
        window.location.href='upload_file.php?fail';
        </script>
  <?php
 }
}
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>File Uploading With PHP and MySql</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
<label>File Uploading With PHP and MySql</label>
</div>
<div id="body">
 <form action="<?php echo BASE_URL;?>/upload_file.php" method="post" enctype="multipart/form-data">
 <input type="file" name="file" />
 <button type="submit" name="btn-upload">upload</button>
 </form>
    <br /><br />
    <?php
 if(isset($_GET['success']))
 {

  ?>
 
 <table width="80%" border="1" style="
    margin-top: 65px;>
    <tr>
    <th colspan="4">File Uploaded Successfully. <!-- <label><a href="index.php">upload new files...</a></label> --></th>
    </tr>
    <tr>
    <td>File</td>
    <td>File Name</td>
    <td>File Type</td>
    <td>File Size(KB)</td>
    <td>View</td>
    </tr>
    <?php
 $sql="SELECT * FROM tbl_uploads";
 $result_set=mysql_query($sql);
 while($row=mysql_fetch_array($result_set))
 {
  ?>
        <tr>
          <td> <?php echo "<img src='uploads/".$row['file']."' height = '130px' width = '130px' margin='2px'>"; ?></td>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
   <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td> 
        </tr>
        <?php
 }
 ?>
    </table>

       

        <?php
 }
 else if(isset($_GET['fail']))
 {
  ?>
        <label>Problem While File Uploading !</label>
        <?php
 }
 else
 {
  ?>
        <label>Try to upload any files(PDF, DOC, EXE, VIDEO, MP3, ZIP,etc...)</label>
        <?php
 }
 ?>
</div>



<div id="footer">
<!-- <label>By <a href="http://cleartuts.blogspot.com">cleartuts.blogspot.com</a></label> -->
</div>
</body>
</html>


