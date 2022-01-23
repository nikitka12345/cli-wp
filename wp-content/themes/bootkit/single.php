<?php
get_header();
?>
<!-- Page Content -->
<div class="container">

    

    <!-- Marketing Icons Section -->
    <div class="row">

 <!-- Blog Entries Column -->
      <div class="col-md-8">
      
        <?php if (have_posts()) {
    while (have_posts()) {
        the_post();
        global $post;
        $author_ID = $post->post_author;
        $author_URL = get_author_posts_url($author_ID);
        ?>
         <!-- Title -->
         <h1 class="mt-4"><?php the_title()?></h1>
            <!-- Post category: -->
            <h2 class="mt-4"><?php the_category(" ")?></h2>

           <!-- Date/Time -->
           <p><?php the_time(get_option('date_format'));
        echo " ";
        the_time(get_option('time_format'));?></p>
            <hr>
          <!-- Author -->
          <p class="lead">
                by
                <a href="<?php echo $author_URL; ?>"><?php the_author();?></a>
            </p>
            <hr>
            <!-- Preview Image -->
            <?php
if (has_post_thumbnail()) {
            the_post_thumbnail("full", ["class" => "card-img-top"]);
        }
        ?>
        <hr>

           <!-- Post Content -->
           <?php the_content();
        $defaults = array(
            'before' => '<div class="row justify-content-center align-items-center">' . __('Pages:'),
            'after' => '</div>',
        );
        wp_link_pages($defaults);
        ?>
            <hr>
        <!-- Tag cloud -->
        <?php the_tags('', ', ');?>
            <hr>
        <?php
}
}
?>        
      </div>
        <?php get_sidebar();?>
    </div>
    <!-- /.row -->
    <hr>
</div>
<!-- /.container -->
<?php
get_footer();
?>