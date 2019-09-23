<?php
function add_pro($data,$img){
    $connect=config();
    $sql="INSERT INTO product_tbl (title,text,procat,img) VALUES ('$data[title]','$data[text]','$data[procat]','$img')";
    mysqli_query($connect,$sql);
}
function procat(){
    $connect=config();
    $sql="SELECT * FROM product_cat";
    $row=mysqli_query($connect,$sql);
    while ($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    };
    return $result;
}
function list_proadmin(){
    $connect=config();
    $sql="SELECT * FROM product_tbl";
    $row=mysqli_query($connect,$sql);
    while ($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    };
    return $result;
}
function listpro_parent($id){
    $connect=config();
    $sql="SELECT * FROM product_cat WHERE id='$id'";
    $row=mysqli_query($connect,$sql);
    $res=mysqli_fetch_assoc($row);
    return $res;
}

function delete_pro($id){
    $connect=config();
    $sql="DELETE FROM product_tbl WHERE id='$id'";
    mysqli_query($connect,$sql);
}
function  show_proedit($id){
    $connect=config();
    $sql="SELECT * FROM product_tbl WHERE id='$id'";
    $row=mysqli_query($connect,$sql);
    $res=mysqli_fetch_assoc($row);
    return $res;
}
function edit_pro($data,$id,$img,$oldpic){
    $connect=config();
    if($_FILES[$img]['name']!=""){
        $a=explode("/",$oldpic);
        $b=count($a);
        $pic=uploader('img','../images/',"product",$a[$b-1]);
    }else{
        $pic=$oldpic;
    }
    $sql="UPDATE product_tbl SET title='$data[title]',procat='$data[procat]',text='$data[text]',img='$pic' WHERE id='$id'";
    mysqli_query($connect,$sql);

}
function listprodefault(){
    $connection=config();
    $sql="SELECT * FROM product_tbl ";
    $row=mysqli_query($connection,$sql);
    while($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    }
    return $result;
}

