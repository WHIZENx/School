<!DOCTYPE html>
<html lang="th">
<head>
  <title>Update Student</title>
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
    function update_student() {
      var e = document.getElementById("inputGroupSelect01");
      document.getElementById('ntitle').value = e.options[e.selectedIndex].value;
    }
    function validateForm() {
      var fn = document.forms["myForm"]["firstname"].value;
      var ln = document.forms["myForm"]["lastname"].value;
      var a = document.forms["myForm"]["address"].value;
      var phone = document.forms["myForm"]["phone"].value;
      var pname = document.forms["myForm"]["pname"].value;
      var pphone = document.forms["myForm"]["pphone"].value;
      if (fn == '' || ln == '' || a == '' || phone == '' || pname == '' || pphone == '') {
        alert("กรุณาใส่ข้อมูลที่กำหนดไว้ทั้งหมด!")
        return false;
      }
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
      <h1>Update Student</h1>
      <p style="font-size: 25px;"><?php $serverName = "localhost";
        $userName = "root";
        $userPassword = "";
        $dbName = "school";

        $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

        $sql = "SELECT * FROM grade_c g WHERE g.studentID=".$_GET["studentID"]."";

        $sql_student = "SELECT * FROM student s WHERE s.studentID=".$_GET["studentID"]."";

        $qry_student = mysqli_query($objCon, $sql_student);
        while ($rows = mysqli_fetch_array($qry_student)) {
          $nt = $rows['ntitle'];
          $fn = $rows['stdfname'];
          $ln = $rows['stdlname'];

          echo ''.$nt.''.$fn.' '.$ln.' ระดับชั้น';
        }
        $qry = mysqli_query($objCon, $sql); 
        $nrows = mysqli_num_rows($qry);
        if ($nrows > 0) {
          ?>
          <?php
          while ($rows = mysqli_fetch_array($qry)) {
            $gno = $rows['GradeNo'];
            $rno = $rows['RoomNumber'];
            $id = $rows['studentID'];
            $dno = $rows['DegreeNo'];

            if ($dno == '1') {
              echo 'ประถมศึกษาปีที่ '.$gno.' ห้อง '.$rno.'';
            } else if ($dno == '2'){
              echo 'มัธยมศึกษาปีที่ '.$gno.' ห้อง '.$rno.'';
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

        $sql_student = "SELECT * FROM student s WHERE s.studentID=".$_GET["studentID"]."";

        $qry = mysqli_query($objCon, $sql_student);
        $nrows = mysqli_num_rows($qry);

        if ($nrows > 0) {
          ?>
          <?php
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
            $status = $rows['status'];

            echo '<form name="myForm" action="project/update_student.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
              <label for="stdid" style="color: black; font-size: 20px;"><b>รหัสประจำตัว: '.$id.'</b></label>
              <input type="hidden" name="studentID" id="studentID" value="'.$id.'" />
              <div class="form-row">
                <div class="col-2">
                  <div class="form-group">
                    <label for="ntitle" style="color: black">คำนำหน้า:</label>
                    <select class="custom-select" id="inputGroupSelect01" onchange="update_student()">';
                      if ($nt == 'เด็กชาย')
                        echo '<option value="เด็กชาย" selected>เด็กชาย</option>';
                      else
                        echo '<option value="เด็กชาย">เด็กชาย</option>';
                      if ($nt == 'เด็กหญิง')
                        echo '<option value="เด็กหญิง" selected>เด็กหญิง</option>';
                      else
                        echo '<option value="เด็กหญิง">เด็กหญิง</option>';
                      if ($nt == 'นาย')
                        echo '<option value="นาย" selected>นาย</option>';
                      else
                        echo '<option value="นาย">นาย</option>';
                      if ($nt == 'นางสาว')
                        echo '<option value="นางสาว" selected>นางสาว</option>';
                      else
                        echo '<option value="นางสาว">นางสาว</option>';
                    echo '</select>
                    <input type="hidden" name="ntitle" id="ntitle" value="'.$nt.'" />
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="firstname" style="color: black">ชื่อ:</label>
                    <input type="text" class="form-control" id="firstname" placeholder="First Name" value="'.$fn.'" name="firstname">
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="lastname" style="color: black">นามสกุล:</label>
                    <input type="text" class="form-control" id="lastname" placeholder="Last Name" value="'.$ln.'" name="lastname">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="address" style="color: black">ที่อยู่:</label>
                <input type="text" class="form-control" id="address" placeholder="Address" value="'.$address.'" name="address">
              </div>
              <div class="form-row">
                <div class="col">
                  <div class="form-group">
                    <label for="phone" style="color: black">เบอร์โทร:</label>
                    <input type="text" class="form-control" id="phone" placeholder="Phone" value="'.$phone.'" name="phone">
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                  <div class="form-group">
                    <label for="pname" style="color: black">ชื่อผู้ปกครอง:</label>
                    <input type="text" class="form-control" id="pname" placeholder="ชื่อผู้ปกครอง" value="'.$pname.'" name="pname">
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="pphone" style="color: black">เบอร์โทรผู้ปกครอง:</label>
                    <input type="text" class="form-control" id="pphone" placeholder="เบอร์โทรผู้ปกครอง" value="'.$pphone.'" name="pphone">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="disease" style="color: black">โรคประจำตัว:</label>
                <input type="text" class="form-control" id="disease" placeholder="Disease" value="'.$disease.'" name="disease">
              </div>
              <div class="form-group">
              <label for="status" style="color: black">สถานะการศึกษา:</label>
                <div class="row" style="margin-left: 20px;">
                  <div class="col-2 custom-control custom-radio">';
                  if ($status == 'Active') {
                    echo '
                      <input type="radio" class="custom-control-input" id="Group1" name="groupOfRadios" value="Active" checked>';
                  } else {
                    echo '
                      <input type="radio" class="custom-control-input" id="Group1" name="groupOfRadios" value="Active">';
                    }
                    echo '
                    <label class="custom-control-label" for="Group1" style="color: green;"><b>Active</b></label>
                  </div>
                  <div class="col-2 custom-control custom-radio">';
                    if ($status == 'Unactive') {
                      echo '<input type="radio" class="custom-control-input" id="Group2" name="groupOfRadios" value="Unactive" checked>';
                    } else {
                      echo '<input type="radio" class="custom-control-input" id="Group2" name="groupOfRadios" value="Unactive">';
                    }
                    echo '
                    <label class="custom-control-label" for="Group2" style="color: red;"><b>Unactive</b></label>
                  </div>
                  <div class="col-2 custom-control custom-radio">';
                    if ($status == 'Drop') {
                      echo '<input type="radio" class="custom-control-input" id="Group3" name="groupOfRadios" value="Drop" checked>';
                    } else {
                      echo '<input type="radio" class="custom-control-input" id="Group3" name="groupOfRadios" value="Drop">';
                    }
                    echo '
                    <label class="custom-control-label" for="Group3" style="color: orange;"><b>Drop</b></label>
                  </div>
                  <div class="col-2 custom-control custom-radio">';
                    if ($status == 'Graduate') {
                      echo '<input type="radio" class="custom-control-input" id="Group4" name="groupOfRadios" value="Graduate" checked>';
                    } else {
                      echo '<input type="radio" class="custom-control-input" id="Group4" name="groupOfRadios" value="Graduate">';
                    }
                    echo '
                    <label class="custom-control-label" for="Group4" style="color: blue;"><b>Graduate</b></label>
                  </div>
                </div>
              </div>
              <a href="project/student.php" class="btn btn-danger" role="button">Back</a>
              <button type="submit" class="btn btn-success">Update</button>
            </form>';
          }
        } else {
          echo '<h1 style="color: red;">Student Not found in database</h1>
          <a href="project/student.php" class="btn btn-danger" role="button">Back</a>';
        }?>
    </div>
  </body>
</html>