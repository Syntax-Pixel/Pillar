<?php

class Pillar_custom_widget extends WP_Widget {

function __construct(){
    parent::__construct(
        // ID
        'pillar_subscribe',
        // Name
        __( 'Pillar Subscribe' , 'pillar' ),
        // Description
        array( 'description' => __( 'pillar'), ),

    );
}

public function widget( $args , $instance ){
    $title = apply_filters( 'widget_title', $instance[ 'title' ] );
    $blog_title = get_bloginfo( 'name' );
    $tagline = get_bloginfo( 'description' );
    $subscribe_item = get_field( 'subscribe' , 'option' );
    
    echo $args['before_widget'] . $args['before_title'] . $title . $args['after_title']; ?>
    <p>
        <?php echo $subscribe_item['sub_title']; ?>
    </p>
    <form class="form--merge form--no-labels" action="<?php echo $subscribe_item['url_form']; ?>" method="post" id="subForm" data-error="Please fill all fields correctly." data-success="Thanks for signing up! Please check your inbox for confirmation email.">
        <p>
            <label for="fieldEmail">Email Address</label>
            <br />
            <input class="col-md-8 col-sm-6 validate-required validate-email" id="fieldEmail" name="cm-kieth-kieth" type="email" required />
        </p>
        <p>
            <button type="submit">Go</button>
        </p>
    </form>
  
    <?php echo $args['after_widget'];
}

public function form( $instance ){
    if ( isset( $instance[ 'title' ] ) )
        $title = $instance[ 'title' ];
    else
        $title = __( 'Pillar Widget', 'pillar' );
    ?>
    <p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    <?php
}

public function update( $new_instance , $old_instane ){
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;
}
}

function pillar_register_widget() {
register_widget( 'Pillar_custom_widget' );
}
add_action( 'widgets_init', 'pillar_register_widget' );
