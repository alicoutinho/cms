<?php
$id=$_GET['id'];
$result=show_newsedit($id);
if(isset($_POST['btn'])){
 $data=$_POST['frm'];
 $oldpic=$result['img'];
 edit_news($data,$id,'img',$oldpic);
}
?>
<h1 class="pageLables">ویرایش خبر </h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                ویرایش خبر
            </header>
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان خبر</label>
                        <input type="text" name="frm[title]" class="form-control"  value="<?php echo $result['title'];?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">تاریخ خبر</label>
                        <input type="date" name="frm[date]" class="form-control"  value="<?php echo $result['date'];?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">توضیحات</label>
                        <textarea type="text" name="frm[text]"  class="form-control ckeditor" rows="8"><?php echo $result['text'];?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">دسته بندی</label>
                        <select class="form-control input-lg m-bot15" name="frm[newcat]">
                            <?php
                            $cat=newscat();
                            foreach ($cat as $subs){
                                echo "<option value=\"$subs[id]\"";
                                if($result['newcat']==$subs['id']){
                                    echo " selected";
                                }
                                echo ">$subs[title] </option>";
                            }
                            ?>


                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" name="img" id="exampleInputFile">
                    </div>

                    <button type="submit" name="btn" class="btn btn-info">ویرایش</button>
                </form>

            </div>
        </section>
    </div>
</div>

