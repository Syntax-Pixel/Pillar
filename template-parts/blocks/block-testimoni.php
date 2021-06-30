<?php 

$testimoni = get_sub_field('description');
$name = get_sub_field('name');
$profession = get_sub_field('profession');
$image = get_sub_field('image');

?>




<section class="testimonial testimonial-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-push-6">
                <div class="testimonial__text">
                    <blockquote>
                        &ldquo;<?php echo $testimoni; ?>&rdquo;
                    </blockquote>
                    <h5>&mdash; <?php echo $name; ?></h5>
                    <span class="h6"><?php echo $profession; ?></span>
                </div>
            </div>
            <div class="col-sm-6 col-sm-pull-6">
                <img alt="avatar" src="<?php echo $image; ?>" />
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>