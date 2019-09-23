<?php
$id=$_GET['id'];
$edit=show_editnewcat($id);
if(isset($_POST['btn'])){
 $data=$_POST['frm'];
 edit_newcat($data,$id);
 header("location:dashbord.php?m=news_cat&p=list");
}
?>
<h1 class="pageLables">ویرایش دسته بندی </h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                ویرایش  دسته بندی<?php  echo $edit['title']; ?>
            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان دسته بندی</label>
                        <input type="text" name="frm[title]" class="form-control"  value="<?php  echo $edit['title']; ?>">
                    </div>

                    <button type="submit" name="btn" class="btn btn-info">ویرایش</button>
                </form>

            </div>
        </section>
    </div>
</div>
