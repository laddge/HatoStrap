<?php get_header(); ?>
<div class="row mx-2">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="card col-md-9 mx-auto mt-2 px-0">
                <div class="card-img-top bg-light cover-img-wrapper" style="height: 180px; width: 100%;">
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php get_the_title(); ?>" class="cover-img">
                    <?php else : ?>
                        <div class="h-100 w-100" style="display: table;">
                            <p class="text-muted text-center h1" style="display: table-cell; vertical-align: middle;">
                                <?php echo mb_substr($post->post_title, 0, 3); ?>
                            </p>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php the_title(); ?></h5>
                    <p class="card-text"><?php the_excerpt(); ?></p>
                    <div class="text-right">
                        <a href="<?php the_permalink(); ?>" class="btn btn-outline-primary">記事を閲覧</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
