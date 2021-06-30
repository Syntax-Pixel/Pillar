<?php


$background = get_sub_field('background_parallax');
$features = get_sub_field('items');



?>





<section class="imagebg section--even stats-1 parallax" data-overlay="7">
    <div class="background-image-holder">
        <img alt="image" src="<?php echo $background; ?>" />
    </div>
    <div class="row wide-grid">

    <?php 
    
    foreach ($features as $feature) : ?>
        <div class="col-sm-3 col-xs-6">
            <div class="feature feature-1 text-center">
                <i class="icon icon--lg icon-Bodybuilding"></i>
                <h3><?php echo $feature['title']; ?></h3>
                <span>
                    <em><?php echo $feature['subtitle']; ?></em>
                </span>
            </div>
        </div>
        <?php endforeach; ?>
       
    </div>
    <!--end of row-->
</section>