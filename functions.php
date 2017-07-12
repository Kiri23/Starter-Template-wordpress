<!--The Functon PHP file will add Funcionality in the CL Panel in
    wordpress
-->

<?php
// to add feature image to the post in wordpress site
add_theme_support('post-thumbnails');

//Adds Menus Funcionality to the CL panel in wordpress
add_theme_support('menus');

//Register right sidebar
register_sidebar(array(
  // name of the sidebar
  'name' => __( 'Right Hand Sidebar' ),
  // the id of the sidebar
  'id' => 'right-sidebar',
  // desciption of this sidebar
  'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
  // before the title of each item put this html
  'before_title' => '<h2>',
  'after_title' => '</h2>',
  // dinamic class and dinamic id for each widget(Item in the sidebar)
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget'  => '</div><!-- widget end -->'
));





?>
