<?php get_header();?>


<?php while(have_posts()): the_post();?>

    <div class="container-fluid  imagenes-principales">


        <div class="row imagen-superior imagen">
            <div class="col-md-6 bg-primary">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-sm-8 col-md-6">
                        <div class="contenido text-center text-light py-3">
                            <?php echo get_post_meta(get_the_ID(),'edc_homepage_texto_superior_1',true);?>
                        </div>
                    </div>
                </div>
            </div>
                 <div class="col-md-6 bg-vino" style="background-image: url(<?php echo get_post_meta(get_the_ID(),'edc_homepage_imagen_superior_2',true);?>
);">




            </div>

        </div>
        <div class="row imagen-inferior imagen">
            <div class="col-md-6 bg-secondary">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-sm-8 col-md-6">
                        <div class="contenido text-center .imagen-superior .contenido{
                            border-top: 1px solid white;
                            border-bottom: 1px solid white;
                        } py-3">
                             <?php echo get_post_meta(get_the_ID(),'edc_homepage_texto_superior_2',true);?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 bg-comida" style="background-image: url(<?php echo get_post_meta(get_the_ID(),'edc_homepage_imagen_superior_1',true);?>
);">




            </div>
        </div>

    </div>

    <?php 

        $nosotros = new WP_Query('pagename=nosotros');
        while($nosotros->have_posts()): $nosotros->the_post();
            get_template_part('template','parts/iconos');
        endwhile; wp_reset_postdata();
    ?>
  
    <section class="clases mt-5 py-5">
        <h1 class="separador text-center mb-3">
            Proximas clases
        </h1>

        <div class="container">
            <div class="row">
                    <?php

                    edc_query_cursos(3);

                    ?>
            </div>
            <div class="row justify-content-end">

                <div class="col-sm-5 col-md-3">
                    <a  class="btn btn-primary d-block" href="<?php echo get_permalink(get_page_by_title('Proximas Clases')); ?>">Ver todas la clases</a>
                </div>
                
            </div>
        </div>
    </section>



    <div class="licenciatura"  style="background-image: url(<?php echo get_post_meta(get_the_ID(),'edc_homepage_imagen_licenciatura',true);?>
);">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8 text-center text-light">
                
                    <p> <?php echo get_post_meta(get_the_ID(),'edc_homepage_texto_licenciatura',true);?></p>
                    <?php //tomamose el id de la pagina contacto 
                        $contacto = get_page_by_title('Contacto');

                    ?>

                    <a href="<?php echo get_permalink($contacto->ID);?>" class="btn btn-primary text-uppercase">Mas informacion</a>
                </div>
            </div>
        </div>
    </div>
<?php endwhile;?>

  
<?php get_footer();?>