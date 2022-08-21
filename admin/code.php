<?php

session_start();

include_once('./assets/includes/db-connection.php');

if (!isset($_SESSION['aid'])) {
    header('location:./logout.php');
}
else {
    if (isset($_POST['changeAdminPassword'])) {
        $id         = mysqli_real_escape_string($conn, $_POST['changeAdminPassword']);
        $cpassword  = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
        $npassword  = mysqli_real_escape_string($conn, md5($_POST['npassword']));
        $rpassword  = mysqli_real_escape_string($conn, md5($_POST['rpassword']));
        
		$ret = mysqli_fetch_array(mysqli_query($conn, "SELECT `ID` FROM `admin_info_tbl` WHERE `ID` = '$id' AND `Password` = '$cpassword';"));
		if ($ret > 0) {
			mysqli_query($conn, "UPDATE `admin_info_tbl` SET `Password` = '$npassword' WHERE `ID` = '$id';");
			$_SESSION['message'] = "Your password has been updated.";
            header("location:./change-password.php");
            exit(0);
		} else {
			$_SESSION['message'] = "Current password is wrong.";
            header("location:./change-password.php");
            exit(0);
		}
    }

    if (isset($_POST['updateAdminInfo'])) {
        $id         = mysqli_real_escape_string($conn, $_POST['updateAdminInfo']);
        $name       = mysqli_real_escape_string($conn, $_POST['name']);
        $birthday   = mysqli_real_escape_string($conn, $_POST['birthday']);
        $phone      = mysqli_real_escape_string($conn, $_POST['phone']);
        $address    = mysqli_real_escape_string($conn, $_POST['address']);
        
		mysqli_query($conn, "UPDATE `admin_info_tbl` SET `FullName` = '$name', `Birthday` = '$birthday', `PhoneNumber` = '$phone', `Address` = '$address' WHERE `ID` = '$id';");
        $_SESSION['message'] = "Update admin information successfully !";
        header("location:./admin-profile.php");
        exit(0);
    }

    if (isset($_POST['updateCompanyInfo'])) {
        $name       = mysqli_real_escape_string($conn, $_POST['name']);
        $slogan     = mysqli_real_escape_string($conn, $_POST['slogan']);
        $email      = mysqli_real_escape_string($conn, $_POST['email']);
        $phone      = mysqli_real_escape_string($conn, $_POST['phone']);
        $address    = mysqli_real_escape_string($conn, $_POST['address']);
        $website    = mysqli_real_escape_string($conn, $_POST['website']);
        $facebook   = mysqli_real_escape_string($conn, $_POST['facebook']);
        $instagram  = mysqli_real_escape_string($conn, $_POST['instagram']);
        $telegram   = mysqli_real_escape_string($conn, $_POST['telegram']);
        $twitter    = mysqli_real_escape_string($conn, $_POST['twitter']);
		mysqli_query($conn, "UPDATE `company_info_tbl` SET `Name` = '$name', `Slogan` = '$slogan', `Email` = '$email', `PhoneNumber` = '$phone', `Address` = '$address', `Website` = '$website', `FacebookLink` = '$facebook', `InstagramLink` = '$instagram', `TelegramLink` = '$telegram', `TwitterLink` = '$twitter';");
        $_SESSION['message'] = "Update company information successfully !";
        header("location:./company-information.php");
        exit(0);
    }

    if (isset($_POST['resetPasswordNomalUser'])) {
        $id = mysqli_real_escape_string($conn, $_POST['resetPasswordNomalUser']);
        $password = md5("123456");

		$query = mysqli_query($conn, "UPDATE `user_info_tbl` SET `Password` = '$password' WHERE `ID` = '$id';");
        $_SESSION['message'] = "User password is \"123456\".";
        header("location:./nomal-user-detail.php?userID=$id");
        exit(0);
    }

    if (isset($_POST['updateInformationNomalUser'])) {
        $id         = mysqli_real_escape_string($conn, $_POST['updateInformationNomalUser']);
        $name       = mysqli_real_escape_string($conn, $_POST['name']);
        $gender     = mysqli_real_escape_string($conn, $_POST['gender']);
        $phone      = mysqli_real_escape_string($conn, $_POST['phone']);
        $birthday   = mysqli_real_escape_string($conn, $_POST['birthday']);
        $address    = mysqli_real_escape_string($conn, $_POST['address']);
        $cardID     = mysqli_real_escape_string($conn, $_POST['cardID']);
        $type       = mysqli_real_escape_string($conn, $_POST['type']);
        $status     = mysqli_real_escape_string($conn, $_POST['status']);
		mysqli_query($conn, "UPDATE `user_info_tbl` SET `FullName` = '$name', `Gender` = '$gender', `Birthday` = '$birthday', `PhoneNumber` = '$phone', `Address` = '$address', `CardID` = '$cardID', `Type` = '$type', `Status` = '$status' WHERE `ID` = '$id'");
        $_SESSION['message'] = "Update user information successfully !";
        header("location:./nomal-user-detail.php?userID=$id");
        exit(0);
    }

    if (isset($_POST['resetPasswordPremiumUser'])) {
        $id = mysqli_real_escape_string($conn, $_POST['resetPasswordPremiumUser']);
        $password = md5("123456");

		$query = mysqli_query($conn, "UPDATE `user_info_tbl` SET `Password` = '$password' WHERE `ID` = '$id';");
        $_SESSION['message'] = "User password is \"123456\".";
        header("location:./premium-user-detail.php?userID=$id");
        exit(0);
    }

    if (isset($_POST['updateInformationPremiumUser'])) {
        $id         = mysqli_real_escape_string($conn, $_POST['updateInformationPremiumUser']);
        $name       = mysqli_real_escape_string($conn, $_POST['name']);
        $gender     = mysqli_real_escape_string($conn, $_POST['gender']);
        $phone      = mysqli_real_escape_string($conn, $_POST['phone']);
        $birthday   = mysqli_real_escape_string($conn, $_POST['birthday']);
        $address    = mysqli_real_escape_string($conn, $_POST['address']);
        $cardID     = mysqli_real_escape_string($conn, $_POST['cardID']);
        $type       = mysqli_real_escape_string($conn, $_POST['type']);
        $status     = mysqli_real_escape_string($conn, $_POST['status']);
		mysqli_query($conn, "UPDATE `user_info_tbl` SET `FullName` = '$name', `Gender` = '$gender', `Birthday` = '$birthday', `PhoneNumber` = '$phone', `Address` = '$address', `CardID` = '$cardID', `Type` = '$type', `Status` = '$status' WHERE `ID` = '$id'");
        $_SESSION['message'] = "Update user information successfully !";
        header("location:./premium-user-detail.php?userID=$id");
        exit(0);
    }

    if (isset($_POST['deleteNomalUser'])) {
        $id = mysqli_real_escape_string($conn, $_POST['deleteNomalUser']);

		mysqli_query($conn, "DELETE FROM `user_info_tbl` WHERE `ID` = '$id';");
        $_SESSION['message'] = "Successfully.";
        header("location:./nomal-users.php");
        exit(0);
    }

    if (isset($_POST['deletePremiumUser'])) {
        $id = mysqli_real_escape_string($conn, $_POST['deletePremiumUser']);

		mysqli_query($conn, "DELETE FROM `user_info_tbl` WHERE `ID` = '$id';");
        $_SESSION['message'] = "Successfully.";
        header("location:./premium-users.php");
        exit(0);
    }

    if (isset($_POST['changeInformationUser'])) {
        $id = mysqli_real_escape_string($conn, $_POST['id']);
    
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
        $gender = mysqli_real_escape_string($conn, $_POST['gender']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $cardID = mysqli_real_escape_string($conn, $_POST['cardID']);
        $type = mysqli_real_escape_string($conn, $_POST['type']);
        $status = mysqli_real_escape_string($conn, $_POST['status']);
    
        $query = mysqli_query($conn, "UPDATE `user_infor_tbl` SET `FullName` = '$name', `Gender` = '$gender', `PhoneNumber` = '$phone', `Birthday` = '$birthday', `Address` = '$address', `CardID` = '$cardID', `Type` = '$type', `Status` = '$status' WHERE `ID` = '$id';");
    
        if ($query) {
            $_SESSION['message'] = "User updated successfully.";
            header("location:./user-detail.php?userID=$id");
            exit(0);
        }
        else {
            $_SESSION['message'] = "An error occurred. Please try again.";
            header("location:./user-detail.php?userID=$id");
            exit(0);
        }
    }

    if (isset($_POST['deleteInVehicle'])) {
        $id = mysqli_real_escape_string($conn, $_POST['deleteInVehicle']);
    
        mysqli_query($conn, "DELETE FROM `vehicle_info_tbl` WHERE `ID` = '$id';");
        $_SESSION['message'] = "Successfully.";
        header("location:./in-vehicles.php");
        exit(0);
    }

    if (isset($_POST['setOutVehicle'])) {
        $id = mysqli_real_escape_string($conn, $_POST['setOutVehicle']);
        
        mysqli_query($conn, "CALL updateVehicleCharge('$id');");
        mysqli_query($conn, "CALL updateVehicleStatus('$id', 'Out');");
        $_SESSION['message'] = "Successfully !";
        header("location:./in-vehicles.php");
        exit(0);
    }

    if (isset($_POST['deleteOutVehicle'])) {
        $id = mysqli_real_escape_string($conn, $_POST['deleteOutVehicle']);
    
        mysqli_query($conn, "DELETE FROM `vehicle_info_tbl` WHERE `ID` = '$id';");
        $_SESSION['message'] = "Successfully !";
        header("location:./out-vehicles.php");
        exit(0);
    }
}

?>