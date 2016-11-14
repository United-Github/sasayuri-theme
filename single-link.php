<?php
/*
Template Name: リンク集
*/
?>

<?php get_header(); ?>
<div class="post">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	<?php else : ?>
			<p>表示するリンクはありませんでした。</p>
	<?php endif; ?>
<?php get_footer(); ?>