<?php
include_once 'functions.php';
function user_login($data){
    $connect=config();
    $sql="SELECT * FROM admin_tbl WHERE username='$data[username]'";
    $row=mysqli_query($connect,$sql);
    $res=mysqli_fetch_assoc($row);
    if($res['password']==$data['password']){
        $_SESSION['name']=$res['name'];
        header("location:dashbord.php");
    }else{
        header("location:index.php?login=error");
    }
}