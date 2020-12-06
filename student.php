<!DOCTYPE html>
<html lang="th">
<head>
  <title>Student</title>
  <base href="/">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="img/x-icon" href="project/img/student.png">
  <link href="https://fonts.googleapis.com/css?family=Kodchasan&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script>
    function insert_student() {
      var e = document.getElementById("inputGroupSelect01");
      var e2 = document.getElementById("inputGroupSelect02");
      var e3 = document.getElementById("inputGroupSelect03");
      document.getElementById('degreeno').value = e.options[e.selectedIndex].value;
      document.getElementById('gradeno').value = e2.options[e2.selectedIndex].value;
      document.getElementById('roomno').value = e3.options[e3.selectedIndex].value;
    }
    function search_stdid() {
      var e = document.getElementById("search_stdid");
      if (e.value != '') {
        window.location.replace("http://localhost/project/student.php?searchID="+e.value)
      } else {
        var degreeno = document.getElementById("degreeno");
        var gradeno = document.getElementById("gradeno");
        var roomno = document.getElementById("roomno");
        if (degreeno.value == '' && gradeno.value == '' && roomno.value == '') {
          return false;
        } else  {
          str = "";
          var j = 0;
          list_val = [degreeno.value, gradeno.value, roomno.value];
          list_str_val = ["DegNo=", "GradeNo=", "RoomNo="];
          for (let i = 0; i < list_val.length; i++) {
            if (list_val[i] != "เลือก...") {
              if (j == 0) str += list_str_val[i] + list_val[i];
              else str += "&" + list_str_val[i] + list_val[i];
              j++;
            }
          }
          window.location.replace("http://localhost/project/student.php?"+str);
        }
      }
    }
    function clear_stdid() {
      window.location.replace("http://localhost/project/student.php")
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
    #student td, #student th {
      border: 1px solid #ddd;
      padding: 8px;
    }
    #student th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: center;
      background-color: gray;
      color: white;
    }
    .Active {
      color: green;
    }
    .Unactive {
      color: red;
    }
    .Drop {
      color: orange;
    }
    .Graduate {
      color: blue;
    }
  </style>
  <body>
    <div class="topnav">
      <a style="color: white; float: left; text-align: center; padding: 14px 35px; text-decoration: none; font-size: 17px; background-color: gray;">School</a>
      <a id="menu" href="project/main.php">หน้าหลัก</a>
      <a id="menu" class="active" href="project/student.php">นักเรียน</a>
      <a id="menu" href="project/teacher.php">คุณครู</a>
      <a id="menu" href="project/course.php">รายวิชา</a>
      <a id="menu" href="project/class_schedule.php">ตารางเรียน</a>
      <a id="menu" href="project/grade.php">ผลการเรียน</a>
      <div class="logout" style="float: right">
        <a id="menu-logout">Logout</a>
      </div>
    </div>
    <div id="page-container" style="margin-top: 15px;">
      <h1>นักเรียน</h1>
      <a class="btn btn-success" style="margin-top: 10px;" href="project/student_add.php"><i class="fa fa-plus"></i> Add</a>
      <hr>
      <form action="project/student.php" method="get">
        <div class="input-group mb-3" style="width: 60%">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">ระดับชั้น</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" onchange="insert_student()">
              <option selected>เลือก...</option>
              <option value="1">ประถมศึกษา</option>
              <option value="2">มัธยมศึกษา</option>
            </select>
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect02">ปีที่</label>
            </div>
            <select class="custom-select" id="inputGroupSelect02" onchange="insert_student()">
              <option selected>เลือก...</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
            </select>
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect03">ห้อง</label>
            </div>
            <select class="custom-select" id="inputGroupSelect03" onchange="insert_student()">
              <option selected>เลือก...</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
            </select>
          </div>
          <input type="hidden" name="degreeno" id="degreeno" value="" />
          <input type="hidden" name="gradeno" id="gradeno" value="" />
          <input type="hidden" name="roomno" id="roomno" value="" />
          <div class="input-group mb-3" style="width: 30%">
            <div class="input-group-prepend">
              <label class="input-group-text" for="search_stdid"><i class="fa fa-search"></i></label>
            </div>
            <input type="number" class="form-control" id="search_stdid" placeholder="Student ID" name="search_stdid">
          </div>
        <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            if (isset($_GET["searchID"]) != '') {
              $sql = "SELECT * FROM student WHERE studentID=".$_GET["searchID"]."";
              echo '<a id="clear_stdid" class="btn btn-danger" style="color: white; cursor: pointer;" onclick="clear_stdid()" name="clear_stdid">Clear</a>
              <a id="search_stdid" class="btn btn-info" style="color: white; cursor: pointer;" onclick="search_stdid()" name="search_stdid">Search</a>
        </form>
        <br>
        <p><b>ผลการค้นหา: รหัสนักเรียน '.$_GET["searchID"].'</b></p>';
            } else {
              if (isset($_GET["DegNo"]) == '' && isset($_GET["GradeNo"]) == '' && isset($_GET["RoomNo"]) == '') {
                $sql = "SELECT * FROM student ORDER BY studentID";
                echo '<a id="search_stdid" class="btn btn-info" style="color: white; cursor: pointer;" onclick="search_stdid()" name="search_stdid">Search</a>
        </form>
        <br>';
              } else if (isset($_GET["DegNo"]) != '' && isset($_GET["GradeNo"]) == '' && isset($_GET["RoomNo"]) == '') {
                $sql = "SELECT * FROM student WHERE studentID IN (SELECT studentID FROM grade_c WHERE DegreeNo='".$_GET["DegNo"]."') ORDER BY studentID";
                echo '<a id="clear_stdid" class="btn btn-danger" style="color: white; cursor: pointer;" onclick="clear_stdid()" name="clear_stdid">Clear</a>
                <a id="search_stdid" class="btn btn-info" style="color: white; cursor: pointer;" onclick="search_stdid()" name="search_stdid">Search</a>
        </form>
        <br>';
        if ($_GET["DegNo"] == '1') echo '<p><b>ผลการค้นหา: นักเรียนระดับชั้น ประถมศึกษา</b></p>';
        else echo '<p><b>ผลการค้นหา: นักเรียนระดับชั้น มัธยมศึกษา</b></p>';
              } else if (isset($_GET["DegNo"]) != '' && isset($_GET["GradeNo"]) != '' && isset($_GET["RoomNo"]) == '') {
                $sql = "SELECT * FROM student WHERE studentID IN (SELECT studentID FROM grade_c WHERE DegreeNo='".$_GET["DegNo"]."' AND GradeNo='".$_GET["GradeNo"]."') ORDER BY studentID";
                echo '<a id="clear_stdid" class="btn btn-danger" style="color: white; cursor: pointer;" onclick="clear_stdid()" name="clear_stdid">Clear</a>
                <a id="search_stdid" class="btn btn-info" style="color: white; cursor: pointer;" onclick="search_stdid()" name="search_stdid">Search</a>
        </form>
        <br>';
        if ($_GET["DegNo"] == '1') echo '<p><b>ผลการค้นหา: นักเรียนระดับชั้น ประถมศึกษา ปีที่ '.$_GET["GradeNo"].'</b></p>';
        else echo '<p><b>ผลการค้นหา: นักเรียนระดับชั้น มัธยมศึกษา ปีที่ '.$_GET["GradeNo"].'</b></p>';
              } else if (isset($_GET["DegNo"]) != '' && isset($_GET["GradeNo"]) != '' && isset($_GET["RoomNo"]) != '') {
                $sql = "SELECT * FROM student WHERE studentID IN (SELECT studentID FROM grade_c WHERE DegreeNo='".$_GET["DegNo"]."' AND GradeNo='".$_GET["GradeNo"]."' AND RoomNumber='".$_GET["RoomNo"]."') ORDER BY studentID";
                echo '<a id="clear_stdid" class="btn btn-danger" style="color: white; cursor: pointer;" onclick="clear_stdid()" name="clear_stdid">Clear</a>
                <a id="search_stdid" class="btn btn-info" style="color: white; cursor: pointer;" onclick="search_stdid()" name="search_stdid">Search</a>
        </form>
        <br>';
        if ($_GET["DegNo"] == '1') echo '<p><b>ผลการค้นหา: นักเรียนระดับชั้น ประถมศึกษา ปีที่ '.$_GET["GradeNo"].' ห้อง '.$_GET["RoomNo"].'</b></p>';
        else echo '<p><b>ผลการค้นหา: นักเรียนระดับชั้น มัธยมศึกษา ปีที่ '.$_GET["GradeNo"].' ห้อง '.$_GET["RoomNo"].'</b></p>';
              } else if (isset($_GET["DegNo"]) != '' && isset($_GET["GradeNo"]) == '' && isset($_GET["RoomNo"]) != '') {
                $sql = "SELECT * FROM student WHERE studentID IN (SELECT studentID FROM grade_c WHERE DegreeNo='".$_GET["DegNo"]."' AND RoomNumber='".$_GET["RoomNo"]."') ORDER BY studentID";
                echo '<a id="clear_stdid" class="btn btn-danger" style="color: white; cursor: pointer;" onclick="clear_stdid()" name="clear_stdid">Clear</a>
                <a id="search_stdid" class="btn btn-info" style="color: white; cursor: pointer;" onclick="search_stdid()" name="search_stdid">Search</a>
        </form>
        <br>';
        if ($_GET["DegNo"] == '1') echo '<p><b>ผลการค้นหา: นักเรียนระดับชั้น ประถมศึกษา ห้อง '.$_GET["RoomNo"].'</b></p>';
        else echo '<p><b>ผลการค้นหา: นักเรียนระดับชั้น มัธยมศึกษา ห้อง '.$_GET["RoomNo"].'</b></p>';
              } else if (isset($_GET["DegNo"]) == '' && isset($_GET["GradeNo"]) != '' && isset($_GET["RoomNo"]) == '') {
                $sql = "SELECT * FROM student WHERE studentID IN (SELECT studentID FROM grade_c WHERE GradeNo='".$_GET["GradeNo"]."') ORDER BY studentID";
                echo '<a id="clear_stdid" class="btn btn-danger" style="color: white; cursor: pointer;" onclick="clear_stdid()" name="clear_stdid">Clear</a>
                <a id="search_stdid" class="btn btn-info" style="color: white; cursor: pointer;" onclick="search_stdid()" name="search_stdid">Search</a>
        </form>
        <br>';
        echo '<p><b>ผลการค้นหา: นักเรียนประถมศึกษาหรือมัธยมศึกษา ปีที่ '.$_GET["GradeNo"].'</b></p>';
              } else if (isset($_GET["DegNo"]) == '' && isset($_GET["GradeNo"]) != '' && isset($_GET["RoomNo"]) != '') {
                $sql = "SELECT * FROM student WHERE studentID IN (SELECT studentID FROM grade_c WHERE GradeNo='".$_GET["GradeNo"]."' AND RoomNumber='".$_GET["RoomNo"]."') ORDER BY studentID";
                echo '<a id="clear_stdid" class="btn btn-danger" style="color: white; cursor: pointer;" onclick="clear_stdid()" name="clear_stdid">Clear</a>
                <a id="search_stdid" class="btn btn-info" style="color: white; cursor: pointer;" onclick="search_stdid()" name="search_stdid">Search</a>
        </form>
        <br>';
        echo '<p><b>ผลการค้นหา: นักเรียนประถมศึกษาหรือมัธยมศึกษา ปีที่ '.$_GET["GradeNo"].' ห้อง '.$_GET["RoomNo"].'</b></p>';
              }  else if (isset($_GET["DegNo"]) == '' && isset($_GET["GradeNo"]) == '' && isset($_GET["RoomNo"]) != '') {
                $sql = "SELECT * FROM student WHERE studentID IN (SELECT studentID FROM grade_c WHERE RoomNumber='".$_GET["RoomNo"]."') ORDER BY studentID";
                echo '<a id="clear_stdid" class="btn btn-danger" style="color: white; cursor: pointer;" onclick="clear_stdid()" name="clear_stdid">Clear</a>
                <a id="search_stdid" class="btn btn-info" style="color: white; cursor: pointer;" onclick="search_stdid()" name="search_stdid">Search</a>
        </form>
        <br>';
        echo '<p><b>ผลการค้นหา: นักเรียนประถมศึกษาหรือมัธยมศึกษา ห้อง '.$_GET["RoomNo"].'</b></p>';
              }
            }

            $qry = mysqli_query($objCon, $sql);
            $nrows = mysqli_num_rows($qry);
            if ($nrows > 0) {
              echo ' <table id="student">
                      <tr>
                        <th>No.</th>
                        <th>STUDENT ID</th>
                        <th>ชื่อ-นามสกุล</th>
                        <th>สถานะการศึกษา</th>
                        <th>เปลี่ยนแปลง</th>
                      </tr>'
                ?>
                <?php
                $i = 0;
                while ($rows = mysqli_fetch_array($qry)) {
                    $id = $rows['studentID'];
                    $nt = $rows['ntitle'];
                    $fn = $rows['stdfname'];
                    $ln = $rows['stdlname'];
                    $address = $rows['address'];
                    $phone = $rows['phone'];
                    $pname = $rows['pname'];
                    $pphone = $rows['pphone'];
                    $disease = $rows['disease'];
                    $s = $rows['status'];
                    $i += 1;
                    ?>
                    <tr>
                      <td align="center"><?php echo $i; ?></td>
                      <td><?php echo $id; ?></td>
                      <td><?php echo $nt ?><?php echo $fn ?> <?php echo $ln; ?></td>
                      <td class="<?php echo $s ?>" style="text-align: center;"><b><?php echo $s ?></b></td>
                      <td align="center">
                        <a class="btn btn-warning" href="project/student_update.php?studentID=<?php echo $id ?>" style="color: white;">Update</a>
                      </td>
                    </tr>
                  <?php      
                }
                echo "</table>";
            } else {
              echo "<h1 style='color: red;'>Student Not found in database</h1>";
            }
          ?>
    </div>
  </body>
</html>