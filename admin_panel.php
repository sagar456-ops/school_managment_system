<?php
include('db_connect.php');
session_start();
?>
<header>

      <img src="images\logo.png">
      <?php
      if (isset($_SESSION['ID'])) {
      ?>
            <button class="logout " id="myButton_1" onclick="location.href">LOGOUT</button>
      <?php } else {
            header("location: admin.php");
      } ?>
      <style>
            .logout {
                  transform: translateY(325%);
            }

            a {
                  text-decoration: none;
            }
      </style>
      <h1>WELCOME ADMIN</h1>
      <button id="myButton" onclick="location.href='update_admin_form.php'">Change Admin username or password</button>



</header>
<script>
      document.getElementById("myButton").onclick = function() {
            location.href = "update_admin_form.php";
      };
      document.getElementById("myButton_1").onclick = function() {
            location.href = "logout.php";
      };
</script>
<style>
      .btn_btn-primary_mb-2 {
            transform: translateY(5px);
            position: relative;
            background-color: #1E90FF;
            border: none;
            color: bkue;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;



      }

      button {
            transform: translatex(167%);
            position: relative;
            background-color: #e8edf7;
            border: none;
            color: bkue;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
      }

      html {
            scroll-behavior: smooth;
      }

      body {
            margin: 0;
            display: grid;
            grid-template-columns: min-content 1fr;
            font-family: system-ui, sans-serif;
      }

      header {
            grid-column: 1 / 3;
            background: #455A64;
            color: white;
            padding: 1%;
            text-align: center;
      }

      nav {
            white-space: nowrap;
            background: #37474F;
      }

      nav ul {
            list-style: none;
            margin: 0;
            padding: 50px;
      }

      /* Only stick if you can fit */
      @media (min-height: 300px) {
            nav ul {
                  position: sticky;

            }
      }

      nav ul li a {
            display: block;
            padding: 0.5rem 1rem;
            color: white;
            text-decoration: none;
      }

      nav ul li a.current {
            background: black;
      }

      main {
            padding-bottom: 50px;
      }

      section {
            padding: 2rem;
            margin: 0 0 2rem 0;
      }

      footer {
            grid-column: 1 / 3;
            background: #607D8B;
            padding: 5rem 1rem;
      }

      b {
            align-content: center;
      }
</style>
<nav>
      <ul>
            <b>Admin menu</b>

            <li><a href="#section-1">Notice upload</a></li>
            <hr>
            <li><a href="#section-2">Exam centers</a></li>
            <hr>
            <li><a href="#section-3">Result</a></li>
            <hr>
            <li><a href="#section-4">Admit card</a></li>
            <hr>
            <li><a href="#section-5">routine</a></li>
            <hr>
      </ul>
</nav>

<main>
      <style>
            table {
                  width: 100%;
                  border-collapse: collapse;
                  left: 50px;
                  margin-left: auto;
                  margin-right: auto;
                  margin-top: 4%;
            }

            tr {
                  border-bottom: 1px #dddddd;
                  padding: 20px;
            }

            td {
                  border-bottom: 1px #dddddd;
                  padding: 20px;
            }

            tr:hover {
                  background-color: gray;
            }

            tr:nth-child(even) {
                  background-color: #f2f2f2;
            }

            tr:nth-child(odd) {
                  background-color: #dee2e6;
            }

            .btn_btn_danger {
                  transform: translateX(-20%);
            }

            .btn_btn_danger {
                  transition-duration: 0.2s;
            }

            .btn_btn_danger:hover {
                  background-color: red;
                  color: blue;
            }
      </style>
      <section id="section-1">
            <?php include('admin_notice.php'); ?>
            <table border="1">
                  <tr>
                        <td>Notice No</td>
                        <td>Notice</td>
                        <td>Date</td>
                        <td>View</td>
                        <td>Delete</td>
                  </tr>
                  <tr>
                        <?php
                        $sql = "SELECT * FROM `notice`";
                        $result_set = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($result_set)) { ?>
                              <td width="50px"><?php echo $row['id'] ?></td>
                              <td width="300px"><?php echo $row['description'] ?></td>
                              <td width="100px"> <?php echo $row['date'] ?> </td>
                              <td width="200px"><a href="Notice/<?php echo $row['file'] ?>" target="_blank">CLICK TO VIEW NOTICE</a></td>
                              <td>
                                    <form action="code.php" method="post">
                                          <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                          <button type="submit" name="delete_btn" class="btn_btn_danger">DELETE</button>
                                    </form>
                              </td>
                  </tr>
            <?php  } ?>

            </table>



      </section>
      <hr>
      <section id="section-2">
            <h2>EXAM CENTER UPLOAD SECTION</h2>

            <form action="examcenterupload.php" method="post" enctype="multipart/form-data" class="form-inline">

                  <div class="form-group mb-2">
                        <b>
                              CHOOSE A EXCEL FILE TO UPLOAD EXAM CENTER DETAILS:
                        </b>
                  </div>
                  <div class="form-group mx-sm-3 mb-2">
                        <input style="padding: 15px;" type="file" name="file" id="file" class="form-control">
                  </div>
                  <input type="submit" name="submit" value="Upload" class="btn_btn-primary_mb-2">

            </form>
      </section>
      <hr>

      <section id="section-3">
            <h2>RESULT PUBLISHING SECTION</h2>

            <form action="import_file.php" method="post" enctype="multipart/form-data" class="form-inline">

                  <div class="form-group mb-2">
                        <b>
                              CHOOSE A EXCEL FILE TO UPLOAD RESULT:

                        </b>
                  </div>
                  <div class="form-group mx-sm-3 mb-2">
                        <input style="padding: 15px;" type="file" name="file" id="file" class="form-control">
                  </div>
                  <input type="submit" name="submit" value="Upload" class="btn_btn-primary_mb-2">

            </form>

      </section>
      <hr>
      <section id="section-4">
            <h2>ADMIT CARD</h2>

            <form action="admit_card_upload.php" method="post" enctype="multipart/form-data" class="form-inline">

                  <div class="form-group mb-2">
                        <b>
                              CHOOSE A EXCEL FILE TO UPLOAD ADMIT CARD DETAILS:
                        </b>
                  </div>
                  <div class="form-group mx-sm-3 mb-2">
                        <input style="padding: 15px;" type="file" name="file" id="file" class="form-control">
                  </div>
                  <input type="submit" name="submit" value="Upload" class="btn_btn-primary_mb-2">
            </form>


      </section>
      <hr>

      <section id="section-5">
            <?php

            include('routine_admin.php');
            ?>

      </section>
      <hr>

</main>