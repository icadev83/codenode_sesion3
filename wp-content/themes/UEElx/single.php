<?php get_header(); ?>

<main class="contenedor">

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <article>
            <h1><?php the_title(); ?></h1>

            <p>
                Publicado el <?php echo get_the_date(); ?> 
                por <?php the_author(); ?>
            </p>

            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large'); ?>
            <?php endif; ?>

            <?php if (function_exists('get_field')) : ?>
                <?php $subtitulo = get_field('dificultad'); ?>
                <?php if ($subtitulo) : ?>
                    <p><strong>Dificultad:</strong> <?php echo esc_html($subtitulo); ?></p>
                <?php endif; ?>
            <?php endif; ?>

            <div>
                <?php the_content(); ?>
            </div>
        </article>

    <?php endwhile; ?>
<?php endif; ?>

</main>

<?php get_footer(); ?>