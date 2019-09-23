<?php
if(isset($_POST['btn'])){
    $data=$_POST['frm'];
    $name="pro-".rand();
    $to=uploader('img','../images/',"product",$name);
    add_pro($data,$to);
}?>
<h1 class="pageLables">افزودن محصول جدید</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                افزودن محصول جدید به وب سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان محصول</label>
                        <input type="text" name="frm[title]" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">توضیحات</label>
                        <textarea id="editor1" type="text" name="frm[text]"  class="form-control ckeditor" rows="8">
                         <script>
			                 CKEDITOR.replace( 'editor1' );
		                 </script>
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">دسته بندی</label>
                        <select class="form-control input-lg m-bot15" name="frm[procat]">
                            <?php
                            $procat=procat();
                            foreach ($procat as $subs){
                                echo "<option value=\"$subs[id]\">$subs[title] </option>";
                            }
                            ?>


                        </select>
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
