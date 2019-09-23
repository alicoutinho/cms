<?php
$id=$_GET['id'];
$result=show_detail($id);
?>
<h1 class="pageLables"><?php echo $result['subject'];?></h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                <?php echo $result['subject'].":".$result['name'];?>
            </header>
            <div class="panel-body">
                <p>
                    <?php  echo  $result['text'];?>
                </p>
                    <h5>
                        <?php  echo  $result['email'];?>
                    </h5>
            </div>
        </section>
    </div>
</div>

