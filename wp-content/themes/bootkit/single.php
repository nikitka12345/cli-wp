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
        
        ?>
         <!-- Title -->
         <h1 class="mt-4"><?php the_title()?></h1>
            <!-- Post category: -->
            <h2 class="mt-4"><?php the_category(" ")?></h2>

            <!-- Date/Time -->
            <p><?php echo get_the_date() ?></p>
          
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