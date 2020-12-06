<!DOCTYPE html>
<html lang="th">
<head>
  <title>Grade</title>
  <base href="/">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="img/x-icon" href="project/img/icon.ico">
  <link href="https://fonts.googleapis.com/css?family=Kodchasan&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript">
    function insert_student() {
      var e = document.getElementById("inputGroupSelect01");
      var e2 = document.getElementById("inputGroupSelect02");
      var e3 = document.getElementById("inputGroupSelect03");
      var e4 = document.getElementById("inputGroupSelect04");
      var e5 = document.getElementById("inputGroupSelectc");
      document.getElementById('degreeno').value = e.options[e.selectedIndex].value;
      document.getElementById('gradeno').value = e2.options[e2.selectedIndex].value;
      document.getElementById('roomno').value = e3.options[e3.selectedIndex].value;
      document.getElementById('semesterid').value = e4.options[e4.selectedIndex].value;
      document.getElementById('courseid').value = "'"+e5.options[e5.selectedIndex].value.split(":")[0]+"'";
    }
    function search_grade() {
      var degreeno = document.getElementById("degreeno");
      var gradeno = document.getElementById("gradeno");
      var roomno = document.getElementById("roomno");
      var courseid = document.getElementById("courseid");
      var semid = document.getElementById("semesterid");
      var sem = semid.value.split("_");
      if (sem[0] == '' || sem[1] == '' || courseid.value == '' || degreeno.value == '' || gradeno.value == '' || roomno.value == '') {
        return false;
      } else  {
        str = "";
        var j = 0;
        list_val = [sem[0], sem[1], courseid.value, degreeno.value, gradeno.value, roomno.value];
        list_str_val = ["Year=", "SemesterNo=", "CourseID=", "DegNo=", "GradeNo=", "RoomNo="];
        for (let i = 0; i < list_val.length; i++) {
          if (list_val[i] != "เลือก...") {
            if (j == 0) str += list_str_val[i] + list_val[i];
            else str += "&" + list_str_val[i] + list_val[i];
            j++;
          }
        }
        window.location.replace("http://localhost/project/grade.php?"+str);
      }
    }
    function clear_grade() {
      window.location.replace("http://localhost/project/grade.php")
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
    #grade td, #grade th {
      border: 1px solid #ddd;
      padding: 8px;
    }
    #grade th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: center;
      background-color: gray;
      color: white;
    }
    th#point {
      text-align: center;
      padding: 0;
    }
  </style>
  <body>
    <div class="topnav">
      <a style="color: white; float: left; text-align: center; padding: 14px 35px; text-decoration: none; font-size: 17px; background-color: gray;">School</a>
      <a id="menu" href="project/main.php">หน้าหลัก</a>
      <a id="menu" href="project/student.php">นักเรียน</a>
      <a id="menu" href="project/teacher.php">คุณครู</a>
      <a id="menu" href="project/course.php">รายวิชา</a>
      <a id="menu" href="project/class_schedule.php">ตารางเรียน</a>
      <a id="menu" class="active" href="project/grade.php">ผลการเรียน</a>
      <div class="logout" style="float: right">
        <a id="menu-logout">Logout</a>
      </div>
    </div>
    <div id="page-container" style="margin-top: 15px;">
      <h1>ผลการเรียน</h1>
      <hr>
      <div class="form-group">
      <div id="grade" class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect04">ปีการศึกษา/เทอม</label>
        </div>
        <select class="custom-select" id="inputGroupSelect04" onchange="insert_student()">
            <option selected>เลือก...</option>
            <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            $sql = "SELECT * FROM semester ORDER BY SemID";

            $qry = mysqli_query($objCon, $sql);
            $nrows = mysqli_num_rows($qry);
            if ($nrows > 0) {
                ?>
                <?php
                $i = 0;
                while ($rows = mysqli_fetch_array($qry)) {
                  $year = $rows['Year'];
                  $term = $rows['SemesterNo'];
                  echo '<option value="'.$year.'_'.$term.'">'.$year.'/'.$term.'</option>';
                ?>
                <?php
              }
            }
            ?>
          </select>
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelectc">รายวิชา</label>
          </div>
          <select class="custom-select" id="inputGroupSelectc" onchange="insert_student()">
            <option selected>เลือก...</option>
            <?php
              $serverName = "localhost";
              $userName = "root";
              $userPassword = "";
              $dbName = "school";

              $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

              $sql = "SELECT * FROM course";
              $qry = mysqli_query($objCon, $sql);
              $nrows = mysqli_num_rows($qry);
              if ($nrows > 0) {
                  ?>
                  <?php
                  while ($rows = mysqli_fetch_array($qry)) {
                    $id = $rows['courseid'];
                    $name = $rows['coursename'];
                    $degreeno = $rows['degreeno'];
                    $grade = $rows['grade'];
                    ?>
                    <?php
                    echo '<option value="'.$id.':'.$name.'">'.$id.': '.$name.'</option>';   
                  }
              }
              ?>
          </select>
        </div>
        <div class="input-group mb-3">
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
          <input type="hidden" name="semesterid" id="semesterid" value="" />
          <input type="hidden" name="courseid" id="courseid" value="" />
        <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            if (isset($_GET["Year"]) == '' && isset($_GET["SemesterNo"]) == '' && isset($_GET["CourseID"]) == '' && isset($_GET["DegNo"]) == '' && isset($_GET["GradeNo"]) == '' && isset($_GET["RoomNo"]) == '') {
              echo '
              <a id="search_grade" class="btn btn-info" style="color: white; cursor: pointer;" onclick="search_grade()" name="search_grade">Search</a>
              </form>
        <br>';
            } else {
              $sql = "SELECT * FROM student s
              INNER JOIN grade_c g ON g.studentID=s.studentID AND g.GradeNo=".$_GET["GradeNo"]." AND g.DegreeNo=".$_GET["DegNo"]." AND g.RoomNumber=".$_GET["RoomNo"]."
              INNER JOIN schedule sch ON g.GradeNo=sch.gradeno AND g.DegreeNo=sch.degreeno AND g.RoomNumber=sch.roomname AND sch.Year=".$_GET["Year"]." AND sch.SemesterNo=".$_GET["SemesterNo"]." AND sch.scheduleid IN (SELECT idschedule FROM schedule_detail WHERE courseid=".$_GET["CourseID"].") ORDER BY s.studentID";
              echo '<a id="clear_grade" class="btn btn-danger" style="color: white; cursor: pointer;" onclick="clear_grade()" name="clear_grade">Clear</a>
                <a id="search_grade" class="btn btn-info" style="color: white; cursor: pointer;" onclick="search_grade()" name="search_grade">Search</a>
        </form>
        <br>';

            $qry = mysqli_query($objCon, $sql);
            $nrows = mysqli_num_rows($qry);
            if ($nrows > 0) {
              echo '<br> <table id="grade">
                     <tr>
                      <th>No.</th>
                      <th>ID</th>
                      <th>ชื่อ-นามสกุล</th>
                      <th>คะแนนงาน</th>
                      <th>Midterm</th>
                      <th>Final</th>
                      <th>เกรด</th>
                      <th>เปลี่ยนแปลง</th>
                    </tr>';
                ?>
                <?php
                $i = 0;
                while ($rows = mysqli_fetch_array($qry)) {
                    $id = $rows['studentID'];
                    $nt = $rows['ntitle'];
                    $fn = $rows['stdfname'];
                    $ln = $rows['stdlname'];
                    $i += 1;
                    $sql_score = "SELECT * FROM score WHERE scoreid=CONCAT('".$_GET["Year"]."','_','".$_GET["SemesterNo"]."','_','$id','_',".$_GET["CourseID"].")";
                    $qry_score = mysqli_query($objCon, $sql_score);
                    $nrows_score = mysqli_num_rows($qry_score);
                    if ($nrows_score == 0) {
                      $add_score = "INSERT INTO score (scoreid, studentid, courseid) VALUES (CONCAT('".$_GET["Year"]."','_','".$_GET["SemesterNo"]."','_','$id','_',".$_GET["CourseID"]."), '$id', ".$_GET["CourseID"].")";

                      $add_score_detial = "INSERT INTO detail_score (scoreid, normal_score, midterm_score, final_score) VALUES (CONCAT('".$_GET["Year"]."','_','".$_GET["SemesterNo"]."','_','$id','_',".$_GET["CourseID"]."), 0, 0, 0)";

                      if($objCon->query($add_score) && $objCon->query($add_score_detial)) {
                        echo "<script>location.reload();</script>";
                      } else {
                        echo "ERROR: Could not able to execute $add_score_detial. " . mysqli_error($objCon);
                      }
                    }
                    ?>
                    <tr>
                      <td align='center'><?php echo $i; ?></td>
                      <td><?php echo $id; ?></td>
                      <td><?php echo $nt ?><?php echo $fn ?> <?php echo $ln; ?></td>
                    <?php
                    while ($rows_score = mysqli_fetch_array($qry_score)) {
                      $id_score = $rows_score['scoreid'];
                      $sql_score_detail = "SELECT * FROM detail_score WHERE scoreid='$id_score'";
                      $qry_score_detail = mysqli_query($objCon, $sql_score_detail);
                      $nrows_score_detail = mysqli_num_rows($qry_score_detail);
                      ?>
                      <?php
                      if ($nrows_score_detail > 0) {
                        ?>
                        <?php
                        while ($rows_score_detail = mysqli_fetch_array($qry_score_detail)) {
                          ?>
                            <form name="myForm" action="project/update_grade.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="scoreid" id="scoreid" value=<?php echo $rows_score_detail["scoreid"]?> />
                            <input type="hidden" name="year" id="year" value=<?php echo $_GET["Year"]?> />
                            <input type="hidden" name="semesterno" id="semesterno" value=<?php echo $_GET["SemesterNo"]?> />
                            <input type="hidden" name="courseid_g" id="courseid_g" value=<?php echo $_GET["CourseID"]?> />
                            <input type="hidden" name="degno" id="degno" value=<?php echo $_GET["DegNo"]?> />
                            <input type="hidden" name="gradeno_g" id="gradeno_g" value=<?php echo $_GET["GradeNo"]?> />
                            <input type="hidden" name="roomno_g" id="roomno_g" value=<?php echo $_GET["RoomNo"]?> />
                            <td align="center" style="max-width: 100px;">
                              <?php
                              if ($rows_score_detail['grade'] == '' || $rows_score_detail['grade'] == '0.0') {
                                ?>
                                <?php
                                if ($rows_score_detail['grade'] == '0.0') {
                                  echo "<input name='midterm_score' id='midterm_score' type='hidden' value='".$rows_score_detail['midterm_score']."'/>";
                                  echo "<input name='final_score' id='final_score' type='hidden' value='".$rows_score_detail['final_score']."'/>";
                                }
                                echo "<input name='normal_score' id='normal_score' type=number style='width:50%'' min='0' max='50' value='".$rows_score_detail['normal_score']."'/>"?>
                                <?php
                              } else {
                                echo "<b>".$rows_score_detail['normal_score']."</b>";
                              }?>
                              </td>
                            <td align="center" style="max-width: 100px;">
                              <?php
                              if ($rows_score_detail['grade'] == '') {
                                ?>
                                <?php
                                echo "<input name='midterm_score' id='midterm_score' type=number style='width:50%'' min='0' max='25' value='".$rows_score_detail['midterm_score']."'/>"?>
                                <?php
                              } else {
                                echo "<b>".$rows_score_detail['midterm_score']."</b>";
                              }?>
                              </td>
                            <td align="center" style="max-width: 100px;">
                              <?php
                              if ($rows_score_detail['grade'] == '') {
                                ?>
                                <?php
                                echo "<input name='final_score' id='final_score' type=number style='width:50%'' min='0' max='25' value='".$rows_score_detail['final_score']."'/>"?>
                                <?php
                              } else {
                                echo "<b>".$rows_score_detail['final_score']."</b>";
                              }?>
                            <td align="center" style="max-width: 100px;">
                              <?php
                              $point = $rows_score_detail['normal_score']+$rows_score_detail['midterm_score']+$rows_score_detail['final_score'];
                              if ($rows_score_detail['grade'] != '') {
                                echo "<b>".$rows_score_detail['grade']."</b>";
                              } else {
                                echo '<button type="submit" name="action" value="Send" class="btn btn-success" style="color: white;">Send</button>';
                              }?>
                              </td>
                             <td align="center" style="max-width: 100px;">
                              <?php
                                if ($rows_score_detail['grade'] == '') {
                                  echo '<button type="submit" name="action" value="Update" class="btn btn-warning" style="color: white;">Update</button>';
                                } elseif ($rows_score_detail['grade'] == '0.0') {
                                  echo '<button type="submit" name="action" value="Repair" class="btn btn-danger" style="color: white;">Repair</button>';
                                }
                              ?>
                            </td>
                          </form>
                          <?php
                        }
                      }
                    }  
                }
                echo "</table>";
            } else {
              echo "<h1 style='color: red;'>Student not enroll class ".$_GET["CourseID"]."</h1>";
            }
          }
          ?>
    </div>
  </body>
</html>