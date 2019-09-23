<?php
function add_newcat($data){
    $connect=config();
    $sql="INSERT INTO news_cat (title) VALUES ('$data[title]')";
    mysqli_query($connect,$sql);
}
function list_newcat(){
    $connect=config();
    $sql="SELECT * FROM news_cat";
    $row=mysqli_query($connect,$sql);
    while ($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    };
    return $result;
}
function delete_newcat($id){
    $connect=config();
    $sql="DELETE FROM news_cat WHERE id='$id'";
    mysqli_query($connect,$sql);
}
function  show_editnewcat($id){
    $connect=config();
    $sql="SELECT * FROM news_cat WHERE id='$id'";
    $row=mysqli_query($connect,$sql);
    $res=mysqli_fetch_assoc($row);
    return $res;
}
function edit_newcat($data,$id){
    $connect=config();
    $sql="UPDATE news_cat SET title='$data[title]' WHERE id='$id'";
    mysqli_query($connect,$sql);

}