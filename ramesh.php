<!DOCTYPE html>
<html>

<head>
  <title>Acme engineering college</title>
</head>

<body>
  <link rel="stylesheet" href="style.css">
  <header>
    <?php include 'header.php'; ?>
  </header>
  <main class="main">

    <div class="container" style="background-color:#D5F3FE; width:100%; height:80px; border:3px solid #ccc; overflow-y:auto">
      <a href="view.php"><button class="view_button">Latest News:</button></a>

      <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
        <?php
        include 'db_connect.php';
        $sql = "SELECT * FROM  `notice` order by `date` ";
        $result = mysqli_query($con, $sql);
        if (false === $result) {
          echo mysqli_error($con);
        } else {
          while ($row = mysqli_fetch_array($result)) {

        ?>


            <a href="view.php">(<?php echo $row['date'] ?>) &#8594 <?php echo $row['description'] ?>. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>



        <?php   }
        }
        ?>
      </marquee>
      <br />
    </div>
    <style>
      .container {
        margin-top: 1px;

      }

      .view_button {
        background-color: #1a3c80;
        border: none;
        color: white;
        padding: 8px;
        position: relative;
        margin-top: 10px;
        right: 46%;
      }

    
    </style>

    <div class="top_part_container">
      <div class="slideshow-container" style="width:600px;height:550px;">
        <img src="images/college.png" style="width:600px;height:500px">
      </div>
      <style>
        .top_part_container {
          margin-top: 25px;
          margin-left: 5px;
          position: relative;
        }
      </style>

    </div>

    <!--start of Notice-->
    <div class="notice_container" style="width:640px;height:500px;background-color: #1f2833;">
      <a href="notice.php">
        <h2> Click to view latest notice..</h2>
      </a>
      <?php
      include 'db_connect.php';
      ?>
      <table>
        <tr>
          <td></td>
          <td>Date</td>
          <td>Notice</td>

        </tr>
        <tr>
          <?php
          $sql = "SELECT * FROM `notice`";
          $result_set = mysqli_query($con, $sql);
          while ($row = mysqli_fetch_array($result_set)) { ?>
            <td>&#8594 </td>
            <td width="150px"> <?php echo $row['date'] ?> </td>
            <td width="600px"><a href="notice.php"><?php echo $row['description']; ?> </a></td>
        </tr>
      <?php  } ?>
    </div>
    </table>
    <style>
      h2 {
        animation: blinkingText 1.2s infinite;
      }

      @keyframes blinkingText {
        0% {
          color: dodgerblue;
        }

        49% {
          color: dodgerblue;
        }

        60% {
          color: dodgerblue;
        }

        99% {
          color: transparent;
        }

        100% {
          color: #000;
        }
      }

      table {
        margin-top: 35px;

      }

      td {
        padding: 10px;
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

      .notice_container {
        margin-top: 160px;

      }
    </style>
    </div>
    <div class="message_container">
      <div class="slideshow-container;"></div>
      <h3>Message from Principal</h3>
      <p>
        Being the first engineering college affiliated to Purbanchal University, Acme Engineering College has been recognized as one of the best 10 engineering colleges within Nepal. The objective of this college is to produce not only the technically sound but also an ethical Engineers and Architects who has feelings of responsibility towards their assigned duty.

        These facts are proven by our graduates who are currently working within the country or abroad. Our products are not only getting admission for Masters course in the foreign countries but also some have got direct admission for M.Sc. course leading to Ph.D.

        Students find real academic environment and the place to groom themselves as complete engineer/architect. Apart from regular courses, there are guest lecture from the experts in various fields and ample visits in the relevant field to observe the real application of engineering/ Architectural knowledge.

        There are several clubs within the college, related to their discipline, where the enthusiastic students come together and conduct various activities to enhance their knowledge and exposure. We believe in the self-exploration and creation. Acme is Acme in real sense. Verify with our graduates and current students. We always welcome those students, who really want to become a competent and complete Engineer/Architect.
      </p>
      <!--End of message container-->
    </div>
    <style>
      .message_container {
        display: block;
        position: absolute;
        background-color: #557A95;
        margin: 2%;
        padding: 2%;
        overflow: hidden;

      }

      .message_container:hover {
        background-color: #557A95;
        color: black;
      }

      .message_container h3 {
        text-align: left;
        font-size: 1em;
        margin: 2px;
      }

      .message_container {
        margin-top: 120px;

      }
    </style>
    </div>

</body>
</main>
<footer>
  <?php include 'footer.php'; ?>
</footer>