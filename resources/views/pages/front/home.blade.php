@extends('layouts.front.main')

@section('body')
    <div class="wrapper">
        <header class="header-fixed">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-xl navbar-light">
                            <a class="navbar-brand" href="{{ indexLink() }}">
                                <img src="/img/logo.png" alt="logo" />
                            </a>
                            <button class="navbar-toggler collapsed" id="headerMenuToggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav m-auto">
                                    {{--<li class="nav-item active">
                                        <a class="nav-link" href="#">@lang('Головна')</a>
                                    </li>--}}
                                    {{--<li class="nav-item dropdown">
                                        <a
                                            class="nav-link dropdown-toggle"
                                            href="#"
                                            id="navbarDropdownStudy"
                                            role="button"
                                            data-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                        >
                                            Обучение
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownStudy">
                                            <a class="dropdown-item" href="#">Курсы косметолога с нуля</a>
                                            <a class="dropdown-item" href="#">для практикующих специалистов</a>
                                            <a class="dropdown-item" href="#">Курсы косметолога с нуля ОНЛАЙН</a>
                                            <a class="dropdown-item" href="#">для практикующих специалистов ОНЛАЙН</a>
                                        </div>
                                    </li>--}}
                                    {{--<li class="nav-item">
                                        <a class="nav-link" href="#">Поддержка и трудоустройство</a>
                                    </li>--}}
                                    {{--<li class="nav-item">
                                        <a class="nav-link" href="#">Блог</a>
                                    </li>--}}
                                    {{--<li class="nav-item">
                                        <a class="nav-link" href="#">Модели</a>
                                    </li>--}}
                                    {{--<li class="nav-item">
                                        <a class="nav-link" href="#">Контакты</a>
                                    </li>--}}
                                    {{--<li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa fa-search"></i></a>
                                    </li>--}}

                                </ul>
                                <ul class="navbar-nav m-auto">
                                    {{--<li class="nav-item dropdown city">
                                        <a
                                            class="nav-link dropdown-toggle"
                                            href="#"
                                            id="navbarDropdownCities"
                                            role="button"
                                            data-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                        >
                                            {{ __('cities.' . getCity()) }}
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownCities">
                                            @foreach(config('app.cities') as $city)
                                                <a class="dropdown-item" href="{{ replaceRequestCity($city) }}">
                                                    {{ __('cities.' . $city) }}
                                                </a>
                                            @endforeach
                                        </div>
                                    </li>--}}
                                    <li class="nav-item dropdown city">
                                        <a
                                            class="nav-link dropdown-toggle"
                                            href="#"
                                            id="navbarDropdownLocales"
                                            role="button"
                                            data-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                        >
                                            {{ strtoupper(app()->getLocale()) }}
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownLocales">
                                            @foreach(config('app.locales') as $locale)
                                                <a class="dropdown-item" href="{{ replaceRequestLocale($locale) }}">
                                                    {{ __('locales.' . $locale) }}
                                                </a>
                                            @endforeach
                                        </div>
                                    </li>
                                    {{--<li class="nav-item dropdown">
                                        <a
                                            class="nav-link dropdown-toggle"
                                            href="#"
                                            id="navbarDropdownUser"
                                            role="button"
                                            data-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                        >
                                            <i class="fa fa-user"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownUser">
                                            <a class="dropdown-item" href="#">user</a>
                                            <a class="dropdown-item" href="#">user</a>
                                            <a class="dropdown-item" href="#">user</a>
                                        </div>
                                    </li>--}}
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
                    {{--<div class="row">
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
                    </div>--}}
                    <div class="row">
                        <div class="col-12">
                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                <div class="social-icons">
                                    {{--<a href="#">youtube</a>--}}
                                    <a href="https://www.instagram.com/medeya_group/">instagram</a>
                                    <a href="https://www.facebook.com/MedeyaGroup/">facebook</a>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="carousel__overlay">
                                            <img src="/img/img-slider-1.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-content">
                                            <div class="carousel-content__h1">MEDEYA GROUP</div>
                                            <div class="carousel-content__h2">
                                                @lang('Ласкаво просимо на територію краси')
                                            </div>
                                            <div class="carousel-content__h3">
                                                @lang('Курси косметолога як для початківців так і для практикуючих фахівців в м Дніпро.')
                                            </div>
                                            {{--<div class="text-center">
                                                <a href="#" class="btn-med">Подробнее</a>
                                            </div>--}}
                                        </div>
                                    </div>
                                    {{--<div class="carousel-item">
                                        <div class="carousel__overlay">
                                            <img src="/img/img-slider-2.png" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="carousel__overlay">
                                            <img src="/img/img-slider-3.png" class="d-block w-100" alt="...">
                                        </div>
                                    </div>--}}
                                </div>
                                {{--<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>--}}
                                {{--<ol class="carousel-indicators">
                                    <li data-target="#carouselExampleFade" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleFade" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleFade" data-slide-to="2"></li>
                                </ol>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="about-us">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="about-us_img-block">
                                <img src="/img/asset-10.png" alt="asset-10">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="about-us_text-block">
                                <div class="about-us__h3">MEDEYA GROUP</div>
                                <p class="mb-4">
                                    <i class="lh-1_5">
                                        @lang('Косметологічний центр заснований в 2015 році. Ми створили ідеальну платформу для навчання кваліфікованих фахівців індустрії краси та наповнення ринку України професійною космологічної продукцією високої якості, відомих світових брендів.')
                                    </i>
                                </p>
                                {{--<a href="#" class="btn-med">ВЫБРАТЬ КУРС</a>--}}
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <h2 class="about-us__h2 h2-right">@lang('ПРО НАС')</h2>
                        </div>
                    </div>
                </div>
                <div class="about-us_video-block">
                    <iframe
                        src="https://www.youtube.com/embed/rto2Nr9ciFc"
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                    >
                    </iframe>
                </div>
            </section>
            <section class="courses">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>@lang('Наші курси')</h2>
                            <p class="w-50">
                                <i class="lh-1_5">
                                    @lang('Підберіть курс спеціально для себе. Пройдіть шлях від новачка до фахівця, або ж поглибити свої знання. Так само, в зв\'язку з епідемією COVID-19, Ви можете пройти навчання онлайн!')
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
                                <h3>@lang('Для новаків')</h3>
                                <p class="lh-1_5 mb-4">
                                    @lang('Курс "Косметолог-естетист" від MEDEYA GROUP - курс основ практичної косметології, що не вимагає спеціальної підготовки, підійде навіть людям без медичної освіти.')
                                </p>
                                {{--<a href="#" class="btn-med">Подробнее</a>--}}
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
                                <h3>@lang('Для практикуючих фахівців')</h3>
                                <p class=" lh-1_5 mb-4">
                                    @lang('Навчальний косметологічний центр "MEDEYA GROUP" проводить базові семінари і підвищують курси по всім косметологічних методикам.')
                                </p>
                                {{--<a href="#" class="btn-med">Подробнее</a>--}}
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
                                <h3>@lang('Онлайн навчання')</h3>
                                <p class=" lh-1_5 mb-4">
                                    @lang('"Основи косметології онлайн" від MEDEYA GROUP - курс основ практичної косметології, що не вимагає спеціальної підготовки, підійде навіть людям без медичної освіти.')
                                </p>
                                {{--<a href="#" class="btn-med">Подробнее</a>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="why-we">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="mb-6">
                                @lang('Чому обирають нас')
                            </h2>
                            <ul class="mb-6">
                                <li>@lang('80% практичних занять і 20% теорії')</li>
                                <li>@lang('Тільки дипломовані тренера з досвідом роботи від 10 років')</li>
                                <li>@lang('Диплом з додатком державного зразка')</li>
                                <li>@lang('Подальший супровід і сприяння в працевлаштуванні')</li>
                                <li>@lang('Гнучкий графік навчання та індивідуальний підхід')</li>
                                <li>@lang('Бонуси у вигляді знижок на косметику, семінари та інші бонуси')</li>
                            </ul>
                            <h3 class="h-none-decor">@lang('Ділимося знаннями і успіхом')</h3>
                            <div class="count">
                                <div class="count_item">
                                    <div class="count_item__number price-js">6</div>
                                    <div class="count_item__text">@lang('Років роботи')</div>
                                </div>
                                <div class="count_item">
                                    <div class="count_item__number price-js">54</div>
                                    <div class="count_item__text">@lang('Курсів запущено')</div>
                                </div>
                                <div class="count_item">
                                    <div class="count_item__number price-js">124</div>
                                    <div class="count_item__text">@lang('Учнів випущено')</div>
                                </div>
                                <div class="count_item">
                                    <div class="count_item__number price-js">7</div>
                                    <div class="count_item__text">@lang('Всього експертів')</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{--<section class="trainers">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="h2-right mb-8">@lang('Тренери')</h2>
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
            </section>--}}
            {{--<section class="registration-form">
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
            </section>--}}
            {{--<section class="reviews">
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
            </section>--}}
            <section class="contacts">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center">
                                <h2 class="h2-center mb-8">@lang('Контакти')</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="contacts_block">
                                <h4>@lang('АДРЕСА'):</h4>
                                <p>
                                    @lang('Проспект Дмитра Яворницького, 107а Дніпро Україна, 49038')
                                </p>
                                <h4>@lang('Режим роботи'):</h4>
                                <p>@lang('З 9:00 до 18:00, субота в черговому режимі з 10:00 до 15:00')</p>
                                <div class="contacts_block_social">
                                    <p>@lang('Ми в соціальних мережах'):</p>
                                    <div class="d-flex mt-4">
                                        {{--<a href="#">youtube</a>--}}
                                        <a href="https://www.instagram.com/medeya_group/">INStagram</a>
                                        <a href="https://www.facebook.com/MedeyaGroup/">FACEBOOK</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 offset-lg-1">
                            <div class="contacts_block">
                                <h4>@lang('ТЕЛЕФОНИ'):</h4>
                                <a href="tel:+380501869757">+38(050)1869757</a><br/>
                                <a href="tel:+380672508857">+38(067)2508857</a><br/>
                                <a href="tel:+380635002264">+38(063)5002264</a><br/>
                                <h4>EMAIL:</h4>
                                <a href="mailto:natalypo88@gmail.com">natalypo88@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2645.1292421177623!2d35.02394551574699!3d48.473234535701835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dbe2f9e857fccb%3A0x9aaf6cfdd50a697e!2sDmytra%20Yavornytskoho%20Avenue%2C%20107%2C%20Dnipropetrovs&#39;k%2C%20Dnipropetrovs&#39;ka%20oblast%2C%20Ukraina%2C%2049000!5e0!3m2!1spl!2spl!4v1595524161808!5m2!1spl!2spl"
                        style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
            </section>
        </main>
        <footer>
            <div class="container-fluid pl-lg-5 pr-lg-5">
                <div class="row align-items-center h-110">
                    <div class="col-lg-5 pl-5">
                        <p>Made with &#10084;&#65039; by WebCosmonauts</p>
                    </div>
                    <div class="col-lg-7 pr-5">
                        {{--<a href="#" title="Terms of Use" class="mr-3">Пользовательское соглашение</a>
                        <a href="#" title="Privacy Policy">Политика конфидециальности</a>--}}
                    </div>
                    <div id="top">@lang('Вгору') <i class="fas fa-long-arrow-alt-up"></i></div>
                </div>
            </div>
        </footer>
    </div>
@endsection
