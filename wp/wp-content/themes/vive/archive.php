<?php get_header(); ?>
<!--Parallax-->
<div class="parallax-container">
       <h2>Blog</h2>

    <div class="parallax">
    <img src="img/parallax1.png"></div>
</div>
<!--Intro and service-->
<div class="sectionIn intoArchivo">  
<h4><?php single_cat_title( $prefix = '', $display = true ); ?></h4>
    <div class="container ">
     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article>
          <div class="card">
            <img class="activator" src="img/project1.jpg">
            <h5><?php the_title();?></h5>
            <i><?php the_time('d-m  Y') ?></i>
            <div class="text">
                <?php the_excerpt(); ?><
            </div>
          </div>
       </article>
       <?php endwhile; else: ?>
         <h1>No se encontraron Articulos</h1>
      <?php endif; ?>      
    </div>
    <ul class="pagination">
    <li class="disabled"><a href="#!"><i class="mdi-navigation-chevron-left"></i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="mdi-navigation-chevron-right"></i></a></li>

  </ul>
</div>
<?php get_footer(); ?>