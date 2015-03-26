<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

			</div>
		</div>

		<script>
			$('#start').click(function() {
				$('#splash').fadeOut();
				$('.container').slideDown();
				$('#objects').mixItUp({
					controls: {
						toggleFilterButtons: true,
					},
				});
			});
			$('.name').click(function() {
				$('.detail').not($(this).next()).slideUp();
				$(this).next().slideToggle();
			})
		</script>

	</body>
</html>