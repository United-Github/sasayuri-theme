<?php get_header(); ?>
<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<h3><?php the_title(); ?></h3>
			<p class="post-date"><?php the_time("Y年m月j日") ?></p>
			<?php the_content(); ?>
		<?php endwhile; ?>
<?php else : ?>
		<p>表示する記事はありませんでした。</p>
<?php endif; ?>
<?php get_footer(); ?>