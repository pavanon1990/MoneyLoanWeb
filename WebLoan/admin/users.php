<?php
    session_start();
    if($_SESSION["id"]=="")
    {
        header("location: login.php");
    }
    else{

    }
 
?>
<?php include 'functions/config.php'; 

    $queryapp = "select * from tbl_app";
    $data_app = mysqli_query($con,$queryapp);
    $data_app2 = mysqli_query($con,$queryapp);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Users Management</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body onload="viewData()" onload="viewData()" class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">System Admin</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
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
                        <div class="text-right" style="padding-top:20px; padding-bottom:20px;">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#insertModal" data-backdrop="static">Add User</button>
                        </div> 
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i> ข้อมูลผู้ใช้งานระบบ</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped" style="font-size:12pt">
                                        <thead>
                                            <tr>
                                                <th>Username</th>
                                                <th>Full name</th>
                                                <th>Email Address</th>
                                                <th>Phone Number</th>
                                                <th>Status</th>
                                                <th>Permission</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
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

        <!-- ###################################### Modal Add ###########################################################-->
        <div class="modal fade" id="insertModal" tabindex="-1" aria-labelledby="einsertModallLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">เพิ่มข้อมูลผู้ใช้งาน</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
        
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="fullname">ชื่อ - นามสกุล</label>
                            <input type="text" class="form-control" id="fullname" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="phonenumber">เบอร์โทรศัพท์</label>
                            <input type="number" class="form-control" id="phonenumber" required>
                        </div>
                        <div class="form-group">
                            <label for="status">สถานะการใช้งาน</label>
                            <select class="form-control" name="status" id="status">
                                <option value="1">เปิด</option>
                                <option value="0">ปิด</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="permission">สิทธิ์การเข้าถึง</label>
                            <select class="form-control" name="permission" id="permission">
                                <option value="0">System admin</option>
                                <option value="1">admin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="appname">App name</label>
                            <?php 
                                echo '<select class="form-control" name="appname" id="appname">';
                                    while($row = mysqli_fetch_assoc($data_app))
                                    {
                                        echo "<option value='".$row["appid"]."'>".$row["appname"]."</option>";
                                    }
                                    echo '</select>';
                            ?>
                        </div>
                                
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" onclick="saveUser()" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>   

        <!-- ###################################### Modal Edit ###########################################################-->
        <div class="modal fade" id="eidtModal" tabindex="-1" aria-labelledby="einsertModallLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div   div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">แก้ไขข้อมูล</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <label for="fullname">ชื่อ - นามสกุล</label>
                            <input type="text" class="form-control" id="editfullname" required>
                            <input type="hidden" class="form-control" id="userid" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="editusername" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="editpassword" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="editemail" aria-describedby="emailHelp" required>
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="phonenumber">เบอร์โทรศัพท์</label>
                            <input type="number" class="form-control" id="editphonenumber" required>
                        </div>
                        <div class="form-group">
                            <label for="status">สถานะการใช้งาน</label>
                            <select class="form-control" name="status" id="editstatus">
                                <option value="1">เปิด</option>
                                <option value="0">ปิด</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="permission">สิทธิ์การเข้าถึง</label>
                            <select class="form-control" name="permission" id="editpermission">
                                <option value="0">System admin</option>
                                <option value="1">admin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="appname">App name</label>
                            <?php 
                                echo '<select class="form-control" name="appname" id="editappname">';
                                    while($row = mysqli_fetch_assoc($data_app2))
                                    {
                                        echo "<option value='".$row["appid"]."'>".$row["appname"]."</option>";
                                    }
                                echo '</select>';
                            ?>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" onclick="updateUser()" class="btn btn-primary">Edit</button>
                    </div>
                </div>
            </div>
        </div>

        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>

    </body>
</html>

<script>
        function saveUser(){
            var fullname = $("#fullname").val();
            var username = $("#username").val();
            var password = $("#password").val();
            var email = $("#email").val();
            var phonenumber = $("#phonenumber").val();
            var status = $("#status").val();
            var permission = $("#permission").val();
            var appid = $("#appname").val();
            $.ajax({
                'type':"POST",
                'url':"functions/usermanage.php?p=add",
                'data':"fullname="+fullname+"&username="+username+"&password="+password+"&email="+email+"&phonenumber="+phonenumber+"&status="+status+"&permission="+permission+"&appid="+appid+"",
                'success':function(msg){
                    $('#insertModal').modal('hide');
                    viewData();
                },
                'error':function(er)
                {
                    alert(er);
                }
            });
        }
        function updateUser(){
            var userid = $("#userid").val();
            var fullname = $("#editfullname").val();
            var username = $("#editusername").val();
            var password = $("#editpassword").val();
            var email = $("#editemail").val();
            var phonenumber = $("#editphonenumber").val();
            var status = $("#editstatus").val();
            var permission = $("#editpermission").val();
            var appid = $("#editappname").val();
            $.ajax({
                'type':"POST",
                'url':"functions/usermanage.php?p=edit",
                'data':"uid="+userid+"&fullname="+fullname+"&username="+username+"&password="+password+"&email="+email+"&phonenumber="+phonenumber+"&status="+status+"&permission="+permission+"&appid="+appid+"",
                'success':function(msg){
                    $('#eidtModal').modal('hide');
                    viewData();
                },
                'error':function(er)
                {
                    alert(er);
                }
            });
        }
        function deleteUser(id)
        {
            $.ajax({
                'type':"POST",
                'url':"functions/usermanage.php?p=del",
                'data':"uid="+id,
                'success':function(data){
                    alert("delete success");
                    viewData();
                },
                'error':function(er)
                {
                    alert(er);
                }
            });
        }
        function viewData()
        {
            $("#editfullname").removeAttr('value');
            $("#editusername").removeAttr('value');
            $("#editemail").removeAttr('value');
            $("#editphonenumber").removeAttr('value');

            $.ajax({
                type:"GET",
                url:"functions/usermanage.php",
                success:function(data)
                {
                    $('tbody').html(data);
                }
            });
        }

        function openModalupdate(id)
        {
            $('#eidtModal').modal('show');
            $.ajax({
                'type':"POST",
                'url':"functions/usermanage.php?p=select",
                'data':"uid="+id,
                'dataType':'Json',
                'success':function(data){
                    $("#userid").val(data.id);
                    $("#editfullname").val(data.fullname);
                    $("#editusername").val(data.username);
                    $("#editemail").val(data.email);
                    $("#editphonenumber").val(data.phonenumber);
                    $("#editpermission").val(data.user_permission);
                    $("#editappname").val(data.AppID);
                    $("#editstatus").val(data.status_active);
                },
                'error':function(er)
                {
                    alert(er);
                }
            });

        }
    </script>
