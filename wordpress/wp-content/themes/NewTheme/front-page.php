<?php get_header();?>

<div class="container pt-5 pb-5">
<div>
    <h1><?php the_title();?></h1>
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <?php the_content() ?>
    <?php endwhile; endif; ?>
</div>


<?php
query_posts('posts_per_page=1');
while(have_posts()) : the_post(); ?>
    <div>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p><?php the_excerpt(); ?></p>
    </div>
<?php endwhile; wp_reset_query(); ?>

<div class="panel panel-default panel-body">
    <div>
        <div>
            <ul>
                <?php wp_list_categories('orderby=name&title_li='); ?>
            </ul>
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
