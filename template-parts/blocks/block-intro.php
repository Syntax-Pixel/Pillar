<?php

$intro_title = get_sub_field('title');
$intro_subtitle = get_sub_field('subtitle');

?>

<section class="space-bottom--sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 text-center">
                <h3><?php echo $intro_title; ?></h3>
                <p class="lead">
                <?php echo $intro_subtitle; ?>
                </p>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>