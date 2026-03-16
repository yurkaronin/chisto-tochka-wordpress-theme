<?php
/**
 * Theme footer.
 *
 * @package CleanAndDotTheme
 */
?>

<!-- диалоговые окна  -->
<!-- модальное окно Заказать звонок -->
<section class="modal js-modal" id="modal-get-consultation">
    <div class="wrapper">

        <div class="modal__body">

            <h2 class="title">Заказать звонок</h2>
            <p class="modal__text">Заполните простую форму и наши специалисты свяжутся с Вами в ближайшее время и
                проконсультируют по
                всем интересующим вопросам! </p>

            <div class="modal__form">
                <?php echo do_shortcode('[contact-form-7 id="b1add7b" title="Заявка на расчёт стоимости"]'); ?>
            </div>

            <button class="button-close js-close-modal" type="button">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19 19L10 10M10 10L1 1M10 10L19.0001 1M10 10L1 19.0001" stroke="#161A1D" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </button>
        </div>
    </div>
</section>

<?php wp_footer(); ?>
</body>

</html>
