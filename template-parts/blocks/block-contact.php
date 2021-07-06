<?php

$title = get_sub_field( 'title' );
$button_text = get_sub_field( 'button_text' );
$button_url = get_sub_field( 'url' );

?>

<section class="bg--primary space--sm cta cta-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h4><?php echo $title; ?></h4>
                <a class="btn btn--sm" href="<?php echo $button_url; ?>">
                    <span class="btn__text">
                        <?php echo $button_text; ?>
                    </span>
                </a>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>