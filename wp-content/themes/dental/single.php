<?php get_header(); ?>
<style>
    .page-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #222;
        border-bottom: 2px solid #eee;
        display: inline-block;
        padding-bottom: 10px;
    }

    .page-featured-img img {
        max-height: 450px;
        object-fit: cover;
    }

    .page-content {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #444;
    }

    .page-content p {
        margin-bottom: 1.2rem;
    }
</style>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <h1 class="page-title text-center mb-4"><?php the_title(); ?></h1>
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="page-featured-img mb-4 text-center">
                            <?php the_post_thumbnail('large', ['class' => 'img-fluid rounded shadow']); ?>
                        </div>
                    <?php endif; ?>
                    <div class="page-content">
                        <?php the_content(); ?>
                    </div>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>