<div class="section section--faculty">
	<?php if( have_rows('faculty_members') ): ?>
	<ul class="faculty-members">
		<?php while ( have_rows('faculty_members') ) : the_row(); ?>
		<li class="faculty-member">
			<div class="faculty-member__image">
				<?php 
					if( get_sub_field('image') ) {
						echo wp_get_attachment_image( get_sub_field('image'), 'full' );
					}
				?>
			</div>
			<div class="faculty-member__info">
				<?php if( get_sub_field('title') ) : ?><h3 class="faculty-member__title"><?php the_sub_field('title'); ?></h3><?php endif; ?>
				<?php if( get_sub_field('name') ) : ?><h2 class="faculty-member__name"><?php the_sub_field('name'); ?></h2><?php endif; ?>
				<?php if( get_sub_field('bio') ) : ?><div class="faculty-member__bio"><?php the_sub_field('bio'); ?></div><?php endif; ?>
			</div>
		</li>
		<?php endwhile; ?>
	</ul>
	<?php endif;?>
</div>