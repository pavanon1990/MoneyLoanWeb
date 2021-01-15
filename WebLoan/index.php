<?php 
  // include_once('functions/functions.php'); 
  // $userdata = new DB_con();

  // if(isset($_POST['submit']))
  // {
  //   $fname = $_POST['fname'];
  //   $lname = $_POST['lname'];
  //   $email = $_POST['email'];
  //   $phone = $_POST['phone'];
  //   $age = $_POST['age'];
  //   $job = $_POST['job'];
  //   $salary = $_POST['salary'];
  //   $amount = $_POST['amount'];

  //   $sql = $userdata->registeration($fname,$lname,$email,$phone,$age,$job,$salary,$amount);

  //   if($sql){
  //       echo "<script>alert('Registor Successful!')</script>";
  //   }
  //   else{
  //       echo "<script>alert('Error!')</script>";
  //   }
  // }

  

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>เงินด่วนฉับไว</title>

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Kanit&display=swap"rel="stylesheet"
    />
    
    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet" />
    <link
      href="assets/vendor/owl.carousel/assets/owl.carousel.min.css"
      rel="stylesheet"
    />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
        <h1 class="logo mr-auto"><a href="#hero">เงินด่วนฉับไว</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="#hero">HOME</a></li>
            <li><a href="#register">REGISTER</a></li>
            <li><a href="#howto">HOW TO</a></li>
            <li><a href="#services">SERVICES</a></li>
            <li><a href="#contact">CONTACT</a></li>
          </ul>
        </nav>
        <!-- .nav-menu -->
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
      <div class="hero-container">
        <h2>กู้เงินด่วน ได้เงินจริง</h2>
        <br />
        <h1>"อนุมัติรู้ผลไว ไม่ต้องมีผู้ค้ำ"</h1>
        <br />
        <h2>* ติดแบลคลิสต์ก็กู้ได้</h2>
        <h2>* ใช้เอกสารไม่เยอะ</h2>
        <h2>* ไม่ตรวจสอบบูโร</h2>
        <h2>วงเงินอนุมัติไม่จำกัด !!!</h2>
        <h3><a href="#register">สนใจสมัคร คลิก</a></h3>
      </div>
    </section>
    <!-- End Hero -->

    <main id="main">
    <!-- ======= howto Section ======= -->
      <section id="howto" class="howto">
        <div class="container">
          <h2>ขั้นตอนการสมัคร</h2>

          <div class="row">
            <div class="col-md-12">
              ขั้นตอนที่ 1 : กรอกแบบฟอร์มใบสมัครออนไลน์
              แจ้งจำนวนเงินและระยะเวลาที่ต้องการใช้เงิน
            </div>

            <div class="col-md-12">
              ขั้นตอนที่ 2 : หลังจากได้ sms ยืนยันการสมัคร
              รออนุมัติและรับเงินผลภายใน 3 วัน
            </div>

            <div class="col-md-12">
              ขั้นตอนที่ 3 : หลังจากพิจารณาแล้ว ระบบจะติดต่อกลับเพื่อแจ้งผล
              และนัดหมายกับท่านเพื่อรับเงิน
            </div>

            <div class="col-md-12">
              <h3><a href="#register">สมัครเลย</a></h3>
            </div>
          </div>
        </div>
      </section>
      <!-- End howto Section -->

      <!-- ======= register Section ======= -->
      <section id="register" class="register">
        <div class="container">
          <form class="form-horizontal" method="POST">
            <h2>สมัครกู้เงินด่วนฉับไว</h2>
            <div class="row">
              <div class="form-group col-md-6">
                <div class="col-md-12">
                  <label for="firstName" class="control-label">ชื่อ *</label>
                  <input
                    type="text"
                    name="fname"
                    id="firstName"
                    placeholder="First Name"
                    class="form-control"
                    autofocus
                    required
                  />
                </div>
              </div>
              <div class="form-group col-md-6">
                <div class="col-md-12">
                  <label for="lastName" class="control-label">นามสกุล *</label>
                  <input
                    type="text"
                    name="lname"
                    id="lastName"
                    placeholder="Last Name"
                    class="form-control"
                    autofocus
                    required
                  />
                </div>
              </div>
              <div class="form-group col-md-6">
                <div class="col-md-12">
                  <label for="email" class="control-label">อีเมลล์ * </label>
                  <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Email"
                    class="form-control"
                    name="email"
                    required
                  />
                </div>
              </div>
              <div class="form-group col-md-6">
                <div class="col-md-12">
                  <label for="phone" class="control-label"
                    >เบอร์โทรศัพท์ *</label
                  >
                  <input
                    type="text"
                    name="phone"
                    id="phone"
                    placeholder="Phone Number"
                    class="form-control"
                    autofocus
                    required
                  />
                </div>
              </div>
              <div class="form-group col-md-6">
                <div class="col-md-12">
                  <label for="age" class="control-label">อายุ *</label>
                  <input
                    type="text"
                    name="age"
                    id="age"
                    placeholder="Ages"
                    class="form-control"
                    autofocus
                    required
                  />
                </div>
              </div>
              <div class="form-group col-md-6">
                <div class="col-md-12">
                  <label for="job" class="control-label">อาชีพ *</label>
                  <input
                    type="text"
                    name="job"
                    id="job"
                    placeholder="Occupation"
                    class="form-control"
                    autofocus
                    required
                  />
                </div>
              </div>
              <div class="form-group col-md-6">
                <div class="col-md-12">
                  <label for="salary" class="control-label"
                    >โปรดระบุเงินเดือน *</label
                  >

                  <select id="salary" name="salary" class="form-control">
                    <option value="" disabled="" selected>Salary</option>
                    <option value="0-10,000 บาท">0 - 10,000 บาท</option>
                    <option value="10,001-30,000 บาท">
                      10,001 - 30,000 บาท
                    </option>
                    <option value="30,001-50,000 บาท">
                      30,001 - 50,000 บาท
                    </option>
                    <option value="50,001 ขึ้นไป">50,001 ขึ้นไป</option>
                  </select>
                </div>
              </div>
              <div class="form-group col-md-6">
                <div class="col-md-12">
                  <label for="amount" class="control-label"
                    >ยอดเงินที่ต้องการกู้ *</label
                  >
                  <input
                    type="number"
                    name="amount"
                    id="amount"
                    placeholder="Amount"
                    class="form-control"
                    autofocus
                    required
                  />
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-12">
                  <span class="font15"
                    >บริษัทจะเก็บรวบรวม ใช้ เปิดเผยข้อมูลส่วนบุคคลของท่าน
                    เพื่อติดต่อ
                    นำเสนอและประชาสัมพันธ์ผลิตภัณฑ์และบริการที่คุณสนใจ
                    คุณยอมรับและยินดีที่จะปฏิบัติตามเงื่อนไขและข้อกำหนดของบริษัท</span
                  >
                </div>
                <br />
                <div class="col-md-12">
                  <input type="checkbox" id="agree" name="agree"  required/>
                  <label for="agree">ตกลงและยอมรับตามเงื่อนไข</label>
                </div>
                <div class="col-md-12">
                  <button
                    id="apply"
                    type="button"
                    name="buttonOTP"
                    class="btn btn-primary btn-block"
                   
                  >
                    สมัคร
                  </button>
                </div>
                <br />
                <div class="col-md-12">
                  <span class="font15"
                    >* เจ้าหน้าที่จะติดต่อกลับภายใน 3 วัน
                    หลังจากการสมัครเรียบร้อยแล้ว</span
                  >
                </div>
              </div>
            </div>
          </form>
          <!-- /form -->
        </div>
      </section>
      <!-- End register Section -->

   

      <!-- ======= services Section ======= -->
      <section id="services" class="services">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2>ลูกค้าของเรา</h2>
            </div>
            <div class="col-md-4">
              <div class="group-service">
                <div class="col-md-12">
                  <img src="assets/img/profile.png" />
                </div>
                <div class="col-md-12">
                  <label class="control-label">ข้าราชการ , พนักงานประจำ</label>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="group-service">
                <div class="col-md-12">
                  <img src="assets/img/graduated.png" />
                </div>
                <div class="col-md-12">
                  <label class="control-label">นักเรียน นักศึกษา</label>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="group-service">
                <div class="col-md-12">
                  <img src="assets/img/shop.png" />
                </div>
                <div class="col-md-12">
                  <label class="control-label">พ่อค้า แม่ค้า รายได้ไม่ประจำ</label
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End services Section -->

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container">
          <h2>ติดต่อเรา</h2>

          <div class="row mt-5">
            <div class="col-lg-4">
              <div class="info">
                <div class="address">
                  <i class="icofont-google-map"></i>
                  <p>
                    เลขที่ 7/1 ถนนบรมราชชนนี แขวงอรุณอมรินทร์ เขตบางกอกน้อย
                    กรุงเทพฯ 10700
                  </p>
                </div>
              </div>
            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">
              <form
                class="php-email-form"
              >
                <div class="form-row">
                  <div class="col-md-12 form-group">
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      id="name"
                      placeholder="Your Name"
                      data-rule="minlen:4"
                      data-msg="Please enter at least 4 chars"
                    />
                    <div class="validate"></div>
                  </div>
                  <div class="col-md-12 form-group">
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      id="email"
                      placeholder="Your Email"
                      data-rule="email"
                      data-msg="Please enter a valid email"
                    />
                    <div class="validate"></div>
                  </div>
                </div>
                <div class="form-group">
                  <textarea
                    class="form-control"
                    name="message"
                    rows="5"
                    data-rule="required"
                    data-msg="Please write something for us"
                    placeholder="Message"
                  ></textarea>
                  <div class="validate"></div>
                </div>
                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">
                    Your message has been sent. Thank you!
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit">Send Message</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>




<!-- ###################################### Modal Add ###########################################################-->
        <div class="modal fade" id="otpModal" tabindex="-1" aria-labelledby="einsertModallLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">ยืนยันการสมัคร</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <div class="text-center">
                  <p>ระบบจะทำการส่ง OTP เพื่อยืนยันการสมัครไปที่หมายเลข </p>
                    <p><span id="otpphoe"></span></p>
                    <p>กรุณาใส่ OTP เพื่อยืนยันการสมัคร</p>
                </div>
                <div class="form-group">
                    <input type="text" style="text-align: center;" class="form-control"  id="otpverify" autocomplete="off" minlength="5" maxlength="5" required>
                </div>                        
              </div>
              <div class="modal-footer">
                <button type="button" id="btnregister" class="btn btn-primary">ยืนยันการสมัคร</button>
              </div>
      
                      
            </div>
          </div>
        </div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>



    <script>
        $("#apply").on('click',function(){
          var phone = $("#phone").val();
          if(phone != "")
          {
            $.ajax({
                'type':"POST",
                'url':"functions/otp.php?p=add",
                'data':"phonenumber="+phone.toString(),
                'success':function(data){
                  if(data == "Fail")
                  {
                    alert("มีการลงทะเบียนด้วยเบอร์โทรศัพท์นี้แล้ว")
                  }
                  else{
                    $("#otpverify").val("");
                    $("#otpverify").focus();
                    $("#otpphoe").html(phone)
                    $('#otpModal').modal({backdrop: 'static', keyboard: false}) 
                    $("#otpModal").modal('show');
                  }
                },
                'error':function(er)
                {
                    alert(er);
                }
            });
          }
          else{
            alert("phone")
          }
          
        })

        $("#btnregister").on('click',function(){
          var firstName = $("#firstName").val();
          var lastName = $("#lastName").val();
          var email = $("#email").val();
          var phone = $("#phone").val();
          var age = $("#age").val();
          var job = $("#job").val();
          var salary = $("#salary").val();
          var amount = $("#amount").val();
          var otp = $("#otpverify").val();
          $.ajax({
                'type':"POST",
                'url':"functions/register.php",
                'data':"phone="+phone.toString()+"&firstName="+firstName+"&lastName="+lastName+"&email="+email+"&age="+age+"&job="+job+"&salary="+salary+"&amount="+amount+"&otp="+otp,
                'success':function(data){
                  if(data == "Fail")
                  {
                    alert("เกิดข้อผิดพลาด")
                    console.log(data);
                  }
                  else{
                    alert("Succes");
                  }
                  $("#otpModal").modal('hide');
                },
                'error':function(er)
                {
                  $("#otpModal").modal('hide');
                    alert(er);
                }
            });
        });

    </script>
  </body>
</html>
