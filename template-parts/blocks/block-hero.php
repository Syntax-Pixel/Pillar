<?php 
$background = get_sub_field('background');
$logo = get_sub_field('logo');
$description = get_sub_field('description');
$button = get_sub_field('button');
$size = 'full';

// (thumbnail, medium, large, full or custom size)
// if( $image ) {
//     echo wp_get_attachment_image( $image, $size );
// }
?>

<section class="height-100 imagebg cover cover-1 parallax" data-overlay="3">
    <div class="background-image-holder">
        <img alt="image" src="<?php echo $background; ?>" />
    </div>
    <div class="container pos-vertical-center">
        <div class="row">
            <div class="col-sm-6 text-right text-center-xs">
                <img class="logo" alt="Pillar" src="<?php echo $logo; ?>" />
            </div>
            <div class="col-sm-6 text-center-xs">
                <p class="lead"><?php echo $description; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="modal-instance modal-video-1">
                    <a class="btn btn--primary modal-trigger" href="<?php echo $button['url']; ?>">
                        <span class="btn__text">
                            &#9658; &nbsp; <?php echo $button['text']; ?>
                        </span>
                    </a>
                    <div class="modal-container">
                        <div class="modal-content bg-dark" data-width="100%" data-height="80%">
                            <iframe src="https://player.vimeo.com/video/165428278?autoplay=1" allowfullscreen="allowfullscreen"></iframe>
                        </div>
                        <!--end of modal-content-->
                    </div>
                    <!--end of modal-container-->
                </div>
                <!--end of modal instance-->
            </div>
        </div>
    </div>
    <br>
    <div class="col-sm-12 pos-absolute pos-bottom">
        <div class="row">
            <div class="col-sm-12 text-center">
                <ul class="social-list">
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
    </div>
</section>

