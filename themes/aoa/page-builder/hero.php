<div class="section section--hero">
	<h1 class="hero__title"><?php the_sub_field('title'); ?></h1>
	<?php if( get_sub_field('subtitle') ) : ?><div class="hero__subtitle"><?php the_sub_field('subtitle'); ?></div><?php endif; ?>
	<?php if( get_sub_field('description') ) : ?><div class="hero__description"><?php the_sub_field('description'); ?></div><?php endif; ?>
</div>