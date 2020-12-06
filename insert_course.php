<html lang="en">
    <head>
        <title>Adding Course</title>
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

            $courseID = $_POST['cid'];
            $tid = $_POST['tid'];
            $credit = $_POST['credit'];
            $cname = $_POST['cname'];
            $degreeno = $_POST['degreeno'];
            $classroom = $_POST['classroom'];
            $gradeNo = $_POST['gradeno'];
            $prono = $_POST['prono'];

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            mysqli_set_charset($objCon, "utf8");

            $strSQL = "INSERT INTO course (courseid, grade, program, coursename, classroom, credit, teacherid, degreeno) VALUES ('$courseID', '$gradeNo', '$prono','$cname','$classroom','$credit','$tid', '$degreeno')";

            if($objCon->query($strSQL)) {
                echo '<script type="text/javascript">
                          alert("Add Course Completed!")
                          window.location.replace("http://localhost/project/course.php")
                       </script>';
                $objCon->close(); 
            } else {
                echo "ERROR: Could not able to execute $strSQL. " . mysqli_error($objCon);
            }
        ?>
    </body>
</html>
<!-- // window.location.replace("http://localhost/project/student.php") -->