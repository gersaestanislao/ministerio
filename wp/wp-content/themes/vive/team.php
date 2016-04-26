
<!--Team-->
<!--Hero-->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="section scrollspy" id="team">
    <div class="container">
        <h2 class="header text_b"> Nosotros</h2>
        <div class="row">
        <?php if( have_rows('card') ): ?>
        <?php while( have_rows('card') ): the_row(); 
           // vars producto
          $imagen = get_sub_field('imagen');
          $name = get_sub_field('name');
          $puesto = get_sub_field('puesto');
          ?>
            <div class="col s12 m3">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                         <?php 
                        if( !empty($imagen) ): ?>
                        <img src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['alt']; ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"><?php echo $name; ?><br/>
                             <small><em><a class="red-text text-darken-1" href="#"><?php echo $puesto; ?></a></em></small></span>
                        <p>
                        <?php if( have_rows('social') ): ?>
                        <?php while( have_rows('social') ): the_row(); 
                           // vars producto
                          $icon = get_sub_field('icon');
                          $link = get_sub_field('link');
                          ?>
                            <a class="blue-text text-lighten-2" href="<?php echo $link; ?>" target="_blank">
                                <i class="fa <?php echo $icon; ?>"></i>
                            </a>
                        <?php endwhile; else: ?>
                        <h1>No se encontraron Articulos</h1>
                        <?php endif; ?>   

                        </p>
                    </div>
                </div>
            </div>
            <?php endwhile; else: ?>
            <h1>No se encontraron Articulos</h1>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php endwhile; else: ?>
<h1>No se encontraron Articulos</h1>
<?php endif; ?>