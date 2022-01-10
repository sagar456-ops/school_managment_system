

<?php require_once("db_connect.php"); ?>


<?php
///deleting all data before insering new

$delete_sql = "DELETE FROM `admit_card`";

$result = mysqli_query($con, $delete_sql);


?>
<?php

if ($_FILES["file"]["error"] > 0) {
      echo "Error: " . $_FILES["file"]["error"] . "<br>";
} else {
      echo "<center><h3>Upload: " . $_FILES["file"]["name"] . "<br>";
      echo "Type: " . $_FILES["file"]["type"] . "<br>";
      echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br></h3></center>";
      //echo "Stored in: " . $_FILES["file"]["tmp_name"];
      $a = $_FILES["file"]["tmp_name"];
      //echo $a;

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

                  $name = $slice[0];
                  $sybno = $slice[1];
                  $regno = $slice[2];
                  $academic_programe = $slice[3];
                  $faculty = $slice[4];
                  $semester = $slice[5];
                  $exam_year = $slice[6];
                  $course_1 = $slice[7];
                  $credit_1 = $slice[8];
                  $course_2 = $slice[9];
                  $credit_2 = $slice[10];
                  $course_3 = $slice[11];
                  $credit_3 = $slice[12];
                  $course_4 = $slice[13];
                  $credit_4 = $slice[14];
                  $course_5 = $slice[15];
                  $credit_5 = $slice[16];
                  $course_6 = $slice[17];
                  $credit_6 = $slice[18];
                  $course_7 = $slice[19];
                  $credit_7 = $slice[20];


                  $query = "INSERT INTO admit_card(name,sybno,regno,academic_programe, faculty, semester, exam_year, course_1, credit_1, course_2,credit_2,course_3,credit_3,course_4,credit_4,course_5,credit_5,course_6,credit_6,course_7,credit_7)
VALUES ('" . $name . "','" . $sybno . "','" . $regno . "','" . $academic_programe . "','" . $faculty . "','" . $semester . "','" . $exam_year . "','" . $course_1 . "','" . $credit_1 . "','" . $course_2 . "','" . $credit_2 . "','" . $course_3 . "', '" . $credit_3 . "','" . $course_4 . "','" . $credit_4 . "',
'" . $course_5 . "','" . $credit_5 . "','" . $course_6 . "','" . $credit_6 . "',
'" . $course_7 . "','" . $credit_7 . "')";


                  //$query = "INSERT INTO persons(id, name, email ,contacts) VALUES('".$col1."','".$col2."','".$col3."','".$col4."')";

                  // $query = "INSERT INTO STUDENT_RESULT(ROLL_NO   , GR_NO  , STD ,CLASS ,  NAME  ,  BIRTHDATE ,  GUJARATI ,   GRADE  , MATHS  , GRADE   NEPALI   GRADE   ENGLISH GRADE   SCIENCE GRADE   SOCIAL_SCIENCE  GRADE   OPTMATH    GRADE   VYAKTITVA_VIKAS GRADE   FINAL_TOTAL FINAL_GRADE
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
