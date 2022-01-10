<html>
<?php
include('header.php');
?>
<h1>CHECK YOUR ADMIT CARD</h1>

<head>
    <style>
        html {
            font-family: Arial, Helvetica, sans-serif;
            ;
        }

        form {
            width: 40%;
            padding: 50px;
            height: fit-content;
            margin: 0 auto;
            margin-top: fit-content;
            background-color: #f9f9f9
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .form-control_another {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .form-control-one {
            width: 100%;
            padding: 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;

        }



        button {
            background-color: #a2b9bc;
            color: black;
            border: none;
            cursor: pointer;
            width: 30%;
            margin: 5px auto;
            padding: 8px;
            box-shadow: 0px 5px 5px #ccc;
            border-radius: 10px;
            border-top: 1px solid #e9e9e9;
            display: block;
            text-align: center;
        }

        .signup {
            background-color: blue;
            margin-bottom: 20px;
        }

        .login-box {
            position: left;
            top: 50%;
            transform: translateY(-50%);
            padding: 50px;
            background-color: #fff;
            box-shadow: 0px 5px 5px #ccc;
            border-radius: 10px;
            border-top: 1px solid #e9e9e9;
        }

        h1 {
            color: Black;
            text-align: center;
        }

        h4,
        b,
        h2,
        p {
            text-align: center;
            font-size: larger;
        }

        body {
            background-color: #e8edf7;
        }

        option[value=""][disabled] {
            display: none;
        }
    </style>
</head>

<body>
    <form name="my_form" action="admitcard.php" method="post">
        <div class="container">
            <label for="id"><b>REGISTRATION NUMBER</b></label>
            <input class="form-control-one" name="regno" id="regno" placeholder="Enter your registration number">
            <label for="id"><b>SYMBOL NUMBER</b></label>
            <input class="form-control-one" name="sybno" id="sybno" placeholder="Enter your symbol no number">
            <label for="id"><b>EXAM YEAR</b></label>
            <select class="form-control_another" name="exam_year" id="exam_year">
                <option value="" disabled selected>Select your exam year</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
            </select><br>
            <label for="id"><b>FACULTY</b></label>
            <select class="form-control_another" name="faculty" id="faculty">
                <option value="" disabled selected>Select your FACULTY</option>
                <option value="civil">Civil</option>
                <option value="computer">Computer</option>
                <option value="architecture">Architecture</option>
            </select><br>
            <label for="id"><b>SEMESTER</b></label>
            <select class="form-control" name="semester" id="semester">
                <option value="" disabled selected>Select your SEMESTER</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
            </select><br>

            <button type="submit" name="btn_submit_2" value="onsubmit">Submit</button><br>
        </div>
    </form>

</body>

</html>