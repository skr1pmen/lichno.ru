<?php
/**
 * @var $page
 */
?>
<div class="<?= $page === 'all' ? 'all_pages' : 'page_favorite' ?>">
    <?php if ($page !== 'all') : ?>
        <header>
            <h2 class="title">Избранное</h2>
            <ul>
                <li><a href="/favorite" class="<?= $page === 'users' ? 'active' : null ?>">Исполнители</a></li>
                <li><a href="/favorite/index?page=article" class="<?= $page === 'article' ? 'active' : null ?>">Статьи</a></li>
            </ul>
        </header>
    <?php endif; ?>
    <div class="notification">
        <i class="fa-regular fa-bell"></i>
        <a href="/user"><?= Yii::$app->user->identity->username ?></a>
    </div>

    <?php if ($page === 'users' || $page === 'all'): ?>
        <main class="main_users">
            <div class="profile">
                <h2 class="title">Профиль</h2>
                <table>
                    <tr>
                        <td><i class="fa-regular fa-heart"></i></td>
                        <td>Вероника Г.</td>
                        <td>5,0 <i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></td>
                        <td>12.01.23</td>
                        <td>+7 (999) 999-99-99</td>
                    </tr>
                    <tr>
                        <td><i class="fa-regular fa-heart"></i></td>
                        <td>Вероника Г.</td>
                        <td>5,0 <i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></td>
                        <td>12.01.23</td>
                        <td>+7 (999) 999-99-99</td>
                    </tr>
                </table>
            </div>
            <div class="services">
                <h2 class="title">Услуги</h2>
                <table>
                    <tr>
                        <td><i class="fa-regular fa-heart"></i></td>
                        <td>Вероника Г.</td>
                        <td>Астроразбор на день</td>
                        <td>12.01.23</td>
                        <td>+7 (999) 999-99-99</td>
                    </tr>
                    <tr>
                        <td><i class="fa-regular fa-heart"></i></td>
                        <td>Вероника Г.</td>
                        <td>Астроразбор на день</td>
                        <td>12.01.23</td>
                        <td>+7 (999) 999-99-99</td>
                    </tr>
                    <tr>
                        <td><i class="fa-regular fa-heart"></i></td>
                        <td>Вероника Г.</td>
                        <td>Астроразбор на день</td>
                        <td>12.01.23</td>
                        <td>+7 (999) 999-99-99</td>
                    </tr>
                </table>
            </div>
        </main>
    <?php endif; ?>
    <?php if ($page === 'article' || $page === 'all'): ?>
        <main class="main_article">
            <h2 class="title">Статьи</h2>
            <div class="content">
                <article>
                    <div class="stats">
                        <span><i class="fa-regular fa-eye"></i>0</span>
                        <span><i class="fa-regular fa-thumbs-up"></i>0</span>
                        <span><i class="fa-regular fa-heart"></i>0</span>
                    </div>
                    <div>
                        <h2 class="title">Как открыть чакры денежных потоков</h2>
                        <span class="user">Имя пользователя</span>
                    </div>
                </article>
                <article>
                    <div class="stats">
                        <span><i class="fa-regular fa-eye"></i>0</span>
                        <span><i class="fa-regular fa-thumbs-up"></i>0</span>
                        <span><i class="fa-regular fa-heart"></i>0</span>
                    </div>
                    <div>
                        <h2 class="title">Как открыть чакры денежных потоков</h2>
                        <span class="user">Имя пользователя</span>
                    </div>
                </article>
                <article>
                    <div class="stats">
                        <span><i class="fa-regular fa-eye"></i>0</span>
                        <span><i class="fa-regular fa-thumbs-up"></i>0</span>
                        <span><i class="fa-regular fa-heart"></i>0</span>
                    </div>
                    <div>
                        <h2 class="title">Как открыть чакры денежных потоков</h2>
                        <span class="user">Имя пользователя</span>
                    </div>
                </article>
            </div>
        </main>
    <?php endif; ?>
</div>
