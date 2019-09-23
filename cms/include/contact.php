<?php
function add_contact($data){
    $connect=config();
    $sql="INSERT INTO contact_tbl (name,text,subject,email) VALUES ('$data[name]','$data[text]','$data[subject]','$data[email]')";
    mysqli_query($connect,$sql);
}
function list_contact(){
    $connect=config();
    $sql="SELECT * FROM contact_tbl";
    $row=mysqli_query($connect,$sql);
    while ($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    };
    return $result;
}
function delete_contact($id){
    $connect=config();
    $sql="DELETE FROM contact_tbl WHERE id='$id'";
    mysqli_query($connect,$sql);
}
function  show_detail($id){
    $connect=config();
    $sql="SELECT * FROM contact_tbl WHERE id='$id'";
    $row=mysqli_query($connect,$sql);
    $res=mysqli_fetch_assoc($row);
    return $res;
}
//function newscat(){
//    $connect=config();
//    $sql="SELECT * FROM news_cat";
//    $row=mysqli_query($connect,$sql);
//    while ($res=mysqli_fetch_assoc($row)){
//        $result[]=$res;
//    };
//    return $result;
//}
//
//function listnew_parent($id){
//    $connect=config();
//    $sql="SELECT * FROM news_cat WHERE id='$id'";
//    $row=mysqli_query($connect,$sql);
//    $res=mysqli_fetch_assoc($row);
//    return $res;
//}
//


//function edit_news($data,$id,$img,$oldpic){
//    $connect=config();
//    if($_FILES[$img]['name']!=""){
//        $a=explode("/",$oldpic);
//        $b=count($a);
//        $pic=uploader('img','../images/',"news",$a[$b-1]);
//    }else{
//        $pic=$oldpic;
//    }
//    $sql="UPDATE news_tbl SET title='$data[title]',newcat='$data[newcat]',text='$data[text]',img='$pic' WHERE id='$id'";
//    mysqli_query($connect,$sql);
//
//}
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
