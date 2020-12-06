<html lang="en">
    <head>
        <title>Adding Student</title>
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

            $studentID = $_POST['stdid'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $address = $_POST['address'];
            $birthday = $_POST['bdate'];
            $phone = $_POST['phone'];
            $pname = $_POST['pname'];
            $pphone = $_POST['pphone'];
            $disease = $_POST['disease'];
            $degreeno = $_POST['degreeno'];
            $gradeNo = $_POST['gradeno'];
            $roomNo = $_POST['roomno'];

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            mysqli_set_charset($objCon, "utf8");

            $strSQL = "INSERT INTO student (studentID, stdfname,stdlname,address,birthday,phone,pname,pphone,disease) VALUES ($studentID, '$firstname', '$lastname','$address','$birthday','$phone','$pname','$pphone','$disease')";

            $strSQL2 = "INSERT INTO grade_c (GradeNo, RoomNumber, studentID, DegreeNo) VALUES ('$gradeNo','$roomNo','$studentID', '$degreeno')";

            if($objCon->query($strSQL)) {
            	if ($objCon->query($strSQL2)) {
            		echo '<script type="text/javascript">
                          alert("Add Student Completed!")
                          window.location.replace("http://localhost/project/student.php")
                       </script>';
                $objCon->close(); 
            	}
            } else {
                echo "ERROR: Could not able to execute $strSQL. " . mysqli_error($objCon);
            }
        ?>
    </body>
</html>