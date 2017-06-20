

<?php get_header(); ?>
<div class="page-header fade-in-down"> <!-- start page-header -->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					 <h1>
                    <?php single_post_title();?>
                </h1>
                <div class="breadcrumbs">
                    <?php if (function_exists('bcn_display')){
                    bcn_display();
                    }?>
                    
					</div>
				</div>
			</div>
		</div>
	</div> <!-- end page-header -->


	<div class="page-content page-list fade-in"> <!-- start page-content -->
		<div class="container">
			<div class="row">
				
				<div class="list col-md-8">
				
				
					
					 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          
           <div class="list-item">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title();
                            ?></a></h2>
						<div class="meta-info">
							autor: <a href=""><?php echo get_the_author();?></a>, <?php echo get_the_date();?>
						</div>
						<div class="excerpt">
							<p>
								<?php the_excerpt();
                                ?>
							</p>
							<a href="<?php the_permalink(); ?>" class="button read-more">Więcej <i class="fa fa-chevron-right"></i></a>
						</div>
					</div>
              
               <?php endwhile; ?>
               <?php next_posts_link( 'Starsze wpisy');?>
               <?php previous_posts_link( 'Wcześniejsze wpisy');?>
               
               <?php else : ?>
               <p>bark wpiswoe</p>
               <?php endif;?>
                </div>
                <div class="sidebar col-md-4 hidden-sm">
					<div class="block">
						
							
							<?php  dynamic_sidebar('sidebar');?>
						
					</div>
				</div>

					
					
					

				
			</div>
		</div>
	</div> <!-- end page-content -->

<?php get_footer(); ?>

