<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header()
?>
<main id="content" class="site-main error_404_page section_padding mt-0" role="main">
	<?php if ( apply_filters( 'hello_elementor_page_title', true ) ) : ?>
		<section class="error-404 not-found">
			<div class="container">
				<div class="common-title text-center pb-0">
			        <h1 class="page-title">404</h1>
			        <h3 class="text-bg">Page Not Found</h3>
			        <p class="mx-auto">The page you are looking for was moved, removed, renamed or might never existed.</p>
			        <a href="/" class="error-btn default-btn mx-auto">Go To Home</a>
			    </div>
			</div>
		</section>
	<?php endif; ?>
</main>
<?php get_footer() ?>