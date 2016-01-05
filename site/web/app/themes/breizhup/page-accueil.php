<?php
/**
 * Template Name: Page d'accueil
 */

$fonds = new WP_Query( array( 'page_id' => 4 ) );
$modalites = new WP_Query( array( 'page_id' => 6 ) );
$cibles = new WP_Query( array( 'page_id' => 8 ) );
$partenaires = new WP_Query( array( 'page_id' => 10 ) );



?>

<?php while (have_posts()) : the_post(); 

	$appel = get_field('appel');
	$cp = get_field('cp');

?>

<header class="banner mainheader">
  <div class="text-center img-responsive" id="title">
    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/breizhup.png" alt="<?php bloginfo('slogan'); ?>" class="img-responsive">    
    <h1><span class="h2"><?php bloginfo('description'); ?></span></h1>
    <p class="m-t-lg">
    	<?php if( $appel ): ?>
	
			<a href="<?php echo $appel['url']; ?>" class="btn btn-lg btn-info"><i class="icon-download"></i> <?php echo $appel['title']; ?></a>

		<?php endif; ?>
      <a href="https://regionbretagne.typeform.com/to/F7PBFc" data-mode="1" target="_blank" class="btn btn-lg btn-secondary typeform-share"><i class="icon-envelope"></i> contact</a>

    </p>
  </div>

  <a href="http://www.marque-bretagne.fr/" class="m-bretagne"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/marque-bretagne.png" height="50" alt="marque bretagne"></a>
</header>

<div id="trigger">

    <nav id="primary-navigation" class="navbar navbar-light bg-faded">

      	<div class="container-fluid">

			<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#CollapsingNavbar">
			  &#9776;
			</button>

      		<div class="collapse navbar-toggleable-sm" id="CollapsingNavbar">
      
		        <ul class="nav navbar-nav menu pull-left">
		          <li class="nav-item">
		            <a href="#accueil" class="nav-link"><span class="hidden-fix">Le fonds</span> <span class="display-fix">Breizh up</span></a>
		          </li>
		          <li class="nav-item">
		            <a href="#modalites" class="nav-link ">Les modalités</a>
		          </li>
		          <li class="nav-item">
		            <a href="#cibles" class="nav-link">Les entreprises cibles</a>
		          </li>
		          <li class="nav-item">
		            <a href="#co-investisseurs" class="nav-link">Les partenaires</a>
		          </li>
		        </ul>

		        <ul class="nav navbar-nav pull-right display-fix">
		          <li class="nav-item">
		            <a href="https://regionbretagne.typeform.com/to/O0Yg8E" class="nav-link typeform-share" data-mode="1" target="_blank"><i class="icon-check"></i> devenez partenaire</a>
		          </li>
		          <li class="nav-item">
		            <a href="https://regionbretagne.typeform.com/to/F7PBFc" data-mode="1" target="_blank" class="nav-link typeform-share"><i class="icon-envelope"></i> contact</a>
		          </li>
		        </ul>

      		</div> <!-- /.collapse -->

    	</div> <!-- /.container-fluid -->
      
    </nav>
    
  </div>

</div>

<main id="main">
	<div class="container text-justify">

		<?php if ( $fonds->have_posts() ) : ?>

			<!-- pagination here -->
			<section id="accueil">

			<!-- the loop -->
			<?php while ( $fonds->have_posts() ) : $fonds->the_post(); ?>
				<h1><?php the_title(); ?></h1>
		  		<?php the_content(); ?>
			<?php endwhile; ?>
			<!-- end of the loop -->

			<!-- pagination here -->

			</section>

			<?php wp_reset_postdata(); ?>

		<?php else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
		<?php if ( $modalites->have_posts() ) : ?>

			<!-- pagination here -->
			<section id="modalites">

			<!-- the loop -->
			<?php while ( $modalites->have_posts() ) : $modalites->the_post(); ?>
				<h1><?php the_title(); ?></h1>
		  		<?php the_content(); ?>
			<?php endwhile; ?>
			<!-- end of the loop -->

			<!-- pagination here -->

			</section>

			<?php wp_reset_postdata(); ?>

		<?php else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
		
		<?php if ( $cibles->have_posts() ) : ?>

			<!-- pagination here -->
			<section id="cibles">

			<!-- the loop -->
			<?php while ( $cibles->have_posts() ) : $cibles->the_post(); ?>
				<h1><?php the_title(); ?></h1>
		  		<?php the_content(); ?>
			<?php endwhile; ?>
			<!-- end of the loop -->

			<!-- pagination here -->

			</section>

			<?php wp_reset_postdata(); ?>

		<?php else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
		
		<?php if ( $partenaires->have_posts() ) : ?>

			<!-- pagination here -->
			<section id="partenaires">

			<!-- the loop -->
			<?php while ( $partenaires->have_posts() ) : $partenaires->the_post(); ?>
				<h1><?php the_title(); ?></h1>
		  		<?php the_content(); ?>
			<?php endwhile; ?>
			<!-- end of the loop -->

			<!-- pagination here -->

			</section>

			<?php wp_reset_postdata(); ?>

		<?php else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>

	</div> <!-- /.container -->

</main>



<aside class="text-center section">
  	<?php if( $cp ): ?>
	
		<a href="<?php echo $cp['url']; ?>" class="btn btn-primary-outline"><i class="icon-download"></i> <?php echo $cp['title']; ?></a>

	<?php endif; ?>

  	<?php if( $appel ): ?>
	
		<a href="<?php echo $appel['url']; ?>" class="btn btn-primary-outline"><i class="icon-download"></i> <?php echo $appel['title']; ?></a>

	<?php endif; ?>
</aside>

<aside class="partenaires section">
 <div class="container"> 
     <ul class="list-unstyled">
       <li class="text-center"><a href="http://europe.bzh/jcms/preprod_234402/fr/feder" data-toggle="tooltip" data-placement="left" title="soutenu par le Fonds Européen de Développement Régional"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo-feder.jpg" alt="Feder" class="img-responsive"></a></li>
       <li class="text-center"><p><small>un fonds géré par</small></p><a href="http://www.isourcevc.com/fr/" data-toggle="tooltip" title="iSource, société de gestion" data-placement="right"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo-isource.jpg" alt="iSource" class="img-responsive"></a></li>
     </ul>
  </div>
</aside>

<?php endwhile; ?>

<script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'share.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}})()</script>


<script>
	
</script>


	