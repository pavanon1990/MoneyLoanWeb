<?php 
    define('DB_SERVER','Localhost');
    define('DB_USER','root');
    define('DB_PASS','P@ssw0rd');
    define('DB_NAME','com12126_dbloansys');
    define('AppID','0');

    class DB_con {
        function __construct(){
            $conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
            
            $this->dbcon = $conn;
 
            if(mysqli_connect_errno())
            {
                echo "Failed to connect";
            }
        }

        public function registeration($fname,$lname,$email,$phone,$age,$job,$salary,$amount,$otp)
        {
            $appID = AppID;
            $queryDB = "INSERT INTO tbl_register(firstname,lastname,phonenumber,age,Occupation,Salary,LoanAmount,OTP,OTP_date,email,AppID) 
            VALUES('$fname','$lname','$phone','$age','$job','$salary','$amount','$otp',NOW(),'$email',$appID)";
            mysqli_query($this->dbcon,"set character set UTF8");
            $reg = mysqli_query($this->dbcon,$queryDB);
            
            //echo $queryDB;
            return $reg;
        }

        public function checkPhoneNumber($phonenumber)
        {
            $queryDB = "select * from tbl_otp where phonenumber = ".$phonenumber." and verify = '1'";
            $reg = mysqli_query($this->dbcon,$queryDB);
            return $reg;
        }

        public function checkOTP($phonenumber,$otp)
        {
            $queryDB = "select * from tbl_otp where phonenumber = ".$phonenumber." and otp = '".$otp."' and verify = '0'";
            $reg = mysqli_query($this->dbcon,$queryDB);
            // echo $queryDB;
            return $reg;
        }

        public function updateOTP($phonenumber,$otp)
        {
            $queryDB = "Update tbl_otp set verify = '1'
            where phonenumber = ".$phonenumber." and otp = '".$otp."' and verify = '0' ";
            mysqli_query($this->dbcon,"set character set UTF8");
            $reg = mysqli_query($this->dbcon,$queryDB);
            
            // echo $queryDB;
            return $reg;
        }

        public function insertOTP($phoenumber,$otp)
        {
            $appID = AppID;
            $queryDB = "INSERT INTO tbl_otp(phonenumber,OTP,verify,AppID) 
            VALUES('$phoenumber','$otp','0','$appID')";
            mysqli_query($this->dbcon,"set character set UTF8");
            $reg = mysqli_query($this->dbcon,$queryDB);
            
            // echo $queryDB;
            return $reg;
        }
    }
?>