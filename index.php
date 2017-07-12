<!--This is the Home Page -->

<!--Show the Header in the home page  -->
<?php get_header(); ?>
<!--Main content of the page -->
<!--While there's a post  -->
<?php while (have_posts()) : the_post(); ?>
  <!--For each Post do This  -->
  <!--the_ID is the Id of the Post. post_class are the classe of the post I think
      the css clases.  <article id = "post-<?php the_ID(); ?>"> <?php post_class(); ?>
  -->
    <div class="post">
      <!--The tittle of the Post  -->
      <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <!--Show the author of this post  -->
      <p class="meta">
        Posted by <a href="#"><?php the_author_posts_link(); ?></a>
        on <?php the_time('F jS, Y'); ?> &nbsp;&bull;&nbsp;
         <a href="<?php comments_link(); ?>" class="comments">
           <!--the first parameter is what we want to say if there's no comment
              2nd parameter - what we want to sya if there's one comment
              3rd paramter what you want to say when there's more than 1 comment
           -->
           <?php comments_number('0 Comments','1 comment','% responses'); ?> </a> &nbsp;&bull;&nbsp;
           <a href="<?php the_permalink(); ?>" class="permalink">Full article</a>
      </p>
      <div class="entry"> <a href="<?php the_permalink(); ?>" class="image image-full">
        <!--Show the Image of the Post  -->
        <?php the_post_thumbnail('full'); ?>
      </a>
        <!--Show the Deacription(The Body) of the Post  -->
        <?php the_content('Read More'); ?>

        <!-- This will show the author and the time <?php the_author_posts_link(); ?>
        <?php the_time(); ?> -->
      </div>
    </div>
<?php endwhile; ?>
<!--Show the footer in the home page. That contain the sidebar  -->
<?php get_footer(); ?>
