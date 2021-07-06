
<?php

$items = get_sub_field('items');

?>


<section>
    <div class="container">
        <div class="row">
        <?php
        foreach($items as $item) : ?>
            <div class="col-sm-6">
                <div class="feature feature-3">
                    <div class="feature__left">
                        <i class="icon icon-<?php echo $item['icon']; ?> color--primary"></i>
                    </div>
                    <div class="feature__right">
                        <h6><?php echo $item['title']; ?></h6>
                        <p><?php echo $item['description']; ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
           
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>