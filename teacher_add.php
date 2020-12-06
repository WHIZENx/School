<!DOCTYPE html>
<html lang="th">
<head>
  <title>Add Teacher</title>
  <base href="/">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="img/x-icon" href="project/img/teacher.png">
  <link href="https://fonts.googleapis.com/css?family=Kodchasan&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>
    function insert_staff() {
      var e = document.getElementById("inputGroupSelect01");
      var e2 = document.getElementById("inputGroupSelect02");
      document.getElementById('typeno').value = e.options[e.selectedIndex].text;
      document.getElementById('ntitle').value = e2.options[e2.selectedIndex].text;
    }
    function validateForm() {
      var str = new Date().getFullYear()+"-";
      if (new Date().getMonth()+1 < 10) {
        str += "0";
      }
      str += (new Date().getMonth()+1)+"-";
      if (new Date().getDate() < 10) {
        str += "0";
      }
      str += new Date().getDate();
      document.getElementById('startwork').value = str;
      var typeno = document.getElementById('typeno').value;
      var ntitle = document.getElementById('ntitle');
      var email = document.getElementById('email');
      var tid = document.forms["myForm"]["tid"].value;
      var fn = document.forms["myForm"]["firstname"].value;
      var ln = document.forms["myForm"]["lastname"].value;
      var a = document.forms["myForm"]["address"].value;
      var b = document.forms["myForm"]["bdate"].value;
      var phone = document.forms["myForm"]["phone"].value;
      if (typeno == '' || typeno == 'เลือก...' || ntitle == 'เลือก...' || gradeno == '' || email == '' || roomno == '' || ntitle == '' || stuid == '' || fn == '' || ln == '' || a == '' || b == '' || phone == '') {
        alert("กรุณาใส่ข้อมูลทั้งหมด!")
        return false;
      }
      return false;
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
      <h1>Add Teacher</h1>
      <form name="myForm" action="project/insert_teacher.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
      <div class="form-group">
        <div id="staff" class="input-group mb-3">
          <div id="toptions" class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">กลุ่มสาระ</label>
          </div>
          <select class="custom-select" id="inputGroupSelect01" onchange="insert_teacher()">
            <option selected>เลือก...</option>
            <option value="ภาษาไทย">ภาษาไทย</option>
            <option value="คณิตศาสตร์">คณิตศาสตร์</option>
            <option value="สังคมศึกษา ศาสนาและวัฒนธรรม">สังคมศึกษา ศาสนาและวัฒนธรรม</option>
            <option value="วิทยาศาสตร์">วิทยาศาสตร์</option>
            <option value="ภาษาอังกฤษ">ภาษาต่างประเทศ</option>
            <option value="สุขศึกษาและพละศึกษา">สุขศึกษาและพละศึกษา</option>
            <option value="ศิลปะ">ศิลปะ</option>
            <option value="การงานอาชีพและเทคโนโลยี">การงานอาชีพและเทคโนโลยี</option>
          </select>
          <input type="hidden" name="typeno" id="typeno" value="" />
        </div>
      </div>
      <div class="form-group">
        <span style="color:red;">* </span><label for="tid" style="color: black">รหัสประจำตัว:</label>
        <input type="number" class="form-control" id="tid" placeholder="Teacher ID" name="tid" min=0>
      </div>
      <div class="form-row">
          <div class="col-2">
            <div class="form-group">
              <span style="color:red;">* </span><label for="ntitle" style="color: black">คำนำหน้า:</label>
              <select class="custom-select" id="inputGroupSelect02" onchange="insert_teacher()">
                <option selected>เลือก...</option>
                <option value="นาย">นาย</option>
                <option value="นางสาว">นางสาว</option>
                <option value="นาง">นาง</option>
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
        <label for="address" style="color: black">Email:</label>
        <input type="text" class="form-control" id="email" placeholder="Email" name="email">
      </div>
      <div class="form-group">
        <label for="address" style="color: black">ที่อยู่:</label>
        <input type="varchar" class="form-control" id="address" placeholder="Address" name="address">
      </div>
      <div class="form-row">
        <div class="col">
          <div class="form-group">
            <label for="bdate" style="color: black">วันเกิด:</label>
            <input type="date" class="form-control" id="bdate" name="bdate">
          </div>
        </div>
        <input type="hidden" name="startwork" id="startwork" value="" />
        <div class="col">
          <div class="form-group">
            <span style="color:red;">* </span><label for="phone" style="color: black">เบอร์โทร: (0123456789)</label>
            <input type="tel" class="form-control" id="phone" placeholder="Phone" name="phone" pattern="[0-9]{10}">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="disease" style="color: black">โรคประจำตัว:</label>
        <input type="text" class="form-control" id="disease" placeholder="Disease" name="disease">
      </div>
      <a href="project/teacher.php" class="btn btn-danger" role="button">Back</a>
      <button type="submit" class="btn btn-success">Add</button>
      </form>
    </div>
  </body>
</html>