<?php get_header(); ?>
<!--Parallax-->
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div >
               <h2><?php the_title();?> </h2>
            <div>
                <?php  if ( has_post_thumbnail() ) { the_post_thumbnail( '' ); } ?>
            </div>
        </div>
        <nav>
            <div class="nav-wrapper">
              <div class="bread col s12">
                <a href="#!" class="breadcrumb">First</a>
                <a href="#!" class="breadcrumb"> <i class="mdi-navigation-chevron-right"></i>Second</a>
                <a href="#!" class="breadcrumb"> <i class="mdi-navigation-chevron-right"></i>Third</a>
              </div>
            </div>
          </nav>
        <!--Intro and service-->
        <div class="sectionIn into">
            <div class="container ">
              <?php the_content();?> 
            </div>
            </div>
             <?php endwhile; else: ?>
             <h1>No se encontraron Articulos</h1>
            <?php endif; ?>
        </div>
<?php get_footer(); ?>