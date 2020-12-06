<!DOCTYPE html>
<html lang="th">
<head>
  <title>Class Schedule</title>
  <base href="/">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="img/x-icon" href="project/img/icon.ico">
  <link href="https://fonts.googleapis.com/css?family=Kodchasan&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript">
    $(function(){
      var d = new Date();
      var n = d.getFullYear();
      $("input[type='number']").prop('min',n);
      if (window.location.href.split("?")[1] != undefined) {
        document.getElementById("schedule").style.display = "block";
      }
    });
    a = {"1_1": [], "1_2": [], "1_3": [], "1_4": [], "1_5": [], "2_1": [], "2_2": [], "2_3": [], "2_4": [], "2_5": [], "3_1": [], "3_2": [], "3_3": [], "3_4": [], "3_5": [], "4_1": [], "4_2": [], "4_3": [], "4_4": [], "4_5": [], "5_1": [], "5_2": [], "5_3": [], "5_4": [], "5_5": [], "6_1": [], "6_2": [], "6_3": [], "6_4": [], "6_5": []}
    var time_list = ["08.30-09.30", "09.30-10.30", "10.30-11.30", "13.00-14.00", "14.00-15.00", "15.00-16.00"];
    var day_list = ["วันจันทร์", "วันอังคาร", "วันพุธ", "วันพฤหัสบดี", "วันศุกร์"];
    function search_schedule() {
      var e = document.getElementById("inputGroupSelect04");
      console.log(e.options[e.selectedIndex].value)
      if (e.options[e.selectedIndex].value != "เลือก...") {
        let value = e.options[e.selectedIndex].value.split("_");
        window.location.replace("http://localhost/project/class_schedule.php?"+"Year="+value[0]+"&Term="+value[1]+"&DegNo="+value[2]+"&GradeNo="+value[3]+"&RoomNo="+value[4]);
      } else {
        document.getElementById("schedule").style.display = "none";
      }
    }
    function clear_schedule() {
      window.location.replace("http://localhost/project/class_schedule.php")
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
      width: 80%;
      -webkit-box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
      box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
    }
    #schedule td, #schedule th {
      border: 1px solid #ddd;
      padding: 30px;
      font-weight: bold;
      text-align: center;
    }
    #schedule td#class {
      text-align: center;
      color: black;
      font-weight: bold;
    }
    #schedule td#break {
      border-style: solid;
      border-width: 0;
      padding: 8px;
      text-align: center;
    }
    #schedule td#break-last {
      border-style: solid;
      border-width: 0 0 1px 0;
      border-color: #ddd;
      padding: 8px;
      text-align: center;
    }
    #schedule th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
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
      <a id="menu" href="project/course.php">รายวิชา</a>
      <a id="menu" class="active" href="project/class_schedule.php">ตารางเรียน</a>
      <a id="menu" href="project/grade.php">ผลการเรียน</a>
      <div class="logout" style="float: right">
        <a id="menu-logout">Logout</a>
      </div>
    </div>
    <div id="page-container" style="margin-top: 25px;">
      <h1>ตารางเรียน</h1>
      <a class="btn btn-success" style="margin-top: 10px;" href="project/class_schedule_add.php">Add</a>
      <a class="btn btn-warning" style="margin-top: 10px; color: white;" href="project/class_schedule_update.php">Update</a>
      <hr>
      <form name="myForm" action="project/insert_schedule.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
      <div class="form-group">
        <div id="staff" class="input-group mb-3">
          <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            echo '<div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect04">ตารางเรียน</label>
          </div>
          <select class="custom-select" id="inputGroupSelect04">
            <option selected>เลือก...</option>';

            $sql = "SELECT * FROM schedule ORDER BY scheduleid";

            $qry = mysqli_query($objCon, $sql);
            $nrows = mysqli_num_rows($qry);
            if ($nrows > 0) {
                ?>
                <?php
                $i = 0;
                while ($rows = mysqli_fetch_array($qry)) {
                  $year = $rows['Year'];
                  $term = $rows['SemesterNo'];
                  $degreeno = $rows['degreeno'];
                  $gradeno = $rows['gradeno'];
                  $roomname = $rows['roomname'];
                  if ($degreeno == '1')
                    echo '<option value="'.$year.'_'.$term.'_'.$degreeno.'_'.$gradeno.'_'.$roomname.'">'.$year.'/'.$term.' ประถมศึกษาปีที่ '.$gradeno.' ห้อง '.$roomname.'</option>';
                  else
                    echo '<option value="'.$year.'_'.$term.'_'.$degreeno.'_'.$gradeno.'_'.$roomname.'">'.$year.'/'.$term.' มัธยมศึกษาปีที่ '.$gradeno.' ห้อง '.$roomname.'</option>';
                ?>
                <?php
              }
            }
            ?>
          <?php echo '</select>';?>
            <input type="hidden" name="semesterid" id="semesterid" value="" />
            <input type="hidden" name="degreeno" id="degreeno" value="" />
            <input type="hidden" name="gradeno" id="gradeno" value="" />
            <input type="hidden" name="roomno" id="roomno" value="" />
        </div>
      </div>
      <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            if (isset($_GET["Year"]) == '' && isset($_GET["SemesterNo"]) == '' && isset($_GET["DegNo"]) == '' && isset($_GET["GradeNo"]) == '' && isset($_GET["RoomNo"]) == '') {
              echo '
              <a id="search_schedule" class="btn btn-info" style="color: white; cursor: pointer;" onclick="search_schedule()" name="search_schedule">Search</a>
              </form>
        <br>
        <table id="schedule" style="display: none;">';
            } else {
              echo '<a id="clear_schedule" class="btn btn-danger" style="color: white; cursor: pointer;" onclick="clear_schedule()" name="clear_schedule">Clear</a>
                <a id="search_schedule" class="btn btn-info" style="color: white; cursor: pointer;" onclick="search_schedule()" name="search_schedule">Search</a>
        </form>
        <br>
        <table id="schedule" style="display: block;">';
            }
            ?>
      
        <tr>
          <th>วัน / เวลา</th>
          <th>08.30-09.30</th>
          <th>09.30-10.30</th>
          <th>10.30-11.30</th>
          <th>11.30-13.00</th>
          <th>13.00-14.00</th>
          <th>14.00-15.00</th>
          <th>15.00-16.00</th>
        </tr>
        <tr>
          <td>วันจันทร์</td>
          <td id="class">
            <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            $sql = "SELECT * FROM schedule_detail WHERE idschedule=CONCAT(".$_GET["Year"].",'_',".$_GET["Term"].",'_',".$_GET["GradeNo"].",'_',".$_GET["RoomNo"].",'_',".$_GET["DegNo"].") AND timeno='1' AND dayno='1'";

            $qry = mysqli_query($objCon, $sql);
            $nrows = mysqli_num_rows($qry);
            if ($nrows > 0) {
              ?>
              <?php
              $i = 0;
              while ($rows = mysqli_fetch_array($qry)) {
                $id = $rows['courseid'];
                ?>
                <?php
                $sql_c = "SELECT * FROM course WHERE courseid='$id'";
                $qry_2 = mysqli_query($objCon, $sql_c);
                $nrows_2 = mysqli_num_rows($qry_2);
                if ($nrows_2 > 0) {
                  ?>
                  <?php
                  while ($rows_2 = mysqli_fetch_array($qry_2)) {
                    $cn = $rows_2['coursename'];
                    ?>
                    <?php
                    echo "<p>$id</p>
                    <a>$cn</a>";
                  }
                }
              }
            }
            ?>
          </td>
          <td id="class">
            <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            $sql = "SELECT * FROM schedule_detail WHERE idschedule=CONCAT(".$_GET["Year"].",'_',".$_GET["Term"].",'_',".$_GET["GradeNo"].",'_',".$_GET["RoomNo"].",'_',".$_GET["DegNo"].") AND timeno='2' AND dayno='1'";

            $qry = mysqli_query($objCon, $sql);
            $nrows = mysqli_num_rows($qry);
            if ($nrows > 0) {
              ?>
              <?php
              $i = 0;
              while ($rows = mysqli_fetch_array($qry)) {
                $id = $rows['courseid'];
                ?>
                <?php
                $sql_c = "SELECT * FROM course WHERE courseid='$id'";
                $qry_2 = mysqli_query($objCon, $sql_c);
                $nrows_2 = mysqli_num_rows($qry_2);
                if ($nrows_2 > 0) {
                  ?>
                  <?php
                  while ($rows_2 = mysqli_fetch_array($qry_2)) {
                    $cn = $rows_2['coursename'];
                    ?>
                    <?php
                    echo "<p>$id</p>
                    <a>$cn</a>";
                  }
                }
              }
            }
            ?>
          <td id="class">
            <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            $sql = "SELECT * FROM schedule_detail WHERE idschedule=CONCAT(".$_GET["Year"].",'_',".$_GET["Term"].",'_',".$_GET["GradeNo"].",'_',".$_GET["RoomNo"].",'_',".$_GET["DegNo"].") AND timeno='3' AND dayno='1'";

            $qry = mysqli_query($objCon, $sql);
            $nrows = mysqli_num_rows($qry);
            if ($nrows > 0) {
              ?>
              <?php
              $i = 0;
              while ($rows = mysqli_fetch_array($qry)) {
                $id = $rows['courseid'];
                ?>
                <?php
                $sql_c = "SELECT * FROM course WHERE courseid='$id'";
                $qry_2 = mysqli_query($objCon, $sql_c);
                $nrows_2 = mysqli_num_rows($qry_2);
                if ($nrows_2 > 0) {
                  ?>
                  <?php
                  while ($rows_2 = mysqli_fetch_array($qry_2)) {
                    $cn = $rows_2['coursename'];
                    ?>
                    <?php
                    echo "<p>$id</p>
                    <a>$cn</a>";
                  }
                }
              }
            }
            ?>
          </td>
          <td id="break"></td>
          <td id="class">
            <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            $sql = "SELECT * FROM schedule_detail WHERE idschedule=CONCAT(".$_GET["Year"].",'_',".$_GET["Term"].",'_',".$_GET["GradeNo"].",'_',".$_GET["RoomNo"].",'_',".$_GET["DegNo"].") AND timeno='4' AND dayno='1'";

            $qry = mysqli_query($objCon, $sql);
            $nrows = mysqli_num_rows($qry);
            if ($nrows > 0) {
              ?>
              <?php
              $i = 0;
              while ($rows = mysqli_fetch_array($qry)) {
                $id = $rows['courseid'];
                ?>
                <?php
                $sql_c = "SELECT * FROM course WHERE courseid='$id'";
                $qry_2 = mysqli_query($objCon, $sql_c);
                $nrows_2 = mysqli_num_rows($qry_2);
                if ($nrows_2 > 0) {
                  ?>
                  <?php
                  while ($rows_2 = mysqli_fetch_array($qry_2)) {
                    $cn = $rows_2['coursename'];
                    ?>
                    <?php
                    echo "<p>$id</p>
                    <a>$cn</a>";
                  }
                }
              }
            }
            ?>
          </td>
          <td id="class">
            <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            $sql = "SELECT * FROM schedule_detail WHERE idschedule=CONCAT(".$_GET["Year"].",'_',".$_GET["Term"].",'_',".$_GET["GradeNo"].",'_',".$_GET["RoomNo"].",'_',".$_GET["DegNo"].") AND timeno='5' AND dayno='1'";

            $qry = mysqli_query($objCon, $sql);
            $nrows = mysqli_num_rows($qry);
            if ($nrows > 0) {
              ?>
              <?php
              $i = 0;
              while ($rows = mysqli_fetch_array($qry)) {
                $id = $rows['courseid'];
                ?>
                <?php
                $sql_c = "SELECT * FROM course WHERE courseid='$id'";
                $qry_2 = mysqli_query($objCon, $sql_c);
                $nrows_2 = mysqli_num_rows($qry_2);
                if ($nrows_2 > 0) {
                  ?>
                  <?php
                  while ($rows_2 = mysqli_fetch_array($qry_2)) {
                    $cn = $rows_2['coursename'];
                    ?>
                    <?php
                    echo "<p>$id</p>
                    <a>$cn</a>";
                  }
                }
              }
            }
            ?>
          </td>
          <td id="class">
            <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            $sql = "SELECT * FROM schedule_detail WHERE idschedule=CONCAT(".$_GET["Year"].",'_',".$_GET["Term"].",'_',".$_GET["GradeNo"].",'_',".$_GET["RoomNo"].",'_',".$_GET["DegNo"].") AND timeno='6' AND dayno='1'";

            $qry = mysqli_query($objCon, $sql);
            $nrows = mysqli_num_rows($qry);
            if ($nrows > 0) {
              ?>
              <?php
              $i = 0;
              while ($rows = mysqli_fetch_array($qry)) {
                $id = $rows['courseid'];
                ?>
                <?php
                $sql_c = "SELECT * FROM course WHERE courseid='$id'";
                $qry_2 = mysqli_query($objCon, $sql_c);
                $nrows_2 = mysqli_num_rows($qry_2);
                if ($nrows_2 > 0) {
                  ?>
                  <?php
                  while ($rows_2 = mysqli_fetch_array($qry_2)) {
                    $cn = $rows_2['coursename'];
                    ?>
                    <?php
                    echo "<p>$id</p>
                    <a>$cn</a>";
                  }
                }
              }
            }
            ?>
          </td>
        </tr>
        <tr>
          <td>วันอังคาร</td>
          <td id="class">
            <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            $sql = "SELECT * FROM schedule_detail WHERE idschedule=CONCAT(".$_GET["Year"].",'_',".$_GET["Term"].",'_',".$_GET["GradeNo"].",'_',".$_GET["RoomNo"].",'_',".$_GET["DegNo"].") AND timeno='1' AND dayno='2'";

            $qry = mysqli_query($objCon, $sql);
            $nrows = mysqli_num_rows($qry);
            if ($nrows > 0) {
              ?>
              <?php
              $i = 0;
              while ($rows = mysqli_fetch_array($qry)) {
                $id = $rows['courseid'];
                ?>
                <?php
                $sql_c = "SELECT * FROM course WHERE courseid='$id'";
                $qry_2 = mysqli_query($objCon, $sql_c);
                $nrows_2 = mysqli_num_rows($qry_2);
                if ($nrows_2 > 0) {
                  ?>
                  <?php
                  while ($rows_2 = mysqli_fetch_array($qry_2)) {
                    $cn = $rows_2['coursename'];
                    ?>
                    <?php
                    echo "<p>$id</p>
                    <a>$cn</a>";
                  }
                }
              }
            }
            ?>
          </td>
          <td id="class">
            <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            $sql = "SELECT * FROM schedule_detail WHERE idschedule=CONCAT(".$_GET["Year"].",'_',".$_GET["Term"].",'_',".$_GET["GradeNo"].",'_',".$_GET["RoomNo"].",'_',".$_GET["DegNo"].") AND timeno='2' AND dayno='2'";

            $qry = mysqli_query($objCon, $sql);
            $nrows = mysqli_num_rows($qry);
            if ($nrows > 0) {
              ?>
              <?php
              $i = 0;
              while ($rows = mysqli_fetch_array($qry)) {
                $id = $rows['courseid'];
                ?>
                <?php
                $sql_c = "SELECT * FROM course WHERE courseid='$id'";
                $qry_2 = mysqli_query($objCon, $sql_c);
                $nrows_2 = mysqli_num_rows($qry_2);
                if ($nrows_2 > 0) {
                  ?>
                  <?php
                  while ($rows_2 = mysqli_fetch_array($qry_2)) {
                    $cn = $rows_2['coursename'];
                    ?>
                    <?php
                    echo "<p>$id</p>
                    <a>$cn</a>";
                  }
                }
              }
            }
            ?>
          </td>
          <td id="class">
            <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            $sql = "SELECT * FROM schedule_detail WHERE idschedule=CONCAT(".$_GET["Year"].",'_',".$_GET["Term"].",'_',".$_GET["GradeNo"].",'_',".$_GET["RoomNo"].",'_',".$_GET["DegNo"].") AND timeno='3' AND dayno='2'";

            $qry = mysqli_query($objCon, $sql);
            $nrows = mysqli_num_rows($qry);
            if ($nrows > 0) {
              ?>
              <?php
              $i = 0;
              while ($rows = mysqli_fetch_array($qry)) {
                $id = $rows['courseid'];
                ?>
                <?php
                $sql_c = "SELECT * FROM course WHERE courseid='$id'";
                $qry_2 = mysqli_query($objCon, $sql_c);
                $nrows_2 = mysqli_num_rows($qry_2);
                if ($nrows_2 > 0) {
                  ?>
                  <?php
                  while ($rows_2 = mysqli_fetch_array($qry_2)) {
                    $cn = $rows_2['coursename'];
                    ?>
                    <?php
                    echo "<p>$id</p>
                    <a>$cn</a>";
                  }
                }
              }
            }
            ?>
          </td>
          <td id="break"></td>
          <td id="class">
            <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            $sql = "SELECT * FROM schedule_detail WHERE idschedule=CONCAT(".$_GET["Year"].",'_',".$_GET["Term"].",'_',".$_GET["GradeNo"].",'_',".$_GET["RoomNo"].",'_',".$_GET["DegNo"].") AND timeno='4' AND dayno='2'";

            $qry = mysqli_query($objCon, $sql);
            $nrows = mysqli_num_rows($qry);
            if ($nrows > 0) {
              ?>
              <?php
              $i = 0;
              while ($rows = mysqli_fetch_array($qry)) {
                $id = $rows['courseid'];
                ?>
                <?php
                $sql_c = "SELECT * FROM course WHERE courseid='$id'";
                $qry_2 = mysqli_query($objCon, $sql_c);
                $nrows_2 = mysqli_num_rows($qry_2);
                if ($nrows_2 > 0) {
                  ?>
                  <?php
                  while ($rows_2 = mysqli_fetch_array($qry_2)) {
                    $cn = $rows_2['coursename'];
                    ?>
                    <?php
                    echo "<p>$id</p>
                    <a>$cn</a>";
                  }
                }
              }
            }
            ?>
          </td>
          <td id="class">
            <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            $sql = "SELECT * FROM schedule_detail WHERE idschedule=CONCAT(".$_GET["Year"].",'_',".$_GET["Term"].",'_',".$_GET["GradeNo"].",'_',".$_GET["RoomNo"].",'_',".$_GET["DegNo"].") AND timeno='5' AND dayno='2'";

            $qry = mysqli_query($objCon, $sql);
            $nrows = mysqli_num_rows($qry);
            if ($nrows > 0) {
              ?>
              <?php
              $i = 0;
              while ($rows = mysqli_fetch_array($qry)) {
                $id = $rows['courseid'];
                ?>
                <?php
                $sql_c = "SELECT * FROM course WHERE courseid='$id'";
                $qry_2 = mysqli_query($objCon, $sql_c);
                $nrows_2 = mysqli_num_rows($qry_2);
                if ($nrows_2 > 0) {
                  ?>
                  <?php
                  while ($rows_2 = mysqli_fetch_array($qry_2)) {
                    $cn = $rows_2['coursename'];
                    ?>
                    <?php
                    echo "<p>$id</p>
                    <a>$cn</a>";
                  }
                }
              }
            }
            ?>
          </td>
          <td id="class">
            <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            $sql = "SELECT * FROM schedule_detail WHERE idschedule=CONCAT(".$_GET["Year"].",'_',".$_GET["Term"].",'_',".$_GET["GradeNo"].",'_',".$_GET["RoomNo"].",'_',".$_GET["DegNo"].") AND timeno='6' AND dayno='2'";

            $qry = mysqli_query($objCon, $sql);
            $nrows = mysqli_num_rows($qry);
            if ($nrows > 0) {
              ?>
              <?php
              $i = 0;
              while ($rows = mysqli_fetch_array($qry)) {
                $id = $rows['courseid'];
                ?>
                <?php
                $sql_c = "SELECT * FROM course WHERE courseid='$id'";
                $qry_2 = mysqli_query($objCon, $sql_c);
                $nrows_2 = mysqli_num_rows($qry_2);
                if ($nrows_2 > 0) {
                  ?>
                  <?php
                  while ($rows_2 = mysqli_fetch_array($qry_2)) {
                    $cn = $rows_2['coursename'];
                    ?>
                    <?php
                    echo "<p>$id</p>
                    <a>$cn</a>";
                  }
                }
              }
            }
            ?>
          </td>
        </tr>
        <tr>
          <td>วันพุธ</td>
          <td id="class">
            <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            $sql = "SELECT * FROM schedule_detail WHERE idschedule=CONCAT(".$_GET["Year"].",'_',".$_GET["Term"].",'_',".$_GET["GradeNo"].",'_',".$_GET["RoomNo"].",'_',".$_GET["DegNo"].") AND timeno='1' AND dayno='3'";

            $qry = mysqli_query($objCon, $sql);
            $nrows = mysqli_num_rows($qry);
            if ($nrows > 0) {
              ?>
              <?php
              $i = 0;
              while ($rows = mysqli_fetch_array($qry)) {
                $id = $rows['courseid'];
                ?>
                <?php
                $sql_c = "SELECT * FROM course WHERE courseid='$id'";
                $qry_2 = mysqli_query($objCon, $sql_c);
                $nrows_2 = mysqli_num_rows($qry_2);
                if ($nrows_2 > 0) {
                  ?>
                  <?php
                  while ($rows_2 = mysqli_fetch_array($qry_2)) {
                    $cn = $rows_2['coursename'];
                    ?>
                    <?php
                    echo "<p>$id</p>
                    <a>$cn</a>";
                  }
                }
              }
            }
            ?>
          </td>
          <td id="class">
            <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            $sql = "SELECT * FROM schedule_detail WHERE idschedule=CONCAT(".$_GET["Year"].",'_',".$_GET["Term"].",'_',".$_GET["GradeNo"].",'_',".$_GET["RoomNo"].",'_',".$_GET["DegNo"].") AND timeno='2' AND dayno='3'";

            $qry = mysqli_query($objCon, $sql);
            $nrows = mysqli_num_rows($qry);
            if ($nrows > 0) {
              ?>
              <?php
              $i = 0;
              while ($rows = mysqli_fetch_array($qry)) {
                $id = $rows['courseid'];
                ?>
                <?php
                $sql_c = "SELECT * FROM course WHERE courseid='$id'";
                $qry_2 = mysqli_query($objCon, $sql_c);
                $nrows_2 = mysqli_num_rows($qry_2);
                if ($nrows_2 > 0) {
                  ?>
                  <?php
                  while ($rows_2 = mysqli_fetch_array($qry_2)) {
                    $cn = $rows_2['coursename'];
                    ?>
                    <?php
                    echo "<p>$id</p>
                    <a>$cn</a>";
                  }
                }
              }
            }
            ?>
          </td>
          <td id="class">
            <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            $sql = "SELECT * FROM schedule_detail WHERE idschedule=CONCAT(".$_GET["Year"].",'_',".$_GET["Term"].",'_',".$_GET["GradeNo"].",'_',".$_GET["RoomNo"].",'_',".$_GET["DegNo"].") AND timeno='3' AND dayno='3'";

            $qry = mysqli_query($objCon, $sql);
            $nrows = mysqli_num_rows($qry);
            if ($nrows > 0) {
              ?>
              <?php
              $i = 0;
              while ($rows = mysqli_fetch_array($qry)) {
                $id = $rows['courseid'];
                ?>
                <?php
                $sql_c = "SELECT * FROM course WHERE courseid='$id'";
                $qry_2 = mysqli_query($objCon, $sql_c);
                $nrows_2 = mysqli_num_rows($qry_2);
                if ($nrows_2 > 0) {
                  ?>
                  <?php
                  while ($rows_2 = mysqli_fetch_array($qry_2)) {
                    $cn = $rows_2['coursename'];
                    ?>
                    <?php
                    echo "<p>$id</p>
                    <a>$cn</a>";
                  }
                }
              }
            }
            ?>
          </td>
          <td id="break"> พักเที่ยง </td>
          <td id="class">
            <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            $sql = "SELECT * FROM schedule_detail WHERE idschedule=CONCAT(".$_GET["Year"].",'_',".$_GET["Term"].",'_',".$_GET["GradeNo"].",'_',".$_GET["RoomNo"].",'_',".$_GET["DegNo"].") AND timeno='4' AND dayno='3'";

            $qry = mysqli_query($objCon, $sql);
            $nrows = mysqli_num_rows($qry);
            if ($nrows > 0) {
              ?>
              <?php
              $i = 0;
              while ($rows = mysqli_fetch_array($qry)) {
                $id = $rows['courseid'];
                ?>
                <?php
                $sql_c = "SELECT * FROM course WHERE courseid='$id'";
                $qry_2 = mysqli_query($objCon, $sql_c);
                $nrows_2 = mysqli_num_rows($qry_2);
                if ($nrows_2 > 0) {
                  ?>
                  <?php
                  while ($rows_2 = mysqli_fetch_array($qry_2)) {
                    $cn = $rows_2['coursename'];
                    ?>
                    <?php
                    echo "<p>$id</p>
                    <a>$cn</a>";
                  }
                }
              }
            }
            ?>
          </td>
          <td id="class">
            <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            $sql = "SELECT * FROM schedule_detail WHERE idschedule=CONCAT(".$_GET["Year"].",'_',".$_GET["Term"].",'_',".$_GET["GradeNo"].",'_',".$_GET["RoomNo"].",'_',".$_GET["DegNo"].") AND timeno='5' AND dayno='3'";

            $qry = mysqli_query($objCon, $sql);
            $nrows = mysqli_num_rows($qry);
            if ($nrows > 0) {
              ?>
              <?php
              $i = 0;
              while ($rows = mysqli_fetch_array($qry)) {
                $id = $rows['courseid'];
                ?>
                <?php
                $sql_c = "SELECT * FROM course WHERE courseid='$id'";
                $qry_2 = mysqli_query($objCon, $sql_c);
                $nrows_2 = mysqli_num_rows($qry_2);
                if ($nrows_2 > 0) {
                  ?>
                  <?php
                  while ($rows_2 = mysqli_fetch_array($qry_2)) {
                    $cn = $rows_2['coursename'];
                    ?>
                    <?php
                    echo "<p>$id</p>
                    <a>$cn</a>";
                  }
                }
              }
            }
            ?>
          </td>
          <td id="class" >
            <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            $sql = "SELECT * FROM schedule_detail WHERE idschedule=CONCAT(".$_GET["Year"].",'_',".$_GET["Term"].",'_',".$_GET["GradeNo"].",'_',".$_GET["RoomNo"].",'_',".$_GET["DegNo"].") AND timeno='6' AND dayno='3'";

            $qry = mysqli_query($objCon, $sql);
            $nrows = mysqli_num_rows($qry);
            if ($nrows > 0) {
              ?>
              <?php
              $i = 0;
              while ($rows = mysqli_fetch_array($qry)) {
                $id = $rows['courseid'];
                ?>
                <?php
                $sql_c = "SELECT * FROM course WHERE courseid='$id'";
                $qry_2 = mysqli_query($objCon, $sql_c);
                $nrows_2 = mysqli_num_rows($qry_2);
                if ($nrows_2 > 0) {
                  ?>
                  <?php
                  while ($rows_2 = mysqli_fetch_array($qry_2)) {
                    $cn = $rows_2['coursename'];
                    ?>
                    <?php
                    echo "<p>$id</p>
                    <a>$cn</a>";
                  }
                }
              }
            }
            ?>
          </td>
        </tr>
        <tr>
          <td>วันพฤหัสบดี</td>
          <td id="class">
            <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            $sql = "SELECT * FROM schedule_detail WHERE idschedule=CONCAT(".$_GET["Year"].",'_',".$_GET["Term"].",'_',".$_GET["GradeNo"].",'_',".$_GET["RoomNo"].",'_',".$_GET["DegNo"].") AND timeno='1' AND dayno='4'";

            $qry = mysqli_query($objCon, $sql);
            $nrows = mysqli_num_rows($qry);
            if ($nrows > 0) {
              ?>
              <?php
              $i = 0;
              while ($rows = mysqli_fetch_array($qry)) {
                $id = $rows['courseid'];
                ?>
                <?php
                $sql_c = "SELECT * FROM course WHERE courseid='$id'";
                $qry_2 = mysqli_query($objCon, $sql_c);
                $nrows_2 = mysqli_num_rows($qry_2);
                if ($nrows_2 > 0) {
                  ?>
                  <?php
                  while ($rows_2 = mysqli_fetch_array($qry_2)) {
                    $cn = $rows_2['coursename'];
                    ?>
                    <?php
                    echo "<p>$id</p>
                    <a>$cn</a>";
                  }
                }
              }
            }
            ?>
          </td>
          <td id="class">
            <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            $sql = "SELECT * FROM schedule_detail WHERE idschedule=CONCAT(".$_GET["Year"].",'_',".$_GET["Term"].",'_',".$_GET["GradeNo"].",'_',".$_GET["RoomNo"].",'_',".$_GET["DegNo"].") AND timeno='2' AND dayno='4'";

            $qry = mysqli_query($objCon, $sql);
            $nrows = mysqli_num_rows($qry);
            if ($nrows > 0) {
              ?>
              <?php
              $i = 0;
              while ($rows = mysqli_fetch_array($qry)) {
                $id = $rows['courseid'];
                ?>
                <?php
                $sql_c = "SELECT * FROM course WHERE courseid='$id'";
                $qry_2 = mysqli_query($objCon, $sql_c);
                $nrows_2 = mysqli_num_rows($qry_2);
                if ($nrows_2 > 0) {
                  ?>
                  <?php
                  while ($rows_2 = mysqli_fetch_array($qry_2)) {
                    $cn = $rows_2['coursename'];
                    ?>
                    <?php
                    echo "<p>$id</p>
                    <a>$cn</a>";
                  }
                }
              }
            }
            ?>
          </td>
          <td id="class">
            <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            $sql = "SELECT * FROM schedule_detail WHERE idschedule=CONCAT(".$_GET["Year"].",'_',".$_GET["Term"].",'_',".$_GET["GradeNo"].",'_',".$_GET["RoomNo"].",'_',".$_GET["DegNo"].") AND timeno='3' AND dayno='4'";

            $qry = mysqli_query($objCon, $sql);
            $nrows = mysqli_num_rows($qry);
            if ($nrows > 0) {
              ?>
              <?php
              $i = 0;
              while ($rows = mysqli_fetch_array($qry)) {
                $id = $rows['courseid'];
                ?>
                <?php
                $sql_c = "SELECT * FROM course WHERE courseid='$id'";
                $qry_2 = mysqli_query($objCon, $sql_c);
                $nrows_2 = mysqli_num_rows($qry_2);
                if ($nrows_2 > 0) {
                  ?>
                  <?php
                  while ($rows_2 = mysqli_fetch_array($qry_2)) {
                    $cn = $rows_2['coursename'];
                    ?>
                    <?php
                    echo "<p>$id</p>
                    <a>$cn</a>";
                  }
                }
              }
            }
            ?>
          </td>
          <td id="break"></td>
          <td id="class">
            <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            $sql = "SELECT * FROM schedule_detail WHERE idschedule=CONCAT(".$_GET["Year"].",'_',".$_GET["Term"].",'_',".$_GET["GradeNo"].",'_',".$_GET["RoomNo"].",'_',".$_GET["DegNo"].") AND timeno='4' AND dayno='4'";

            $qry = mysqli_query($objCon, $sql);
            $nrows = mysqli_num_rows($qry);
            if ($nrows > 0) {
              ?>
              <?php
              $i = 0;
              while ($rows = mysqli_fetch_array($qry)) {
                $id = $rows['courseid'];
                ?>
                <?php
                $sql_c = "SELECT * FROM course WHERE courseid='$id'";
                $qry_2 = mysqli_query($objCon, $sql_c);
                $nrows_2 = mysqli_num_rows($qry_2);
                if ($nrows_2 > 0) {
                  ?>
                  <?php
                  while ($rows_2 = mysqli_fetch_array($qry_2)) {
                    $cn = $rows_2['coursename'];
                    ?>
                    <?php
                    echo "<p>$id</p>
                    <a>$cn</a>";
                  }
                }
              }
            }
            ?>
          </td>
          <td id="class">
            <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            $sql = "SELECT * FROM schedule_detail WHERE idschedule=CONCAT(".$_GET["Year"].",'_',".$_GET["Term"].",'_',".$_GET["GradeNo"].",'_',".$_GET["RoomNo"].",'_',".$_GET["DegNo"].") AND timeno='5' AND dayno='4'";

            $qry = mysqli_query($objCon, $sql);
            $nrows = mysqli_num_rows($qry);
            if ($nrows > 0) {
              ?>
              <?php
              $i = 0;
              while ($rows = mysqli_fetch_array($qry)) {
                $id = $rows['courseid'];
                ?>
                <?php
                $sql_c = "SELECT * FROM course WHERE courseid='$id'";
                $qry_2 = mysqli_query($objCon, $sql_c);
                $nrows_2 = mysqli_num_rows($qry_2);
                if ($nrows_2 > 0) {
                  ?>
                  <?php
                  while ($rows_2 = mysqli_fetch_array($qry_2)) {
                    $cn = $rows_2['coursename'];
                    ?>
                    <?php
                    echo "<p>$id</p>
                    <a>$cn</a>";
                  }
                }
              }
            }
            ?>
          </td>
          <td id="class">
            <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            $sql = "SELECT * FROM schedule_detail WHERE idschedule=CONCAT(".$_GET["Year"].",'_',".$_GET["Term"].",'_',".$_GET["GradeNo"].",'_',".$_GET["RoomNo"].",'_',".$_GET["DegNo"].") AND timeno='6' AND dayno='4'";

            $qry = mysqli_query($objCon, $sql);
            $nrows = mysqli_num_rows($qry);
            if ($nrows > 0) {
              ?>
              <?php
              $i = 0;
              while ($rows = mysqli_fetch_array($qry)) {
                $id = $rows['courseid'];
                ?>
                <?php
                $sql_c = "SELECT * FROM course WHERE courseid='$id'";
                $qry_2 = mysqli_query($objCon, $sql_c);
                $nrows_2 = mysqli_num_rows($qry_2);
                if ($nrows_2 > 0) {
                  ?>
                  <?php
                  while ($rows_2 = mysqli_fetch_array($qry_2)) {
                    $cn = $rows_2['coursename'];
                    ?>
                    <?php
                    echo "<p>$id</p>
                    <a>$cn</a>";
                  }
                }
              }
            }
            ?>
          </td>
        </tr>
        <tr>
          <td>วันศุกร์</td>
          <td id="class">
            <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            $sql = "SELECT * FROM schedule_detail WHERE idschedule=CONCAT(".$_GET["Year"].",'_',".$_GET["Term"].",'_',".$_GET["GradeNo"].",'_',".$_GET["RoomNo"].",'_',".$_GET["DegNo"].") AND timeno='1' AND dayno='5'";

            $qry = mysqli_query($objCon, $sql);
            $nrows = mysqli_num_rows($qry);
            if ($nrows > 0) {
              ?>
              <?php
              $i = 0;
              while ($rows = mysqli_fetch_array($qry)) {
                $id = $rows['courseid'];
                ?>
                <?php
                $sql_c = "SELECT * FROM course WHERE courseid='$id'";
                $qry_2 = mysqli_query($objCon, $sql_c);
                $nrows_2 = mysqli_num_rows($qry_2);
                if ($nrows_2 > 0) {
                  ?>
                  <?php
                  while ($rows_2 = mysqli_fetch_array($qry_2)) {
                    $cn = $rows_2['coursename'];
                    ?>
                    <?php
                    echo "<p>$id</p>
                    <a>$cn</a>";
                  }
                }
              }
            }
            ?>
          </td>
          <td id="class">
            <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            $sql = "SELECT * FROM schedule_detail WHERE idschedule=CONCAT(".$_GET["Year"].",'_',".$_GET["Term"].",'_',".$_GET["GradeNo"].",'_',".$_GET["RoomNo"].",'_',".$_GET["DegNo"].") AND timeno='2' AND dayno='5'";

            $qry = mysqli_query($objCon, $sql);
            $nrows = mysqli_num_rows($qry);
            if ($nrows > 0) {
              ?>
              <?php
              $i = 0;
              while ($rows = mysqli_fetch_array($qry)) {
                $id = $rows['courseid'];
                ?>
                <?php
                $sql_c = "SELECT * FROM course WHERE courseid='$id'";
                $qry_2 = mysqli_query($objCon, $sql_c);
                $nrows_2 = mysqli_num_rows($qry_2);
                if ($nrows_2 > 0) {
                  ?>
                  <?php
                  while ($rows_2 = mysqli_fetch_array($qry_2)) {
                    $cn = $rows_2['coursename'];
                    ?>
                    <?php
                    echo "<p>$id</p>
                    <a>$cn</a>";
                  }
                }
              }
            }
            ?>
          </td>
          <td id="class">
            <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            $sql = "SELECT * FROM schedule_detail WHERE idschedule=CONCAT(".$_GET["Year"].",'_',".$_GET["Term"].",'_',".$_GET["GradeNo"].",'_',".$_GET["RoomNo"].",'_',".$_GET["DegNo"].") AND timeno='3' AND dayno='5'";

            $qry = mysqli_query($objCon, $sql);
            $nrows = mysqli_num_rows($qry);
            if ($nrows > 0) {
              ?>
              <?php
              $i = 0;
              while ($rows = mysqli_fetch_array($qry)) {
                $id = $rows['courseid'];
                ?>
                <?php
                $sql_c = "SELECT * FROM course WHERE courseid='$id'";
                $qry_2 = mysqli_query($objCon, $sql_c);
                $nrows_2 = mysqli_num_rows($qry_2);
                if ($nrows_2 > 0) {
                  ?>
                  <?php
                  while ($rows_2 = mysqli_fetch_array($qry_2)) {
                    $cn = $rows_2['coursename'];
                    ?>
                    <?php
                    echo "<p>$id</p>
                    <a>$cn</a>";
                  }
                }
              }
            }
            ?>
          </td>
          <td id="break-last"></td>
          <td id="class">
            <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            $sql = "SELECT * FROM schedule_detail WHERE idschedule=CONCAT(".$_GET["Year"].",'_',".$_GET["Term"].",'_',".$_GET["GradeNo"].",'_',".$_GET["RoomNo"].",'_',".$_GET["DegNo"].") AND timeno='4' AND dayno='5'";

            $qry = mysqli_query($objCon, $sql);
            $nrows = mysqli_num_rows($qry);
            if ($nrows > 0) {
              ?>
              <?php
              $i = 0;
              while ($rows = mysqli_fetch_array($qry)) {
                $id = $rows['courseid'];
                ?>
                <?php
                $sql_c = "SELECT * FROM course WHERE courseid='$id'";
                $qry_2 = mysqli_query($objCon, $sql_c);
                $nrows_2 = mysqli_num_rows($qry_2);
                if ($nrows_2 > 0) {
                  ?>
                  <?php
                  while ($rows_2 = mysqli_fetch_array($qry_2)) {
                    $cn = $rows_2['coursename'];
                    ?>
                    <?php
                    echo "<p>$id</p>
                    <a>$cn</a>";
                  }
                }
              }
            }
            ?>
          </td>
          <td id="class">
            <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            $sql = "SELECT * FROM schedule_detail WHERE idschedule=CONCAT(".$_GET["Year"].",'_',".$_GET["Term"].",'_',".$_GET["GradeNo"].",'_',".$_GET["RoomNo"].",'_',".$_GET["DegNo"].") AND timeno='5' AND dayno='5'";

            $qry = mysqli_query($objCon, $sql);
            $nrows = mysqli_num_rows($qry);
            if ($nrows > 0) {
              ?>
              <?php
              $i = 0;
              while ($rows = mysqli_fetch_array($qry)) {
                $id = $rows['courseid'];
                ?>
                <?php
                $sql_c = "SELECT * FROM course WHERE courseid='$id'";
                $qry_2 = mysqli_query($objCon, $sql_c);
                $nrows_2 = mysqli_num_rows($qry_2);
                if ($nrows_2 > 0) {
                  ?>
                  <?php
                  while ($rows_2 = mysqli_fetch_array($qry_2)) {
                    $cn = $rows_2['coursename'];
                    ?>
                    <?php
                    echo "<p>$id</p>
                    <a>$cn</a>";
                  }
                }
              }
            }
            ?>
          </td>
          <td id="class">
            <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            $sql = "SELECT * FROM schedule_detail WHERE idschedule=CONCAT(".$_GET["Year"].",'_',".$_GET["Term"].",'_',".$_GET["GradeNo"].",'_',".$_GET["RoomNo"].",'_',".$_GET["DegNo"].") AND timeno='6' AND dayno='5'";

            $qry = mysqli_query($objCon, $sql);
            $nrows = mysqli_num_rows($qry);
            if ($nrows > 0) {
              ?>
              <?php
              $i = 0;
              while ($rows = mysqli_fetch_array($qry)) {
                $id = $rows['courseid'];
                ?>
                <?php
                $sql_c = "SELECT * FROM course WHERE courseid='$id'";
                $qry_2 = mysqli_query($objCon, $sql_c);
                $nrows_2 = mysqli_num_rows($qry_2);
                if ($nrows_2 > 0) {
                  ?>
                  <?php
                  while ($rows_2 = mysqli_fetch_array($qry_2)) {
                    $cn = $rows_2['coursename'];
                    ?>
                    <?php
                    echo "<p>$id</p>
                    <a>$cn</a>";
                  }
                }
              }
            }
            ?>
          </td>
        </tr>
      </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="courseCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelectc">รายวิชา</label>
              </div>
              <select class="custom-select" id="inputGroupSelectc" onchange="insert_course()">
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
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
            <button type="button" class="btn btn-success" onclick="addcourse()" data-dismiss="modal">บันทึก</button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>