<?php include_once 'db_connect.php'; ?>
<?php include('header.php');  ?>
<main>
      <html>

      <body>


            <?php
            if (isset($_POST['btn_submit_result'])) {
                  $reg_no =  $_POST['reg_no'];
                  $symbol_no =  $_POST['symbol_no'];
                  $year =  $_POST['year'];
                  $faculty = $_POST['faculty'];
                  $semester = $_POST['semester'];

            ?>
                  <?php
                  $sql =  "SELECT * FROM `result` where reg_no = '" . $_POST['reg_no'] . "' 
and symbol_no = '" . $_POST['symbol_no'] . "'
            and year = '" . $_POST['year'] . "' 
             and faculty = '" . $_POST['faculty'] . "'
            and semester='" . $_POST['semester'] . "' ";
                  $result_set = mysqli_query($con, $sql) or die(mysqli_error($con));

                  while ($row = mysqli_fetch_array($result_set)) { ?>
                        <h2 style="text-align;">Congratulations! You have  <?php echo $row['status'] ?>. </h2>
                       <h2 style=" text-align: center;margin-top:10px;">Your Grade Sheet Is Shown Below.</h2>
                        <div class="row" id="printableId" style="background-color: #DFDFDF; width:80%; height:1000px; border:3px solid #ccc; overflow:hidden">
                              <div class="upper">

                                    <b> Name:</b><?php echo $row['name'] ?><br>

                                    <b>Symbol NO:</b><?php echo $row['symbol_no'] ?><br>
                                    <b> Reg No:</b> <?php echo $row['reg_no'] ?><br>
                                    <b> Faculty:</b> <?php echo $row['faculty'] ?><br>
                                    <b> Semester:</b> <?php echo $row['semester'] ?><br>
                                    <b> Year:</b> <?php echo $row['year'] ?><br>
                                    <b>Status:</b> <?php echo $row['status'] ?>

                              </div>

                              <h3 style=" text-align: center;">Grade Sheet</h3>
                              <table border=" 1">
                                    <thead>
                                          <tr>
                                                <td colspan="5">Subjects</td>
                                                <td colspan="2">Grade</td>
                                          </tr>
                                    </thead>
                                    <tbody>
                                          <tr>
                                                <td colspan="5"><?php echo $row['subject_1'] ?></td>
                                                <td colspan="2"><?php echo $row['score_1'] ?></td>
                                          </tr>
                                          <tr>
                                                <td colspan="5"><?php echo $row['subject_2'] ?></td>
                                                <td colspan="2"><?php echo $row['score_2'] ?></td>
                                          </tr>
                                          <tr>
                                                <td colspan="5"><?php echo $row['subject_3'] ?></td>
                                                <td colspan="2"><?php echo $row['score_3'] ?></td>
                                          </tr>
                                          <tr>
                                                <td colspan="5"><?php echo $row['subject_4'] ?></td>
                                                <td colspan="2"><?php echo $row['score_4'] ?></td>
                                          </tr>
                                          <tr>
                                                <td colspan="5"><?php echo $row['subject_5'] ?></td>
                                                <td colspan="2"><?php echo $row['score_5'] ?></td>
                                          </tr>
                                          <tr>
                                                <td colspan="5"><?php echo $row['subject_6'] ?></td>
                                                <td colspan="2"><?php echo $row['score_6'] ?></td>
                                          </tr>
                                          <tr>
                                                <td colspan="5"><?php echo $row['subject_7'] ?></td>
                                                <td colspan="2"><?php echo $row['score_7'] ?></td>
                                          </tr>
                                          <tr>
                                                <td colspan="5">GPA</td>
                                                <td colspan="2"><?php echo $row['final_score'] ?></td>
                                          </tr>
                                    </tbody>
                              </table>
                        </div>
            <?php
                  }
            }
            ?>

      </body>

      </html>
</main>
<style>
      b {}

      table {
            margin-left: auto;
            margin-right: auto;
            width: 80%;
            border-collapse: collapse;
            margin-top: 50px;
      }

      tr,
      td {
            text-align: center;
            padding: 20px;
            border-width: 1px;
            margin-left: auto;
            margin-right: auto;
      }

      .row {
            margin-top: 8%;
            margin-left: 10%;
            margin-bottom: 10%;
            text-align: left;
            line-height: 1.8;
      }

      .upper {
            padding: 10px;
      }
</style>