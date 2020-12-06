<html lang="en">
    <head>
        <title>Adding Teacher</title>
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

            $tID = $_POST['tid'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $address = $_POST['address'];
            $birthday = $_POST['bdate'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $disease = $_POST['disease'];
            $type = $_POST['typeno'];
            $ntitle = $_POST['ntitle'];
            $startwork = $_POST['startwork'];

            $objCon = new mysqli($serverName,$userName,$userPassword,$dbName);

            mysqli_set_charset($objCon, "utf8");

            $strSQL = "INSERT INTO teacher (teacherid, Tfname, Tlname,BDate,article,start_work,email,address,groupc,disease,phone) VALUES ($tID, '$firstname', '$lastname', '$birthday', '$ntitle', '$startwork', '$email', '$address', '$type','$disease','$phone')";

            if($objCon->query($strSQL)) {
                echo '<script type="text/javascript">
                          alert("Add Teacher Completed!")
                          window.location.replace("http://localhost/project/teacher.php")
                       </script>';
                $objCon->close(); 
            } else {
                echo "ERROR: Could not able to execute $strSQL. " . mysqli_error($objCon);
            }
        ?>
    </body>
</html>