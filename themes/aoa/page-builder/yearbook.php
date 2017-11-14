<div class="section section--yearbook">
	<?php if( have_rows('yearbooks') ): ?>
	<ul class="yearbooks-nav">
	<?php while ( have_rows('yearbooks') ) : the_row(); ?>
		<?php $year = get_sub_field('year'); ?>
		<li><a href="#<?php echo $year; ?>"><?php echo $year; ?></a></li>
	<?php endwhile; ?>
	</ul>
	<div class="yearbooks">
		<?php while ( have_rows('yearbooks') ) : the_row(); ?>
		<div class="yeabook">
			<?php
				$images = get_sub_field('gallery');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)

				if( $images ): 
			?>
			<ul class="yearbook__gallery">
				<?php foreach( $images as $image ): ?>
					<li class="yearbook__image"><?php echo wp_get_attachment_image( $image['ID'], $size ); ?></li>
				<?php endforeach; ?>
			</ul>
			<?php endif; ?>
		</div>
		<?php endwhile; ?>
	</div>
	<?php endif;?>
</div>