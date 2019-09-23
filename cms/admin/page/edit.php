<?php
$id=$_GET['id'];
$result=show_page_edit($id);
if(isset($_POST['btn'])){
 $data=$_POST['frm'];
 edit_page($data,$id);
}
?>
<h1 class="pageLables">ویرایش صفحه </h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                ویرایش صفحه
            </header>
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان </label>
                        <input type="text" name="frm[title]" class="form-control"  value="<?php echo $result['title'];?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">توضیحات</label>
                        <input type="text" name="frm[description]" class="form-control"  value="<?php echo $result['description'];?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">کلمات کلیدی</label>
                        <input type="text" name="frm[keywords]" class="form-control"  value="<?php echo $result['keywords'];?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">محتوا</label>
                        <textarea type="text" name="frm[body]"  class="form-control ckeditor" rows="8" ><?php echo $result['body'];?></textarea>
                    </div>

                    <button type="submit" name="btn" class="btn btn-info">ویرایش</button>
                </form>

            </div>
        </section>
    </div>
</div>

