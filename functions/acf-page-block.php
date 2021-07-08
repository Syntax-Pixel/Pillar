<?php

//  ACF Get Page Block

function pillar_get_page_blocks() {
    if( have_rows('page_blocks') ):
        while ( have_rows('page_blocks') ) : the_row();
            $layout = get_row_layout();
			$layout = str_replace( 'block_', '', $layout );
			get_template_part( 'template-parts/blocks/block', $layout);	
        endwhile;
        return true;
    endif;
}

?>