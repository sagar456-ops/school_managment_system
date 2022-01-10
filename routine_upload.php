

<?php require_once("db_connect.php"); ?>


<?php
///deleting all data before insering new

$delete_sql = "DELETE FROM `routine`";

$result = mysqli_query($con, $delete_sql);


?>
<?php

if ($_FILES["file"]["error"] > 0) {
      echo "Error: " . $_FILES["file"]["error"] . "<br>";
} 
else
 {
      echo "<center><h3>Upload: " . $_FILES["file"]["name"] . "<br>";
      echo "Type: " . $_FILES["file"]["type"] . "<br>";
      echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br></h3></center>";
      //echo "Stored in: " . $_FILES["file"]["tmp_name"];
      $a = $_FILES["file"]["tmp_name"];
      echo $a;

      // path where your CSV file is located
      //define('CSV_PATH','C:/xampp/htdocs/');
      //<!-- C:\\xampp\\htdocs -->
      // Name of your CSV file
      $csv_file = $a;

      if (($getfile = fopen($csv_file, "r")) !== FALSE) {
            $data = fgetcsv($getfile, 1000, ",");
            while (($data = fgetcsv($getfile, 1000, ",")) !== FALSE) {
                  //$num = count($data);
                  //echo $num;
                  //for ($c=0; $c < $num; $c++) {
                  $result = $data;
                  $str = implode(",", $result);
                  $slice = explode(",", $str);

                  // $col1 = $slice[0];
                  //$col2 = $slice[1];
                  //$col3 = $slice[2];
                  //$col4 = $slice[3];
                  $faculty= $slice[0];
                  $semester = $slice[1];
                  $date_1= $slice[2];
                  $subject_1 = $slice[3];
                  $date_2 = $slice[4];
                  $subject_2 = $slice[5];
                  $date_3= $slice[6];
                  $subject_3 = $slice[7];
                  $date_4= $slice[8];
                  $subject_4 = $slice[9];
                  $date_5 = $slice[10];
                  $subject_5 = $slice[11];
                  $date_6 = $slice[12];
                  $subject_6 = $slice[13];
                  $date_7 = $slice[14];
                  $subject_7 = $slice[15];

                  $query =  "INSERT INTO routine(faculty,semester,date_1,subject_1,date_2,subject_2,date_3,subject_3,date_4,subject_4,date_5,subject_5,date_6,subject_6,date_7,subject_7)
VALUES ('".$faculty."','".$semester."','".$date_1."','".$subject_1."','".$date_2."','".$subject_2."','".$date_3."', '".$subject_3."','".$date_4."','".$subject_4."','".$date_5."','".$subject_5."','".$date_6."','".$subject_6."','".$date_7."','".$subject_7."')";


                  //$query = "INSERT INTO persons(id, name, email ,contacts) VALUES('".$col1."','".$col2."','".$col3."','".$col4."')";

                  // $query = "INSERT INTO STUDENT_RESULT(ROLL_NO   , GR_NO  , STD ,CLASS ,  NAME  ,  BIRTHdate ,  GUJARATI ,   GRADE  , MATHS  , GRADE   NEPALI   GRADE   ENGLISH GRADE   SCIENCE GRADE   SOCIAL_SCIENCE  GRADE   OPTMATH    GRADE   VYAKTITVA_VIKAS GRADE   FINAL_TOTAL FINAL_GRADE
                  // ) VALUES('".$col1."','".$col2."','".$col3."','".$col4."')";


                  $s = mysqli_query($con, $query);
            }
      }
      echo "<script>
 alert('Data Uploaded Sucessfully');
	        window.location.href='admin_panel.php?success';
	        </script>";



      mysqli_close($con);
}
?>
