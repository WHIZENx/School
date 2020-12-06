<!DOCTYPE html>
<html lang="th">
<head>
  <title>Manager Home</title>
  <base href="/">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="img/x-icon" href="project/img/school.png">
  <link href="https://fonts.googleapis.com/css?family=Kodchasan&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <script type="text/javascript">
    <?php
      $serverName = "localhost";
      $userName = "root";
      $userPassword = "";
      $dbName = "school";

      $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

      $date = date("Y");

      $sql = "SELECT SemID FROM semester WHERE Year=CONCAT('$date','1')";

      $qry = mysqli_query($objCon, $sql);

      if (isset($qry) != '') {
        $sql_v1 = "INSERT INTO semester (SemID, Year, SemesterNo) VALUES (CONCAT('$date','1'), '$date', '1')";
        $sql_v2 = "INSERT INTO semester (SemID, Year, SemesterNo) VALUES (CONCAT('$date','2'), '$date', '2')";
        $objCon->query($sql_v1);
        $objCon->query($sql_v2);
      }
    ?>
  </script>
  <style type="text/css">
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }
    .topnav {
      overflow: hidden;
      background-color: #333;
    }
    .topnav a#menu {
      float: left;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }
    .topnav a#menu:hover {
      background-color: #ddd;
      color: black;
    }
    .topnav a#menu.active {
      background-color: #4CAF50;
      color: white;
    }
    .topnav a#menu-logout {
      float: left;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }
    .topnav a#menu-logout:hover {
      background-color: orangered;
      color: white;
    }
    .topnav a#menu-logout {
      background-color: red;
      color: white;
    }
    #page-container {
      margin: auto;
      padding: 15px;
      min-height: 0;
      width: 50%;
      -webkit-box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
      box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
    }
  </style>
  <body>
    <div class="topnav">
      <a style="color: white; float: left; text-align: center; padding: 14px 35px; text-decoration: none; font-size: 17px; background-color: gray;">School</a>
      <a id="menu" class="active" href="project/main.php">หน้าหลัก</a>
      <a id="menu" href="project/student.php">นักเรียน</a>
      <a id="menu" href="project/teacher.php">คุณครู</a>
      <a id="menu" href="project/course.php">รายวิชา</a>
      <a id="menu" href="project/class_schedule.php">ตารางเรียน</a>
      <a id="menu" href="project/grade.php">ผลการเรียน</a>
      <div class="logout" style="float: right">
        <a id="menu-logout">Logout</a>
      </div>
    </div>
    <div id="page-container" style="margin-top: 25px;">
      <h1 style="text-align: center;">Manager Database of School</h1>
      <div class="row" style="margin-top: 20px;">
        <div class="column" style="width: 50%">
          <div align="center">
            <a href="project/student.php">
              <img src="project/img/student.png" width="300" height="305" style="width: 63%; height: 64%;"><br>
              <h2><b>นักเรียน</b></h2>
            </a>
          </div>
        </div>
        <div class="column" style="width: 50%">
          <div align="center">
            <a href="project/teacher.php">
              <img src="project/img/teacher.png" width="300" height="305" style="width: 63%; height: 64%;"><br>
              <h2><b>พนักงาน</b></h2>
            </a>
          </div>
        </div>
      </div>
      <div class="row" style="margin-top: 20px;">
        <div class="column" style="width: 50%">
          <div align="center">
            <a href="project/class_schedule.php">
              <img src="project/img/class_schedule.png" width="300" height="305" style="width: 63%; height: 64%;"><br>
              <h2><b>ตารางเรียน</b></h2>
            </a>
          </div>
        </div>
        <div class="column" style="width: 50%">
          <div align="center">
            <a href="project/grade.php">
              <img src="project/img/point.png" width="300" height="305" style="width: 62%; height: 63%;"><br>
              <h2><b>ผลการเรียน</b></h2>
            </a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>