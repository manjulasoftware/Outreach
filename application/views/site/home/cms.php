
	<div class="container">		

			<div class="row">

				<div class="col-md-9 cms-gap">

					<div id="primary" class="content-area">

						<main id="main" class="inneritempost site-main" role="main">

						<article class="singlepost">

						<h1 class="entry-title pbot10 animated fadeInLeft about-head"><?php echo $content['title'];?></h1>

						<!-- .wowmetaposts -->

						<div class="entry-content about-bullet">
                           <?php if($content['status']!=1){ echo "No ".$content['title']." data found";}else{ echo $content['description'];}
						   ?><?php ?>
						   
						</div>

						<!-- .entry-content -->

						<!-- .entry-meta -->

						</article>

						<!-- #post-## -->

						<!-- #nav-below -->

						<div class="clearfix">

						</div>

	

						<!-- #comments -->

						</main>

						<!-- #main -->

					</div>

					<!-- #primary -->

				</div>

				<div class="col-md-3  cms-gap">

					<?php $this->load->view('site/side_bar'); ?>


					<!-- #secondary -->

				</div>

				<!-- .col-md-3 -->

			</div>

			<!-- /.row -->		

	</div>