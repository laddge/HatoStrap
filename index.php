<?php get_header(); ?>
<div class="row mx-2">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="card col-md-7 mx-auto mt-2 px-0">
                <div class="card-img-top bg-light post-thumbnail-wrapper" style="height: 180px; width: 100%;">
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php get_the_title(); ?>" class="post-thumbnail">
                    <?php else : ?>
                        <div class="h-100 w-100" style="display: table;">
                            <p class="text-muted text-center h1" style="display: table-cell; vertical-align: middle;">
                                <?php echo mb_substr($post->post_title, 0, 3); ?>
                            </p>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="card-body pb-0">
                    <div class="row">
                        <h4 class="card-title col mt-1"><?php the_title(); ?></h4>
                        <div class="col-auto">
                            <a href="<?php the_permalink(); ?>" class="btn btn-outline-primary">記事を閲覧 &gt;</a>
                        </div>
                    </div>
                    <p class="card-text"><?php the_excerpt(); ?></p>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
