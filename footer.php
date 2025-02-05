<!-- start footer -->
<?php
$footer_copyright = get_field('footer_copyright', 'options');
$footer_copyright = str_replace('{year}', date('Y'), $footer_copyright);
$privacy_info =get_field('footer_privacy_info', 'options');
?>
<div class="footer-holder">
    <div class="footer">

        <div class="container">

            <div class="footer-menus">
                <?php if (is_active_sidebar('left-footer-widget-area')) : ?>
                    <div class="footer-menu first-footer">
                        <?php dynamic_sidebar('left-footer-widget-area'); ?>
                    </div>
                <?php endif; ?>
                <?php if (is_active_sidebar('middle-footer-widget-area')) : ?>
                    <div class="footer-menu second-footer">
                        <?php dynamic_sidebar('middle-footer-widget-area'); ?>
                    </div>
                <?php endif; ?>
                <?php if (is_active_sidebar('third-footer-widget-area')) : ?>
                    <div class="footer-menu third-footer">
                        <?php dynamic_sidebar('third-footer-widget-area'); ?>
                    </div>
                <?php endif; ?>

                <?php if (is_active_sidebar('right-footer-widget-area')) : ?>
                    <div class="footer-menu fourth-footer">
                        <?php dynamic_sidebar('right-footer-widget-area'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="footer-large-image">
                <img width="<?php echo get_field('footer_large_image', 'options')['width']; ?>" height="<?php echo get_field('footer_large_image', 'options')['height']; ?>" alt="<?php echo get_field('footer_large_image', 'options')['title']; ?>" src="<?php echo get_field('footer_large_image', 'options')['url']; ?>" />
            </div>

        </div>

    </div>

    <div class="bottom-footer">
        <div class="container">
            <div class="left-bottom-footer">
                <div class="footer-logo">
                    <img width="<?php echo get_field('footer_logo', 'options')['width']; ?>" height="<?php echo get_field('footer_logo', 'options')['height']; ?>" alt="Acrobits" src="<?php echo get_field('footer_logo', 'options')['url']; ?>" />
                </div>
                <div class="footer-copyright">
                    <?php echo esc_html($footer_copyright); ?>
                </div>
                <div class="seperator"></div>
                <img width="<?php echo get_field('copyright_image', 'options')['width']; ?>" height="<?php echo get_field('copyright_image', 'options')['height']; ?>" alt="Copyright" class="copyright-logo" src="<?php echo get_field('copyright_image', 'options')['url']; ?>" />
            </div>
            <div class="right-bottom-footer">
				<?php if(!empty($privacy_info)): ?>
					<?php echo wp_kses_post($privacy_info); ?>
					<div class="seperator"></div>
				<?php endif; ?>
	            <span class="right-bottom-footer__text"><?php echo get_field('footer_bottom_right_text', 'options'); ?></span>
                <img width="<?php echo get_field('footer_bottom_right_image', 'options')['width']; ?>" height="<?php echo get_field('footer_bottom_right_image', 'options')['height']; ?>" alt="Cloud Communications Alliance" src="<?php echo get_field('footer_bottom_right_image', 'options')['url']; ?>" />
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- end footer -->

<?php wp_footer(); ?>

</body>

</html>
