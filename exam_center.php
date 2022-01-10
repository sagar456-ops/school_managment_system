<?php include("header.php"); ?>
<?php include_once 'db_connect.php'; ?>
<html>

<body>
      <?php
      if (isset($_POST['btn_submit_1'])) {
            $reg_no =  $_POST['regno'];
            $faculty = $_POST['faculty'];
            $semester = $_POST['semester'];

      ?>
            <?php
            $sql =  "SELECT * FROM `exam_center` where faculty = '" . $_POST['faculty'] . "' and semester='" . $_POST['semester'] . "' and reg_no = '" . $_POST['regno'] . "' ";
            $result_set = mysqli_query($con, $sql) or die(mysqli_error($con));
            while ($row = mysqli_fetch_array($result_set)) { ?>

                  <table border="1">
                        <thead>
                              <tr>
                                    <th>Name</th>
                                    <th>Symbol number</th>
                                    <th>Registration number</th>
                                    <th>Faculty</th>
                                    <th>Semester</th>
                                    <th>Center</th>
                                    <th>Center Location</th>
                              </tr>
                        </thead>
                        <tbody>
                              <tr>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['symbol_no'] ?></td>
                                    <td><?php echo $row['reg_no'] ?></td>
                                    <td><?php echo $row['faculty'] ?></td>
                                    <td><?php echo $row['semester'] ?></td>
                                    <td><?php echo $row['center_name'] ?></td>
                                    <td><?php echo $row['location'] ?></td>

                              </tr>
                        </tbody>
                  </table>

      <?php  }
      }
      ?>
</body>
<footer> <?php include("footer.php") ?></footer>

</html>
<style>
      print_btn {
            size: larger;
      }

      html,
      body {
            border: 0;
            padding: 0;
      }

      h1 {
            margin-top: 35px;
            color: black;
      }

      h2 {
            padding: 15px;
            text-align: center;
      }

      table {
            margin-left: auto;
            margin-right: auto;
            width: 70%;
            border-collapse: collapse;
            margin-top: 50px;
      }

      th {
            padding: 15px;
            background-color: #dee2e6;

      }

      td {
            padding: 20px;
            border-width: 1px;
            margin-left: auto;
            margin-right: auto;
            background-color: #f2f2f2;
      }
</style>