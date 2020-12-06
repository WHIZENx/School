<!DOCTYPE html>
<html lang="th">
<head>
  <title>Add Course</title>
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
    function insert_course() {
      var e = document.getElementById("inputGroupSelect01");
      var e2 = document.getElementById("inputGroupSelect02");
      var e3 = document.getElementById("inputGroupSelect03");
      var e4 = document.getElementById("inputGroupSelect04");
      if (e.options[e.selectedIndex].text == 'ประถม') {
        document.getElementById('degreeno').value = 1;
      } else {
        document.getElementById('degreeno').value = 2;
      }
      document.getElementById('gradeno').value = e2.options[e2.selectedIndex].text;
      document.getElementById('prono').value = e3.options[e3.selectedIndex].text;
      document.getElementById('tid').value = e4.options[e4.selectedIndex].value;
    }
    function validateForm() {
      var degreeno = document.getElementById('degreeno').value;
      var gradeno = document.getElementById('gradeno').value;
      var prono = document.getElementById('prono').value;
      var tid = document.getElementById('tid');
      var cid = document.forms["myForm"]["cid"].value;
      var cname = document.forms["myForm"]["cname"].value;
      var name = document.forms["myForm"]["name"].value;
      var classroom = document.forms["myForm"]["classroom"].value;
      var credit = document.forms["myForm"]["credit"].value;
      if (degreeno == '' || degreeno == 'เลือก...' || tid == '' || tid == 'เลือก...' || gradeno == 'เลือก...' || prono == 'เลือก...' || gradeno == '' || prono == '' || cid == '' || cname == '' || classroom == '' || credit == '' || name == '') {
        alert("กรุณาใส่ข้อมูลทั้งหมด!")
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
      <h1>Add Course</h1>
      <form name="myForm" action="project/insert_course.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
        <div class="form-group">
          <div class="input-group mb-3">
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
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect03">สาย</label>
            </div>
            <select class="custom-select" id="inputGroupSelect03" onchange="insert_course()">
              <option selected>เลือก...</option>
              <option value="ภาคปกติ">ภาคปกติ</option>
              <option value="วิทย์-คณิต">วิทย์-คณิต</option>
              <option value="ศิลป์">ศิลป์</option>
            </select>
          </div>
          <input type="hidden" name="degreeno" id="degreeno" value="" />
          <input type="hidden" name="gradeno" id="gradeno" value="" />
          <input type="hidden" name="prono" id="prono" value="" />
        </div>
        <div class="form-group">
          <span style="color:red;">* </span><label for="name" style="color: black">อาจารย์ผู้สอน:</label>
          <select class="custom-select" id="inputGroupSelect04" onchange="insert_course()">
            <option selected>เลือก...</option>
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
              while ($rows = mysqli_fetch_array($qry)) {
                $id = $rows['teacherid'];
                $nt = $rows['title'];
                $fn = $rows['Tfname'];
                $ln = $rows['Tlname'];
                $g = $rows['groupc'];
                ?>
                <?php
                echo '<option value="'.$id.'">'.$id.': '.$nt.''.$fn.' '.$ln.' ('.$g.')</option>';   
              }
            }

            ?>
          </select>
          <input type="hidden" id="tid" name="tid" value="">
        </div>
        <div class="form-row">
          <div class="col">
            <div class="form-group">
              <span style="color:red;">* </span><label for="cid" style="color: black">รหัสวิชา:</label>
              <input type="text" class="form-control" id="cid" placeholder="Course ID" name="cid" min=0>
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <span style="color:red;">* </span><label for="cname" style="color: black">ชื่อวิชา:</label>
              <input type="text" class="form-control" id="cname" placeholder="Course Name" name="cname">
            </div>
          </div>
        </div>
        <div class="form-group">
          <span style="color:red;">* </span><label for="classroom" style="color: black">ห้องเรียน:</label>
          <input type="text" class="form-control" id="classroom" placeholder="ห้องเรียน" name="classroom">
        </div>
        <div class="form-group">
          <label for="disease" style="color: black">หน่วยกิต:</label>
          <input type="text" class="form-control" id="credit" placeholder="หน่วยกิต" name="credit">
        </div>
        <a href="project/course.php" class="btn btn-danger" role="button">Back</a>
        <button type="submit" class="btn btn-success">Add</button>
      </form>
    </div>
  </body>
</html>