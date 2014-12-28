<?php
/**
 * The footer template
 *
 * Contains the closing of <div id="main"> and all content after.
 *
 * @package Starter_Theme
 */
?>

    </div><!-- #main -->

</div><!-- #page -->

<footer id="colophon" role="contentinfo">
    <div id="copyright">
        &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?><br><!-- copyright goes here -->
        <a href="http://yoursite.com" rel="nofollow">theme by JossMonster!</a>
    </div>
    <div class="footer-menu-area">
    	<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
    </div>
</footer><!-- #colophon -->

<?php wp_footer(); ?> 
</body>
</html>