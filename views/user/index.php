<?php
/**
 * @var $page
 */
?>

<div class="<?= $page === 'all' ? 'all_pages' : 'user_page' ?>">
    <?php if ($page !== 'all') : ?>
        <header>
            <h2 class="title">Профиль</h2>
            <ul>
                <li><a href="/user" class="<?= $page === 'settings' ? 'active' : null ?>">Основные настройки</a></li>
                <?php if (Yii::$app->user->identity->is_executor) :?>
                    <li><a href="/user/index?page=services" class="<?= $page === 'services' ? 'active' : null ?>">Услуги</a></li>
                    <li><a href="/user/index?page=purse" class="<?= $page === 'purse' ? 'active' : null ?>">Кошелёк</a></li>
                <?php endif; ?>
                <li><a href="/user/index?page=orders" class="<?= $page === 'orders' ? 'active' : null ?>">Заказы</a></li>
                <li><a href="" class="tmp">Служба поддержки</a></li>
            </ul>
            <?= !Yii::$app->user->identity->is_executor ? '<a href="#" class="btn btn_active">Стать исполнителем</a>' : ''?>
        </header>
    <?php endif; ?>
    <div class="notification">
        <i class="fa-regular fa-bell"></i>
        <a href="/user"><?= Yii::$app->user->identity->username ?></a>
        <a href="/user/logout"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
    </div>
    <?php if ($page === 'settings' || $page === 'all'): ?>
        <main class="main_page">
            <div class="user_photo">
                <img src="" alt="user_photo">
                <?php if (Yii::$app->user->identity->is_executor): ?>
                    <a href="#">Сменить фото</a>
                    <a href="#">Загрузить ещё</a>
                <?php endif; ?>
                <?php if (!Yii::$app->user->identity->is_executor): ?>
                    <a href="#" class="btn btn_active">Сменить фото</a>
                <?php endif; ?>
            </div>
            <div class="user_data">
                <div class="user_username">
                    <h3 class="name">Имя пользователя</h3>
                    <?php if (Yii::$app->user->identity->is_executor): ?>
                        <span class="rating">0,0 <i class="fa-regular fa-star"></i></span>
                        <?php if ($page !== 'all'): ?>
                            <a href="#">Перейти в профиль</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
                <div class="user_links">
                    <div>
                        <h3 class="title">Номер телефона <i class="fa-solid fa-pencil"></i></h3>
                        <span>+7 (999)-999-99-99</span>
                    </div>
                    <?php if (Yii::$app->user->identity->is_executor): ?>
                        <div>
                            <h3 class="title">Указать соц. сети</h3>
                            <a href="#"><img src="/images/wa.png" alt="whatsapp"></a>
                            <a href="#"><img src="/images/tg.png" alt="telegram"></a>
                            <a href="#"><img src="/images/vk.png" alt="vk"></a>
                        </div>
                    <?php endif; ?>
                </div>
                <?php if (Yii::$app->user->identity->is_executor): ?>
                    <div class="user_about">
                        <h3 class="title">Обо мне <i class="fa-solid fa-pencil"></i></h3>
                        <textarea disabled></textarea>
                    </div>
                    <div class="user_category">
                    <h3 class="title">Изменить категорию</h3>
                    <div class="categories">
                        <label><input disabled type="checkbox">Астролог</label>
                        <label><input disabled type="checkbox">Торолог</label>
                        <label><input disabled type="checkbox">Нумеролог</label>
                        <label><input disabled type="checkbox">Психолог</label>
                        <label><input disabled type="checkbox">Биоэнергетик</label>
                        <label><input disabled type="checkbox">Коуч</label>
                        <label><input disabled type="checkbox">Художник</label>
                        <label><input disabled type="checkbox">Health-коуч/нутрициолог</label>
                        <label><input disabled type="checkbox">Бизнес-тренер/ментор/наставник</label>
                        <label><input disabled type="checkbox">Ведущий трансформационных игр</label>
                    </div>
                </div>
                <?php endif; ?>
                <div class="user_password">
                    <h3 class="title">Изменить пароль</h3>
                    <label>
                        Старый пароль
                        <input type="password">
                    </label>
                    <div>
                        <label>
                            Новый пароль
                            <input type="password">
                        </label>
                        <label>
                            Повторить новый пароль
                            <input type="password">
                        </label>
                    </div>
                </div>
                <button class="btn btn_active">Сохранить</button>
            </div>
        </main>
    <?php endif; ?>
    <?php if ($page === 'services' || $page === 'all'): ?>
        <main class="services_page">
            <div class="active_services">
                <h3 class="title">Действующие услуги</h3>
                <div class="services">
                    <div class="card">
                        <img src="" alt="photo">
                        <h2 class="title">Гороскоп на месяц<i class="fa-solid fa-pencil"></i><i class="fa-regular fa-trash-can"></i></h2>
                        <span class="price">5 000 ₽</span>
                    </div>
                    <div class="card">
                        <img src="" alt="photo">
                        <h2 class="title">Матрица судьбы на финансы<i class="fa-solid fa-pencil"></i><i class="fa-regular fa-trash-can"></i></h2>
                        <span class="price">5 000 ₽</span>
                    </div>
                </div>
                <button class="btn btn_active">Добавить услугу</button>
            </div>
            <div class="delete_services">
                <h3 class="title">Удаленные услуги</h3>
                <div class="services">
                    <div class="card">
                        <img src="" alt="photo">
                        <h2 class="title">Таро расклад на полнолуние<i class="fa-solid fa-pencil"></i><i class="fa-regular fa-trash-can"></i></h2>
                        <span class="price">2 000 ₽</span>
                        <a href="#" class="btn btn_active">Восстановить</a>
                    </div>
                </div>
            </div>
        </main>
    <?php endif; ?>
    <?php if ($page === 'purse' || $page === 'all'): ?>
        <main class="purse_page">
            <div class="balance_block">
                <h2 class="title">Баланс</h2>
                <div class="balance_container">
                    <div class="balance_card">
                        <h2 class="balance">100,50 <span>₽</span></h2>
                        <span>Вы можете пополнить кошелек любым удобным способом</span>
                        <button class="add">+</button>
                    </div>
                    <?php if ($page !== 'all'): ?>
                        <div class="btns">
                            <a href="../profile_advertisement/" class="btn btn_active">Реклама услуги</a>
                            <a href="../profile_advertisement/" class="btn btn_active">Реклама профиля</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="history_block">
                <h3 class="title">История списаний</h3>
                <table>
                    <tr>
                        <td>-15,0 ₽</td>
                        <td>12.01.23</td>
                        <td>Продвижение в ленте за день</td>
                    </tr>
                    <tr>
                        <td>-15,0 ₽</td>
                        <td>11.01.23</td>
                        <td>Продвижение в ленте за день</td>
                    </tr>
                    <tr>
                        <td>-15,0 ₽</td>
                        <td>10.01.23</td>
                        <td>Продвижение в ленте за день</td>
                    </tr>
                </table>
                <button class="show_more">Показать ещё</button>
            </div>
            <?php if ($page === 'all'): ?>
                <div style="margin: 0 auto; display: block">
                    <a href="#" class="btn btn_active">Заказать рекламу</a>
                </div>
            <?php endif; ?>
        </main>
    <?php endif; ?>
    <?php if ($page === 'orders' || $page === 'all'): ?>
        <main class="orders_page">
            <div class="views">
                <h2 class="title">Просмотры</h2>
                <div class="filter">
                    <span>За сегодня</span>
                    <span class="active">За неделю</span>
                    <span>За всё время</span>
                </div>
                <table>
                    <tr>
                        <td>Анастасия В.</td>
                        <td>Матрица судьбы</td>
                        <td>12.01.23</td>
                        <td><button class="btn btn_active">Показать телефон</button></td>
                    </tr>
                    <tr>
                        <td>Анастасия В.</td>
                        <td>Гадание на таро</td>
                        <td>11.01.23</td>
                        <td><button class="btn btn_active">Показать телефон</button></td>
                    </tr>
                    <tr>
                        <td>Анастасия В.</td>
                        <td>Матрица судьбы</td>
                        <td>10.01.23</td>
                        <td><button class="btn btn_active">Показать телефон</button></td>
                    </tr>
                </table>
            </div>
            <div class="responses">
                <h2 class="title">Отклики</h2>
                <div class="filter">
                    <span class="active">За сегодня</span>
                    <span>За неделю</span>
                    <span>За всё время</span>
                </div>
                <table>
                    <tr>
                        <td>Вероника Г.</td>
                        <td>Астроразбор на день</td>
                        <td>12.01.23</td>
                        <td>+7 (999) 999-99-99</td>
                    </tr>
                    <tr>
                        <td>Светлана Ж.</td>
                        <td>Астроразбор на день</td>
                        <td>12.01.23</td>
                        <td>+7 (999) 999-99-99</td>
                    </tr>
                </table>
            </div>
        </main>
    <?php endif; ?>
</div>