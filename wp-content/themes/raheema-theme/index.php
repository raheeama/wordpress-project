<?php get_header(); ?>
<main>
    <h1>Welcome to Raheema Theme</h1>
    <p>This is my custom WordPress theme for Phase 1 Project.</p>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h2><?php the_title(); ?></h2>
            <p><?php the_excerpt(); ?></p>
        </article>
    <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
