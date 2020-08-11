@extends('layouts.front.main')

@section('body')
    <div class="wrapper">
        <header class="header-fixed">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-xl navbar-light">
                            <a class="navbar-brand" href="#">
                                <img src="img/logo.png" alt="logo" />
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav m-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Главная <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Обучение
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Курсы косметолога с нуля</a>
                                            <a class="dropdown-item" href="#">для практикующих специалистов</a>
                                            <a class="dropdown-item" href="#">Курсы косметолога с нуля ОНЛАЙН</a>
                                            <a class="dropdown-item" href="#">для практикующих специалистов ОНЛАЙН</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Поддержка и трудоустройство</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Блог</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Модели</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Контакты</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa fa-search"></i></a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Днепропетровск
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Днепропетровск</a>
                                            <a class="dropdown-item" href="#">Днепропетровск</a>
                                            <a class="dropdown-item" href="#">Днепропетровск</a>
                                        </div>
                                    </li>
                                    <li class="nav-item language">
                                        <span class="nav-link">
                                            <a class="nav-link" href="#">RU</a>
                                            <a class="nav-link" href="#">UA</a>
                                        </span>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-user"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">user</a>
                                            <a class="dropdown-item" href="#">user</a>
                                            <a class="dropdown-item" href="#">user</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <section class="slider-block">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="message mb-4">
                                <div class="message__content">
                                    <a href="#">
                                        Обучение МАССАЖНОЙ ТЕХНИКЕ "oxygen" В МИНИ ГРУППАХ 24 МАЯ В 11:00
                                    </a>
                                </div>
                                <a href="#" class="btn-med">подробнее</a>
                                <i class="fa fa-times message-close-js"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                <div class="social-icons">
                                    <a href="#">youtube</a>
                                    <a href="#">instagram</a>
                                    <a href="#">facebook</a>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="carousel__overlay">
                                            <img src="img/img-slider-1.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-content">
                                            <div class="carousel-content__h1">MEDEYA GROUP</div>
                                            <div class="carousel-content__h2">
                                                Добро пожаловать на территорию красоты
                                            </div>
                                            <div class="carousel-content__h3">
                                                Курсы косметолога как для начинающих так и для практикующих специалистов в г. Днепр.
                                            </div>
                                            <a href="#" class="btn-med">Подробнее</a>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carousel__overlay">
                                            <img src="img/img-slider-2.png" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carousel__overlay">
                                            <img src="img/img-slider-3.png" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleFade" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleFade" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleFade" data-slide-to="2"></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="courses">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Наши курсы</h2>
                            <p class="w-50">
                                <i class="lh-1_5">
                                    Подберите курс специально для себя. Пройдите путь от новичка до специалиста , или же углубите свои знания. Так же, в связи с эпидемией COVID - 19, Вы можете пройти обучение онлайн!
                                </i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row mt-8">
                        <div class="col-md-6 col-lg-5">
                            <div class="courses_img-block">
                                <img src="/img/asset-3.png" alt="asset-3" />
                            </div>
                        </div>
                        <div class="col-md-6 offset-lg-1">
                            <div class="courses_text-block">
                                <h3>Для новичков</h3>
                                <p class="lh-1_5 mb-4">
                                    Курс “Косметолог - эстетист” от  MEDEYA GROUP - курс основ практической косметологии, не требующий специальной подготовки,подойдет даже людям без медицинского образования.
                                </p>
                                <a href="#" class="btn-med">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-8 flex-lg-row-reverse">
                        <div class="col-md-6 col-lg-5">
                            <div class="courses_img-block">
                                <img src="/img/asset-4.png" alt="asset-4" />
                            </div>
                        </div>
                        <div class="col-md-6 offset-lg-1">
                            <div class="courses_text-block courses_text-block-mod">
                                <h3>Для практикующих специалистов</h3>
                                <p class=" lh-1_5 mb-4">
                                    Обучающий косметологический центр “MEDEYA GROUP” проводит базовые семинары и повышающие курсы по всем косметологическим методикам.
                                </p>
                                <a href="#" class="btn-med">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-8">
                        <div class="col-md-6 col-lg-5">
                            <div class="courses_img-block">
                                <img src="/img/asset-5.png" alt="asset-5" />
                            </div>
                        </div>
                        <div class="col-md-6 offset-lg-1">
                            <div class="courses_text-block">
                                <h3>Онлайн обучение</h3>
                                <p class=" lh-1_5 mb-4">
                                    “Основы косметологии онлайн” от  MEDEYA GROUP - курс основ практической косметологии, не требующий специальной подготовки, подойдет даже людям без медицинского образования.
                                </p>
                                <a href="#" class="btn-med">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="about-us">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="about-us_img-block">
                                <img src="/img/asset-10.png" alt="asset-10">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="about-us_text-block">
                                <div class="about-us__h3">MEDEYA GROUP</div>
                                <p class="mb-4">
                                    <i class="lh-1_5">
                                        Косметологический центр основан в 2015 году. Мы создали идеальную платформу для обучения квалифицированных специалистов индустрии красоты и наполнения рынка Украине профессиональной космологической продукцией высокого качества, известных мировых брендов.
                                    </i>
                                </p>
                                <a href="#" class="btn-med">ВЫБРАТЬ КУРС</a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <h2 class="about-us__h2 h2-right">О НАС</h2>
                        </div>
                    </div>
                </div>
                <div class="about-us_video-block">

                    <iframe
                        src="https://www.youtube.com/embed/NP7uSMILcyI"
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>

                    </iframe>
                </div>
            </section>
            <section class="why-we">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h2 class="mb-6">
                                Почему выбирают нас
                            </h2>
                            <ul class="mb-6">
                                <li>80% практических занятий и 20% теории</li>
                                <li>Только дипломированные тренера с опытом работы от 10 лет</li>
                                <li>Диплом с приложение  государственного образца</li>
                                <li>Дальнейшее сопровождение и помощь в трудоустройстве</li>
                                <li>Гибкий график обучения и индивидуальный подход</li>
                                <li>Бонусы в виде скидок на косметику, семинары и другие бонусы</li>
                            </ul>
                            <h3 class="h-none-decor">Делимся знаниями и успехом</h3>
                            <div class="count">
                                <div class="count_item">
                                    <div class="count_item__number price-js">6</div>
                                    <div class="count_item__text">Лет работы</div>
                                </div>
                                <div class="count_item">
                                    <div class="count_item__number price-js">54</div>
                                    <div class="count_item__text">Курсов запущено</div>
                                </div>
                                <div class="count_item">
                                    <div class="count_item__number price-js">124</div>
                                    <div class="count_item__text">Учеников выпущено</div>
                                </div>
                                <div class="count_item">
                                    <div class="count_item__number price-js">7</div>
                                    <div class="count_item__text">Всего экспертов</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="trainers">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="h2-right mb-8">Тренера</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="trainers_item">
                                <div class="trainers_item__img">
                                    <img src="/img/img-trainers-1.png" alt="trainers-1">
                                </div>
                                <div class="trainers_item__name">ВАНИНА ИРИНА</div>
                                <div class="trainers_item__description">
                                    Практикующий косметолог, сертифицированный тренер компании "ANUBIS", тренер испанских массажных техник, тренер курса “Косметолог эстетист”.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="trainers_item mt-6">
                                <div class="trainers_item__img">
                                    <img src="/img/img-trainers-2.png" alt="trainers-2">
                                </div>
                                <div class="trainers_item__name">Шилова Татьяна</div>
                                <div class="trainers_item__description">
                                    Практикующий косметолог, сертифицированный тренер компании "ANUBIS", тренер по пилингам и практическим занятиям.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="trainers_item">
                                <div class="trainers_item__img">
                                    <img src="/img/img-trainers-3.png" alt="trainers-3">
                                </div>
                                <div class="trainers_item__name">Кардава Оксана</div>
                                <div class="trainers_item__description">
                                    Косметолог, дерматолог, тренер компании
                                    "MEDEYA GROUP".
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="registration-form">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="mb-8">
                                Регистрируйтесь на сайте и получайте
                                скидочный купон на Ваш Email
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row position-relative">
                        <div class="col-lg-5 offset-lg-1">
                            <div class="registration-form_form">
                                <form action="#">
                                    <div class="registration-form_form__h1">Заполните форму</div>
                                    <p>
                                        <label for="form-name">
                                            Имя, фамилия:<span>*</span>
                                        </label>
                                        <input type="text" id="form-name" placeholder="Введите Ваше имя и фамилию" required />
                                    </p>
                                    <p>
                                        <label for="form-email">
                                            Email:<span>*</span>
                                        </label>
                                        <input type="email" id="form-email" placeholder="Введите Ваш Email" required />
                                    </p>
                                    <div class="registration-form_form__message">*поля обязательны для заполнения </div>
                                    <p class="d-flex">
                                        <input type="checkbox" id="terms" class="terms">
                                        <label for="terms">
                                            Я принимаю условия <a href="#"> пользовательского соглашения
                                                и политику конфиденциальности.</a>
                                        </label>
                                    </p>
                                    <p>
                                        <input type="submit" class="btn-med btn-med-l" value="ОТПРАВИТЬ" />
                                    </p>
                                    <div class="thanks">
                                        Спасибо ,что заполнили форму.
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="registration-form_img">
                                <img src="/img/img-registration.png" alt="img-registration">
                            </div>
                        </div>
                        <div class="registration-form_img__inner">
                            <img src="/img/img-registration-2.png" alt="img-registration-2" />
                        </div>
                    </div>
                </div>
            </section>
            <section class="reviews">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center">
                                <h2 class="h2-center mb-7">Отзывы</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="reviews_block">
                                        <div class="reviews_block__img">
                                            <img src="/img/img-reviews.png" alt="img-reviews" />
                                        </div>
                                        <div class="reviews_block__name">
                                            Светлана
                                        </div>
                                        <div class="reviews_block__date">
                                            25.02.2020
                                        </div>
                                        <div class="reviews_block__description">
                                            Вера, хотела с вами поделиться касательно
                                            пилингов Falthy. Детали TCA c минимальной
                                            выдержкой, но даже за одну процедуру
                                            клиентка увидела как размылись границы
                                            пигментных пятен и с 3 по 5 день очень
                                            комфортно реабилитировалась мелким
                                            шелушением)
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="reviews_block">
                                        <div class="reviews_block__img">
                                            <img src="/img/img-reviews.png" alt="img-reviews" />
                                        </div>
                                        <div class="reviews_block__name">
                                            Екатерина
                                        </div>
                                        <div class="reviews_block__date">
                                            25.02.2020
                                        </div>
                                        <div class="reviews_block__description">
                                            Вера, хотела с вами поделиться касательно
                                            пилингов Falthy. Детали TCA c минимальной
                                            выдержкой, но даже за одну процедуру
                                            клиентка увидела как размылись границы
                                            пигментных пятен и с 3 по 5 день очень
                                            комфортно реабилитировалась мелким
                                            шелушением)
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="reviews_block">
                                        <div class="reviews_block__img">
                                            <img src="/img/img-reviews.png" alt="img-reviews" />
                                        </div>
                                        <div class="reviews_block__name">
                                            Анна
                                        </div>
                                        <div class="reviews_block__date">
                                            25.02.2020
                                        </div>
                                        <div class="reviews_block__description">
                                            Вера, хотела с вами поделиться касательно
                                            пилингов Falthy. Детали TCA c минимальной
                                            выдержкой, но даже за одну процедуру
                                            клиентка увидела как размылись границы
                                            пигментных пятен и с 3 по 5 день очень
                                            комфортно реабилитировалась мелким
                                            шелушением)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="contacts">

            </section>
        </main>
        <footer>

        </footer>

        <div class="old-layout ">
            <section class="section-contact">
                <div class="container-fluid map">
                    <div class="row">
                        <div class="col-12">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2645.1292421177623!2d35.02394551574699!3d48.473234535701835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dbe2f9e857fccb%3A0x9aaf6cfdd50a697e!2sDmytra%20Yavornytskoho%20Avenue%2C%20107%2C%20Dnipropetrovs&#39;k%2C%20Dnipropetrovs&#39;ka%20oblast%2C%20Ukraina%2C%2049000!5e0!3m2!1spl!2spl!4v1595524161808!5m2!1spl!2spl"
                                    style="border:0;" allowfullscreen="" aria-hidden="false"
                                    tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </section>
        <section class="section-footer">
            <div class="container">
                <div class="row social-icon text-center d-lg-none">
                    <span class="icon-instagram"></span>
                    <span class="icon-facebook"></span>
                    <span class="icon-youtube"></span>
                </div>
                <div class="row text-center">
                    <div class="col-12 col-lg-3">
                        <p>Made with &#10084;&#65039; by WebCosmonauts</p>
                    </div>
                    <div class="col-12 col-lg-3">
                        <a class="col-12 col-lg-3" href="#" title="Terms of Use">Пользовательское соглашение</a></div>
                        <div class="col-12 col-lg-3"><a class="col-12 col-lg-3" href="#" title="Privacy Policy">Политика конфидециальности</a>
                    </div>
                    <div class="col-lg-3 text-right d-none d-lg-inline-block">
                        <a href="#" title="Go to top">Наверх<img src="svg/arrow_up.svg" alt="Go to top"></a>
                    </div>
                </div>
            </div>
        </section>
        </div>
    </div>
@endsection
