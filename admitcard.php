<?php include_once 'db_connect.php'; ?>
<main>
      <html>

      <head>
      </head>

      <body>

            <?php
            if (isset($_POST['btn_submit_2'])) {
                  $regno =  $_POST['regno'];
                  $sybno =  $_POST['sybno'];
                  $exam_year =  $_POST['exam_year'];
                  $faculty = $_POST['faculty'];
                  $semester = $_POST['semester'];

            ?>
                  <?php
                  $sql =  "SELECT * FROM `admit_card` where regno = '" . $_POST['regno'] . "' 
and sybno = '" . $_POST['sybno'] . "'
            and exam_year = '" . $_POST['exam_year'] . "' 
             and faculty = '" . $_POST['faculty'] . "'
            and semester='" . $_POST['semester'] . "' ";
                  $result_set = mysqli_query($con, $sql) or die(mysqli_error($con));
                  while ($row = mysqli_fetch_array($result_set)) { ?>
                        <div class="row" id="printableId" style="background-color: #DFDFDF; width:100%; height:1100px; border:3px solid #ccc; overflow:hidden">
                              <h1> ACME ENGINEERING COLLEGE <br></h1>
                              <h2> EXAMINATION DEPARTMENT <br></h2>
                              <h3>SITAPAILA,KATHMANDU <br></h3>
                              <h4>ADMIT CARD</h4>

                              <div class="middle_div" style= "text-align:center;width:10%; height:10%; border:3px solid #ccc; overflow:hidden">
<b>
PHOTO 
                  </b>
                              </div>

                              <div class="upper_details">
                                    <b style="margin-left: 60px;">Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> <?php echo $row['name'] ?><br>
                                    <b style="margin-left: 60px;">Registration number:&nbsp;&nbsp;&nbsp;&nbsp;</b><?php echo $row['regno'] ?> <br>
                                    <b style="margin-left: 60px;">Academic Programme::&nbsp;&nbsp;&nbsp;&nbsp;</b><?php echo $row['academic_programe'] ?> <br>
                                    <b style="margin-left: 60px;">Faculty::&nbsp;&nbsp;&nbsp;&nbsp;</b><?php echo $row['faculty'] ?> <br>
                                    <b style="margin-left: 60px;">Semester::&nbsp;&nbsp;&nbsp;&nbsp;</b><?php echo $row['semester'] ?> <br>
                                    <b style="margin-left: 60px;">Exam year::&nbsp;&nbsp;&nbsp;&nbsp;</b><?php echo $row['exam_year'] ?>

                              </div>
                              <table border="1">
                                    <thead>
                                          <tr>
                                                <th>Course Title</th>
                                                <th>Credit Hour</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                          <tr>
                                                <td><?php echo $row['course_1'] ?></td>
                                                <td><?php echo $row['credit_1'] ?></td>

                                          </tr>
                                          <tr>
                                                <td><?php echo $row['course_2'] ?></td>
                                                <td><?php echo $row['credit_2'] ?></td>
                                          </tr>
                                          <tr>
                                                <td><?php echo $row['course_3'] ?></td>
                                                <td><?php echo $row['credit_3'] ?></td>
                                          </tr>
                                          <tr>
                                                <td><?php echo $row['course_4'] ?></td>
                                                <td><?php echo $row['credit_4'] ?></td>
                                          </tr>
                                          <tr>
                                                <td><?php echo $row['course_5'] ?></td>
                                                <td><?php echo $row['credit_5'] ?></td>
                                          </tr>
                                          <tr>
                                                <td><?php echo $row['course_6'] ?></td>
                                                <td><?php echo $row['credit_6'] ?></td>
                                          </tr>
                                          <tr>
                                                <td><?php echo $row['course_7'] ?></td>
                                                <td><?php echo $row['credit_7'] ?></td>
                                          </tr>
                                    </tbody>
                              </table>
                              <h2>
                                    <center style="padding: 5px;">Instruction To The Candidate</center>

                              </h2>
                              <p style="font-size:large">
                                    1. This Admit Card must be presented for verification at the time of examination.
                              </p>
                              <p style="font-size:large">
                                    2. This Admit Card is valid only if the candidate's <b>Photo matches</b>.
                                    Print this on an A4 sized paper using a laser printer preferably a color photo printer.
                              </p>

                              <p style="font-size:large">
                                    3. Candidates should occupy their alloted seats <b>25 minutes before</b> the scheduled start of the examination.
                              </p>
                              <p style="font-size:large">
                                    4. Candidates will not be allowed to enter the examination hall <b>30 minutes</b>
                                    after the commencement of the examination.
                              </p>
                              <p style="font-size:large">
                                    5. Mobile phones or any other Electronic gadgets are <b>not allowed</b> inside the examination hall.
                              </p>
                        </div>
            <?php  }
            }
            ?>
      </body>


</main>
<b>
      <p class="print_text" style="text-align:center;font-size:larger">
            Print the document by clicking the print button

      </p>
</b>
<button id="printPageButton" onClick="window.print();">Print</button>

</html>
<style>
     
      .middle_div{
            margin-left: 80%;
      }
      button {
            margin-left: 45%;
            margin-bottom: 20%;
            padding: 15px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            transition-duration: 0.4s;
      }

      button:hover {
            background-color: gray;
            color: white;
      }

      @media print {
            #printPageButton {
                  display: none;
            }

            .print_text {
                  display: none;
            }

            html,
            body {
                  height: 100%;
                  margin: 0;
                  padding: 0;
                  overflow: hidden;
            }
      }

      button {
            left: 50%;
            bottom: 0px;

      }

      .upper_text {
            text-align: center;
      }

      h1,
      h2,
      h3,
      h4 {
            text-align: center;
            margin: 0;
            padding: 0;
      }


      main {
            border: 0;
            padding: 5%;
            padding-top: 0%;
      }

      table {
            border: solid;
            margin-left: auto;
            margin-right: auto;
            width: 70%;
            border-collapse: collapse;
            margin-top: 50px;
      }

      th {
            padding: 9px;
            border: solid;
      }

      td {
            border: solid;
            padding: 6px;
            text-align: center;

            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
      }
</style>