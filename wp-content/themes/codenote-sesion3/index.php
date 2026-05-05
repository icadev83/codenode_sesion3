<?php get_header(); ?>

<main class="container">

    <h2>Últimas entradas</h2>

    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

            <article class="post-card">
                <h2>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>

                <?php if (has_post_thumbnail()) : ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium'); ?>
                    </a>
                <?php endif; ?>
 
                <p>
                    Publicado el <?php echo get_the_date(); ?>
                    por <?php the_author(); ?>
                </p>

                <div>
                    <?php the_excerpt(); ?>
                </div>

                <?php
                $subtitulo = get_field('subtitulo');
                if ($subtitulo) :
                ?>
                    <p><strong>Subtítulo ACF:</strong> <?php echo esc_html($subtitulo); ?></p>
                <?php endif; ?>

                <a href="<?php the_permalink(); ?>">Leer más</a>
            </article>

        <?php endwhile; ?>

    <?php else : ?>

        <p>No hay entradas todavía.</p>

    <?php endif; ?>

</main>

<?php get_footer(); ?>