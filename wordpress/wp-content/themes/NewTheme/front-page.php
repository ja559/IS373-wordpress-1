<?php get_header();?>

<div class="container pt-5">



    <div class="panel panel-default panel-body jumbotron">
        <div class = "row">
            <div class = "col-md-2">
                <ul>
                    <?php wp_list_categories('orderby=name&title_li='); ?>
                </ul>
            </div>
            <div class = "col-md-10">
                <?php
                query_posts('posts_per_page=1');
                while(have_posts()) : the_post(); ?>
                    <div>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </div>



    <div>
        <?php while(have_posts()) : the_post(); ?>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p><?php the_excerpt(); ?></p>
        <p> posted by <?php the_author(); ?>
            <?php endwhile; wp_reset_query(); ?>
    </div>


</div>
<?php get_footer();?>
