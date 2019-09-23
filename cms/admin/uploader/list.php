<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست اپلودهای اصلی وب سایت
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th> عنوان </th>
                    <th> تصویر</th>
                    <th>سایز</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $list=list_up();
                foreach ($list as $val):

                ?>
                <tr>
                    <td><?php echo $val['title'];?></td>
                    <td><img width="100" src="<?php  echo $val['img'];  ?>" </td>
                    <td><?php echo $val['size'];?></td>
                    <td><input type="text" style="direction: ltr" value="<?php echo $val['img'];?>" </td>
                    <td><a href="dashbord.php?m=uploader&p=edit&id=<?php echo $val['id']; ?>" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></a></td>
                    <td><a href="dashbord.php?m=uploader&p=delete&id=<?php echo $val['id'];?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </div>
</div>
