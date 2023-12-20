<footer>
			<section class="footer-widgets">
				<div class="container">
					<div class="row">Widgets do rodapé</div>
				</div>
			</section>
			<section class="copyright">
				<div class="container">
					<div class="row">
						<div class="copyright-text col-12 col-md-6">Copyright</div>
						<div class="footer-menu col-12 col-md-6 text-left text-md-right">
							<?php 
								wp_nav_menu(
									array(
										'theme_location'	=> 'projetarshop_footer_menu'
									)
								);
							 ?>
						</div>
					</div>
				</div>
			</section>
		</footer>
	</div>
<?php wp_footer(); ?>
</body>
</html>