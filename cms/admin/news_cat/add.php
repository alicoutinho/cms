<?php
if(isset($_POST['btn'])){
    $data=$_POST['frm'];
    add_newcat($data);

}?>
<h1 class="pageLables">افزودن دسته بندی جدید اخبار</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                افزودن دسته بندی جدید
            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان دسته بندی</label>
                        <input type="text" name="frm[title]" class="form-control" placeholder="عنوان دسته را وارد کنید">
                    </div>

                    <button type="submit" name="btn" class="btn btn-info">افزودن</button>
                </form>

            </div>
        </section>
    </div>
</div>
