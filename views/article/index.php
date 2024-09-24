<?php
/**
 * @var $categories
 */
?>

<div class="page_article">
    <header>
        <div class="top">
            <a href="./" class=" logo"><img src="/images/logo.png" alt="logo"></a>
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
    </header>
    <main>
        <div class="head">
            <h1 class="title">Статьи</h1>
            <a href="#" class="btn btn_active">Добавить</a>
        </div>
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
</div>

