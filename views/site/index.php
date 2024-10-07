<?php
/**
 * @var $categories
 */

?>
<header>
    <div class="top">
        <a href="./" class=" logo"><img src="images/logo.png" alt="logo"></a>
        <div class="notification">
            <i class="fa-regular fa-bell"></i>
            <?php if (Yii::$app->user->isGuest): ?>
                <a href="user/registration">Регистрация</a>
                <a href="user/authorization">Вход</a>
            <?php else: ?>
                <a href="/user"><?= Yii::$app->user->identity->username ?></a>
            <?php endif; ?>
        </div>
    </div>
    <div class="bottom">
        <input type="text" placeholder="Поиск">
        <div class="category">
            <?php foreach ($categories as $category): ?>
                <a href="#" class="btn"><?= $category['name'] ?></a>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="banners">
        <img src="" alt="banner" class="banner">
        <img src="" alt="banner" class="banner">
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
            <img src="" alt="photo">
            <div class="info">
                <span class="title">Название услуги</span>
                <span class="username">Имя пользователя</span>
                <span class="price">5000 ₽</span>
            </div>
            <a href="#" class="btn btn_active">Подробнее об услуге</a>
        </div>
        <div class="item">
            <img src="" alt="photo">
            <div class="info">
                <span class="title">Название услуги</span>
                <span class="username">Имя пользователя</span>
                <span class="price">5000 ₽</span>
            </div>
            <a href="#" class="btn btn_active">Подробнее об услуге</a>
        </div>
        <div class="item">
            <img src="" alt="photo">
            <div class="info">
                <span class="title">Название услуги</span>
                <span class="username">Имя пользователя</span>
                <span class="price">5000 ₽</span>
            </div>
            <a href="#" class="btn btn_active">Подробнее об услуге</a>
        </div>
    </div>
</div>

<div class="docs">
    <a href="/docs/policy">Политика конфиденциальности</a>
    <a href="/docs/offer">Публичная оферта</a>
</div>

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
        }
    };
    window.addEventListener("resize", checkSize);
    window.addEventListener("DOMContentLoaded", checkSize);
</script>