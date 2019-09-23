<?php
function add_uploader($data,$img,$size){
    $connect=config();
    $sql="INSERT INTO uploader_tbl (title,img,size) VALUES ('$data[title]','$img','$size')";
    mysqli_query($connect,$sql);
}
function upload_uploader($file){
    $file=$_FILES[$file];
    $filename=$file['name'];
    $size=$file['size'];
    $array=explode(".","$filename");
    $ext=end($array);
    $newname="file-".rand().".".$ext;
    $from=$file['tmp_name'];
    $to="uploader/upload"."/".$newname;
    move_uploaded_file($from,$to);
    return array($to,$size);
}
function list_up(){
    $connect=config();
    $sql="SELECT * FROM uploader_tbl";
    $row=mysqli_query($connect,$sql);
    while ($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    };
    return $result;
}
function delete_upload($id){
    $connect=config();
    $sql="DELETE FROM uploader_tbl WHERE id='$id'";
    mysqli_query($connect,$sql);
}


