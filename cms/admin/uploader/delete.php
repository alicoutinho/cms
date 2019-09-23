<?php
$id=$_GET['id'];
delete_upload($id);
header("location:dashbord.php?m=uploader&p=list");
?>