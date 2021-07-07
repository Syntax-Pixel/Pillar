<?php function comment_parts( $comment , $args , $depth ){ ?>

<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>" >
    <div class="comment">
        <div class="comment__image">
            <img alt="pic" src="<?php get_avatar( $commenmt) ; ?>" />
        </div>
        <div class="comment__text">
            <h5><?php echo get_comment_author(); ?></h5>
            <span>
                <em><?php echo get_comment_date(); ?></em>
            </span>
            <p>
                <?php comment_text(); ?>
            </p>
        </div>
        <hr>
    </div>
</li>

<?php } ?>