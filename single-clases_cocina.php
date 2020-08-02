<?php get_header(); ?>

	<?php  while(have_posts()): the_post(); ?>

		<?php get_template_part('template-parts/contenido','post');?>

		<div class="container">

			   <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <h2 class="separador my-2 text-center">Que incluye?</h2>

               

                <ul class="list-group">
	              <?php

	                	$lista_incluye = get_post_meta(get_the_ID(),'edc_cursos_incluye',true);

	                	foreach($lista_incluye as $incluye): ?>

	                			<li class="list-group-item list-group-item-secondary text-light">
	                        			<?php echo $incluye; ?>
	                   			 </li>

	                	<?php endforeach;?>
                    
                </ul>

                <h2 class="separador my-2 mt-5 text-center">Informacion extra</h2>

                <ul class="list-group">
                    <li class="list-group-item list-group-item-primary text-light">
                        <?php 

                        	echo get_post_meta(get_the_ID(),'edc_cursos_cupo',true);

                        ?>
                        Cupos Disponibles
                    </li>

                    <li class="list-group-item list-group-item-primary text-light">
                        

                           <?php 

                        	$total = get_post_meta(get_the_ID(),'edc_cursos_costo',true);
                        ?>

                        Costo: $ <?php echo money_format('%i',$total); ?>  


                    </li>

                    <li class="list-group-item list-group-item-primary text-light">
                 		Fecha Inicio : <?php echo get_post_meta(get_the_ID(),'edc_cursos_fecha_inicio_curso',true); ?>

                 	- Fecha Fin : <?php echo get_post_meta(get_the_ID(),'edc_cursos_fecha_fin_curso',true); ?>

                    </li>

                    <li class="list-group-item list-group-item-primary text-light">
                        Horario: 
                       <?php echo get_post_meta(get_the_ID(),'edc_cursos_hora_inicio_clase',true) . " - " .
                              get_post_meta(get_the_ID(),'edc_cursos_hora_fin_clase',true); 

                        ?>

                    </li>

                     <li class="list-group-item list-group-item-primary text-light">
                        Duracion: 
                       <?php echo get_post_meta(get_the_ID(),'edc_cursos_indiciaciones',true); ?>

                    </li>
                </ul>

            </div>
            <div class="col-md-6 text-center">
                <h2 class="separador text-center mt-5 my-md-3">Imparte</h2>

                <?php

                	$instructor_ID = get_post_meta(get_the_ID(),'edc_cursos_chef',true);
                	$ids = implode($instructor_ID, ',');

                	$args = array(

                		'post_type' => 'chefs',
                		'post__in'   => $instructor_ID,
                		'posts_per_page' => 5

                	);

                	$instructor = new WP_Query($args);

                	while($instructor->have_posts()): $instructor->the_post();

                ?>
                <div>
                <div class="row justify-content-center mb-4">
                    <div class="col-md-7">
                        <?php

                        // <img src="img/instructor.jpg" alt="imagen instructor" class="img-fluid rounded-circle">
                        the_post_thumbnail('cuadrada_mediana',array('class'=>'img-fluid rounded-circle mb-4'));

                        ?>
                    </div>
                </div>

                <p class="instructor"><?php  the_title(); ?></p>
                <p><?php the_content(); ?></p>
            </div>

            <?php endwhile; wp_reset_postdata();  ?>

            </div>
        </div>
       
			
		</div>

	<?php endwhile;?>


<?php get_footer(); ?>