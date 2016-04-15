   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  
      <!--Intro and service-->
        <div id="intro" class="section scrollspy">
            <div class="container">
                <div class="row">
                    <div  class="col s12">
                        <?php if( have_rows('our') ): ?>
                        <?php while( have_rows('our') ): the_row(); 
                        // vars producto
                        $descript = get_sub_field('descript');
                        ?>
                        <div class="center header text_h2">
                           <?php echo $descript; ?>
                      </div>
                    </div>
                    <?php if( have_rows('service') ): ?>
                    <?php while( have_rows('service') ): the_row(); 
                    // vars producto
                     $icon = get_sub_field('icon');
                     $title = get_sub_field('title');
                     $descript = get_sub_field('descript');
                      ?>
                        <div  class="col s12 m4 l4">
                            <div class="center promo promo-example">
                                <i class="mdi-social-group"></i>
                                <h5 class="promo-caption">Servicio Social</h5>
                                <p class="light center">240 horas días sábados, todas las Licenciaturas</p>
                            </div>
                        </div>
                     <?php endwhile; else: ?>
                    <h1>No se encontraron Articulos</h1>
                    <?php endif; ?>        
                   <?php endwhile; else: ?>
                   <h1>No se encontraron Articulos</h1>
                   <?php endif; ?>   
               </div>
            </div>
        </div>
<?php endwhile; else: ?>
<h1>No se encontraron Articulos</h1>
<?php endif; ?>        