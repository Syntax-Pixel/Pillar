<?php

$images = get_sub_field( 'items' );

?>
  
    <section class="bg--secondary partners-1 space--sm">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="slider" data-items="6" data-timing="3000">
                        <ul class="slides">
                        <?php foreach( $images as $image ) : ?>
                            <li>
                                <img alt="img" src="<?php echo $image['images']; ?>" />
                            </li> 
                        <?php endforeach; ?>                         
                        </ul>
                    </div>
                </div>
            </div>
        </div> 
    </section>