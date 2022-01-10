<?php
include_once 'db_connect.php';
if(isset($_POST['btn-upload']))
{
$date = $_POST['date'];
$description_notice = $_POST['description_notice'];
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
  $sql="INSERT INTO tbl_uploads(id,file,type,size,date,description) VALUES('$id','$final_file','$file_type','$new_size','$date','$description_notice')";
  mysqli_query($con,$sql);
  ?>
  <script>
  alert('successfully uploaded');
        window.location.href='upload.php?success';
        </script>
  <?php
 }
 else
 {
  ?>
  <script>
  alert('error while uploading file');
        window.location.href='upload.php?fail';
        </script>
  <?php
 }
}
?>
