<?php get_header(); ?>

<section class="page-wrap">
    <div class="container">
        <h1><?php echo  single_cat_title(); ?></h1>
        <?php get_template_part('includes/section', 'archive'); ?>

        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php
                global $wp_query;

                $big = 9999999999;

                echo paginate_links(array(
                    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                    'format' => '?paged=%#%',
                    'current' => max(1, get_query_var('paged')),
                    'total' => $wp_query->max_num_pages,
                    'prev_next'          => true,
                    'prev_text'          => __('« Previous'),
                    'next_text'          => __('Next »'),
                ))
                ?>
            </ul>
        </nav>




    </div>
</section>

<?php get_footer(); ?>