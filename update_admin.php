<html>

<head>
  <<?php include_once("db_connect.php"); ?> <body>

    <?php
    if ((isset($_POST)) && (!empty($_POST))) {
      $id = mysqli_real_escape_string($con, $_POST['id']);
      $password = mysqli_real_escape_string($con, $_POST['password']);

      $sql = "UPDATE admintable SET id = '" . $id . "',PASSWORD='" . $password . "' WHERE 1";

      $result = mysqli_query($con, $sql);
      if (isset($result)) {
    ?> <script>
          alert("Password is changed sucessfully");
          window.location = 'admin_panel.php';
        </script>
      <?php
      } else {
      ?>
        <script>
          alert("Error");
          window.location = 'update_admin.php';
        </script>
    <?php
      }
    }

    ?>
    </body>

</html>