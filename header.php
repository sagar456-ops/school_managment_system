<?php
if (!isset($_SESSION)) {
  session_start();
}
?>
<html>

<head>
  <title>ACME ENGINNERING COLLEGE</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="contact.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
</head>

<body>
  <!-- start of header-->
  <header>
    <!--start of upper header-->
    <div class="upper_header">
      <!--start of logo-->
      <style>
        a {
          text-decoration: none;
        }
      </style>
      <div class="logo">
        <a href="ramesh.php"><img src='images/logo.png'/></a>
      </div>
</body>

<!--End of logo-->

<!--start of right header-->
</div>
<!--start of lower header-->
<nav class="navigation_bar">
  <!--start of navigation bar-->
  <ul>
    <li>
      <a href="logout.php">Logout</a>
      <?php
      if (isset($_SESSION['ID'])) {

      ?>

        <b><?php
            echo "Student ID:";
            echo $_SESSION["ID"];
            ?>
        </b>
      <?php } else {
        header("location: index.php");
      }
      ?>
      <style>
        b {
          font-weight: 1000;
          color: black;

          text-align: left;
        }
      </style>
    </li>
    <!--Contact us-->
    <li>
      <a href="Contact.php">Contact Us</a>
    </li>
    <!--for news and notice-->
    <li>
      <a href="result.php">Result</a>
    </li>
    <!--for life@bts-->
    <li>
      <a href="view.php">Exam Center</a>
    </li>
    <!--for Academics-->
    <li>
      <a href="routine menu.php">Exam Routine</a>
    </li>
    <!--for About us-->
    <li>
      <a href="notice.php">Notice</a>
    </li>
    <li>
      <a href="admit_card.php">Admit Card</a>
    </li>
    <!--for Home-->
<li>
  <a href="ramesh.php">Home</a>
</li>
    <!--End of navigation bar-->
  </ul>
  <!--end of lower header-->
</nav>
<!-- End of header tag-->
</header>
</body>

</html>