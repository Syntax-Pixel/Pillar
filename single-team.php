<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Pillar-theme
 */

$args = array(
    'post_id' => get_the_ID(),
);
$comments_query = new WP_Comment_Query;
$comments = $comments_query->query( $args );

get_header();
?>

<section class="blog-post">
    <div class="blog-post__title bg--secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
                    <h1><?php the_title(); ?></h1>
                    <div class="blog-post__author">
                        <span>
                            <!-- <em>by </em> -->
                        </span>
                        <span class="h6"><?php get_terms(); ?></span>
                    </div>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <img class="blog-post__hero box-shadow" alt="pic" src="<?php the_post_thumbnail_url(); ?>" />
            </div>
            <div class="col-sm-8 col-sm-offset-2">
            <?php the_content(); ?>
            </div>
        </div>
        <!--end of row-->
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="blog-post__share">
                    <h5>Share this article</h5>
                    <a class="btn btn--sm bg--facebook" href="#">
                        <span class="btn__text">
                            <i class="socicon-facebook"></i> Share on Facebook
                        </span>
                    </a>
                    <a class="btn btn--sm bg--twitter" href="#">
                        <span class="btn__text">
                            <i class="socicon-twitter"></i> Share on Twitter
                        </span>
                    </a>
                    <a class="btn btn--sm bg--googleplus" href="#">
                        <span class="btn__text">
                            <i class="socicon-googleplus"></i> Share on GooglePlus
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <!--end of row-->
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <div class="blog-post__comments">
                    <hr>
                    <h6><?php get_comments_number(); ?> Comments:</h6>
                    <ul>
                    <?php
                        wp_list_comments( array(
                            'style'      => 'ul',
                            'short_ping' => true,
                                'callback' => 'comment_parts',
                        ) );
                        ?>
                    </ul>
                    <form class="comment__form form--square">
                        <h6>Leave a Comment</h6>
                        <input placeholder="Your Name" type="text" name="name" />
                        <input placeholder="Email Address" type="email" name="email" />
                        <textarea placeholder="Your Comment" name="comment" rows="4"></textarea>
                        <button type="submit" class="btn btn--primary">Submit Comment</button>
                    </form>
                </div>
                <!--end of blog comments-->
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>

<?php
get_sidebar();
get_footer();
