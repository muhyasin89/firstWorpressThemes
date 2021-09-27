<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <br>
        <div class="card mb-3">
            <div class="card-body">
                <h3 class="card-title"><?php the_title(); ?></h3>
                <p class="card-text"><?php the_excerpt() ?></p>
                <a href="<?php the_permalink(); ?>" class="btn btn-success">Read More</a>
            </div>
        </div>




<?php endwhile;
else : endif; ?>