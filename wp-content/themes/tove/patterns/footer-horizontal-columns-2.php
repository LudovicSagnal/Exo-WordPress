<?php
/**
 * Title: Footer with site title, menu, opening hours, contact information and social icons in two columns.
 * Slug: tove/footer-horizontal-columns-2
 * Categories: tove-footer
 */
?>
<!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
<div class="wp-block-group alignwide">

	<!-- wp:group {"align":"wide"} -->
	<div class="wp-block-group alignwide">

		<!-- wp:separator {"className":"is-style-wide"} -->
		<hr class="wp-block-separator is-style-wide" />
		<!-- /wp:separator -->

		<!-- wp:spacer {"height":1,"className":"hide-mobile"} -->
		<div style="height:1px" aria-hidden="true" class="wp-block-spacer hide-mobile"></div>
		<!-- /wp:spacer -->

		<!-- wp:columns -->
		<div class="wp-block-columns">

			<!-- wp:column -->
			<div class="wp-block-column">

				<!-- wp:site-title {"level":0,"textAlign":"left","fontSize":"large"} /-->

				<!-- wp:spacer {"height":1} -->
				<div style="height:1px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">

				<!-- wp:columns -->
				<div class="wp-block-columns">

					<!-- wp:column -->
					<div class="wp-block-column">

						<!-- wp:heading {"level":6} -->
						<h6>Navigation</h6>
						<!-- /wp:heading -->

						<!-- wp:navigation {"overlayMenu":"never","__unstableLocation":"primary","className":"no-margin-top","layout":{"type":"flex","setCascadingProperties":"true","orientation":"vertical","justifyContent":"left","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"0.5em"}}} /-->

					</div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column">

						<!-- wp:heading {"level":6} -->
						<h6>Our Hours</h6>
						<!-- /wp:heading -->

						<!-- wp:columns {"isStackedOnMobile":false,"className":"no-margin-top"} -->
						<div class="wp-block-columns is-not-stacked-on-mobile no-margin-top">

							<!-- wp:column -->
							<div class="wp-block-column">
								<!-- wp:paragraph -->
								<p>Mon–Fri<br>Saturday<br>Sunday</p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:column -->

							<!-- wp:column -->
							<div class="wp-block-column">
								<!-- wp:paragraph -->
								<p>07 – 18<br>08 – 19<br>08 – 19</p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:column -->

						</div>
						<!-- /wp:columns -->

					</div>
					<!-- /wp:column -->

				</div>
				<!-- /wp:columns -->

				<!-- wp:spacer {"height":1,"className":"hide-mobile"} -->
				<div style="height:1px" aria-hidden="true" class="wp-block-spacer hide-mobile"></div>
				<!-- /wp:spacer -->

				<!-- wp:columns -->
				<div class="wp-block-columns">

					<!-- wp:column -->
					<div class="wp-block-column">

						<!-- wp:heading {"level":6} -->
						<h6>Contact</h6>
						<!-- /wp:heading -->

						<!-- wp:paragraph -->
						<p>hi@niofika.se<br>08-123 45 67</p>
						<!-- /wp:paragraph -->

					</div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column">

						<!-- wp:heading {"level":6} -->
						<h6>Follow Us</h6>
						<!-- /wp:heading -->

						<!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#374AC8","className":"items-justified-left is-style-logos-only no-margin-top"} -->
						<ul class="wp-block-social-links has-icon-color items-justified-left is-style-logos-only no-margin-top">
							<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
							<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
							<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
						</ul>
						<!-- /wp:social-links -->

					</div>
					<!-- /wp:column -->

				</div>
				<!-- /wp:columns -->

			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

		<!-- wp:spacer {"height":16} -->
		<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:columns {"isStackedOnMobile":false} -->
		<div class="wp-block-columns is-not-stacked-on-mobile">

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"className":"theme-credits-row","layout":{"type":"flex"}} -->
				<div class="wp-block-group theme-credits-row">
					<!-- wp:paragraph {"fontSize":"tiny"} -->
					<p class="has-tiny-font-size"><strong>© 2021</strong> </p>
					<!-- /wp:paragraph -->

					<!-- wp:site-title {"level":0,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"tiny"} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"className":"hide-mobile"} -->
			<div class="wp-block-column hide-mobile">
				<!-- wp:paragraph {"align":"right","fontSize":"tiny"} -->
				<p class="has-text-align-right has-tiny-font-size">Theme by <a href="https://andersnoren.se">Anders Norén</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->