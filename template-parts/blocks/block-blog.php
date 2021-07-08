<?php

    $button_text = get_sub_field( 'button_text' );
    $button_url  = get_sub_field( 'button_url' );

        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 3,
        );
        $query = new WP_Query($args);

?>

<section class="blog-snippet-1">
    <div class="container">
        <div class="row">
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="col-md-4 col-sm-6">
                <a href="<?php echo get_permalink(); ?>">
                    <div class="card card-4">
                        <div class="card__image">
                            <img alt="Pic" src="<?php the_post_thumbnail_url(); ?> " />
                        </div>
                        <div class="card__body boxed boxed--sm bg--white">
                            <h6><?php echo the_category(); ?></h6>
                            <div class="card__title">
                                <h5><?php the_title(); ?></h5>
                            </div>
                            <hr>
                            <div class="card__lower">
                                <span>by</span>
                                <span class="h6"><?php the_author(); ?></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
            <!--end item-->
        </div>
        <!--end of row-->
        <div class="row">
            <div class="col-sm-12 text-center">
                <a class="btn" href="blog/">
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