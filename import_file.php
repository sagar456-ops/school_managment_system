

<?php require_once("db_connect.php"); ?>


<?php
///deleting all data before insering new

  $delete_sql = "DELETE FROM `result`";

  $result = mysqli_query($con, $delete_sql);


?>
<?php

if ($_FILES["file"]["error"] > 0)
{
    echo "Error: " . $_FILES["file"]["error"] . "<br>";
}
else
{
    echo "<center><h3>Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br></h3></center>";
    //echo "Stored in: " . $_FILES["file"]["tmp_name"];
    $a=$_FILES["file"]["tmp_name"];
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

        $reg_no = $slice[0];
        $symbol_no = $slice[1];
        $name = $slice[2];
        $faculty =$slice[3];
            $semester = $slice[4];
        $year = $slice[5];
          
            $subject_1 = $slice[6];
            $score_1 = $slice[7];
            $subject_2 = $slice[8];
            $score_2 = $slice[9];
            $subject_3 = $slice[10];
            $score_3 = $slice[11];
            $subject_4 = $slice[12];
            $score_4 = $slice[13];
            $subject_5 = $slice[14];
            $score_5 = $slice[15];
            $subject_6 = $slice[16];
            $score_6 = $slice[17];
            $subject_7 = $slice[18];
$score_7 = $slice[19];
            $final_score = $slice[20];
            $status = $slice[21];


$query =  "INSERT INTO result(reg_no, symbol_no, name, faculty,semester,year,subject_1,score_1,subject_2,score_2,subject_3,score_3,subject_4,score_4,subject_5,score_5,subject_6,score_6,subject_7,score_7,final_score,status)
VALUES ('".$reg_no."', '".$symbol_no."', '".$name."', '".$faculty. "', '" . $semester. "', '".$year. "', '" . $subject_1 . "', '" . $score_1 . "','" . $subject_2 . "', '" . $score_2 . "','" . $subject_3 . "', '" . $score_3 . "','" . $subject_4 . "', '" . $score_4 . "','" . $subject_5 . "', '" . $score_5 . "','" . $subject_6 . "', '" . $score_6 . "','" . $subject_7 . "', '" . $score_7 . "','" . $final_score. "',' ".$status." ')";


//$query = "INSERT INTO persons(id, name, email ,contacts) VALUES('".$col1."','".$col2."','".$col3."','".$col4."')";

// $query = "INSERT INTO STUDENT_RESULT(ROLL_NO   , GR_NO  , STD ,CLASS ,  NAME  ,  BIRTHDATE ,  GUJARATI ,   GRADE  , MATHS  , GRADE   NEPALI   GRADE   ENGLISH GRADE   SCIENCE GRADE   SOCIAL_SCIENCE  GRADE   OPTMATH    GRADE   VYAKTITVA_VIKAS GRADE   FINAL_TOTAL FINAL_GRADE
// ) VALUES('".$col1."','".$col2."','".$col3."','".$col4."')";


        $s=mysqli_query($con,$query);

    }

}
    echo "<script>
 alert('Data Uploaded Sucessfully');
	        window.location.href='admin_panel.php?success';
	        </script>";




mysqli_close($con);
}
?>
