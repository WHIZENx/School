<html lang="en">
    <head>
        <title>Adding Schedule</title>
          <base href="/">
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="icon" type="img/x-icon" href="icon.ico">
          <link href="https://fonts.googleapis.com/css?family=Kodchasan&display=swap" rel="stylesheet">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <?php
            $serverName = "localhost";
            $userName = "root";
            $userPassword = "";
            $dbName = "school";

            $semester = $_POST['semesterid'];
            $term = $_POST['termid'];
            $degreeno = $_POST['degreeno'];
            $gradeNo = $_POST['gradeno'];
            $roomNo = $_POST['roomno'];
            
            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            mysqli_set_charset($objCon, "utf8");

            $strSQL = "INSERT INTO schedule (scheduleid, SemesterNo,Year,gradeno,roomname,degreeno) VALUES (CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."'), '$term', '$semester','$gradeNo','$roomNo','$degreeno')";

            $strSQL1_1 = "INSERT INTO schedule_detail (idschedule, timeno, dayno, courseid) VALUES (CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."'),'".$_POST['int1_1']."','".$_POST['ind1_1']."', '".$_POST['cid1_1']."')";
            $strSQL2_1 = "INSERT INTO schedule_detail (idschedule, timeno, dayno, courseid) VALUES (CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."'),'".$_POST['int2_1']."','".$_POST['ind2_1']."', '".$_POST['cid2_1']."')";
            $strSQL3_1 = "INSERT INTO schedule_detail (idschedule, timeno, dayno, courseid) VALUES (CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."'),'".$_POST['int3_1']."','".$_POST['ind3_1']."', '".$_POST['cid3_1']."')";
            $strSQL4_1 = "INSERT INTO schedule_detail (idschedule, timeno, dayno, courseid) VALUES (CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."'),'".$_POST['int4_1']."','".$_POST['ind4_1']."', '".$_POST['cid4_1']."')";
            $strSQL5_1 = "INSERT INTO schedule_detail (idschedule, timeno, dayno, courseid) VALUES (CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."'),'".$_POST['int5_1']."','".$_POST['ind5_1']."', '".$_POST['cid5_1']."')";
            $strSQL6_1 = "INSERT INTO schedule_detail (idschedule, timeno, dayno, courseid) VALUES (CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."'),'".$_POST['int6_1']."','".$_POST['ind6_1']."', '".$_POST['cid6_1']."')";
            $strSQL1_2 = "INSERT INTO schedule_detail (idschedule, timeno, dayno, courseid) VALUES (CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."'),'".$_POST['int1_2']."','".$_POST['ind1_2']."', '".$_POST['cid1_2']."')";
            $strSQL2_2 = "INSERT INTO schedule_detail (idschedule, timeno, dayno, courseid) VALUES (CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."'),'".$_POST['int2_2']."','".$_POST['ind2_2']."', '".$_POST['cid2_2']."')";
            $strSQL3_2 = "INSERT INTO schedule_detail (idschedule, timeno, dayno, courseid) VALUES (CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."'),'".$_POST['int3_2']."','".$_POST['ind3_2']."', '".$_POST['cid3_2']."')";
            $strSQL4_2 = "INSERT INTO schedule_detail (idschedule, timeno, dayno, courseid) VALUES (CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."'),'".$_POST['int4_2']."','".$_POST['ind4_2']."', '".$_POST['cid4_2']."')";
            $strSQL5_2 = "INSERT INTO schedule_detail (idschedule, timeno, dayno, courseid) VALUES (CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."'),'".$_POST['int5_2']."','".$_POST['ind5_2']."', '".$_POST['cid5_2']."')";
            $strSQL6_2 = "INSERT INTO schedule_detail (idschedule, timeno, dayno, courseid) VALUES (CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."'),'".$_POST['int6_2']."','".$_POST['ind6_2']."', '".$_POST['cid6_2']."')";
            $strSQL1_3 = "INSERT INTO schedule_detail (idschedule, timeno, dayno, courseid) VALUES (CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."'),'".$_POST['int1_3']."','".$_POST['ind1_3']."', '".$_POST['cid1_3']."')";
            $strSQL2_3 = "INSERT INTO schedule_detail (idschedule, timeno, dayno, courseid) VALUES (CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."'),'".$_POST['int2_3']."','".$_POST['ind2_3']."', '".$_POST['cid2_3']."')";
            $strSQL3_3 = "INSERT INTO schedule_detail (idschedule, timeno, dayno, courseid) VALUES (CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."'),'".$_POST['int3_3']."','".$_POST['ind3_3']."', '".$_POST['cid3_3']."')";
            $strSQL4_3 = "INSERT INTO schedule_detail (idschedule, timeno, dayno, courseid) VALUES (CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."'),'".$_POST['int4_3']."','".$_POST['ind4_3']."', '".$_POST['cid4_3']."')";
            $strSQL5_3 = "INSERT INTO schedule_detail (idschedule, timeno, dayno, courseid) VALUES (CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."'),'".$_POST['int5_3']."','".$_POST['ind5_3']."', '".$_POST['cid5_3']."')";
            $strSQL6_3 = "INSERT INTO schedule_detail (idschedule, timeno, dayno, courseid) VALUES (CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."'),'".$_POST['int6_3']."','".$_POST['ind6_3']."', '".$_POST['cid6_3']."')";
            $strSQL1_4 = "INSERT INTO schedule_detail (idschedule, timeno, dayno, courseid) VALUES (CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."'),'".$_POST['int1_4']."','".$_POST['ind1_4']."', '".$_POST['cid1_4']."')";
            $strSQL2_4 = "INSERT INTO schedule_detail (idschedule, timeno, dayno, courseid) VALUES (CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."'),'".$_POST['int2_4']."','".$_POST['ind2_4']."', '".$_POST['cid2_4']."')";
            $strSQL3_4 = "INSERT INTO schedule_detail (idschedule, timeno, dayno, courseid) VALUES (CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."'),'".$_POST['int3_4']."','".$_POST['ind3_4']."', '".$_POST['cid3_4']."')";
            $strSQL4_4 = "INSERT INTO schedule_detail (idschedule, timeno, dayno, courseid) VALUES (CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."'),'".$_POST['int4_4']."','".$_POST['ind4_4']."', '".$_POST['cid4_4']."')";
            $strSQL5_4 = "INSERT INTO schedule_detail (idschedule, timeno, dayno, courseid) VALUES (CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."'),'".$_POST['int5_4']."','".$_POST['ind5_4']."', '".$_POST['cid5_4']."')";
            $strSQL6_4 = "INSERT INTO schedule_detail (idschedule, timeno, dayno, courseid) VALUES (CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."'),'".$_POST['int6_4']."','".$_POST['ind6_4']."', '".$_POST['cid6_4']."')";
            $strSQL1_5 = "INSERT INTO schedule_detail (idschedule, timeno, dayno, courseid) VALUES (CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."'),'".$_POST['int1_5']."','".$_POST['ind1_5']."', '".$_POST['cid1_5']."')";
            $strSQL2_5 = "INSERT INTO schedule_detail (idschedule, timeno, dayno, courseid) VALUES (CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."'),'".$_POST['int2_5']."','".$_POST['ind2_5']."', '".$_POST['cid2_5']."')";
            $strSQL3_5 = "INSERT INTO schedule_detail (idschedule, timeno, dayno, courseid) VALUES (CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."'),'".$_POST['int3_5']."','".$_POST['ind3_5']."', '".$_POST['cid3_5']."')";
            $strSQL4_5 = "INSERT INTO schedule_detail (idschedule, timeno, dayno, courseid) VALUES (CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."'),'".$_POST['int4_5']."','".$_POST['ind4_5']."', '".$_POST['cid4_5']."')";
            $strSQL5_5 = "INSERT INTO schedule_detail (idschedule, timeno, dayno, courseid) VALUES (CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."'),'".$_POST['int5_5']."','".$_POST['ind5_5']."', '".$_POST['cid5_5']."')";
            $strSQL6_5 = "INSERT INTO schedule_detail (idschedule, timeno, dayno, courseid) VALUES (CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."'),'".$_POST['int6_5']."','".$_POST['ind6_5']."', '".$_POST['cid6_5']."')";
            

            if($objCon->query($strSQL) && $objCon->query($strSQL1_1) && $objCon->query($strSQL2_1) && $objCon->query($strSQL3_1) && $objCon->query($strSQL4_1) && $objCon->query($strSQL5_1) && $objCon->query($strSQL6_1) && $objCon->query($strSQL1_2) && $objCon->query($strSQL2_2) && $objCon->query($strSQL3_2) && $objCon->query($strSQL4_2) && $objCon->query($strSQL5_2) && $objCon->query($strSQL6_2) && $objCon->query($strSQL1_3) && $objCon->query($strSQL2_3) && $objCon->query($strSQL3_3) && $objCon->query($strSQL4_3) && $objCon->query($strSQL5_3) && $objCon->query($strSQL6_3) && $objCon->query($strSQL1_4) && $objCon->query($strSQL2_4) && $objCon->query($strSQL3_4) && $objCon->query($strSQL4_4) && $objCon->query($strSQL5_4) && $objCon->query($strSQL6_4) && $objCon->query($strSQL1_5) && $objCon->query($strSQL2_5) && $objCon->query($strSQL3_5) && $objCon->query($strSQL4_5) && $objCon->query($strSQL5_5) && $objCon->query($strSQL6_5)) {
                echo '<script type="text/javascript">
                          alert("Add Schedule Completed!")
                          window.location.replace("http://localhost/project/class_schedule.php")
                       </script>';
                $objCon->close(); 
            } else {
                echo "ERROR: Could not able to execute $strSQL. " . mysqli_error($objCon);
            }
        ?>
    </body>
</html>