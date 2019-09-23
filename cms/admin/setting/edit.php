<?php
if(isset($_POST['btn'])){
 $data=$_POST['frm'];
 edit_setting($data);
 header("location:dashbord.php?m=setting&p=edit");
}
?>
<h1 class="pageLables">تنظیمات </h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                ویرایش  <?php  $setting=settings(); echo $setting['title']; ?>
            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان سایت</label>
                        <input type="text" name="frm[title]" class="form-control" placeholder="عنوان منو را وارد کنید" value="<?php  echo $setting['title']; ?>">
                    </div>
                     <div class="form-group">
                        <label for="exampleInputPassword1">توضیحات</label>
                        <input type="text" name="frm[description]" class="form-control" placeholder="لینک منو مورد نظر را وارد کنید" value="<?php  echo $setting['description']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">تلفن</label>
                        <input type="text" name="frm[tel]" class="form-control" placeholder="لینک منو مورد نظر را وارد کنید" value="<?php  echo $setting['tel']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">email</label>
                        <input type="text" name="frm[tel]" class="form-control" placeholder="لینک منو مورد نظر را وارد کنید" value="<?php  echo $setting['email']; ?>">
                    </div>
                    <button type="submit" name="btn" class="btn btn-info">افزودن</button>
                </form>

            </div>
        </section>
    </div>
</div>
