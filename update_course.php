<html lang="en">
    <head>
        <title>Updating Infomation Course</title>
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

            $tid = $_POST['teacherID'];
            $cname = $_POST['cname'];
            $classroom = $_POST['classroom'];
            $credit = $_POST['credit'];

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            mysqli_set_charset($objCon, "utf8");

            $strSQL = "UPDATE course SET coursename='$cname', classroom='$classroom', credit='$credit' WHERE courseid='$tid'";

            if($objCon->query($strSQL)) {
                echo '<script type="text/javascript">
                          alert("Update Infomation Course Completed!")
                          window.location.replace("http://localhost/project/course.php")
                       </script>';
                $objCon->close(); 
            } else {
                echo "ERROR: Could not able to execute $strSQL. " . mysqli_error($objCon);
            }
        ?>
    </body>
</html>