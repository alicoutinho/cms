<?php
if(isset($_POST['btn'])){
    $data=$_POST['frm'];
    $up=upload_uploader('img');
    $size=$up[1];
    $img=$up[0];
    add_uploader($data,$img,$size);
}?>
<h1 class="pageLables">افزودن اپلود جدید</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                افزودن اپلود جدید به وب سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان</label>
                        <input type="text" name="frm[title]" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" name="img" id="exampleInputFile">
                    </div>

                    <button type="submit" name="btn" class="btn btn-info">افزودن</button>
                </form>

            </div>
        </section>
    </div>
</div>
