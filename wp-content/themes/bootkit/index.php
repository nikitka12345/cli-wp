<?php
get_header();
?>
<!-- Page Content -->
<div class="container">

    <h1 class="my-4">Welcome to Modern Business</h1>

    <!-- Marketing Icons Section -->
    <div class="row">

 <!-- Blog Entries Column -->
      <div class="col-md-8">
        <h1 class="my-4">Page Heading
          <small>Secondary Text</small>
        </h1>
        <?php if (have_posts()) {
    while (have_posts()) {
        the_post();
        get_template_part('partials/posts/content-excerpt');
        ?>
        
        <?php
}
}
?>

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <?php previous_posts_link("&larr; Older");?>
          </li>
          <li class="page-item disabled">
            <?php next_posts_link("Newer &rarr;");?>
          </li>
        </ul>
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