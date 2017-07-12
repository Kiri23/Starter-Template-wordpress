<!--This is a Page -->

<!--Show the Header in the page  -->
<?php get_header(); ?>
<!--Main content of the page -->
<?php while (have_posts()) : the_post(); ?>
  <!--For each Page do This  -->
  <!--the_ID is the Id of the Page. post_class are the classe of the Page I think
      the css clases.  <article id = "post-<?php the_ID(); ?>"> <?php post_class(); ?>
  -->
    <div class="post">
      <!--The tittle of the Page  -->
      <h2 class="title"><?php the_title(); ?></></h2>

        <!--Show the Deacription(The Body) of the Page  -->
        <?php the_content('Read More'); ?>

      </div>
    </div>
<?php endwhile; ?>
<!--Show the footer in the page. That contain the sidebar  -->
<?php get_footer(); ?>
