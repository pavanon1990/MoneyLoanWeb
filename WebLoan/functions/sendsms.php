<?php
    class Send_SMS
    {
        public function sendOTP($phoneNumber,$OTP)
        {
            $content = "รหัส OTP ของคุณคือ : ".$OTP;
            $Username	= "admin-grungerntunjai"; 	 			
            $Password	= "Grungerntunj@1"; 	 			
            $PhoneList	= $phoneNumber;
            $Message		= urlencode($content);
            //ถ้าไฟล์ เป็น UTF-8 ให้แก้ไขดังนี้  $Message =urlencode(iconv("UTF-8","TIS-620","ทดสอบการส่งข้อความผ่าน API ด้วยภาษา PHP"));
            $Sender		= "SMS.";
            
            $Parameter	=	"User=$Username&Password=$Password&Msnlist=$PhoneList&Msg=$Message&Sender=$Sender";
            $API_URL		=	"https://api.smsmkt.com/SMSLink/SendMsg/index.php";
            
            $ch = curl_init();   
            curl_setopt($ch,CURLOPT_URL,$API_URL);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,1); 
            curl_setopt($ch,CURLOPT_POST,1); 
            curl_setopt($ch,CURLOPT_POSTFIELDS,$Parameter);
            
            $Result = curl_exec($ch);
            $http_code = curl_getinfo($ch,CURLINFO_HTTP_CODE);
            curl_close($ch);

            return $Result;
        }
    }
    
?>