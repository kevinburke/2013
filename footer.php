<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	<footer id="colophon" role="contentinfo">
      &copy; 2006 - <?php echo date('Y'); ?> Kevin Burke. <br />
      View the <a href="https://github.com/kevinburke/2013">source code</a>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php if (current_user_can( 'manage_options' ) === false) { ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-566397-2', 'auto');
  ga('send', 'pageview');

</script>
<?php
    }
    wp_footer();
?>
</body>
</html>
