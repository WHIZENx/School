<html lang="en">
    <head>
        <title>Updating Grade</title>
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

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            mysqli_set_charset($objCon, "utf8");

            $scoreID = $_POST['scoreid'];
            $Year = $_POST['year'];
            $SemesterNo = $_POST['semesterno'];
            $CourseID = $_POST['courseid_g'];
            $DegNo = $_POST['degno'];
            $GradeNo = $_POST['gradeno_g'];
            $RoomNo = $_POST['roomno_g'];

            $normal_score = $_POST['normal_score'];
            $midterm_score = $_POST['midterm_score'];
            $final_score = $_POST['final_score'];
            
            $strSQL = "UPDATE detail_score SET normal_score=$normal_score, midterm_score=$midterm_score, final_score=$final_score WHERE scoreid='$scoreID'";

            if ($_POST['action'] == 'Send' || $_POST['action'] == 'Repair') {
              $point = $normal_score+$midterm_score+$final_score;
              if ($point >= 80) {
                $grade_ch = '4.0';
              } elseif ($point >= 75) {
                $grade_ch = '3.5';
              } elseif ($point >= 70) {
                $grade_ch = '3.0';
              } elseif ($point >= 65) {
                $grade_ch = '2.5';
              } elseif ($point >= 60) {
                $grade_ch = '2.0';
              } elseif ($point >= 55) {
                $grade_ch = '1.5';
              }  elseif ($point >= 50) {
                $grade_ch = '1.0';
              } else {
                $grade_ch = '0.0';
              }
              $strSQL_grade = "UPDATE detail_score SET grade=$grade_ch WHERE scoreid='$scoreID'";
              $objCon->query($strSQL_grade);
            }

            if($objCon->query($strSQL)) {
                echo '<script type="text/javascript">
                          alert("Update Grade Completed!");
                          window.location.replace("http://localhost/project/grade.php?&Year='.$Year.'&SemesterNo='.$SemesterNo.'&CourseID=%27'.$CourseID.'%27&DegNo='.$DegNo.'&GradeNo='.$GradeNo.'&RoomNo='.$RoomNo.'");
                       </script>';
                $objCon->close(); 
            } else {
                echo "ERROR: Could not able to execute $strSQL. " . mysqli_error($objCon);
            }
        ?>
    </body>
</html>