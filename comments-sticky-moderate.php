<?php
/**
 * Plugin Name: Comments Sticky Moderate
 * Description: Moves moderation options to the top of each comment to speed up moderation. You can leave your mouse in one place and keep clicking, manually pruning your comments quicker and (hopefully) save false positives.
 * Plugin URI: https://wpjohnny.com/comments-sticky-moderate/
 * Version: 1.1
 * Author: <a href="https://wpjohnny.com">WPJohnny</a>, <a href="https://profiles.wordpress.org/zeroneit/">zerOneIT</a>
 * Donate link: https://www.paypal.me/wpjohnny
 * License:      GPL v2 or later
 * License URI:  https://www.gnu.org/licenses/gpl-2.0.txt
 */

defined( 'ABSPATH' ) || exit;

add_action( 'admin_footer-edit-comments.php', 'csmPrintScript' );
/**
 * Print the script.
 *
 * @since 1.0.0
 * @return void
 */
function csmPrintScript() {
	?>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery('.wp-list-table .comment').each(function() {
				var row                 = jQuery(this),
					columnCommentRow  = row.find('.column-comment'),
					commentRowActions = columnCommentRow.find('.row-actions').detach();

				commentRowActions.prependTo(columnCommentRow);
			});
		});
	</script>
	<?php
}