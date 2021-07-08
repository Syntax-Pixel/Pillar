<?php
register_sidebar( array(
    'name' => 'Pillar Widget Footer 1',
    'id' => 'pillar-custom-widget-1',
    'description' => 'This Widget Appear on footer',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h6 class="widget-title">',
    'after_title' => '</h6>',
    ) );


register_sidebar( array(
    'name' => 'Pillar Widget Footer 2',
    'id' => 'pillar-custom-widget-2',
    'description' => 'This Widget Appear on footer',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h6 class="widget-title">',
    'after_title' => '</h6>',
    ) );
?>