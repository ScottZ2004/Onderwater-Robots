
<?php wp_footer() ?>

<footer>
    <div class="content-container">
        <div class="nav-title">
            <?php dynamic_sidebar( 'footer_area_one' ); ?>
        </div>
        <div class="links-flex-div">
            <div class="nav-links">
                <?php dynamic_sidebar( 'footer_area_two' ); ?>
            </div>
            <div class="social-links">
                <?php dynamic_sidebar( 'footer_area_three' ); ?>
            </div>
        </div>
        <div class="hr">
            <?php dynamic_sidebar( 'footer_area_four' ); ?>
        </div>
        <div class="madeby-div">
            <?php dynamic_sidebar( 'footer_area_five' ); ?>
        </div>
    </div>
</footer>
</body>
</html>