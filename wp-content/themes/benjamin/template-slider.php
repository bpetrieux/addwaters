<?php /* Template Name: Sliders */  get_header(); ?>
<?php if( have_rows('image_main_slider') ): ?>
	<section class="slider mainSlider">
		<?php while( have_rows('image_main_slider') ): the_row(); 
		$image = get_sub_field('image_mainSlider');
		?>
		<span data-url="<?php echo $image['url']; ?>"></span>
	<?php endwhile; ?>
</section>
<?php endif; ?>

<!-- <img class="next" src="<?php echo get_template_directory_uri(); ?>/img/Next.png" alt="">
<img class="prev" src="<?php echo get_template_directory_uri(); ?>/img/Previous.png" alt=""> -->

<?php if( have_rows('aquabrass_section_1_image_slider') ): ?>
	<section class="slider aquabrass_slider_1">
		<?php while( have_rows('aquabrass_section_1_image_slider') ): the_row(); 
		$imagea1 = get_sub_field('aquabrass_section_1_image_slider_single');
		?>
		<span data-url="<?php echo $imagea1['url']; ?>"></span>
	<?php endwhile; ?>
</section>
<?php endif; ?>

<?php if( have_rows('aquabrass_section_2_image_slider') ): ?>
	<section class="slider aquabrass_slider_2">
		<?php while( have_rows('aquabrass_section_2_image_slider') ): the_row(); 
		$imagea2 = get_sub_field('aquabrass_section_2_image_slider_single');
		?>
		<span data-url="<?php echo $imagea2['url']; ?>"></span>
	<?php endwhile; ?>
</section>
<?php endif; ?>

<?php if( have_rows('aquabrass_section_3_image_slider') ): ?>
	<section class="slider aquabrass_slider_3">
		<?php while( have_rows('aquabrass_section_3_image_slider') ): the_row(); 
		$imagea3 = get_sub_field('aquabrass_section_3_image_slider_single');
		?>
		<span data-url="<?php echo $imagea3['url']; ?>"></span>
	<?php endwhile; ?>
</section>
<?php endif; ?>

<?php if( have_rows('aquabrass_section_4_image_slider') ): ?>
	<section class="slider aquabrass_slider_4">
		<?php while( have_rows('aquabrass_section_4_image_slider') ): the_row(); 
		$imagea4 = get_sub_field('aquabrass_section_4_image_slider_single');
		?>
		<span data-url="<?php echo $imagea4['url']; ?>"></span>
	<?php endwhile; ?>
</section>
<?php endif; ?>

<?php if( have_rows('aquabrass_section_5_image_slider') ): ?>
	<section class="slider aquabrass_slider_5">
		<?php while( have_rows('aquabrass_section_5_image_slider') ): the_row(); 
		$imagea5 = get_sub_field('aquabrass_section_5_image_slider_single');
		?>
		<span data-url="<?php echo $imagea5['url']; ?>"></span>
	<?php endwhile; ?>
</section>
<?php endif; ?>



<?php if( have_rows('simas_section_1_image_slider') ): ?>
	<section class="slider simas_slider_1">
		<?php while( have_rows('simas_section_1_image_slider') ): the_row(); 
		$imagesimas1 = get_sub_field('simas_section_1_image_slider_single');
		?>
		<span data-url="<?php echo $imagesimas1['url']; ?>"></span>
	<?php endwhile; ?>
</section>
<?php endif; ?>

<?php if( have_rows('simas_section_2_image_slider') ): ?>
	<section class="slider simas_slider_2">
		<?php while( have_rows('simas_section_2_image_slider') ): the_row(); 
		$imagesimas2 = get_sub_field('simas_section_2_image_slider_single');
		?>
		<span data-url="<?php echo $imagesimas2['url']; ?>"></span>
	<?php endwhile; ?>
</section>
<?php endif; ?>

<?php if( have_rows('simas_section_3_image_slider') ): ?>
	<section class="slider simas_slider_3">
		<?php while( have_rows('simas_section_3_image_slider') ): the_row(); 
		$imagesimas3 = get_sub_field('simas_section_3_image_slider_single');
		?>
		<span data-url="<?php echo $imagesimas3['url']; ?>"></span>
	<?php endwhile; ?>
</section>
<?php endif; ?>

<?php if( have_rows('simas_section_4_image_slider') ): ?>
	<section class="slider simas_slider_4">
		<?php while( have_rows('simas_section_4_image_slider') ): the_row(); 
		$imagesimas4 = get_sub_field('simas_section_4_image_slider_single');
		?>
		<span data-url="<?php echo $imagesimas4['url']; ?>"></span>
	<?php endwhile; ?>
</section>
<?php endif; ?>



<?php if( have_rows('fiora_section_1_image_slider') ): ?>
	<section class="slider fiora_slider_1">
		<?php while( have_rows('fiora_section_1_image_slider') ): the_row(); 
		$imagefiora1 = get_sub_field('fiora_section_1_image_slider_single');
		?>
		<span data-url="<?php echo $imagefiora1['url']; ?>"></span>
	<?php endwhile; ?>
</section>
<?php endif; ?>

<?php if( have_rows('fiora_section_2_image_slider') ): ?>
	<section class="slider fiora_slider_2">
		<?php while( have_rows('fiora_section_2_image_slider') ): the_row(); 
		$imagefiora2 = get_sub_field('fiora_section_2_image_slider_single');
		?>
		<span data-url="<?php echo $imagefiora2['url']; ?>"></span>
	<?php endwhile; ?>
</section>
<?php endif; ?>




<section class="logo">	
	<dl class="accordion">
		<dt><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/Bouton_Aquabrass.png" alt=""></a></dt>
		<dd>
			<img src="<?php echo get_template_directory_uri(); ?>/img/aquabrass.png" alt="">
			<div class="aquabrass">
				<div class="aquabrass_flex">
					<div data-slider="aquabrass_slider_1" class="action">
						<?php 
						$aquabrass_section_1_titre = get_field( "aquabrass_section_1_titre" );
						if( $aquabrass_section_1_titre ) :  ?>
						<h1><?php echo $aquabrass_section_1_titre  ?></h1>
					<?php endif; ?>

					<?php $aquabrass_section_1_image_principale = get_field('aquabrass_section_1_image_principale');
					if( !empty($aquabrass_section_1_image_principale) ): ?>
					<img src="<?php echo $aquabrass_section_1_image_principale['url']; ?>" alt="<?php echo $aquabrass_section_1_image_principale['alt']; ?>" />
				<?php endif; ?>
			</div>

			<div data-slider="aquabrass_slider_2" class="action">
				<?php 
				$aquabrass_section_2_titre = get_field( "aquabrass_section_2_titre" );
				if( $aquabrass_section_2_titre ) :  ?>
				<h1><?php echo $aquabrass_section_2_titre  ?></h1>
			<?php endif; ?>
			<?php $aquabrass_section_2_image_principale = get_field('aquabrass_section_2_image_principale');
			if( !empty($aquabrass_section_2_image_principale) ): ?>
			<img src="<?php echo $aquabrass_section_2_image_principale['url']; ?>" alt="<?php echo $aquabrass_section_2_image_principale['alt']; ?>" />
		<?php endif; ?>
	</div>

</div>
<div class="aquabrass_flex">
	<div data-slider="aquabrass_slider_3" class="action">
		<?php 
		$aquabrass_section_3_titre = get_field( "aquabrass_section_3_titre" );
		if( $aquabrass_section_3_titre ) :  ?>
		<h1><?php echo $aquabrass_section_3_titre  ?></h1>
	<?php endif; ?>
	<?php $aquabrass_section_3_image_principale = get_field('aquabrass_section_3_image_principale');
	if( !empty($aquabrass_section_3_image_principale) ): ?>
	<img src="<?php echo $aquabrass_section_3_image_principale['url']; ?>" alt="<?php echo $aquabrass_section_3_image_principale['alt']; ?>" />
<?php endif; ?>
</div>
</div>
<div class="aquabrass_flex">
	<div data-slider="aquabrass_slider_4" class="action">
		<?php 
		$aquabrass_section_4_titre = get_field( "aquabrass_section_4_titre" );
		if( $aquabrass_section_4_titre ) :  ?>
		<h1><?php echo $aquabrass_section_4_titre  ?></h1>
	<?php endif; ?>
	<?php $aquabrass_section_4_image_principale = get_field('aquabrass_section_4_image_principale');
	if( !empty($aquabrass_section_4_image_principale) ): ?>
	<img src="<?php echo $aquabrass_section_4_image_principale['url']; ?>" alt="<?php echo $aquabrass_section_4_image_principale['alt']; ?>" />
<?php endif; ?>
</div>
<div data-slider="aquabrass_slider_5" class="action">
	<?php 
	$aquabrass_section_5_titre = get_field( "aquabrass_section_5_titre" );
	if( $aquabrass_section_5_titre ) :  ?>
	<h1><?php echo $aquabrass_section_5_titre  ?></h1>
<?php endif; ?>
<?php $aquabrass_section_5_image_principale = get_field('aquabrass_section_5_image_principale');
if( !empty($aquabrass_section_5_image_principale) ): ?>
<img src="<?php echo $aquabrass_section_5_image_principale['url']; ?>" alt="<?php echo $aquabrass_section_5_image_principale['alt']; ?>" />
<?php endif; ?>
</div>
</div>
</div>
</dd>
</dl>
<dl class="accordion">
	<dt><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/Bouton_Simas.png" alt=""></a></dt>
	<dd>
		<img src="<?php echo get_template_directory_uri(); ?>/img/simas.png" alt="">
		<div class="simas">
			<div data-slider="simas_slider_1" class="action">
				<?php 
				$simas_section_1_titre = get_field( "simas_section_1_titre" );
				if( $simas_section_1_titre ) :  ?>
				<h1><?php echo $simas_section_1_titre  ?></h1>
			<?php endif; ?>

			<?php $simas_section_1_image_principale = get_field('simas_section_1_image_principale');
			if( !empty($simas_section_1_image_principale) ): ?>
			<img src="<?php echo $simas_section_1_image_principale['url']; ?>" alt="<?php echo $simas_section_1_image_principale['alt']; ?>" />
		<?php endif; ?>
	</div>

				<div data-slider="simas_slider_2" class="action">
				<?php 
				$simas_section_2_titre = get_field( "simas_section_2_titre" );
				if( $simas_section_2_titre ) :  ?>
				<h1><?php echo $simas_section_2_titre  ?></h1>
			<?php endif; ?>

			<?php $simas_section_2_image_principale = get_field('simas_section_2_image_principale');
			if( !empty($simas_section_2_image_principale) ): ?>
			<img src="<?php echo $simas_section_2_image_principale['url']; ?>" alt="<?php echo $simas_section_2_image_principale['alt']; ?>" />
		<?php endif; ?>
	</div>

				<div data-slider="simas_slider_3" class="action">
				<?php 
				$simas_section_3_titre = get_field( "simas_section_3_titre" );
				if( $simas_section_3_titre ) :  ?>
				<h1><?php echo $simas_section_3_titre  ?></h1>
			<?php endif; ?>

			<?php $simas_section_3_image_principale = get_field('simas_section_3_image_principale');
			if( !empty($simas_section_3_image_principale) ): ?>
			<img src="<?php echo $simas_section_3_image_principale['url']; ?>" alt="<?php echo $simas_section_3_image_principale['alt']; ?>" />
		<?php endif; ?>
	</div>

				<div data-slider="simas_slider_4" class="action">
				<?php 
				$simas_section_4_titre = get_field( "simas_section_4_titre" );
				if( $simas_section_4_titre ) :  ?>
				<h1><?php echo $simas_section_4_titre  ?></h1>
			<?php endif; ?>

			<?php $simas_section_4_image_principale = get_field('simas_section_4_image_principale');
			if( !empty($simas_section_4_image_principale) ): ?>
			<img src="<?php echo $simas_section_4_image_principale['url']; ?>" alt="<?php echo $simas_section_4_image_principale['alt']; ?>" />
		<?php endif; ?>
	</div>
</div>
</dd>
</dl>
<dl class="accordion">
	<dt><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/Bouton_Fiora.png" alt=""></a></dt>
	<dd>
		<img src="<?php echo get_template_directory_uri(); ?>/img/fiora.png" alt="">
		<div class="fiora">
			<div data-slider="fiora_slider_1" class="action">
				<?php 
				$fiora_section_1_titre = get_field( "fiora_section_1_titre" );
				if( $fiora_section_1_titre ) :  ?>
				<h1><?php echo $fiora_section_1_titre  ?></h1>
			<?php endif; ?>

			<?php $fiora_section_1_image_principale = get_field('fiora_section_1_image_principale');
			if( !empty($fiora_section_1_image_principale) ): ?>
			<img src="<?php echo $fiora_section_1_image_principale['url']; ?>" alt="<?php echo $fiora_section_1_image_principale['alt']; ?>" />
		<?php endif; ?>
	</div>
				<div data-slider="fiora_slider_2" class="action">
				<?php 
				$fiora_section_2_titre = get_field( "fiora_section_2_titre" );
				if( $fiora_section_2_titre ) :  ?>
				<h1><?php echo $fiora_section_2_titre  ?></h1>
			<?php endif; ?>

			<?php $fiora_section_2_image_principale = get_field('fiora_section_2_image_principale');
			if( !empty($fiora_section_2_image_principale) ): ?>
			<img src="<?php echo $fiora_section_2_image_principale['url']; ?>" alt="<?php echo $fiora_section_2_image_principale['alt']; ?>" />
		<?php endif; ?>
	</div>
		</div>
	</dd>
</dl>
</section>
<div class="navigation">
	<img class="kill" src="<?php echo get_template_directory_uri(); ?>/img/Home.png" alt="">
	<?php 
$field = get_field_object('langue_de_cette_page');
$value = $field['value'];
if ($value=="En") { ?> 
		<a href="<?php the_field('page_traduction'); ?>"><img class="langue" src="<?php echo get_template_directory_uri(); ?>/img/FR.png" alt=""></a>
<?php  }
else if ($value=="Fr") { ?>
		<a href="<?php the_field('page_traduction'); ?>"><img class="langue" src="<?php echo get_template_directory_uri(); ?>/img/EN.png" alt=""> </a>
<?php  }
else{

} ?>
 <img class="return" src="<?php echo get_template_directory_uri(); ?>/img/Back.png">
</div>


<?php get_footer(); ?>