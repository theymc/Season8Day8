<section id="comments">

    <?php
        // if you have comments, show this stuff, but if you don't have comments, then don't show anything

        if(have_comments()) :
    ?>
            <h2>Comments</h2>

            <?php wp_list_comments('reverse_top_level=false'); ?>

        <?php else: ?>

            <h2>
                There are currently no comments on this post - be the first to start the discussion!
            </h2>

    <?php endif; ?>

    <?php comment_form(); ?>

</section>





