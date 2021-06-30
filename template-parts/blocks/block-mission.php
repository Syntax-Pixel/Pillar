<?php

$title = get_sub_field('title');
$description = get_sub_field('description');

?>


<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 text-center">
                <h3><?php echo $title; ?></h3>
                <p class="lead">
                   <?php echo $description; ?>
                </p>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>