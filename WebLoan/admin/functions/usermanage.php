<?php include 'config.php'; 
    $page = isset($_GET['p'])?$_GET['p']:'';
    if($page == 'add'){
        $fullname = $_POST["fullname"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $phonenumber = $_POST["phonenumber"];
        $status = $_POST["status"];
        $permission = $_POST["permission"];
        $appid = $_POST["appid"];

        $pwd = md5($password);
        $queryInsert = "insert into tbl_users (fullname,username,password,email,phonenumber,status_active,AppID,user_permission)
        values('$fullname','$username','$pwd','$email','$phonenumber','$status','$appid','$permission')";

        //echo $queryInsert;
        if (mysqli_query($con, $queryInsert)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            echo $queryInsert;
        }

    }
    else if($page == 'edit'){
        
        $uid = $_POST["uid"];
        $fullname = $_POST["fullname"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $phonenumber = $_POST["phonenumber"];
        $status = $_POST["status"];
        $permission = $_POST["permission"];
        $appid = $_POST["appid"];

        $pwd = md5($password);
        $queryUpdate = "update tbl_users set fullname = '$fullname'
        ,username = '$username'
        ,password = '$pwd'
        ,email = '$email'
        ,phonenumber = '$phonenumber'
        ,status_active = '$status'
        ,AppID = '$appid'
        ,user_permission = '$permission'
        where id='$uid'";

        if (mysqli_query($con, $queryUpdate)) {
            echo $queryUpdate;
            echo "Record updated successfully";
        } else {
            echo $queryUpdate;
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
    }
    else if($page == 'del'){
        $uid = $_POST["uid"];
        $querydelete = "delete FROM tbl_users where id='$uid'";

        if (mysqli_query($con, $querydelete)) {
            echo $querydelete;
            echo "Record delete successfully";
        } else {
            echo $querydelete;
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    else if($page == 'select')
    {
        $uid = $_POST["uid"];

        $querySelect = "select * from tbl_users where id = '$uid'";


        $reg = $con->query($querySelect);

        $data = mysqli_fetch_array($reg);
        
        echo json_encode($data);

    }
    else{
        $querySelect = "select * from tbl_users";
        $reg = $con->query($querySelect);
        while($row = $reg->fetch_assoc())
        {
            ?>
            <tr>
                <td><?php echo $row['username'] ?></td>
                <td><?php echo $row['fullname'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['phonenumber'] ?></td>
                <td><?php echo $row['status_active'] ?></td>
                <td><?php echo $row['user_permission'] ?></td>
                <td>
                    <button class="btn btn-warning" onclick="openModalupdate(<?php echo $row['id'] ?>)">Edit</button>
                    <button class="btn btn-danger" onclick="deleteUser(<?php echo $row['id'] ?>)">Delete</button>
                </td>
            </tr> 
            <?php                 
        }
    }
?>