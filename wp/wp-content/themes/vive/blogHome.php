<!--blog-->
<div class="section scrollspy" id="work">
    <div class="container">
        <h2 class="header text_b">Blog</h2>
        <div class="row">
        <?php query_posts( array( 'category_name' => 'Blog') );  ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                          <?php  if ( has_post_thumbnail() ) { the_post_thumbnail( 'homeBlog"_thumbs' ); } ?>

                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"><?php the_title();?> <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#"><?php the_time('d-m  Y') ?></a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4"><?php the_title();?> <i class="mdi-navigation-close right"></i></span>
                        <p><?php the_excerpt(); ?></p>
                         <a class="center" href="<?php the_permalink();?>">Leer nota</a>
                    </div>
                </div>
            </div>     
           <?php endwhile; else: ?>
            <h1>No se encontraron Articulos</h1>
            <?php endif; ?> 
            
        </div>
    </div>
</div>
