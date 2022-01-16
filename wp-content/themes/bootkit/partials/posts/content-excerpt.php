 <!-- Blog Post -->
            <div class="card mb-4">
                <!-- <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap"> -->
                <?php the_post_thumbnail("full", ["class" => "card-img-top"])?> 
                <h2 class="card-title"><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>              
                 <div class="card-body">
                    
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid
                        atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero
                        voluptate voluptatibus possimus, veniam magni quis!</p>
                    <a href="<?php the_permalink()?>" class="btn btn-primary">Read More &rarr;</a>
                </div>
                <div class="card-footer text-muted">
         Posted on <?php echo get_the_date() ?> by
         <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author()?></a>
     </div>
            </div> 