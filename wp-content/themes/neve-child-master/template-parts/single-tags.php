<?php
        $post_tags = get_the_tags();//get the tags for every post 

        if ($post_tags) { ?>
            <div class="single-tag-wrapper test"><span><?php _e(' Tags') ?></span>
        <?php 	foreach($post_tags as $tag) {
                $tag_name = $tag->name;
                $tag_id   = $tag->term_id;
                $tag_slug = $tag->slug; ?>

                    <a class="tags-archive" href="<?php echo get_tag_link( $tag_id ) ?> " ><span class="tags-dot"></span><?php  echo '#'. $tag_name  ?></a>
                <?php } //foreach ?>
            </div>
        <?php } //if 
?> 
