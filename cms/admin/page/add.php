<?php
if(isset($_POST['btn'])){
    $data=$_POST['frm'];
    add_page($data);
}?>
<h1 class="pageLables">افزودن صفحه جدید</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                افزودن صفحه جدید به وب سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان </label>
                        <input type="text" name="frm[title]" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">توضیحات</label>
                        <input type="text" name="frm[description]" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">کلمات کلیدی</label>
                        <input type="text" name="frm[keywords]" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">محتوا</label>
                        <textarea type="text" name="frm[body]"  class="form-control ckeditor" rows="8">
                             <script>
			                 CKEDITOR.replace( 'editor1' );
		                     </script>
                        </textarea>
                    </div>

                    <button type="submit" name="btn" class="btn btn-info">افزودن</button>
                </form>

            </div>
        </section>
    </div>
</div>
