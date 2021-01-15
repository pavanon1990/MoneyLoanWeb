<?php
    include_once('functions.php');
    include_once('sendsms.php');
    $setOTP = new DB_con();
    $send_SMS = new Send_SMS();

    $phonenumber = $_POST["phonenumber"];
    $otp = mt_rand(10000, 99999);
    $page = isset($_GET['p'])?$_GET['p']:'';

    if($page = 'add')
    {
        $result = $setOTP->checkPhoneNumber($phonenumber);
        $rows = mysqli_num_rows($result);
        if($rows == 0)
        {
            $sendResult = $send_SMS->sendOTP($phonenumber,$otp);
            $result = $setOTP->insertOTP($phonenumber,$otp);
            echo $sendResult;
            echo "OK";
        }
        else
        {
            echo "Fail";
        }
    }


   


?>