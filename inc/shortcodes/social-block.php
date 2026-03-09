<?php
/**
 * Шорткод для блока социальных сетей
 * Статичная разметка, редактируется в этом файле
 */

// Защита от прямого доступа - БЕЗ ПРОБЕЛОВ ДО И ПОСЛЕ
if (!defined('ABSPATH')) {
    exit;
}

function mytheme_social_shortcode() {
    ob_start();
    ?>
    <div class="social">
        <ul class="social__list">
            <li class="social__item">
                <a href="#" class="social__link" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-social-whatsapp.svg" alt="#">
                </a>
            </li>
            <li class="social__item">
                <a href="#" class="social__link" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-social-telegram.svg" alt="#">
                </a>
            </li>
            <li class="social__item">
                <a href="#" class="social__link" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-social-max.svg" alt="#">
                </a>
            </li>
        </ul>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('social', 'mytheme_social_shortcode');
