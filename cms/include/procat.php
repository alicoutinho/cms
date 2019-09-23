<?php
function add_productcat($data){
    $connect=config();
    $sql="INSERT INTO product_cat (title,sort,status) VALUES ('$data[title]','$data[sort]','$data[status]')";
    mysqli_query($connect,$sql);
}
function list_productcat(){
    $connect=config();
    $sql="SELECT * FROM product_cat";
    $row=mysqli_query($connect,$sql);
    while ($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    };
    return $result;
}
function delete_productcat($id){
    $connect=config();
    $sql="DELETE FROM product_cat WHERE id='$id'";
    mysqli_query($connect,$sql);
}
function  show_editcat($id){
    $connect=config();
    $sql="SELECT * FROM product_cat WHERE id='$id'";
    $row=mysqli_query($connect,$sql);
    $res=mysqli_fetch_assoc($row);
    return $res;
}
function edit_productcat($data,$id){
    $connect=config();
    $sql="UPDATE product_cat SET title='$data[title]',sort='$data[sort]',status='$data[status]' WHERE id='$id'";
    mysqli_query($connect,$sql);

}