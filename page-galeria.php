<?php
/*
* Template Name: Galeria de Imagenes
*/
 get_header(); ?>

	<?php  while(have_posts()): the_post(); 

		get_template_part('template-parts/contenido','paginas');

		$imagenes = get_post_meta(get_the_ID(),'edc_galeria_imagenes',true);


		?>

		<div class="container">

			<div class="row justify-content-center">

				<div class="col-md-10">


				    <div class="card-columns">
				    			<?php

				    			foreach($imagenes as $id=> $imagen):

				    			 ?>


			                    <div class="card">
			                        <a href="#" data-toggle="modal" data-target="#imagen<?php echo $id; ?>">
			                        	<?php $imagen = wp_get_attachment_image_url($id,'full'); ?>
			                            <img src="<?php echo $imagen; ?>" alt="" class="img-fluid">

			                        </a>

			                        <div id="imagen<?php echo $id; ?>" class="modal fade" index="-1" role="dialog" aria-hidden="true">

			                                <div class="modal-dialog modal-dialog-centered modal-lg">
			                                    <div class="modal-content">
													<?php $imagen = wp_get_attachment_image_url($id,'full'); ?>
			                            			<img src="<?php echo $imagen; ?>" alt="" class="img-fluid">
			                                    </div>
			                                </div>


			                        </div>
			          </div>

				 <?php endforeach; ?>
			</div>
			
		</div>
	</div>
		
     
      </div>

	<?php endwhile;?>


<?php get_footer(); ?>