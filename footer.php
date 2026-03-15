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

                <div class="form">
                    <div class="form__body">
                        <div class="form__grid">
                            <div class="form__item">
                              <label for="cost-calculation-user-name" class="form__label">Ваше имя</label>
                                <div class="form__input"><input type="text" name="cost-calculation-user-name" id="cost-calculation-user-name"
                                        placeholder="Ваше имя" required></div>
                            </div>
                            <div class="form__item">
                              <label for="cost-calculation-user-phone" class="form__label">Ваш телефон</label>
                                <div class="form__input"><input type="text" name="cost-calculation-user-phone" id="cost-calculation-user-phone"
                                        placeholder="Введите ваш номер" required></div>
                            </div>
                            <button class="button" type="submit">Записаться</button>
                        </div>
                    </div>
                </div>

                <div class="form">
                    <div class="form__body">
                        <div class="form__grid">
                            <div class="form__item">
                                <label for="user-name" class="form__label">Ваше имя</label>
                                <div class="form__input">
                                    <input type="text" name="user-name" id="user-name" placeholder="Ваше имя" required>
                                </div>
                            </div>

                            <div class="form__item">
                                <label for="" class="form__label">Ваш телефон</label>

                                <div class="form__input">
                                    <input type="text" name="user-name" id="user-name" placeholder="Введите ваш номер"
                                        required>
                                </div>
                            </div>

                            <button class="button" type="submit">Записаться</button>


                        </div>
                    </div>
                </div>




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
