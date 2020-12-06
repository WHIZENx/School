<!DOCTYPE html>
<html lang="th">
<head>
  <title>Update Course</title>
  <base href="/">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="img/x-icon" href="project/img/student.png">
  <link href="https://fonts.googleapis.com/css?family=Kodchasan&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript">
    function validateForm() {
      var cname = document.forms["myForm"]["cname"].value;
      var classroom = document.forms["myForm"]["classroom"].value;
      var credit = document.forms["myForm"]["credit"].value;
      var tid = document.getElementById('tid').value
      if (cname == '' || classroom == '' || tid == '' || tid == 'เลือก...' || credit == '') {
        alert("กรุณาใส่ข้อมูลที่กำหนดไว้ทั้งหมด!")
        return false;
      }
    }
    function insert_course() {
      var e4 = document.getElementById("inputGroupSelect04");
      document.getElementById('tid').value = e4.options[e4.selectedIndex].value;
    }
  </script>
  </head>
  <style type="text/css">
    body, html {
      font-family: Arial, Helvetica, sans-serif;
      margin: 0; 
      height: 100%; 
      display: flex; 
      align-items: center; 
      justify-content: center;
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
    #page-container {
      min-width: 1000px;
      padding: 30px;
      min-height: 0;
      -webkit-box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
      box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
    }
  </style>
  <body>
    <div id="page-container" style="margin-top: 15px;">
      <h1>Update Course</h1>
      <p style="font-size: 25px;"><?php $serverName = "localhost";
        $userName = "root";
        $userPassword = "";
        $dbName = "school";

        $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

        $sql = "SELECT * FROM course WHERE courseid=".$_GET["courseID"]."";

        $qry = mysqli_query($objCon, $sql); 
        $nrows = mysqli_num_rows($qry);
        if ($nrows > 0) {
          ?>
          <?php
          while ($rows = mysqli_fetch_array($qry)) {
            $cn = $rows['coursename'];
            $gno = $rows['grade'];
            $dno = $rows['degreeno'];

            if ($dno == '1') {
              echo 'วิชา '.$cn.' สำหรับประถมศึกษาปีที่ '.$gno.'';
            } else if ($dno == '2'){
              echo 'วิชา '.$cn.' สำหรับมัธยมศึกษาปีที่ '.$gno.'';
            }
          }
        }
        ;?></p>
      <hr>
      <?php $serverName = "localhost";
        $userName = "root";
        $userPassword = "";
        $dbName = "school";

        $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

        $sql_course = "SELECT * FROM course WHERE courseid=".$_GET["courseID"]."";

        $qry = mysqli_query($objCon, $sql_course);
        $nrows = mysqli_num_rows($qry);

        if ($nrows > 0) {
          ?>
          <?php
          while ($rows = mysqli_fetch_array($qry)) {
            $id = $rows['courseid'];
            $cn = $rows['coursename'];
            $b = $rows['classroom'];
            $c = $rows['credit'];
            $ctid = $rows['teacherid'];
            ?>
            <?php
            echo '<form name="myForm" action="project/update_course.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                <label for="stdid" style="color: black; font-size: 20px;"><b>รหัสวิชา: '.$id.'</b></label>
                <input type="hidden" name="teacherID" id="teacherID" value="'.$id.'" />
                <div class="form-group">
                <span style="color:red;">* </span><label for="name" style="color: black">อาจารย์ผู้สอน:</label>
                <select class="custom-select" id="inputGroupSelect04" onchange="insert_course()">
                  ';?>
              <?php
              $sql_teacher = "SELECT * FROM teacher WHERE teacherid = ".$ctid."";

              $qry_teacher = mysqli_query($objCon, $sql_teacher);
              $nrows = mysqli_num_rows($qry_teacher);

              if ($nrows > 0) {
                ?>
                <?php
                while ($rows_teacher = mysqli_fetch_array($qry_teacher)) {
                  $id_t = $rows_teacher['teacherid'];
                  $nt = $rows_teacher['title'];
                  $fn = $rows_teacher['Tfname'];
                  $ln = $rows_teacher['Tlname'];
                  $g = $rows_teacher['groupc'];
                  ?>
                  <?php echo '<option value="'.$id_t.'">'.$id_t.': '.$nt.''.$fn.' '.$ln.' ('.$g.')</option>';
                  }
                }?>
                ?>
                  <?php
                  $sql = "SELECT * FROM teacher ORDER BY teacherid";

                  $qry = mysqli_query($objCon, $sql);
                  $nrows = mysqli_num_rows($qry);          
                  if ($nrows > 0) {
                    ?>
                    <?php
                    while ($rows = mysqli_fetch_array($qry)) {
                      $tid = $rows['teacherid'];
                      $nt = $rows['title'];
                      $fn = $rows['Tfname'];
                      $ln = $rows['Tlname'];
                      $g = $rows['groupc'];
                      ?>
                      <?php
                      echo '<option value="'.$tid.'">'.$tid.': '.$nt.''.$fn.' '.$ln.' ('.$g.')</option>';   
                    }
                  }?>
                  ?>
                  <?php echo '
                </select>
                <input type="hidden" id="tid" name="tid" value="">
              </div>
              <div class="form-group">
                <span style="color:red;">* </span><label for="cname" style="color: black">ชื่อวิชา:</label>
                <input type="text" class="form-control" id="cname" placeholder="Course Name" value="'.$cn.'" name="cname">
              </div>
              <div class="form-group">
                <span style="color:red;">* </span><label for="classroom" style="color: black">ห้องเรียน:</label>
                <input type="text" class="form-control" id="classroom" placeholder="ห้องเรียน" value="'.$b.'" name="classroom">
              </div>
              <div class="form-group">
                <label for="disease" style="color: black">หน่วยกิต:</label>
                <input type="text" class="form-control" id="credit" placeholder="หน่วยกิต" value="'.$c.'" name="credit">
              </div>
              <a href="project/course.php" class="btn btn-danger" role="button">Back</a>
              <button type="submit" class="btn btn-success">Update</button>
            </form>';
          }
        } else {
          echo '<h1 style="color: red;">Student Not found in database</h1>
          <a href="project/course.php" class="btn btn-danger" role="button">Back</a>';
        }?>
    </div>
  </body>
</html>