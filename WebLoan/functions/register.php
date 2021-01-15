<?php
    include_once('functions.php');
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $age = $_POST["age"];
    $job = $_POST["job"];
    $salary = $_POST["salary"];
    $amount = $_POST["amount"];
    $otp = $_POST["otp"];

    $regis = new DB_con();

    $result = $regis->checkOTP($phone,$otp);
    $rows = mysqli_num_rows($result);

    if($rows == 1)
    {
        $sql = $regis->registeration($firstName,$lastName,$email,$phone,$age,$job,$salary,$amount,$otp);
        $updateOTP = $regis->updateOTP($phone,$otp);
        echo "OK";
    }
    else
    {
        echo "Fail";
    }
?>