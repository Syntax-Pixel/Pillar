<?php
    $args = array(
        'post_type'      => 'team',
        'posts_per_page' => 3,
        'taxonomy'       => 'team-role',
    );

    $query = new WP_Query($args);
?>

<section>
    <div class="container">
        <div class="row">
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="col-sm-4 col-xs-6">
                <div class="hover-element member member-2" data-title-position="center,center">
                    <div class="hover-element__initial">
                        <img alt="Pic" src="<?php the_post_thumbnail_url(); ?>" />
                    </div>
                    <div class="hover-element__reveal" data-overlay="9">
                        <div class="boxed">
                            <h6><?php the_category(); ?></h6>
                            <h5><?php the_title(); ?></h5>
                        </div>
                        <ul class="social-list pos-absolute pos-bottom">
                            <li>
                                <a href="#">
                                    <i class="socicon-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="socicon-dribbble"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="socicon-vimeo"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="socicon-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--end hover element-->
            </div>
        <?php endwhile; ?>  
        <?php wp_reset_postdata(); ?>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>