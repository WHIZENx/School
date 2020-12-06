<html lang="en">
    <head>
        <title>Updating Infomation Student</title>
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

            $stdid = $_POST['studentID'];
            $ntitle = $_POST['ntitle'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $pname = $_POST['pname'];
            $pphone = $_POST['pphone'];
            $disease = $_POST['disease'];
            $status = $_POST['groupOfRadios'];

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            mysqli_set_charset($objCon, "utf8");

            $strSQL = "UPDATE student SET ntitle='$ntitle', stdfname='$firstname', stdlname='$lastname', address='$address', phone='$phone', pname='$pname', pphone='$pphone', disease='$disease', status='$status' WHERE studentID='$stdid'";

            if($objCon->query($strSQL)) {
                echo '<script type="text/javascript">
                          alert("Update Infomation Student Completed!")
                          window.location.replace("http://localhost/project/student.php")
                       </script>';
                $objCon->close(); 
            } else {
                echo "ERROR: Could not able to execute $strSQL. " . mysqli_error($objCon);
            }
        ?>
    </body>
</html>