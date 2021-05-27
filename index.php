<?php get_header(); ?>
<div class="row mx-2">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="card col-md-9 mx-auto mt-2">
                <div class="card-body">
                    <h5 class="card-title"><?php the_title(); ?></h5>
                    <p class="card-text"><?php the_excerpt(); ?></p>
                    <div class="text-right">
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">記事を閲覧</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
