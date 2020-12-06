<html lang="en">
    <head>
        <title>Updating Schedule</title>
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

            $strSQL1_1 = "UPDATE schedule_detail SET courseid='".$_POST['cid1_1']."' WHERE idschedule=CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."') AND timeno='".$_POST['int1_1']."' AND dayno='".$_POST['ind1_1']."'";
            $strSQL2_1 = "UPDATE schedule_detail SET courseid='".$_POST['cid2_1']."' WHERE idschedule=CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."') AND timeno='".$_POST['int2_1']."' AND dayno='".$_POST['ind2_1']."'";
            $strSQL3_1 = "UPDATE schedule_detail SET courseid='".$_POST['cid3_1']."' WHERE idschedule=CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."') AND timeno='".$_POST['int3_1']."' AND dayno='".$_POST['ind3_1']."'";
            $strSQL4_1 = "UPDATE schedule_detail SET courseid='".$_POST['cid4_1']."' WHERE idschedule=CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."') AND timeno='".$_POST['int4_1']."' AND dayno='".$_POST['ind4_1']."'";
            $strSQL5_1 = "UPDATE schedule_detail SET courseid='".$_POST['cid5_1']."' WHERE idschedule=CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."') AND timeno='".$_POST['int5_1']."' AND dayno='".$_POST['ind5_1']."'";
            $strSQL6_1 = "UPDATE schedule_detail SET courseid='".$_POST['cid6_1']."' WHERE idschedule=CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."') AND timeno='".$_POST['int6_1']."' AND dayno='".$_POST['ind6_1']."'";
            $strSQL1_2 = "UPDATE schedule_detail SET courseid='".$_POST['cid1_2']."' WHERE idschedule=CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."') AND timeno='".$_POST['int1_2']."' AND dayno='".$_POST['ind1_2']."'";
            $strSQL2_2 = "UPDATE schedule_detail SET courseid='".$_POST['cid2_2']."' WHERE idschedule=CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."') AND timeno='".$_POST['int2_2']."' AND dayno='".$_POST['ind2_2']."'";
            $strSQL3_2 = "UPDATE schedule_detail SET courseid='".$_POST['cid3_2']."' WHERE idschedule=CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."') AND timeno='".$_POST['int3_2']."' AND dayno='".$_POST['ind3_2']."'";
            $strSQL4_2 = "UPDATE schedule_detail SET courseid='".$_POST['cid4_2']."' WHERE idschedule=CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."') AND timeno='".$_POST['int4_2']."' AND dayno='".$_POST['ind4_2']."'";
            $strSQL5_2 = "UPDATE schedule_detail SET courseid='".$_POST['cid5_2']."' WHERE idschedule=CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."') AND timeno='".$_POST['int5_2']."' AND dayno='".$_POST['ind5_2']."'";
            $strSQL6_2 = "UPDATE schedule_detail SET courseid='".$_POST['cid6_2']."' WHERE idschedule=CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."') AND timeno='".$_POST['int6_2']."' AND dayno='".$_POST['ind6_2']."'";
            $strSQL1_3 = "UPDATE schedule_detail SET courseid='".$_POST['cid1_3']."' WHERE idschedule=CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."') AND timeno='".$_POST['int1_3']."' AND dayno='".$_POST['ind1_3']."'";
            $strSQL2_3 = "UPDATE schedule_detail SET courseid='".$_POST['cid2_3']."' WHERE idschedule=CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."') AND timeno='".$_POST['int2_3']."' AND dayno='".$_POST['ind2_3']."'";
            $strSQL3_3 = "UPDATE schedule_detail SET courseid='".$_POST['cid3_3']."' WHERE idschedule=CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."') AND timeno='".$_POST['int3_3']."' AND dayno='".$_POST['ind3_3']."'";
            $strSQL4_3 = "UPDATE schedule_detail SET courseid='".$_POST['cid4_3']."' WHERE idschedule=CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."') AND timeno='".$_POST['int4_3']."' AND dayno='".$_POST['ind4_3']."'";
            $strSQL5_3 = "UPDATE schedule_detail SET courseid='".$_POST['cid5_3']."' WHERE idschedule=CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."') AND timeno='".$_POST['int5_3']."' AND dayno='".$_POST['ind5_3']."'";
            $strSQL6_3 = "UPDATE schedule_detail SET courseid='".$_POST['cid6_3']."' WHERE idschedule=CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."') AND timeno='".$_POST['int6_3']."' AND dayno='".$_POST['ind6_3']."'";
            $strSQL1_4 = "UPDATE schedule_detail SET courseid='".$_POST['cid1_4']."' WHERE idschedule=CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."') AND timeno='".$_POST['int1_4']."' AND dayno='".$_POST['ind1_4']."'";
            $strSQL2_4 = "UPDATE schedule_detail SET courseid='".$_POST['cid2_4']."' WHERE idschedule=CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."') AND timeno='".$_POST['int2_4']."' AND dayno='".$_POST['ind2_4']."'";
            $strSQL3_4 = "UPDATE schedule_detail SET courseid='".$_POST['cid3_4']."' WHERE idschedule=CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."') AND timeno='".$_POST['int3_4']."' AND dayno='".$_POST['ind3_4']."'";
            $strSQL4_4 = "UPDATE schedule_detail SET courseid='".$_POST['cid4_4']."' WHERE idschedule=CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."') AND timeno='".$_POST['int4_4']."' AND dayno='".$_POST['ind4_4']."'";
            $strSQL5_4 = "UPDATE schedule_detail SET courseid='".$_POST['cid5_4']."' WHERE idschedule=CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."') AND timeno='".$_POST['int5_4']."' AND dayno='".$_POST['ind5_4']."'";
            $strSQL6_4 = "UPDATE schedule_detail SET courseid='".$_POST['cid6_4']."' WHERE idschedule=CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."') AND timeno='".$_POST['int6_4']."' AND dayno='".$_POST['ind6_4']."'";
            $strSQL1_5 = "UPDATE schedule_detail SET courseid='".$_POST['cid1_5']."' WHERE idschedule=CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."') AND timeno='".$_POST['int1_5']."' AND dayno='".$_POST['ind1_5']."'";
            $strSQL2_5 = "UPDATE schedule_detail SET courseid='".$_POST['cid2_5']."' WHERE idschedule=CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."') AND timeno='".$_POST['int2_5']."' AND dayno='".$_POST['ind2_5']."'";
            $strSQL3_5 = "UPDATE schedule_detail SET courseid='".$_POST['cid6_5']."' WHERE idschedule=CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."') AND timeno='".$_POST['int3_5']."' AND dayno='".$_POST['ind3_5']."'";
            $strSQL4_5 = "UPDATE schedule_detail SET courseid='".$_POST['cid4_5']."' WHERE idschedule=CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."') AND timeno='".$_POST['int4_5']."' AND dayno='".$_POST['ind4_5']."'";
            $strSQL5_5 = "UPDATE schedule_detail SET courseid='".$_POST['cid5_5']."' WHERE idschedule=CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."') AND timeno='".$_POST['int5_5']."' AND dayno='".$_POST['ind5_5']."'";
            $strSQL6_5 = "UPDATE schedule_detail SET courseid='".$_POST['cid6_5']."' WHERE idschedule=CONCAT('".$semester."','_','".$term."','_','".$gradeNo."','_','".$roomNo."','_','".$degreeno."') AND timeno='".$_POST['int6_5']."' AND dayno='".$_POST['ind6_5']."'";

            if($objCon->query($strSQL1_1) && $objCon->query($strSQL2_1) && $objCon->query($strSQL3_1) && $objCon->query($strSQL4_1) && $objCon->query($strSQL5_1) && $objCon->query($strSQL6_1) && $objCon->query($strSQL1_2) && $objCon->query($strSQL2_2) && $objCon->query($strSQL3_2) && $objCon->query($strSQL4_2) && $objCon->query($strSQL5_2) && $objCon->query($strSQL6_2) && $objCon->query($strSQL1_3) && $objCon->query($strSQL2_3) && $objCon->query($strSQL3_3) && $objCon->query($strSQL4_3) && $objCon->query($strSQL5_3) && $objCon->query($strSQL6_3) && $objCon->query($strSQL1_4) && $objCon->query($strSQL2_4) && $objCon->query($strSQL3_4) && $objCon->query($strSQL4_4) && $objCon->query($strSQL5_4) && $objCon->query($strSQL6_4) && $objCon->query($strSQL1_5) && $objCon->query($strSQL2_5) && $objCon->query($strSQL3_5) && $objCon->query($strSQL4_5) && $objCon->query($strSQL5_5) && $objCon->query($strSQL6_5)) {
                echo '<script type="text/javascript">
                          alert("Update Schedule Completed!")
                          window.location.replace("http://localhost/project/class_schedule.php")
                       </script>';
                $objCon->close(); 
            } else {
                echo "ERROR: Could not able to execute $strSQL. " . mysqli_error($objCon);
            }
        ?>
    </body>
</html>