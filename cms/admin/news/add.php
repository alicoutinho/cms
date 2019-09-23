<?php
if(isset($_POST['btn'])){
    $data=$_POST['frm'];
    $name="news-".rand();
    $to=uploader('img','../images/',"news",$name);
    add_news($data,$to);
}?>
<h1 class="pageLables">افزودن خبر جدید</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                افزودن خبر جدید به وب سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان خبر</label>
                        <input type="text" name="frm[title]" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">تاریخ خبر</label>
                        <input type="date" name="frm[date]" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">متن خبر</label>
                        <textarea type="text" name="frm[text]"  class="form-control ckeditor" rows="8"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">دسته بندی</label>
                        <select class="form-control input-lg m-bot15" name="frm[newcat]">
                            <?php
                            $cat=newscat();
                            foreach ($cat as $subs){
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
