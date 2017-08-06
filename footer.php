</div>


    <footer class="footer hidden-xs">
      <div class="container">
			<?php wp_nav_menu( array(
				'theme_location' => 'footernav',
				'menu_id'        => 'footer-menu',
				'menu_class' => 'nav navbar-nav navbar-left'
			) ); ?>
      </div>
    </footer>
    
    
<?php wp_footer(); ?>

</body>
</html>
