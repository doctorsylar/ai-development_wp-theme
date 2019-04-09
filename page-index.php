<?php
/*
Template Name: home
*/
?>
<?php get_header(); ?>
<section class="home" id="home">
    <div class="home-overlay"></div>
    <div class="heading">
        <p class="heading-beginning">Здравствуйте! Меня зовут Андрей и я</p>
        <h1>Full-Stack Web Developer</h1>
        <p class="heading-end">полный решимости выполнить любой Ваш заказ</p>
    </div>
    <div class="arrow-bottom">
        <a href="#header" class="anchor"><i class="fa fa-angle-down"></i></a>
    </div>
</section>
<header id="header">
    <div class="header-container col-12 col-sm-12 col-md-11 col-lg-10">
        <div class="header-logo">
            <a href="#home" class="anchor">
                <img src="/wp-content/themes/doctorsyl_portfolio/img/logo.svg" alt="ai-development">
            </a>
        </div>
        <nav class="header-menu horizontal-menu">
            <ul>
                <li class="link-home"><a href="<?=get_site_url() . '/blog'?>"><i class="fa fa-home"></i>Блог</a></li>
                <li class="link-services"><a class="anchor" href="#services"><i class="fa fa-files-o"></i>Услуги</a></li>
                <li class="link-portfolio"><a class="anchor" href="#portfolio"><i class="fa fa-book"></i>Портфолио</a></li>
                <li class="link-skills"><a class="anchor" href="#skills"><i class="fa fa-star"></i>Навыки</a></li>
                <li class="link-about"><a class="anchor" href="#about"><i class="fa fa-street-view"></i>Обо мне</a></li>
                <li class="link-contact"><a class="anchor" href="#contact"><i class="fa fa-envelope-open"></i>Контакты</a></li>
            </ul>
        </nav>
        <div class="menu-toggler">
            <i class="fa fa-bars"></i>
        </div>
    </div>
    <nav class="header-menu vertical-menu">
        <ul>
            <li class="link-home"><a href="<?=get_site_url() . '/blog'?>"><i class="fa fa-home"></i>Блог</a></li>
            <li class="link-services"><a class="anchor" href="#services"><i class="fa fa-files-o"></i>Услуги</a></li>
            <li class="link-portfolio"><a class="anchor" href="#portfolio"><i class="fa fa-book"></i>Портфолио</a></li>
            <li class="link-skills"><a class="anchor" href="#skills"><i class="fa fa-star"></i>Навыки</a></li>
            <li class="link-about"><a class="anchor" href="#about"><i class="fa fa-street-view"></i>Обо мне</a></li>
            <li class="link-contact"><a class="anchor" href="#contact"><i class="fa fa-envelope-open"></i>Контакты</a></li>
        </ul>
    </nav>
</header>
<main>
    <section id="services" class="col-12 col-sm-12 col-md-12 col-lg-10">
        <h2>Чем я занимаюсь</h2>
        <div class="underline"></div>
        <div class="services-container">
            <div class="services-frontend services-item animatedIn toFadeInLeft">
                <div class="images">
                    <i class="fa fa-desktop"></i>
                </div>
                <h3 class="services-title">
                    Frontend
                </h3>
                <p class="services-description">
                    Вёрстка красивых и современных веб-страниц с полной адаптивностью
                    под любые устройства и полноценной интерактивностью
                    как из PSD-макета, так и без него.
                </p>
            </div>
            <div class="services-backend services-item animatedIn">
                <div class="images">
                    <i class="fa fa-cog"></i>
                </div>
                <h3 class="services-title">
                    Backend
                </h3>
                <p class="services-description">
                    Разработка сложной backend логики для уже готового frontend'а,
                    либо по подробному техническому заданию с обеспечением максимальной
                    эффективности и производительности.
                </p>
            </div>
            <div class="services-fullstack services-item animatedIn">
                <div class="images">
                    <i class="fa fa-laptop"></i>
                    <i class="fa fa-cogs"></i>
                </div>
                <h3 class="services-title">
                    Full stack
                </h3>
                <p class="services-description">
                    Создание полноценных сайтов и веб-приложений, включающих себя
                    пользовательский интерфейс,
                    сложную бизнес логику и высокопроизводительные серверные скрипты.
                </p>
            </div>
            <div class="services-seo services-item animatedIn toFadeInRight">
                <div class="images">
                    <i class="fa fa-bar-chart"></i>
                </div>
                <h3 class="services-title">
                    SEO
                </h3>
                <p class="services-description">
                    Оптимизация структуры сайта для лучшей его обработки поисковыми
                    системами, что впоследствии улучшает его позиции в поисковой
                    выдаче, ускоряя развитие и увеличивая посещаемость.
                </p>
            </div>
        </div>
    </section>
    <section id="portfolio">
        <h2>Мои работы</h2>
        <div class="underline"></div>
        <div class="portfolio-container">
            <?php foreach (getPortfolioItems() as $item): ?>
            <div class="portfolio-item animatedIn">
                <div class="portfolio-item-inner">
                    <figure class="bubba-effect">
                        <img src="<?=$item['thumbnail'] ?>" alt="<?=$item['title'] ?>">
                        <figcaption>
                            <h3><?=$item['title'] ?></h3>
                            <p><?=$item['shortdesc'] ?></p>
                        </figcaption>
                    </figure>
                    <div class="fullscreen-picture">
                        <img src="" data-src="<?=$item['image'] ?>" alt="<?=$item['title'] ?>">
                        <div class="picture-text">
                            <h3 class="project-title">
                                <?=$item['title'] ?>
                            </h3>
                            <h4>Описание проекта:</h4>
                            <p class="project-about">
                                <?=$item['about'] ?>
                            </p>
                            <h4>Что было сделано мной:</h4>
                            <p class="project-done">
                                <?=$item['donebyme'] ?>
                            </p>
                            <?php
                                if ($item['link'] !== '') {
                                    echo "<a href={$item['link']} target='_blank'>Ссылка</a>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </section>
    <section id="skills">
        <h2>Мои навыки</h2>
        <div class="underline"></div>
        <div class="skills-container col-8 col-sm-11"></div>
    </section>
    <section id="about">
        <h2>Обо мне</h2>
        <div class="underline"></div>
        <div class="info">
            <div class="photo-area animatedIn toFadeInLeft">
                <img src="/wp-content/themes/doctorsyl_portfolio/img/face.jpg" alt="face">
            </div>
            <div class="text-area animatedIn toFadeInRight">
                <h3>Что я хотел бы отметить:</h3>
                <ul class="about-list">
                    <li class="about-list-item">
                        <strong>Высокое качество</strong> как графических материалов, так и внутренних алгоритмов работы сайта
                    </li>
                    <li class="about-list-item">
                        фриланс как основная деятельность, что означает <strong>полную отдачу</strong> в процессе работы над заказом
                    </li>
                    <li class="about-list-item">
                        <strong>внимательность</strong> ко всем требованиям заказчика и прояснение любых неясных моментов
                    </li>
                    <li class="about-list-item">
                        предоставление <strong>результатов</strong> на каждом значительном этапе работы с возможностью внести какие-то корректировки
                    </li>
                    <li class="about-list-item">
                        университетская база по <strong>программированию</strong> на языках высокого уровня
                    </li>
                    <li class="about-list-item">
                        <strong>высшее образование</strong> по направлению "Информатика и вычислительная техника"
                    </li>
                </ul>
                <div class="education">

                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <h2>Контакты</h2>
        <div class="underline"></div>
        <form action="/wp-content/themes/doctorsyl_portfolio/php/send-email.php" class="contact-form">
            <p class="contact-description">
                Пожалуйста, оставьте свои контактные данные и сообщение, чтобы я мог с Вами как можно скорее связаться.
            </p>
            <div class="name animatedIn">
                <input type="text" placeholder="Ваше имя..." required>
            </div>
            <div class="email animatedIn">
                <input type="email" placeholder="Ваш email..." required>
            </div>
            <div class="message animatedIn">
                <textarea rows="10" placeholder="Ваше сообщение..." required></textarea>
            </div>
            <div class="submit animatedIn">
                <input type="submit" class="submit" value="Отправить">
            </div>
        </form>
        <h3 class="success-form-sending">Спасибо за Ваше сообщение! <br>
            Я постараюсь связаться с Вами в ближайшее время!</h3>
    </section>
</main>




<?php get_footer(); ?>