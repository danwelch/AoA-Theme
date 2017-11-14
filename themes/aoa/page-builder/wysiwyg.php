<div class="section section--wysiwyg">
	<?php if( get_sub_field('title') ) : ?><h2 class="section__title"><?php the_sub_field('title'); ?></h2><?php endif; ?>
	<?php if( get_sub_field('content') ) : ?><div class="rte section__content"><?php the_sub_field('content'); ?></div><?php endif; ?>
</div>