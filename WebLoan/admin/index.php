<?php
    session_start();
    if($_SESSION["id"]=="")
    {
        header("location: login.php");
    }
    else{

    }
 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>System Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">System Admin</a>
                <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i>
                </button><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <!-- <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div> -->
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i><?php echo $_SESSION["username"]?></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <!-- <a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div> -->
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php"><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                ข้อมูลทั้งหมด
                            </a>
                            <a class="nav-link" href="otp.php"><div class="sb-nav-link-icon"><i class="fas fa-tablet-alt"></i></div>
                                ข้อมูล OTP
                            </a>
                            <a class="nav-link" href="users.php"><div class="sb-nav-link-icon"><i class="fas fa-user"></i></i></div>
                                จัดการ Admin
                            </a>
                        </div>
                    </div>
                   
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        
                        <div class="card mb-4" style="margin-top:20px;">
                            <div class="card-header"><i class="fas fa-table mr-1"></i> ข้อมูลทั้งหมด </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                <table id='empTable' class="table" style="font-size:10pt;width:100%;">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>ชื่อ</th>
                                            <th>นามสกุล</th>
                                            <th>เบอร์โทรศัพท์</th>
                                            <th>อายุ</th>
                                            <th>อาชีพ</th>
                                            <th>เงินเดือน</th>
                                            <th>กู้เงิน</th>
                                            <th>OTP</th>
                                            <th>อีเมล์</th>
                                            <th>วันที่สมัคร</th>
                                        </tr>
                                    </thead>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2019</div>
                            <div>
                                
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>


    </body>



    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>

    <!-- Datatable JS -->
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <!-- Datatable CSS -->
    <link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>

    <script src="//cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="//cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>

    <link href='//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
    <link href='//cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css' rel='stylesheet' type='text/css'>

</html>
<script>
$(document).ready(function(){
   var table = $('#empTable').DataTable({
      'processing': true,
      'serverSide': true,
      'serverMethod': 'post',
      'ajax': {
          'url':'functions/ajaxfile.php'
      },
      "columnDefs": [ {
        "searchable": false,
        "orderable": false,
        "targets": 0
      } ],
      "order": [[ 1, 'asc' ]],
      'columns': [
         { data : null},
         { data: 'firstname' },
         { data: 'lastname' },
         { data: 'phonenumber' },
         { data: 'age' },
         { data: 'occupation' },
         { data: 'salary' },
         { data: 'loanamount' },
         { data: 'otp' },
         { data: 'email' },
         { data: 'reg_date' },
      ],
      dom: 'Bfrtip',
        buttons: [
            'excel'
        ]
    });

    table.on( 'order.dt search.dt', function () {
    table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
        cell.innerHTML = i+1;
    } );
    } ).draw();



});
</script>