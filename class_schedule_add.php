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
  <script type="text/javascript">
    $(function(){
      var d = new Date();
      var n = d.getFullYear();
      $("input[type='number']").prop('min',n);
    });
    a = {"1_1": [], "1_2": [], "1_3": [], "1_4": [], "1_5": [], "2_1": [], "2_2": [], "2_3": [], "2_4": [], "2_5": [], "3_1": [], "3_2": [], "3_3": [], "3_4": [], "3_5": [], "4_1": [], "4_2": [], "4_3": [], "4_4": [], "4_5": [], "5_1": [], "5_2": [], "5_3": [], "5_4": [], "5_5": [], "6_1": [], "6_2": [], "6_3": [], "6_4": [], "6_5": []}
    var time_list = ["08.30-09.30", "09.30-10.30", "10.30-11.30", "13.00-14.00", "14.00-15.00", "15.00-16.00"];
    var day_list = ["วันจันทร์", "วันอังคาร", "วันพุธ", "วันพฤหัสบดี", "วันศุกร์"];
    function showpopup(time, day) {
      document.getElementById('time').value = time;
      document.getElementById('day').value = day;
      var e = document.getElementById("inputGroupSelectc");
      document.getElementById('exampleModalLongTitle').textContent = "เลือกวิชาของ" + day_list[parseInt(day)-1] + " เวลา " + time_list[parseInt(time)-1];
      e.selectedIndex = 0;
    }
    function addcourse() {
      var e = document.getElementById("inputGroupSelectc");
      var value = e.options[e.selectedIndex].value.split(":");
      var time = document.getElementById('time').value;
      var day = document.getElementById('day').value;
      if (value[0] == 'เลือก...') {
        if (a[time+"_"+day].length == 1) {
          a[time+"_"+day].pop();
        }
        document.getElementById('id'+time+'_'+day).textContent = 'เพิ่ม';
      document.getElementById('n'+time+'_'+day).textContent = '';
      } else {
        if (a[time+"_"+day].length == 1) {
          a[time+"_"+day].pop();
          a[time+"_"+day].push(value[0]);
        } else {
          a[time+"_"+day].push(value[0]);
        }
        document.getElementById('id'+time+'_'+day).textContent = value[0];
        document.getElementById('n'+time+'_'+day).textContent = value[1];
        document.getElementById('int'+time+'_'+day).value = time;
        document.getElementById('ind'+time+'_'+day).value = day;
        document.getElementById('cid'+time+'_'+day).value = value[0];
      }
    }
    function insert_classes() {
      var e = document.getElementById("inputGroupSelect04");
      var e2 = document.getElementById("inputGroupSelect01");
      var e3 = document.getElementById("inputGroupSelect02");
      var e4 = document.getElementById("inputGroupSelect03");
      if (e.options[e.selectedIndex].value != "เลือก..." && e2.options[e2.selectedIndex].value != "เลือก..." && e3.options[e3.selectedIndex].value != "เลือก..." && e4.options[e4.selectedIndex].value != "เลือก...") {
        document.getElementById("schedule").style.display = "block";
        document.getElementById('degreeno').value = e2.options[e2.selectedIndex].value;
        document.getElementById('gradeno').value = e3.options[e3.selectedIndex].value;
        document.getElementById('roomno').value = e4.options[e4.selectedIndex].value;
        document.getElementById('semesterid').value = e.options[e.selectedIndex].value.split("_")[0];
        document.getElementById('termid').value = e.options[e.selectedIndex].value.split("_")[1];
      } else {
        document.getElementById("schedule").style.display = "none";
        a = {"1_1": [], "1_2": [], "1_3": [], "1_4": [], "1_5": [], "2_1": [], "2_2": [], "2_3": [], "2_4": [], "2_5": [], "3_1": [], "3_2": [], "3_3": [], "3_4": [], "3_5": [], "4_1": [], "4_2": [], "4_3": [], "4_4": [], "4_5": [], "5_1": [], "5_2": [], "5_3": [], "5_4": [], "5_5": [], "6_1": [], "6_2": [], "6_3": [], "6_4": [], "6_5": []}
        for (var i = 1; i <= 6; i++) {
          for (var j = 1; j <= 5; j++) {
            document.getElementById('id'+i+'_'+j).textContent = "เพิ่ม";
            document.getElementById('n'+i+'_'+j).textContent = "";
          }
        }
      }
    }
    function validateForm() {
      var e = document.getElementById("inputGroupSelect04");
      var e2 = document.getElementById("inputGroupSelect01");
      var e3 = document.getElementById("inputGroupSelect02");
      var e4 = document.getElementById("inputGroupSelect03");
      if (e.options[e.selectedIndex].value == "เลือก..." || e2.options[e2.selectedIndex].value == "เลือก..." || e3.options[e3.selectedIndex].value == "เลือก..." || e4.options[e4.selectedIndex].value == "เลือก...") {
        return false;
      }
      for (var i = 1; i <= 6; i++) {
        for (var j = 1; j <= 5; j++) {
          if (a[i+"_"+j].length  == 0) {
            return false;
          }
        }
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
    #page-container {
      min-width: 500px;
      padding: 30px;
      -webkit-box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
      box-shadow: 0px 0px 12px 1px rgba(87, 87, 87, 0.2);
    }
    table {
      width: 100%;
    }
    #schedule td, #schedule th {
      border: 1px solid #ddd;
      padding: 30px;
      font-weight: bold;
      text-align: center;
    }
    #schedule td#class {
      text-align: center;
      color: red;
      font-weight: bold;
    }
    #schedule td#class:hover {
      cursor: pointer;
      background-color: lightgreen;
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
      text-align: center;
      background-color: gray;
      color: white;
    }
  </style>
  <body>
    <div id="page-container">
      <h1>ตารางเรียน</h1>
      <form name="myForm" action="project/insert_schedule.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
      <div class="form-group">
        <div id="staff" class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect04">ปีการศึกษา/เทอม</label>
          </div>
          <select class="custom-select" id="inputGroupSelect04" onchange="insert_classes()">
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
        </div>
      </div>
      <div class="form-group">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">ระดับชั้น</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" onchange="insert_classes()">
              <option selected>เลือก...</option>
              <option value="1">ประถมศึกษา</option>
              <option value="2">มัธยมศึกษา</option>
            </select>
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect02">ปีที่</label>
            </div>
            <select class="custom-select" id="inputGroupSelect02" onchange="insert_classes()">
              <option selected>เลือก...</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
            </select>
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect02">ห้อง</label>
            </div>
            <select class="custom-select" id="inputGroupSelect03" onchange="insert_classes()">
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
            <input type="hidden" name="semesterid" id="semesterid" value="" />
            <input type="hidden" name="termid" id="termid" value="" />
            <input type="hidden" name="degreeno" id="degreeno" value="" />
            <input type="hidden" name="gradeno" id="gradeno" value="" />
            <input type="hidden" name="roomno" id="roomno" value="" />
        </div>
      </div>
      <table id="schedule" style="display: none;">
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
          <td id="class" onclick="showpopup('1', '1')" data-toggle="modal" data-target="#courseCenter">
            <p id="id1_1">เพิ่ม</p>
            <a id="n1_1"></a>
            <input type="hidden" name="int1_1" id="int1_1" value="" />
            <input type="hidden" name="ind1_1" id="ind1_1" value="" />
            <input type="hidden" name="cid1_1" id="cid1_1" value="" />
          </td>
          <td id="class" class="2_1" onclick="showpopup('2', '1')" data-toggle="modal" data-target="#courseCenter">
            <p id="id2_1">เพิ่ม</p>
            <a id="n2_1"></a>
            <input type="hidden" name="int2_1" id="int2_1" value="" />
            <input type="hidden" name="ind2_1" id="ind2_1" value="" />
            <input type="hidden" name="cid2_1" id="cid2_1" value="" />
          <td id="class" onclick="showpopup('3', '1')" data-toggle="modal" data-target="#courseCenter">
            <p id="id3_1">เพิ่ม</p>
            <a id="n3_1"></a>
            <input type="hidden" name="int3_1" id="int3_1" value="" />
            <input type="hidden" name="ind3_1" id="ind3_1" value="" />
            <input type="hidden" name="cid3_1" id="cid3_1" value="" />
          </td>
          <td id="break"></td>
          <td id="class" onclick="showpopup('4', '1')" data-toggle="modal" data-target="#courseCenter">
            <p id="id4_1">เพิ่ม</p>
            <a id="n4_1"></a>
            <input type="hidden" name="int4_1" id="int4_1" value="" />
            <input type="hidden" name="ind4_1" id="ind4_1" value="" />
            <input type="hidden" name="cid4_1" id="cid4_1" value="" />
          </td>
          <td id="class" onclick="showpopup('5', '1')" data-toggle="modal" data-target="#courseCenter">
            <p id="id5_1">เพิ่ม</p>
            <a id="n5_1"></a>
            <input type="hidden" name="int5_1" id="int5_1" value="" />
            <input type="hidden" name="ind5_1" id="ind5_1" value="" />
            <input type="hidden" name="cid5_1" id="cid5_1" value="" />
          </td>
          <td id="class" onclick="showpopup('6', '1')" data-toggle="modal" data-target="#courseCenter">
            <p id="id6_1">เพิ่ม</p>
            <a id="n6_1"></a>
            <input type="hidden" name="int6_1" id="int6_1" value="" />
            <input type="hidden" name="ind6_1" id="ind6_1" value="" />
            <input type="hidden" name="cid6_1" id="cid6_1" value="" />
          </td>
        </tr>
        <tr>
          <td>วันอังคาร</td>
          <td id="class" onclick="showpopup('1', '2')" data-toggle="modal" data-target="#courseCenter">
            <p id="id1_2">เพิ่ม</p>
            <a id="n1_2"></a>
            <input type="hidden" name="int1_2" id="int1_2" value="" />
            <input type="hidden" name="ind1_2" id="ind1_2" value="" />
            <input type="hidden" name="cid1_2" id="cid1_2" value="" />
          </td>
          <td id="class" onclick="showpopup('2', '2')" data-toggle="modal" data-target="#courseCenter">
            <p id="id2_2">เพิ่ม</p>
            <a id="n2_2"></a>
            <input type="hidden" name="int2_2" id="int2_2" value="" />
            <input type="hidden" name="ind2_2" id="ind2_2" value="" />
            <input type="hidden" name="cid2_2" id="cid2_2" value="" />
          </td>
          <td id="class" onclick="showpopup('3', '2')" data-toggle="modal" data-target="#courseCenter">
            <p id="id3_2">เพิ่ม</p>
            <a id="n3_2"></a>
            <input type="hidden" name="int3_2" id="int3_2" value="" />
            <input type="hidden" name="ind3_2" id="ind3_2" value="" />
            <input type="hidden" name="cid3_2" id="cid3_2" value="" />
          </td>
          <td id="break"></td>
          <td id="class" onclick="showpopup('4', '2')" data-toggle="modal" data-target="#courseCenter">
            <p id="id4_2">เพิ่ม</p>
            <a id="n4_2"></a>
            <input type="hidden" name="int4_2" id="int4_2" value="" />
            <input type="hidden" name="ind4_2" id="ind4_2" value="" />
            <input type="hidden" name="cid4_2" id="cid4_2" value="" />
          </td>
          <td id="class" onclick="showpopup('5', '2')" data-toggle="modal" data-target="#courseCenter">
            <p id="id5_2">เพิ่ม</p>
            <a id="n5_2"></a>
            <input type="hidden" name="int5_2" id="int5_2" value="" />
            <input type="hidden" name="ind5_2" id="ind5_2" value="" />
            <input type="hidden" name="cid5_2" id="cid5_2" value="" />
          </td>
          <td id="class" onclick="showpopup('6', '2')" data-toggle="modal" data-target="#courseCenter">
            <p id="id6_2">เพิ่ม</p>
            <a id="n6_2"></a>
            <input type="hidden" name="int6_2" id="int6_2" value="" />
            <input type="hidden" name="ind6_2" id="ind6_2" value="" />
            <input type="hidden" name="cid6_2" id="cid6_2" value="" />
          </td>
        </tr>
        <tr>
          <td>วันพุธ</td>
          <td id="class" onclick="showpopup('1', '3')" data-toggle="modal" data-target="#courseCenter">
            <p id="id1_3">เพิ่ม</p>
            <a id="n1_3"></a>
            <input type="hidden" name="int1_3" id="int1_3" value="" />
            <input type="hidden" name="ind1_3" id="ind1_3" value="" />
            <input type="hidden" name="cid1_3" id="cid1_3" value="" />
          </td>
          <td id="class" onclick="showpopup('2', '3')" data-toggle="modal" data-target="#courseCenter">
            <p id="id2_3">เพิ่ม</p>
            <a id="n2_3"></a>
            <input type="hidden" name="int2_3" id="int2_3" value="" />
            <input type="hidden" name="ind2_3" id="ind2_3" value="" />
            <input type="hidden" name="cid2_3" id="cid2_3" value="" />
          </td>
          <td id="class" onclick="showpopup('3', '3')" data-toggle="modal" data-target="#courseCenter">
            <p id="id3_3">เพิ่ม</p>
            <a id="n3_3"></a>
            <input type="hidden" name="int3_3" id="int3_3" value="" />
            <input type="hidden" name="ind3_3" id="ind3_3" value="" />
            <input type="hidden" name="cid3_3" id="cid3_3" value="" />
          </td>
          <td id="break"> พักเที่ยง </td>
          <td id="class" onclick="showpopup('4', '3')" data-toggle="modal" data-target="#courseCenter">
            <p id="id4_3">เพิ่ม</p>
            <a id="n4_3"></a>
            <input type="hidden" name="int4_3" id="int4_3" value="" />
            <input type="hidden" name="ind4_3" id="ind4_3" value="" />
            <input type="hidden" name="cid4_3" id="cid4_3" value="" />
          </td>
          <td id="class" onclick="showpopup('5', '3')" data-toggle="modal" data-target="#courseCenter">
            <p id="id5_3">เพิ่ม</p>
            <a id="n5_3"></a>
            <input type="hidden" name="int5_3" id="int5_3" value="" />
            <input type="hidden" name="ind5_3" id="ind5_3" value="" />
            <input type="hidden" name="cid5_3" id="cid5_3" value="" />
          </td>
          <td id="class" onclick="showpopup('6', '3')" data-toggle="modal" data-target="#courseCenter">
            <p id="id6_3">เพิ่ม</p>
            <a id="n6_3"></a>
            <input type="hidden" name="int6_3" id="int6_3" value="" />
            <input type="hidden" name="ind6_3" id="ind6_3" value="" />
            <input type="hidden" name="cid6_3" id="cid6_3" value="" />
          </td>
        </tr>
        <tr>
          <td>วันพฤหัสบดี</td>
          <td id="class" onclick="showpopup('1', '4')" data-toggle="modal" data-target="#courseCenter">
            <p id="id1_4">เพิ่ม</p>
            <a id="n1_4"></a>
            <input type="hidden" name="int1_4" id="int1_4" value="" />
            <input type="hidden" name="ind1_4" id="ind1_4" value="" />
            <input type="hidden" name="cid1_4" id="cid1_4" value="" />
          </td>
          <td id="class" onclick="showpopup('2', '4')" data-toggle="modal" data-target="#courseCenter">
            <p id="id2_4">เพิ่ม</p>
            <a id="n2_4"></a>
            <input type="hidden" name="int2_4" id="int2_4" value="" />
            <input type="hidden" name="ind2_4" id="ind2_4" value="" />
            <input type="hidden" name="cid2_4" id="cid2_4" value="" />
          </td>
          <td id="class" onclick="showpopup('3', '4')" data-toggle="modal" data-target="#courseCenter">
            <p id="id3_4">เพิ่ม</p>
            <a id="n3_4"></a>
            <input type="hidden" name="int3_4" id="int3_4" value="" />
            <input type="hidden" name="ind3_4" id="ind3_4" value="" />
            <input type="hidden" name="cid3_4" id="cid3_4" value="" />
          </td>
          <td id="break"></td>
          <td id="class" onclick="showpopup('4', '4')" data-toggle="modal" data-target="#courseCenter">
            <p id="id4_4">เพิ่ม</p>
            <a id="n4_4"></a>
            <input type="hidden" name="int4_4" id="int4_4" value="" />
            <input type="hidden" name="ind4_4" id="ind4_4" value="" />
            <input type="hidden" name="cid4_4" id="cid4_4" value="" />
          </td>
          <td id="class" onclick="showpopup('5', '4')" data-toggle="modal" data-target="#courseCenter">
            <p id="id5_4">เพิ่ม</p>
            <a id="n5_4"></a>
            <input type="hidden" name="int5_4" id="int5_4" value="" />
            <input type="hidden" name="ind5_4" id="ind5_4" value="" />
            <input type="hidden" name="cid5_4" id="cid5_4" value="" />
          </td>
          <td id="class" onclick="showpopup('6', '4')" data-toggle="modal" data-target="#courseCenter">
            <p id="id6_4">เพิ่ม</p>
            <a id="n6_4"></a>
            <input type="hidden" name="int6_4" id="int6_4" value="" />
            <input type="hidden" name="ind6_4" id="ind6_4" value="" />
            <input type="hidden" name="cid6_4" id="cid6_4" value="" />
          </td>
        </tr>
        <tr>
          <td>วันศุกร์</td>
          <td id="class" onclick="showpopup('1', '5')" data-toggle="modal" data-target="#courseCenter">
            <p id="id1_5">เพิ่ม</p>
            <a id="n1_5"></a>
            <input type="hidden" name="int1_5" id="int1_5" value="" />
            <input type="hidden" name="ind1_5" id="ind1_5" value="" />
            <input type="hidden" name="cid1_5" id="cid1_5" value="" />
          </td>
          <td id="class" onclick="showpopup('2', '5')" data-toggle="modal" data-target="#courseCenter">
            <p id="id2_5">เพิ่ม</p>
            <a id="n2_5"></a>
            <input type="hidden" name="int2_5" id="int2_5" value="" />
            <input type="hidden" name="ind2_5" id="ind2_5" value="" />
            <input type="hidden" name="cid2_5" id="cid2_5" value="" />
          </td>
          <td id="class" onclick="showpopup('3', '5')" data-toggle="modal" data-target="#courseCenter">
            <p id="id3_5">เพิ่ม</p>
            <a id="n3_5"></a>
            <input type="hidden" name="int3_5" id="int3_5" value="" />
            <input type="hidden" name="ind3_5" id="ind3_5" value="" />
            <input type="hidden" name="cid3_5" id="cid3_5" value="" />
          </td>
          <td id="break-last"></td>
          <td id="class" onclick="showpopup('4', '5')" data-toggle="modal" data-target="#courseCenter">
            <p id="id4_5">เพิ่ม</p>
            <a id="n4_5"></a>
            <input type="hidden" name="int4_5" id="int4_5" value="" />
            <input type="hidden" name="ind4_5" id="ind4_5" value="" />
            <input type="hidden" name="cid4_5" id="cid4_5" value="" />
          </td>
          <td id="class" onclick="showpopup('5', '5')" data-toggle="modal" data-target="#courseCenter">
            <p id="id5_5">เพิ่ม</p>
            <a id="n5_5"></a>
            <input type="hidden" name="int5_5" id="int5_5" value="" />
            <input type="hidden" name="ind5_5" id="ind5_5" value="" />
            <input type="hidden" name="cid5_5" id="cid5_5" value="" />
          </td>
          <td id="class" onclick="showpopup('6', '5')" data-toggle="modal" data-target="#courseCenter">
            <p id="id6_5">เพิ่ม</p>
            <a id="n6_5"></a>
            <input type="hidden" name="int6_5" id="int6_5" value="" />
            <input type="hidden" name="ind6_5" id="ind6_5" value="" />
            <input type="hidden" name="cid6_5" id="cid6_5" value="" />
          </td>
        </tr>
      </table>
      <input type="hidden" name="time" id="time" value="" />
      <input type="hidden" name="day" id="day" value="" />
      <a href="project/class_schedule.php" class="btn btn-danger" role="button" style="margin-top: 20px;">Back</a>
      <button type="submit" class="btn btn-success" style="margin-top: 20px;">Add</button>
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
              <select class="custom-select" id="inputGroupSelectc">
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