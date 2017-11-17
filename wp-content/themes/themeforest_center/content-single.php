<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <?php

                    if (class_exists('MultiPostThumbnails')) :

                        the_post_thumbnail();
                        MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image');
                        MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'third-image');

                    endif;

                    ?>
                </div>
                <div class="col-md-5">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div><!-- .entry-content -->
</article><!-- #post-## -->
