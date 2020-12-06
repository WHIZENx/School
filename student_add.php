<!DOCTYPE html>
<html lang="th">
<head>
  <title>Add Student</title>
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
    function insert_student() {
      var e = document.getElementById("inputGroupSelect01");
      var e2 = document.getElementById("inputGroupSelect02");
      var e3 = document.getElementById("inputGroupSelect02");
      var e4 = document.getElementById("inputGroupSelect04");
      if (e.options[e.selectedIndex].text == 'ประถม') {
        document.getElementById('degreeno').value = 1;
      } else {
        document.getElementById('degreeno').value = 2;
      }
      document.getElementById('gradeno').value = e2.options[e2.selectedIndex].text;
      document.getElementById('roomno').value = e3.options[e3.selectedIndex].text;
      document.getElementById('ntitle').value = e4.options[e4.selectedIndex].text;
    }
    function validateForm() {
      var degreeno = document.getElementById('degreeno').value;
      var gradeno = document.getElementById('gradeno').value;
      var roomno = document.getElementById('roomno').value;
      var ntitle = document.getElementById('ntitle').value;
      var stuid = document.forms["myForm"]["stdid"].value;
      var fn = document.forms["myForm"]["firstname"].value;
      var ln = document.forms["myForm"]["lastname"].value;
      var a = document.forms["myForm"]["address"].value;
      var b = document.forms["myForm"]["bdate"].value;
      var phone = document.forms["myForm"]["phone"].value;
      var pname = document.forms["myForm"]["pname"].value;
      var pphone = document.forms["myForm"]["pphone"].value;
      if (degreeno == '' || degreeno == 'เลือก...' || gradeno == 'เลือก...' || roomno == 'เลือก...' || ntitle == 'เลือก...' || gradeno == '' || roomno == '' || ntitle == '' || stuid == '' || fn == '' || ln == '' || a == '' || b == '' || phone == '' || pname == '' || pphone == '') {
        alert("กรุณาใส่ข้อมูลทั้งหมด!")
        return false;
      }
    }
    $(function(){
      $('[type="date"]').prop('max', function(){
          return new Date().toJSON().split('T')[0];
      });
    });
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
      <h1>Add Student</h1>
      <form name="myForm" action="project/insert_student.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
        <div class="form-group">
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
        </div>
        <div class="form-group">
          <span style="color:red;">* </span><label for="stdid" style="color: black">รหัสประจำตัว:</label>
          <input type="number" class="form-control" id="stdid" placeholder="Student ID" name="stdid" min=0>
        </div>
        <div class="form-row">
          <div class="col-2">
            <div class="form-group">
              <span style="color:red;">* </span><label for="ntitle" style="color: black">คำนำหน้า:</label>
              <select class="custom-select" id="inputGroupSelect04" onchange="insert_student()">
                <option selected>เลือก...</option>
                <option value="เด็กชาย">เด็กชาย</option>
                <option value="เด็กหญิง">เด็กหญิง</option>
                <option value="นาย">นาย</option>
                <option value="นางสาว">นางสาว</option>
              </select>
              <input type="hidden" name="ntitle" id="ntitle" value="" />
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <span style="color:red;">* </span><label for="firstname" style="color: black">ชื่อ:</label>
              <input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname">
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <span style="color:red;">* </span><label for="lastname" style="color: black">นามสกุล:</label>
              <input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname">
            </div>
          </div>
        </div>
        <div class="form-group">
          <span style="color:red;">* </span><label for="address" style="color: black">ที่อยู่:</label>
          <input type="text" class="form-control" id="address" placeholder="Address" name="address">
        </div>
        <div class="form-row">
          <div class="col">
            <div class="form-group">
              <span style="color:red;">* </span><label for="bdate" style="color: black">วันเกิด:</label>
              <input type="date" class="form-control" id="bdate" name="bdate">
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <span style="color:red;">* </span><label for="phone" style="color: black">เบอร์โทร: (0123456789)</label>
              <input type="tel" class="form-control" id="phone" placeholder="Phone" name="phone" pattern="[0-9]{10}">
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <div class="form-group">
              <span style="color:red;">* </span><label for="pname" style="color: black">ชื่อผู้ปกครอง:</label>
              <input type="text" class="form-control" id="pname" placeholder="ชื่อผู้ปกครอง" name="pname">
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <span style="color:red;">* </span><label for="pphone" style="color: black">เบอร์โทรผู้ปกครอง: (0123456789)</label>
              <input type="tel" class="form-control" id="pphone" placeholder="เบอร์โทรผู้ปกครอง" name="pphone" pattern="[0-9]{10}">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="disease" style="color: black">โรคประจำตัว:</label>
          <input type="text" class="form-control" id="disease" placeholder="Disease" name="disease">
        </div>
        <a href="project/student.php" class="btn btn-danger" role="button">Back</a>
        <button type="submit" class="btn btn-success">Add</button>
      </form>
    </div>
  </body>
</html>