<?php

session_start();

include_once('./assets/includes/db-connection.php');

if (isset($_POST['registerUser'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $rowCount = mysqli_num_rows(mysqli_query($conn, "SELECT `ID` FROM `user_info_tbl` WHERE `Email` = '$email';"));
    if ($rowCount) {
        echo 
        "<script>
            alert('Email already used. Please choose another email.');
            window.location.replace('./register.php');
        </script>";
    }
    else {
        $fullName   = mysqli_real_escape_string($conn, $_POST['firstName']) . ' ' . mysqli_real_escape_string($conn, $_POST['lastName']);
        $birthday   = mysqli_real_escape_string($conn, $_POST['birthday']);
        $gender     = mysqli_real_escape_string($conn, $_POST['gender']);
        $phone      = mysqli_real_escape_string($conn, $_POST['phone']);
        $address    = mysqli_real_escape_string($conn, $_POST['address']);
        $password   = md5(mysqli_real_escape_string($conn, $_POST['cpassword']));

        $result = mysqli_query($conn, "INSERT INTO `user_info_tbl`(`FullName`, `Gender`, `Birthday`, `PhoneNumber`, `Address`, `Email`, `Password`) VALUES ('$fullName', '$gender', '$birthday', '$phone', '$address', '$email', '$password');");
        if ($result) {
            echo 
            "<script>
                alert('Register user account successfully.');
                window.location.replace('./login.php');
            </script>";
        }
        else {
            echo 
            "<script>
                alert('An error occurred. Please try again.');
                window.location.replace('./register.php');
            </script>";
        }
    }

    exit(0);
}

if (isset($_POST['loginUser'])) {
	$email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5(mysqli_real_escape_string($conn, $_POST['password']));

    $ret = mysqli_fetch_array(mysqli_query($conn, "SELECT `ID`, `FullName` FROM `user_info_tbl` WHERE `Email` = '$email' && `Password` = '$password';"));
    if ($ret) {
        $_SESSION['uid'] = $ret['ID'];
        $fullName = $ret['FullName'];

        echo 
        "<script>
            alert('Hello $fullName.');
            window.location.replace('./dashboard.php');
        </script>";
    }
    else {
        echo 
        "<script>
            alert('Incorrect account.');
            window.location.replace('./login.php');
        </script>";
    }

    exit(0);
}

?>