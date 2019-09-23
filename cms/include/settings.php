<?php
function settings(){
    $connect=config();
    $sql="SELECT * FROM setting";
    $row=mysqli_query($connect,$sql);
    $res=mysqli_fetch_assoc($row);
    return $res;
}
function edit_setting($data){
    $connect=config();
    $sql="UPDATE setting SET title='$data[title]',email='$data[email]',description='$data[description]',tel='$data[tel]'";
    mysqli_query($connect,$sql);

}
//function add_menu($data){
//    $connect=config();
//    $sql="INSERT INTO menu_tbl (title,url,sort,status,chid) VALUES ('$data[title]','$data[url]','$data[sort]','$data[status]','$data[parent]')";
//    mysqli_query($connect,$sql);
//}
//function sub_menu(){
//    $connect=config();
//    $sql="SELECT * FROM menu_tbl WHERE chid='0'";
//    $row=mysqli_query($connect,$sql);
//    while ($res=mysqli_fetch_assoc($row)){
//        $result[]=$res;
//    };
//    return $result;
//}
//function listmenu_parent($chid){
//    $connect=config();
//    $sql="SELECT * FROM menu_tbl WHERE id='$chid'";
//    $row=mysqli_query($connect,$sql);
//    $res=mysqli_fetch_assoc($row);
//    return $res;
//}
//function delete_menu($id){
//    $connect=config();
//    $sql="DELETE FROM menu_tbl WHERE id='$id'";
//    mysqli_query($connect,$sql);
//}
//function  show_edit($id){
//    $connect=config();
//    $sql="SELECT * FROM menu_tbl WHERE id='$id'";
//    $row=mysqli_query($connect,$sql);
//    $res=mysqli_fetch_assoc($row);
//    return $res;
//}
