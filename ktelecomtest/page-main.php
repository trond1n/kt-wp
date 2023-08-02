<?php
/*
Template Name: Лендинг
*/
?>
<?php get_header(); ?>
<main class="content">
    <section class="banner">
        <div class="content">
            <div class="info">
                <h1>Экономия нервов и денег — интернет К-Телеком</h1>
                <ul>
                    <li>5 тарифов для многоквартирных и 4 для частных домов</li>
                    <li>безлимит подключенных устройств</li>
                    <li>комфортная поддержка 24/7</li>
                </ul>
                <a href="#"><button class="button pink">Подробнее</button></a>

            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/banner.png" alt="banner" />
        </div>
    </section>
    <section class="plans">
        <h2>Тарифные планы</h2>
        <div class="items">
            <div class="plan__block">
                <div class="info">
                    <h2>Мой клик</h2>
                    <p class="speed">Скорость интернета</p>
                    <span>до 40 Мбит/с</span>
                    <p class="describe">Отличный вариант для пенсионеров, выполнения определенных задач и работе с файлами различных размеров.</p>
                    <form>
                        <input type="checkbox" class="checkbox"></input>
                        <label>ТВ + 100 ₽ (пакет “Базовый”)</label>
                    </form>
                    <p class="price">
                        399 ₽<span>в месяц</span>
                    </p>
                    <p class="notice">
                        *итоговая цена зависит от варианта оплаты и пакета ТВ при
                        необходимости
                    </p>
                </div>


                <button class="button pink plans__item_button"> Выбрать тариф
                </button>
            </div>
            <div class="plan__block">
                <div class="info">
                    <h2>Резвый клик</h2>
                    <p class="speed">Скорость интернета</p>
                    <span>80-100 Мбит/с</span>
                    <p class="describe">Отличный вариант для всей семьи. Общайтесь в соцсетях и смотрите любимые фильмы и сериалы!</p>
                    <form>
                        <input type="checkbox" class="checkbox"></input>
                        <label>ТВ + 100 ₽ (пакет “Базовый”)</label>
                    </form>
                    <p class="price">
                        449 ₽<span>в месяц</span>
                    </p>
                    <p class="notice">
                        *итоговая цена зависит от варианта оплаты и пакета ТВ при
                        необходимости
                    </p>
                </div>


                <button class="plans__item_button button pink">
                    Выбрать тариф
                </button>
            </div>
            <div class="plan__block">
                <div class="info">
                    <h2>Мой клик</h2>
                    <p class="speed">Скорость интернета</p>
                    <span>до 40 Мбит/с</span>
                    <p class="describe">Отличный вариант для пенсионеров, выполнения определенных задач и работе с файлами различных размеров.</p>
                    <form>
                        <input type="checkbox" class="checkbox"></input>
                        <label>ТВ + 100 ₽ (пакет “Базовый”)</label>
                    </form>
                    <p class="price">
                        449 ₽<span>в месяц</span>
                    </p>
                    <p class="notice">
                        *итоговая цена зависит от варианта оплаты и пакета ТВ при
                        необходимости
                    </p>
                </div>
                <button class="plans__item_button button pink"> Выбрать тариф
                </button>
            </div>






        </div>
    </section>
    <section class="feedback">
          <h2>Подключиться просто!</h2>
          <div class="buttons">
            <button class="feedback_selector">Интернет</button>
            <button class="feedback_selector">Интернет + ТВ</button>
            <button class="feedback_selector">Телефония</button>
            <button class="feedback_selector">Видеонаблюдение</button>
          </div>
          <?php echo do_shortcode('[contact-form-7 id="11" title="форма ОС"]'); ?>
        </section>
</main>
<?php get_footer(); ?>