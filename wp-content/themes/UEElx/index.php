<?php get_header(); ?>

<main class="contenedor">

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <article>
            <h2>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>

<?php if (function_exists('the_field')) : ?>
                <p class="campo-acf">
                    <?php the_field('dificultad'); ?>
                </p>
            <?php endif; ?>
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium'); ?>
            <?php endif; ?>

            <div>
                <?php the_content(); ?>
            </div>

        </article>

    <?php endwhile; ?>
<?php else : ?>
    <p>No hay entradas disponibles.</p>
<?php endif; ?>

</main>

<?php get_footer(); ?>