<?php
/**
 * @var $categories
 */

?>
<header>
    <div class="top">
<!--        <a href="./" class=" logo"><img src="images/logo.png" alt="logo"></a>-->
        <div class="notification">
            <i class="fa-regular fa-bell"></i>
            <?php if (Yii::$app->user->isGuest): ?>
                <a href="user/registration">Регистрация</a>
                <a href="user/authorization">Вход</a>
            <?php else: ?>
                <a href="/user"><?= Yii::$app->user->identity->username ?></a>
                <a href="/user/logout"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
            <?php endif; ?>
        </div>
        <video src="images/main_banner.mp4" autoplay playsinline muted preload="auto" poster="images/main_banner.webp"></video>
    </div>
    <div class="bottom">
        <input type="text" placeholder="Поиск">
        <div class="category">
            <?php foreach ($categories as $category): ?>
                <a href="#" class="btn"><?= $category['name'] ?></a>
            <?php endforeach; ?>
        </div>

        <div class="banners">
            <a href="https://денежныйкод.рф"><img src="images/mini_banner_1.png" alt="banner" class="banner"></a>
            <a href="https://t.me/test_architype_bot"><img src="images/mini_banner_2.png" alt="banner" class="banner"></a>
        </div>
        <div class="banners_mobile">
            <div class="swiper swiper-banner">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="https://денежныйкод.рф"><img src="images/mini_banner_1.png" alt="banner" class="banner"></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://t.me/test_architype_bot"><img src="images/mini_banner_2.png" alt="banner" class="banner"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="top_users">
    <h2 class="title">Топ исполнителей</h2>

    <div class="swiper-container">
        <div class="swiper-wrapper wrapper_mobile">
            <div class="user swiper-slide">
                <img src="https://this-person-does-not-exist.com/img/avatar-gena69856479fd6f1a7397a7dc0e3d850a4.jpg" alt="user_photo">
                <h3 class="name">Анжела Перл</h3>
                <span class="profession">Астролог</span>
                <span class="rating">5,0 <i class="fa-regular fa-star"></i></span>
            </div>
            <div class="user swiper-slide">
                <img src="https://this-person-does-not-exist.com/img/avatar-gen33bee3a1294b4710ea71d170820cc2b8.jpg" alt="user_photo">
                <h3 class="name">Анжела Перл</h3>
                <span class="profession">Астролог</span>
                <span class="rating">5,0 <i class="fa-regular fa-star"></i></span>
            </div>
            <div class="user swiper-slide">
                <img src="https://this-person-does-not-exist.com/img/avatar-gen81b2624cd9fe7452ff0be51cc4d10c5a.jpg" alt="user_photo">
                <h3 class="name">Анжела Перл</h3>
                <span class="profession">Астролог</span>
                <span class="rating">5,0 <i class="fa-regular fa-star"></i></span>
            </div>
            <div class="user swiper-slide">
                <img src="https://this-person-does-not-exist.com/img/avatar-gen18e1a2aec415eca08d05c5e1061c94e9.jpg" alt="user_photo">
                <h3 class="name">Анжела Перл</h3>
                <span class="profession">Астролог</span>
                <span class="rating">5,0 <i class="fa-regular fa-star"></i></span>
            </div>
            <div class="user swiper-slide">
                <img src="https://this-person-does-not-exist.com/img/avatar-gen2f372dfa8a0edd45147b64a99a4c9634.jpg" alt="user_photo">
                <h3 class="name">Анжела Перл</h3>
                <span class="profession">Астролог</span>
                <span class="rating">5,0 <i class="fa-regular fa-star"></i></span>
            </div>
            <div class="user swiper-slide">
                <img src="https://this-person-does-not-exist.com/img/avatar-gen309456d5e3834026be258b20ee7c7659.jpg" alt="user_photo">
                <h3 class="name">Анжела Перл</h3>
                <span class="profession">Астролог</span>
                <span class="rating">5,0 <i class="fa-regular fa-star"></i></span>
            </div>
            <div class="user swiper-slide">
                <img src="https://this-person-does-not-exist.com/img/avatar-gen49e6261bcf8e965bd9f00fde8a6c4561.jpg" alt="user_photo">
                <h3 class="name">Анжела Перл</h3>
                <span class="profession">Астролог</span>
                <span class="rating">5,0 <i class="fa-regular fa-star"></i></span>
            </div>
            <div class="user swiper-slide">
                <img src="https://this-person-does-not-exist.com/img/avatar-gen5c01c58b74e5f094f5328272a616ae94.jpg" alt="user_photo">
                <h3 class="name">Анжела Перл</h3>
                <span class="profession">Астролог</span>
                <span class="rating">5,0 <i class="fa-regular fa-star"></i></span>
            </div>
            <div class="user swiper-slide">
                <img src="https://this-person-does-not-exist.com/img/avatar-gena2f27cba7ef856e9b57fa13497bde93a.jpg" alt="user_photo">
                <h3 class="name">Анжела Перл</h3>
                <span class="profession">Астролог</span>
                <span class="rating">5,0 <i class="fa-regular fa-star"></i></span>
            </div>
        </div>
    </div>
<!--    --><?php //=
//    SwiperSlider::widget([
//        'slides' => [
//            '<div class="user">
//                        <img src="" alt="user_photo">
//                        <h3 class="name">Анжела Перл</h3>
//                        <span class="profession">Астролог</span>
//                        <span class="rating">5,0 <i class="fa-regular fa-star"></i></span>
//                    </div>',
//            '<div class="user">
//                        <img src="" alt="user_photo">
//                        <h3 class="name">Анжела Перл</h3>
//                        <span class="profession">Астролог</span>
//                        <span class="rating">5,0 <i class="fa-regular fa-star"></i></span>
//                    </div>',
//            '<div class="user">
//                        <img src="" alt="user_photo">
//                        <h3 class="name">Анжела Перл</h3>
//                        <span class="profession">Астролог</span>
//                        <span class="rating">5,0 <i class="fa-regular fa-star"></i></span>
//                    </div>',
//            '<div class="user">
//                        <img src="" alt="user_photo">
//                        <h3 class="name">Анжела Перл</h3>
//                        <span class="profession">Астролог</span>
//                        <span class="rating">5,0 <i class="fa-regular fa-star"></i></span>
//                    </div>',
//            '<div class="user">
//                        <img src="" alt="user_photo">
//                        <h3 class="name">Анжела Перл</h3>
//                        <span class="profession">Астролог</span>
//                        <span class="rating">5,0 <i class="fa-regular fa-star"></i></span>
//                    </div>',
//            '<div class="user">
//                        <img src="" alt="user_photo">
//                        <h3 class="name">Анжела Перл</h3>
//                        <span class="profession">Астролог</span>
//                        <span class="rating">5,0 <i class="fa-regular fa-star"></i></span>
//                    </div>',
//            '<div class="user">
//                        <img src="" alt="user_photo">
//                        <h3 class="name">Анжела Перл</h3>
//                        <span class="profession">Астролог</span>
//                        <span class="rating">5,0 <i class="fa-regular fa-star"></i></span>
//                    </div>',
//            '<div class="user">
//                        <img src="" alt="user_photo">
//                        <h3 class="name">Анжела Перл</h3>
//                        <span class="profession">Астролог</span>
//                        <span class="rating">5,0 <i class="fa-regular fa-star"></i></span>
//                    </div>',
//            '<div class="user">
//                        <img src="" alt="user_photo">
//                        <h3 class="name">Анжела Перл</h3>
//                        <span class="profession">Астролог</span>
//                        <span class="rating">5,0 <i class="fa-regular fa-star"></i></span>
//                    </div>',
//        ],
//        'clientOptions' => [
//            'centeredSlides' => true,
//            'class' => 'text',
//            'autoplay' => true,
//            'loop' => true,
//            'slidesPerView' => 'auto',
//            'pagination' => false,
//            'spaceBetween' => 15
//        ],
//        'showScrollbar' => false,
//    ]);
//    ?>
</div>
<div class="services">
    <h2 class="title">Услуги</h2>
    <div class="filter">
        <i class="fa-solid fa-bars active"></i>
        <i class="fa-solid fa-border-all"></i>
    </div>
    <div class="items">
        <div class="item">
            <img src="https://10.img.avito.st/image/1/1.bJ2WWba4wHSg8AJxwnRK4a_4wnIo-EJ84P3CdibwyH4g.zLePDvd3oakPKkjghiqrumKGVjIXux45sps5RUxLNPQ" alt="photo">
            <div class="info">
                <span class="title">Таролог. Экстрасенс. Гадание.</span>
                <span class="username">Эльвира В.</span>
                <span class="price">5000 ₽</span>
            </div>
            <a href="#" class="btn btn_active">Подробнее об услуге</a>
        </div>
        <div class="item">
            <img src="https://70.img.avito.st/image/1/1.B3JEXra4q5ty92meRnIrGVf_qZ36_ymTMvqpmfT3o5Hy.71BJdT4tqXAohfsD6VLXWGnKQ8S_RuKnN2zq_96WA4U" alt="photo">
            <div class="info">
                <span class="title">Расклад таро Таролог</span>
                <span class="username">Милана Г.</span>
                <span class="price">2500 ₽</span>
            </div>
            <a href="#" class="btn btn_active">Подробнее об услуге</a>
        </div>
        <div class="item">
            <img src="https://00.img.avito.st/image/1/1.vahYnra4EUFuN9NELujn0F08E0fmP5NJLjoTQ-g3GUvu.96mDLk3d6fSaLBNv1-0S4Ia9nmuEuNTDyfSTl-Akswc" alt="photo">
            <div class="info">
                <span class="title">Гадание на картах</span>
                <span class="username">Матрёна А.</span>
                <span class="price">800 ₽</span>
            </div>
            <a href="#" class="btn btn_active">Подробнее об услуге</a>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="docs">
        <div class="contacts">
            <a href="/"><img src="images/logo.png" alt="logo"></a>
            <a href="tel:+79371330023"><i class="fa-solid fa-phone"></i>  +7 (937) 133-00-23</a>
            <a href="mailto:Anna.Rom.i@yandex.ru"><i class="fa-solid fa-envelope"></i>  Почта для связи</a>
        </div>
        <a href="/docs/policy">Политика конфиденциальности</a>
        <a href="/docs/offer">Публичная оферта</a>
        <a href="/docs/Заявление на возврат ден средств.doc">Заявление на возврат денежных средств</a>
    </div>
    <div class="data">
        <span style="font-weight: 600">Реквизиты:</span>
        <span>Наименование: Индивидуальный предприниматель Романова Анна Игоревна</span>
        <span>Юридический адрес: 414024, Россия, Астраханская обл, г Астрахань, ул Генерала Епишева, д 49а, кв 110</span>
        <span>ИНН: 301700664007</span>
        <span>Расчетный счет: 40802810800006716067</span>
        <span>ОГРН/ОГРНИП: 316302500080884</span>
        <span>Банк: АО «ТБанк»</span>
        <span>БИК банка: 044525974</span>
        <span>ИНН банка: 7710140679</span>
        <span>Корреспондентский счет банка: 30101810145250000974</span>
        <span>Юридический адрес банка: 127287, г. Москва, ул. Хуторская 2-я, д. 38А, стр. 26</span>
    </div>
</footer>

<script type="text/javascript">
    const checkSize = () => {
        let width = window.innerWidth,
            height = window.screen.availHeight

        if (width >= 768) {
            document.querySelector('.swiper-container').classList.remove('mobile')
            document.querySelector('.wrapper_mobile').classList.add('swiper-wrapper')
            const swiper = new Swiper('.swiper-container', {
                speed: 400,
                slidesPerView: 'auto', // or 'auto'
                spaceBetween: 30,
                grabCursor: false,
                updateOnImagesReady: true,
                autoplay: true,
                centeredSlides: true,
                loop: true,
                pagination: true,
            });
        }
        else {
            document.querySelector('.swiper-container').classList.add('mobile')
            document.querySelector('.wrapper_mobile').classList.remove('swiper-wrapper')

            const swiper = new Swiper('.swiper-banner', {
                speed: 600,
                slidesPerView: '1', // or 'auto'
                spaceBetween: 30,
                grabCursor: false,
                updateOnImagesReady: true,
                autoplay: true,
                centeredSlides: false,
                loop: true,
                pagination: true,
            });
        }
    };
    window.addEventListener("resize", checkSize);
    window.addEventListener("DOMContentLoaded", checkSize);
</script>