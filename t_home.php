<?php /* Template Name: Custom Home Template */ ?>

<?php get_header(); ?>
        
    <div id="main">

        <section id="articles">
            <h1>This is the home template</h1>
            <?php
                while(have_posts()):
                    the_post();
                    // Display content from the post here
            ?>

            <article>
                <h2>
                        <?php the_title(); ?>
                </h2>

                <h3><?php the_date(); ?></h3>

                <?php the_content(); ?>
        

                <hr />
            </article>

            <?php
                endwhile;
            ?>

        </section> <!-- articles -->

    </div>

<?php get_footer(); ?>