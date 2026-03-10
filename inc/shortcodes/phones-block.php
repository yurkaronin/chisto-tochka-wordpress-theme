<?php
/**
 * Шорткод для блока телефонов
 * Статичная разметка, редактируется в этом файле
 */

if (!defined('ABSPATH')) {
    exit;
}

function mytheme_phones_shortcode() {
    ob_start();
    ?>
    <!-- ТЕЛЕФОНЫ - РЕДАКТИРОВАТЬ ЗДЕСЬ -->
    <div class="phones-block">
        <a href="tel:84737321601" class="phone">8 (473) 732-16-01</a>

    </div>
    <!-- КОНЕЦ БЛОКА ТЕЛЕФОНОВ -->
    <?php
    return ob_get_clean();
}
add_shortcode('phones', 'mytheme_phones_shortcode');
