<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست صفحات اصلی وب سایت
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th> عنوان</th>
                    <th> کلمات کلیدی</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $list=list_page_admin();
                foreach ($list as $val):

                ?>
                <tr>
                    <td><?php echo $val['title'];?></td>
                    <td><?php echo $val['keywords'];?></td>
                    <td><a href="dashbord.php?m=page&p=edit&id=<?php echo $val['id']; ?>" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></a></td>
                    <td><a href="dashbord.php?m=page&p=delete&id=<?php echo $val['id'];?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </div>
</div>
