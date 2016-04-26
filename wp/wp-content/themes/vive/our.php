   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  
      <!--Intro and service-->
        <div id="intro" class="section scrollspy">
            <div class="container">
                <div class="row servicios">
                    <div  class="col s12">
                      <div class="center header text_h2">
                        <?php the_field('our'); ?>
                      </div>
                    </div>
                    <?php if( have_rows('service') ): ?>
                    <?php while( have_rows('service') ): the_row(); 
                    // vars producto
                     $icon = get_sub_field('icon');
                     $title = get_sub_field('title');
                     $descript = get_sub_field('descript');
                     $link = get_sub_field('link');
                     ?>
                     <a href="<?php echo $link; ?>">
                     <div  class="col s12 m4 l4">
                        <div class="center promo promo-example">
                            <i class="<?php echo $icon; ?>"></i>
                            <h5 class="promo-caption"><?php echo $title; ?></h5>
                            <p class="light center"><?php echo $descript; ?></p>
                        </div>
                     </div>
                     </a>      
                  <?php endwhile; else: ?>
                  <h1>No se encontraron Articulos</h1>
                  <?php endif; ?>   
               </div>
            </div>
        </div>
<?php endwhile; else: ?>
<h1>No se encontraron Articulos</h1>
<?php endif; ?>