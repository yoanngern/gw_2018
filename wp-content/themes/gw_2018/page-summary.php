<?php /* Template Name: Summary */ ?>

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

			<?php if ( get_the_content() != "" ): ?>
                <article class="content-page">

					<?php if ( ! get_field( 'background' ) ): ?>
                        <h1><?php echo get_the_title() ?></h1>
					<?php endif; ?>
					<?php the_content(); ?>

                </article>
			<?php endif; ?>


		<?php endwhile;
		wp_reset_query();
		?>

		<?php if ( have_rows( 'articles' ) ): ?>


            <section class="summary">

				<?php while ( have_rows( 'articles' ) ): the_row();

					$title  = get_sub_field( 'title' );
					$text   = get_sub_field( 'text' );
					$button = get_sub_field( 'button' );
					$image  = get_sub_field( 'image' );

					?>

                    <article>
                        <figure style="background-image: url('<?php echo $image['sizes']['summary']; ?>')"></figure>
                        <div class="content">
                            <h2><?php echo $title ?></h2>
							<?php echo $text ?>
							<?php if ( $button ): ?>
                                <a target="<?php echo $button['target'] ?>"
                                   href="<?php echo $button['url'] ?>"><?php echo $button['title'] ?></a>
							<?php endif; ?>
                        </div>
                    </article>

				<?php endwhile; ?>

            </section>

		<?php endif; ?>


    </div>

</section>


<?php get_footer(); ?>

