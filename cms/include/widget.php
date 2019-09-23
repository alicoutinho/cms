<?php
function add_widget($data,$img){
    $connect=config();
    $sql="INSERT INTO widget_tbl (title,text,img) VALUES ('$data[title]','$data[text]','$img')";
    mysqli_query($connect,$sql);
}
function delete_widget($id){
    $connect=config();
    $sql="DELETE FROM widget_tbl WHERE id='$id'";
    mysqli_query($connect,$sql);
}
function list_widget_admin(){
    $connect=config();
    $sql="SELECT * FROM widget_tbl";
    $row=mysqli_query($connect,$sql);
    while ($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    };
    return $result;
}

function  show_widget_edit($id){
    $connect=config();
    $sql="SELECT * FROM widget_tbl WHERE id='$id'";
    $row=mysqli_query($connect,$sql);
    $res=mysqli_fetch_assoc($row);
    return $res;
}
function edit_widget($data,$id,$img,$oldpic){
    $connect=config();
    if($_FILES[$img]['name']!=""){
        $a=explode("/",$oldpic);
        $b=count($a);
        $pic=uploader('img','../images/',"widget",$a[$b-1]);
    }else{
        $pic=$oldpic;
    }
    $sql="UPDATE widget_tbl SET title='$data[title]',text='$data[text]',img='$pic' WHERE id='$id'";
    mysqli_query($connect,$sql);
}
function list_widget_default(){
    $connection=config();
    $sql="SELECT * FROM widget_tbl ";
    $row=mysqli_query($connection,$sql);
    while($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    }
    return $result;
}

