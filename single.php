<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <p class="h3 m-3 font-we8ght-bold"><?php the_title(); ?></p>
        <?php if (has_post_thumbnail()) : ?>
            <div class="single-thumbnail cover-img-wrapper">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php get_the_title(); ?>" class="cover-img">
            </div>
        <?php endif; ?>
        <div class="single-content m-3">
            <?php the_content(); ?>
        </div>
<?php endwhile;
endif; ?>
<?php get_footer(); ?>
