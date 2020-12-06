<!DOCTYPE html>
<html lang="th">
<head>
  <title>Course</title>
  <base href="/">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="img/x-icon" href="project/img/course.png">
  <link href="https://fonts.googleapis.com/css?family=Kodchasan&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript">
    function insert_course() {
      var e = document.getElementById("inputGroupSelect01");
      var e2 = document.getElementById("inputGroupSelect02");
      document.getElementById('degreeno').value = e.options[e.selectedIndex].value;
      document.getElementById('gradeno').value = e2.options[e2.selectedIndex].value;
    }
    function search_course() {
      var e = document.getElementById("search_course");
      if (e.value != '') {
        window.location.replace("http://localhost/project/course.php?searchID='"+(e.value)+"'")
      } else {
        var degreeno = document.getElementById("degreeno");
        var gradeno = document.getElementById("gradeno");
        if (degreeno.value == '' && gradeno.value == '') {
          return false;
        } else  {
          str = "";
          var j = 0;
          list_val = [degreeno.value, gradeno.value];
          list_str_val = ["DegNo=", "GradeNo="];
          for (let i = 0; i < list_val.length; i++) {
            if (list_val[i] != "เลือก...") {
              if (j == 0) str += list_str_val[i] + list_val[i];
              else str += "&" + list_str_val[i] + list_val[i];
              j++;
            }
          }
          window.location.replace("http://localhost/project/course.php?"+str);
        }
      }
    }
    function clear_course() {
      window.location.replace("http://localhost/project/course.php")
    }
  </script>
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
    #course td, #course th {
      border: 1px solid #ddd;
      padding: 8px;
    }
    #course th {
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
      <a id="menu" href="project/teacher.php">คุณครู</a>
      <a id="menu" class="active" href="project/course.php">รายวิชา</a>
      <a id="menu" href="project/class_schedule.php">ตารางเรียน</a>
      <a id="menu" href="project/grade.php">ผลการเรียน</a>
      <div class="logout" style="float: right">
        <a id="menu-logout">Logout</a>
      </div>
    </div>
    <div id="page-container" style="margin-top: 15px;">
      <h1>รายวิชา</h1>
      <a class="btn btn-success" style="margin-top: 10px;" href="project/course_add.php"><i class="fa fa-plus"></i> Add</a>
      <hr>
      <form action="project/student.php" method="get">
        <div class="input-group mb-3" style="width: 60%">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">ระดับชั้น</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" onchange="insert_course()">
              <option selected>เลือก...</option>
              <option value="1">ประถมศึกษา</option>
              <option value="2">มัธยมศึกษา</option>
            </select>
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect02">ปีที่</label>
            </div>
            <select class="custom-select" id="inputGroupSelect02" onchange="insert_course()">
              <option selected>เลือก...</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
            </select>
          </div>
          <input type="hidden" name="degreeno" id="degreeno" value="" />
          <input type="hidden" name="gradeno" id="gradeno" value="" />
          <div class="input-group mb-3" style="width: 30%">
            <div class="input-group-prepend">
              <label class="input-group-text" for="search_course"><i class="fa fa-search"></i></label>
            </div>
            <input type="text" class="form-control" id="search_course" placeholder="Course ID" name="search_course">
          </div>
          <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            if (isset($_GET["searchID"]) != '') {
              $sql = "SELECT * FROM course WHERE courseid=".$_GET["searchID"]."";
              echo '<a id="clear_course" class="btn btn-danger" style="color: white; cursor: pointer;" onclick="clear_course()" name="clear_course">Clear</a>
              <a id="search_course" class="btn btn-info" style="color: white; cursor: pointer;" onclick="search_course()" name="search_course">Search</a>
        </form>
        <br>
        <p><b>ผลการค้นหา: รหัสวิชา '.$_GET["searchID"].'</b></p>';
            } else {
              if (isset($_GET["DegNo"]) == '' && isset($_GET["GradeNo"]) == '') {
                $sql = "SELECT * FROM course ORDER BY courseid";
                echo '<a id="search_course" class="btn btn-info" style="color: white; cursor: pointer;" onclick="search_course()" name="search_course">Search</a>
        </form>
        <br>';
              } elseif (isset($_GET["DegNo"]) != '' && isset($_GET["GradeNo"]) == '') {
                $sql = "SELECT * FROM course WHERE degreeno=".$_GET["DegNo"]." ORDER BY courseid";
                echo '<a id="clear_course" class="btn btn-danger" style="color: white; cursor: pointer;" onclick="clear_course()" name="clear_course">Clear</a>
                <a id="search_course" class="btn btn-info" style="color: white; cursor: pointer;" onclick="search_course()" name="search_course">Search</a>
        </form>
        <br>';
              } elseif (isset($_GET["DegNo"]) == '' && isset($_GET["GradeNo"]) != '') {
                $sql = "SELECT * FROM course WHERE grade=".$_GET["GradeNo"]." ORDER BY courseid";
                echo '<a id="clear_course" class="btn btn-danger" style="color: white; cursor: pointer;" onclick="clear_course()" name="clear_course">Clear</a>
                <a id="search_course" class="btn btn-info" style="color: white; cursor: pointer;" onclick="search_course()" name="search_course">Search</a>
        </form>
        <br>';
              } elseif (isset($_GET["DegNo"]) != '' && isset($_GET["GradeNo"]) != '') {
                $sql = "SELECT * FROM course WHERE degreeno=".$_GET["DegNo"]." AND grade=".$_GET["GradeNo"]." ORDER BY courseid";
                echo '<a id="clear_course" class="btn btn-danger" style="color: white; cursor: pointer;" onclick="clear_course()" name="clear_course">Clear</a>
                <a id="search_course" class="btn btn-info" style="color: white; cursor: pointer;" onclick="search_course()" name="search_course">Search</a>
        </form>
        <br>';
              }
            }
            $qry = mysqli_query($objCon, $sql);
            $nrows = mysqli_num_rows($qry);          
            if ($nrows > 0) {
              echo ' <table id="course">
                      <tr>
                        <th>ID</th>
                        <th>ชื่อวิชา</th>
                        <th>สายวิชา</th>
                        <th>หน่วยกิต</th>
                        <th>เปลี่ยนแปลง</th>
                      </tr>'
                ?>
                <?php
                $i = 0;
                while ($rows = mysqli_fetch_array($qry)) {
                  $id = $rows['courseid'];
                  $name = $rows['coursename'];
                  $program = $rows['program'];
                  $credit = $rows['credit'];?>
                  <tr>
                    <td align="center"><?php echo $id; ?></td>
                    <td align="center"><?php echo $name; ?></td>
                    <td align="center"><?php echo $program; ?></td>
                    <td align="center"><?php echo $credit; ?></td>
                    <td align="center">
                      <a class="btn btn-warning" href="project/course_update.php?courseID=<?php echo "'".$id."'" ?>" style="color: white;">Update</a>
                    </td>
                  </tr>
                  <?php
                };
              } else {
                echo "<h1 style='color: red;'>Course Not found in database</h1>";
              }
          ?>
    </div>
  </body>
</html>