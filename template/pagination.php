<?php
    $prev_image_url = get_template_directory_uri() . '/assets/images/common-old/next-btn.png';
    the_posts_pagination( array( 
        'mid_size' => 1,
        'prev_text' => '<img src="' . $prev_image_url . '" alt="前へ" width="1440" height="400">', 
        'next_text' => '<img src="' . $prev_image_url . '" alt="前へ" width="1440" height="400">',
    ) );
?>