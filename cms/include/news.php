<?php
function add_news($data,$img){
    $connect=config();
    $sql="INSERT INTO news_tbl (title,text,newcat,img,date) VALUES ('$data[title]','$data[text]','$data[newcat]','$img','$data[date]')";
    mysqli_query($connect,$sql);
}
function newscat(){
    $connect=config();
    $sql="SELECT * FROM news_cat";
    $row=mysqli_query($connect,$sql);
    while ($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    };
    return $result;
}
function list_newsadmin(){
    $connect=config();
    $sql="SELECT * FROM news_tbl";
    $row=mysqli_query($connect,$sql);
    while ($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    };
    return $result;
}
function listnew_parent($id){
    $connect=config();
    $sql="SELECT * FROM news_cat WHERE id='$id'";
    $row=mysqli_query($connect,$sql);
    $res=mysqli_fetch_assoc($row);
    return $res;
}

function delete_news($id){
    $connect=config();
    $sql="DELETE FROM news_tbl WHERE id='$id'";
    mysqli_query($connect,$sql);
}
function  show_newsedit($id){
    $connect=config();
    $sql="SELECT * FROM news_tbl WHERE id='$id'";
    $row=mysqli_query($connect,$sql);
    $res=mysqli_fetch_assoc($row);
    return $res;
}
function edit_news($data,$id,$img,$oldpic){
    $connect=config();
    if($_FILES[$img]['name']!=""){
        $a=explode("/",$oldpic);
        $b=count($a);
        $pic=uploader('img','../images/',"news",$a[$b-1]);
    }else{
        $pic=$oldpic;
    }
    $sql="UPDATE news_tbl SET title='$data[title]',newcat='$data[newcat]',text='$data[text]',img='$pic' WHERE id='$id'";
    mysqli_query($connect,$sql);

}
function listnewsdefault(){
    $connection=config();
    $sql="SELECT * FROM news_tbl ";
    $row=mysqli_query($connection,$sql);
    while($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    }
    return $result;
}

