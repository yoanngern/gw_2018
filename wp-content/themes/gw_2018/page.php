<?php get_header(); ?>


<section id="content">

	<?php if ( get_field( 'background' ) ): ?>

        <article class="title"
                 style="background-image: url('<?php echo get_field( 'background' )['sizes']['banner']; ?>')">

            <div class="txt">

                <h1><?php echo get_the_title() ?></h1>

            </div>

        </article>

	<?php else: ?>

        <div class="spacer"></div>

	<?php endif; ?>

    <div class="platter">

		<?php while ( have_posts() ) : the_post(); ?>
            <article class="content-page">

                <?php if ( !get_field( 'background' ) ): ?>
                    <h1><?php echo get_the_title() ?></h1>
                <?php endif; ?>
				<?php the_content(); ?>

            </article>

		<?php endwhile;
		wp_reset_query();
		?>

    </div>


</section>


<?php get_footer(); ?>

