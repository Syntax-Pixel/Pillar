<?php

$overlay = get_field( 'overlay-color' );

$args = array(
    'post_type'      => 'portofolio',
    'posts_per_page' => 6,
    'taxonomy'       => 'portofolio-category',
    pos
);
$query = new WP_Query($args);

?>

<section class="wide-grid masonry">
    <div class="masonry__filters text-center" data-filter-all-text="Show All"></div>
    <div class="masonry__container"> 
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
    <?php  $terms = wp_get_post_terms( get_the_ID(), 'portofolio-category'); ?>
        <div class="col-md-4 col-sm-6 masonry__item" data-masonry-filter="<?php echo $terms[0]->name; ?>">   
            <a href="#">
                <div class="hover-element hover-element-1" data-title-position="top,right">
                    <div class="hover-element__initial">
                        <img alt="Pic" src="<?php the_post_thumbnail_url(); ?>" />
                    </div>
                    <div class="hover-element__reveal" data-overlay="9" style="background:<?php echo get_field( 'overlay_color' ); ?>66;">
                        <div class="boxed">
                            <h5><?php echo get_the_title(); ?></h5>
                            <span>
                                <em><?php echo get_field( 'type' ); ?></em>
                            </span>
                        </div>
                    </div>
                </div>
                <!--end hover element-->
            </a>
        </div>
    <?php endwhile; ?>

    <?php wp_reset_postdata(); ?>
    </div>
    <!--end masonry container-->
</section>