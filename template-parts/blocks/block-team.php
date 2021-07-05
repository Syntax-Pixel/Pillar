<?php
    $args = array(
        'post_type'      => 'team',
        'posts_per_page' => 3,
        'taxonomy'       => 'team-role',
    );
    $query = new WP_Query( $args );
?> 

<section>
    <div class="container">
        <div class="row">
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <?php  $terms = wp_get_post_terms( get_the_ID(), 'team-role'); ?>
                <?php $facebook = get_field( 'facebook' , get_the_ID() ); ?>
                <?php $twitter = get_field( 'twitter' , get_the_ID() ); ?>
                <?php $youtube = get_field( 'youtube' , get_the_ID() ); ?>
                <?php $other_socmed = get_field( 'other_social_media' , get_the_ID() ); ?>
                <?php $instagram = get_field( 'instagram' , get_the_ID() ); ?>
        
            <div class="col-sm-4 col-xs-6">
                <div class="hover-element member member-2" data-title-position="center,center">
                    <div class="hover-element__initial">
                        <img alt="Pic" src="<?php the_post_thumbnail_url(); ?>" />
                    </div>
                    <div class="hover-element__reveal" data-overlay="9">
                        <div class="boxed">
                                <h6><?php echo $terms[0]->name; ?></h6>
                                <h5><?php the_title(); ?></h5>
                        </div>
                        <ul class="social-list pos-absolute pos-bottom">
                            <li>
                                <a href="<?php echo $twitter['url']; ?>">
                                    <i class="<?php echo $twitter['icon']; ?>"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $facebook['url']; ?>">
                                    <i class="<?php echo $facebook['icon']; ?>"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $youtube['url']; ?>">
                                    <i class="<?php echo $youtube['icon']; ?> ?>"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $instagram['url']; ?>">
                                    <i class="<?php echo $instagram['icon']; ?>"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $other_socmed['url']; ?>">
                                    <i class="<?php echo $other_socmed['icon']; ?>"></i>
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