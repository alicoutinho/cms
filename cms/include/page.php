<?php
function add_page($data){
    $connect=config();
    $sql="INSERT INTO page_tbl (title,body,description,keywords) VALUES ('$data[title]','$data[body]','$data[description]','$data[keywords]')";
    mysqli_query($connect,$sql);
}

function list_page_admin(){
    $connect=config();
    $sql="SELECT * FROM page_tbl";
    $row=mysqli_query($connect,$sql);
    while ($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    };
    return $result;
}
function delete_page($id){
    $connect=config();
    $sql="DELETE FROM page_tbl WHERE id='$id'";
    mysqli_query($connect,$sql);
}
function  show_page_edit($id){
    $connect=config();
    $sql="SELECT * FROM page_tbl WHERE id='$id'";
    $row=mysqli_query($connect,$sql);
    $res=mysqli_fetch_assoc($row);
    return $res;
}
function  detail_page($id){
    $connect=config();
    $sql="SELECT * FROM page_tbl WHERE id='$id'";
    $row=mysqli_query($connect,$sql);
    $res=mysqli_fetch_assoc($row);
    return $res;
}
function edit_page($data,$id){
    $connect=config();
    $sql="UPDATE page_tbl SET title='$data[title]',description='$data[description]',body='$data[body]',keywords='$data[keywords]' WHERE id='$id'";
    mysqli_query($connect,$sql);
}
//function listnewsdefault(){
//    $connection=config();
//    $sql="SELECT * FROM news_tbl ";
//    $row=mysqli_query($connection,$sql);
//    while($res=mysqli_fetch_assoc($row)){
//        $result[]=$res;
//    }
//    return $result;
//}
//
