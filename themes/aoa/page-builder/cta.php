<div class="section section--cta">
	<div class="cta">
		<div class="cta__col--left">
			<?php if( get_sub_field('subtitle') ) : ?>
				<h3 class="cta__subtitle"><?php the_sub_field('subtitle'); ?></h3>
			<?php endif; ?>
			<h2 class="cta__title"><?php the_sub_field('title'); ?></h2>
			<?php if( get_sub_field('description') ) : ?>
				<div class="cta__description"><?php the_sub_field('description'); ?></div>
			<?php endif; ?>
		</div>
		<div class="cta__col--right">
			<?php $type = get_sub_field('type'); ?>
			<?php if( $type == 'donate' ) : ?>
				<ul class="cta__donate-list">
					<li class="cta__donate-type">
						<h4 class="cta__subtitle"><?php the_sub_field('phone_copy'); ?></h4>
						<p><a href="tel:4072449810">407-244-9810</a></p>	
					</li>
					<li class="cta__donate-type">
						<h4 class="cta__subtitle"><?php the_sub_field('mail_copy'); ?></h4>
						<p>
							The Academy of Ability<br>
							130 E. Marks Orlando, FL 32803
						</p>	
					</li>
				</ul>
			<?php elseif( $type == 'enroll' ) : ?>
				<form action="">
					<fieldset class="step--1">
						<div class="form-group"><label for="">First Name</label><input type="text" class="form-control"></div>
						<div class="form-group"><label for="">Last Name</label><input type="text" class="form-control"></div>
					</fieldset>
					<fieldset class="step--2">
						<div class="form-group"><label for="">Email</label><input type="text" class="form-control"></div>
						<div class="form-group"><label for="">Phone</label><input type="text" class="form-control"></div>
					</fieldset>
					<fieldset class="step--3">
						<div class="form-group"><label for="">Addtional Information</label><textarea name="" id="" cols="10" rows="8" class="form-control"></textarea></div>
						<div class="form-group"><input type="submit" value="Submit" class="btn btn--submit"></div>
					</fieldset>
				</form>
			<?php endif; ?>
		</div>
	</div>
</div>