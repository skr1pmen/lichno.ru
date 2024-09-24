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
                <img src="" alt="user_photo">
                <h3 class="name">Анжела Перл</h3>
                <span class="profession">Астролог</span>
                <span class="rating">5,0 <i class="fa-regular fa-star"></i></span>
            </div>
            <div class="user swiper-slide">
                <img src="" alt="user_photo">
                <h3 class="name">Анжела Перл</h3>
                <span class="profession">Астролог</span>
                <span class="rating">5,0 <i class="fa-regular fa-star"></i></span>
            </div>
            <div class="user swiper-slide">
                <img src="" alt="user_photo">
                <h3 class="name">Анжела Перл</h3>
                <span class="profession">Астролог</span>
                <span class="rating">5,0 <i class="fa-regular fa-star"></i></span>
            </div>
            <div class="user swiper-slide">
                <img src="" alt="user_photo">
                <h3 class="name">Анжела Перл</h3>
                <span class="profession">Астролог</span>
                <span class="rating">5,0 <i class="fa-regular fa-star"></i></span>
            </div>
            <div class="user swiper-slide">
                <img src="" alt="user_photo">
                <h3 class="name">Анжела Перл</h3>
                <span class="profession">Астролог</span>
                <span class="rating">5,0 <i class="fa-regular fa-star"></i></span>
            </div>
            <div class="user swiper-slide">
                <img src="" alt="user_photo">
                <h3 class="name">Анжела Перл</h3>
                <span class="profession">Астролог</span>
                <span class="rating">5,0 <i class="fa-regular fa-star"></i></span>
            </div>
            <div class="user swiper-slide">
                <img src="" alt="user_photo">
                <h3 class="name">Анжела Перл</h3>
                <span class="profession">Астролог</span>
                <span class="rating">5,0 <i class="fa-regular fa-star"></i></span>
            </div>
            <div class="user swiper-slide">
                <img src="" alt="user_photo">
                <h3 class="name">Анжела Перл</h3>
                <span class="profession">Астролог</span>
                <span class="rating">5,0 <i class="fa-regular fa-star"></i></span>
            </div>
            <div class="user swiper-slide">
                <img src="" alt="user_photo">
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