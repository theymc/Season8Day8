<?php get_header(); ?>

    <div id="main">

        <section id="articles">
            <?php
                while(have_posts()):
                    the_post();
                    // Display content from the post here
            ?>

            <article>

                <h2>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>

                <h3><?php the_date(); ?></h3>

                <?php the_excerpt(); ?>
                

                <hr />
            </article>

            <?php
                endwhile;
            ?>

        </section> <!-- articles -->

        <?php get_sidebar(); ?>

    </div>

<?php get_footer(); ?>