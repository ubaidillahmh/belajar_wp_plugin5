</div><!-- /.row -->

</div><!-- /.container -->

<footer class="blog-footer">
    <?php wp_nav_menu(array(
        'theme_location' => 'footer-menu',
        'menu_class'    => 'list-inline',
    )); ?>
    <br>
    <?php echo of_get_option('footer', 'no entry'); ?>
</footer>
<?php wp_footer(); ?>
</body>
</html>
