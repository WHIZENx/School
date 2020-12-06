<!DOCTYPE html>
<html lang="th">
<head>
  <title>Staff</title>
  <base href="/">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="img/x-icon" href="project/img/teacher.png">
  <link href="https://fonts.googleapis.com/css?family=Kodchasan&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
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
    .topnav .logout {
      float: right;
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
    table {
      width: 100%;
    }
    #teacher td, #teacher th {
      border: 1px solid #ddd;
      padding: 8px;
    }
    #teacher th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: center;
      background-color: gray;
      color: white;
    }
  </style>
  <body>
    <div class="topnav">
      <a style="color: white; float: left; text-align: center; padding: 14px 35px; text-decoration: none; font-size: 17px; background-color: gray;">School</a>
      <a id="menu" href="project/main.php">หน้าหลัก</a>
      <a id="menu" href="project/student.php">นักเรียน</a>
      <a id="menu" class="active" href="project/teacher.php">คุณครู</a>
      <a id="menu" href="project/course.php">รายวิชา</a>
      <a id="menu" href="project/class_schedule.php">ตารางเรียน</a>
      <a id="menu" href="project/grade.php">ผลการเรียน</a>
      <div class="logout" style="float: right">
        <a id="menu-logout">Logout</a>
      </div>
    </div>
    <div id="page-container" style="margin-top: 15px;">
      <h1>คุณครู</h1>
      <a class="btn btn-success" href="project/teacher_add.php" style="margin-top: 10px;">Add</a>
      <hr>
      <table id="teacher">
        <tr>
          <th>No.</th>
          <th>TEACHER ID</th>
          <th>ชื่อ-นามสกุล</th>
          <th>กลุ่มสาระ</th>
          <th>เปลี่ยนแปลง</th>
        </tr>
        <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            $sql = "SELECT * FROM teacher ORDER BY teacherid";

            $qry = mysqli_query($objCon, $sql);
            $nrows = mysqli_num_rows($qry);
            if ($nrows > 0) {
              ?>
              <?php
              $i = 0;
              while ($rows = mysqli_fetch_array($qry)) {
                $id = $rows['teacherid'];
                $nt = $rows['title'];
                $fn = $rows['Tfname'];
                $ln = $rows['Tlname'];
                $g = $rows['groupc'];
                $i += 1;
                ?>
                <tr>
                  <td align="center"><?php echo $i; ?></td>
                  <td><?php echo $id; ?></td>
                  <td><?php echo $nt ?><?php echo $fn ?> <?php echo $ln; ?></td>
                  <td align="center"><?php echo $g; ?></td>
                  <td align="center">
                    <a class="btn btn-warning" href="project/teacher_update.php?teacherid=<?php echo $id ?>" style="color: white;">Update</a>
                  </td>
                </tr>
                <?php
              }
            }
        ?>
      </table>
    </div>
  </body>
</html>