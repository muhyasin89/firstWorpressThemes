<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php echo get_the_date() ?><br>

                <?php
                $tags = get_the_tags();
                if (!empty($tags)) :
                        foreach ($tags as $tag) :
                ?>
                                <a href="<?php echo get_tag_link($tag->term_id); ?>" class="badge badge-secondary">
                                        <?php echo $tag->name; ?>
                                </a>
                <?php endforeach;
                endif; ?>

                <?php
                $categories = get_the_category();
                if (!empty($categories)) :
                        foreach ($categories as $category) : ?>
                                <a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
                <?php endforeach;
                endif; ?>

                <?php the_content(); ?>

                <?php
                $fname = get_the_author_meta('first_name');
                $lname = get_the_author_meta('last_name');
                ?>
                <h4>Author</h4>
                <p>Posted By <b><?php echo $fname . " " . $lname ?></b></p>

                <?php //comments_template() 
                ?>


<?php endwhile;
else : endif; ?>