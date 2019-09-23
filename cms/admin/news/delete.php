<?php
$id=$_GET['id'];
delete_news($id);
header("location:dashbord.php?m=news&p=list");
?>