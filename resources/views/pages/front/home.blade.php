@extends('layouts.front.main')

@section('body')
    <!-- первый блок -->
    <section class="section-main">
        <!--меню-->

        <div class="container menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="logo navbar-brand" href="#"><img src="img/logo.png" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="header-nav collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" title="Go to Main" href="#">ГЛАВНАЯ</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="true" aria-expanded="false">ОБУЧЕНИЕ</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">КУРСЫ КОСМЕТОЛОГА С НУЛЯ</a>
                                <a class="dropdown-item" href="#">ДЛЯ ПРАКТИКУЮЩИХ СПЕЦИАЛИСТОВ</a>
                                <a class="dropdown-item" href="#">КУРСЫ КОСМЕТОЛОГА С НУЛЯ ОНЛАЙН</a>
                                <a class="dropdown-item" href="#">ДЛЯ ПРАКТИКУЮЩИХ СПЕЦИАЛИСТОВ ОНЛАЙН</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ПОЖЖЕРЖКА <br/>И ТРУДОУСТРОЙСТВО</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">БЛОГ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">МОДЕЛИ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">КОНТАКТЫ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><img src="svg/Icon_feather-search.svg" alt=""></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="true" aria-expanded="false">Днепропетровск</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Киев</a>
                                <a class="dropdown-item" href="#">Харьков</a>
                            </div>
                        </li>
                        <li>
                            <ul class="language">
                                <li><a class="nav-link" href="#">RU</a></li>
                                <li><a class="nav-link" href="#">UA</a></li>
                            </ul>
                        </li>
                        <li class="nav-link">
                            <a href="#"><img src="svg/user.svg" alt="">
                                <img src="svg/caret_down.svg" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- блок карусель -->
        <div class="container">
            <div class="col-12 mobile-contact-header d-lg-none text-center">
                <a class="col-3" href="#"><span class="icon-user"></span></a>
                <a class="col-3" href="#"><span class="icon-search"></span></a>
                <a class="col-3" href="#"><span class="icon-phone"></span></a>
                <a class="col-3" href="#"><span class="icon-place"></span></a>
            </div>
            <div class="row news">
                <h3>Обучение МАССАЖНОЙ ТЕХНИКЕ "oxygen" В МИНИ ГРУППАХ 24 МАЯ В 11:00</h3>
                <a href="#" class="close d-lg-none" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
                <a title="More" href="#" class="btn btn-secondary d-none d-lg-block d-xl-block">подробнее</a>
            </div>
            <div class="mobile-header d-flex flex-column align-content-between d-lg-none d-lx-none">
                <p class="d-lg-none text-uppercase">Курсы косметолога <br>
                    для начинающих <br>
                    и для практикующих <br>
                    специалистов.
                </p>
                <div class="mt-auto"><a title="More" href="#" class="btn btn-secondary d-lg-none d-lx-none">подробнее</a></div>
            </div>
            <div class="row carousel d-none d-lg-flex">
                <div class="col-2">
                    <ul class="social">
                        <li class="vertical-text"><a href="#">FACEBOOK</a></li>
                        <li class="vertical-text"><a href="#">INSTAGRAM</a></li>
                        <li class="vertical-text"><a href="#">YOUTUBE</a></li>
                    </ul>
                </div>
                <div class="col-8">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="with-overlay"><img class="d-block w-100" src="img/shutterstock_394253143.png"
                                                               alt="Первый слайд"></div>
                                <div class="carousel-caption d-none d-md-block">
                                    <h1>MEDEYA GROUP</h1>
                                    <h3>
                                        добро пожаловать <br>
                                        на территорию<br>
                                        красоты
                                    </h3>
                                    <p>Курсы косметолога как для начинающих так<br>
                                        и для практикующих специалистов в г.<br>
                                        Днепр.</p>
                                    <a href="#" class="btn btn-secondary">подробнее</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="with-overlay"><img class="d-block w-100" src="img/shutterstock_394253143.png"
                                                               alt="Второй слайд"></div>
                                <div class="carousel-caption d-none d-md-block">
                                    <h1>MEDEYA GROUP</h1>
                                    <h3>
                                        Добро пожаловать<br>
                                        на территорию<br>
                                        красоты
                                    </h3>
                                    <p>Курсы косметолога как для начинающих так<br>
                                        и для практикующих специалистов в г.<br>
                                        Днепр.</p>
                                    <a href="#" class="btn btn-secondary">подробнее</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="with-overlay"><img class="d-block w-100" src="img/shutterstock_394253143.png"
                                                               alt="Третий слайд"></div>
                                <div class="carousel-caption d-none d-md-block">
                                    <h1>MEDEYA GROUP</h1>
                                    <h3>
                                        Добро пожаловать<br>
                                        на территорию<br>
                                        красоты
                                    </h3>
                                    <p>Курсы косметолога как для начинающих так<br>
                                        и для практикующих специалистов в г.<br>
                                        Днепр.</p>
                                    <a href="#" class="btn btn-secondary">подробнее</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="with-overlay"><img class="d-block w-100" src="img/shutterstock_394253143.png"
                                                               alt="Четвертый слайд"></div>
                                <div class="carousel-caption d-none d-md-block">
                                    <h1>MEDEYA GROUP</h1>
                                    <h3>
                                        Добро пожаловать<br>
                                        на территорию<br>
                                        красоты
                                    </h3>
                                    <p>Курсы косметолога как для начинающих так<br>
                                        и для практикующих специалистов в г.<br>
                                        Днепр.</p>
                                    <a href="#" class="btn btn-secondary">подробнее</a>
                                </div>
                            </div>
                        </div>
                        <ol class="carousel-indicators in-main">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                <span class="slider-2"><img src="svg/Ellipse-slider-2.svg" alt=""></span>
                                <span class="slider-1"><img src="svg/Ellipse-slider-1.svg" alt=""></span>
                            </li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1">
                                <span class="slider-2"><img src="svg/Ellipse-slider-2.svg" alt=""></span>
                                <span class="slider-1"><img src="svg/Ellipse-slider-1.svg" alt=""></span>
                            </li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2">
                                <span class="slider-2"><img src="svg/Ellipse-slider-2.svg" alt=""></span>
                                <span class="slider-1"><img src="svg/Ellipse-slider-1.svg" alt=""></span>
                            </li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3">
                                <span class="slider-2"><img src="svg/Ellipse-slider-2.svg" alt=""></span>
                                <span class="slider-1"><img src="svg/Ellipse-slider-1.svg" alt=""></span>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-2">
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a></div>
            </div>
            <div class="contact-form justify-content-center" id="contact-form">
                <div class="contact-us">
                    <form>
                        <a href="#" class="close" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </a>
                        <h4>Обратная связь</h4>
                        <div class="form-group">
                            <label for="validationCustom02">Имя, фамилия:<span>*</span></label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="Имя, фамилия:"
                                   value="Введите Ваше имя и фамилию" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail2">Email:<span>*</span></label>
                            <input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp"
                                   placeholder="Введите Ваш Email">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputTel">Телефон:</label>
                            <input type="number" class="form-control" id="exampleInputTel" aria-describedby="emailHelp"
                                   placeholder="Ваш контактный номер телефона">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Example textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                        <small>*поля обязательны для заполнения </small>
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input is-invalid"
                                       id="exampleCheck2" required>
                                <label class="form-check-label" for="exampleCheck2">Я принимаю условия <a href="#" title="Terms of Use">пользовательского
                                    соглашения и политику конфиденциальности.</a></label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-secondary">ОТПРАВИТЬ</button>
                        <p>Спасибо ,что заполнили форму.</p>
                    </form>
                </div>
            </div>
            <a href="#contact-form" class="contact-button d-none d-lg-block"><img src="svg/button_phone.svg" alt="contact"></a>
            <a href="#contact-form" class="contact-button d-lg-none"><img src="svg/contact-mobile.svg" alt="contact"></a>
        </div>
    </section>
    <section class="about-us-mobile d-lg-none">
        <div class="col-12">
            <h2 class="with-underline">MEDEYA GROUP</h2>
            <p>Косметологический центр основан в 2015 году. Мы создали идеальную платформу для обучения
                квалифицированных специалистов индустрии красоты и наполнения рынка Украине профессиональной
                космологической продукцией высокого качества, известных мировых брендов.
            </p></div>
        <img src="img/1457.png" alt="About Us" class="img-fluid">
    </section>
    <!-- our courses -->
    <section class="section-courses">
        <!--mobile -->
        <div class="container d-lg-none">
            <div>
            <div class="text-center"><h2 class="with-underline">Наши курсы</h2></div><a href="#"></a></div>
            <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">

                            <div class="col-12"><img class="img-fluid" src="img/asset-3.png" alt="Первый слайд"></div>
                            <h3>Для новичков</h3>
                            <p>Курс основ практической
                                косметологии, не требующий
                                специальной подготовки.</p>
                            <a href="#" class="btn btn-secondary">подробнее</a>

                    </div>
                    <div class="carousel-item">
                        <div class="col-12"><img class="img-fluid" src="img/asset-3.png" alt="второй слайд"></div>

                            <h3>Для новичков</h3>
                            <p>Курс основ практической
                                косметологии, не требующий
                                специальной подготовки.</p>
                            <a href="#" class="btn btn-secondary">подробнее</a>

                    </div>
                    <div class="carousel-item">
                        <div class="col-12"><img class="img-fluid" src="img/asset-3.png" alt="третий слайд"></div>

                            <h3>Для новичков</h3>
                            <p>Курс основ практической
                                косметологии, не требующий
                                специальной подготовки.</p>
                            <a href="#" class="btn btn-secondary">подробнее</a>

                    </div>

                </div>
                <ol class="carousel-indicators in-main">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                        <span class="slider-2"><img src="svg/Ellipse-slider-2.svg" alt=""></span>
                        <span class="slider-1"><img src="svg/Ellipse-slider-1.svg" alt=""></span>
                    </li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1">
                        <span class="slider-2"><img src="svg/Ellipse-slider-2.svg" alt=""></span>
                        <span class="slider-1"><img src="svg/Ellipse-slider-1.svg" alt=""></span>
                    </li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2">
                        <span class="slider-2"><img src="svg/Ellipse-slider-2.svg" alt=""></span>
                        <span class="slider-1"><img src="svg/Ellipse-slider-1.svg" alt=""></span>
                    </li>
                </ol>
            </div>

        </div>


        <!-- desktop -->
        <div class="container d-none d-lg-block">
            <div class="row">
                <div class="col-6">
                    <div class="text-center"><h2 class="with-underline">Наши курсы</h2></div><a href="#"></a>
                    <p>Подберите курс специально для себя. Пройдите путь от новичка до специалиста , или же углубите свои
                        знания. Так же, в связи с эпидемией COVID - 19, Вы можете пройти обучение онлайн!</p>
                </div>
            </div>
            <div class="row flex-row-reverse left">
                <div class="col-5">
                    <div class="text-center"><h3 class="with-underline">Для новичков</h3></div>
                    <p>Курс “Косметолог - эстетист” от MEDEYA GROUP - курс основ практической косметологии, не требующий
                        специальной подготовки,подойдет даже людям без медицинского образования.
                    </p>
                    <a href="#" class="btn btn-secondary">подробнее</a>
                </div>
                <div class="col-7"><img src="img/asset-3.png" alt="" class="img-fluid"></div>
            </div>
            <div class="row right">
                <div class="col-5">
                    <div class="text-center"><h3 class="with-underline">Для практикующих
                        специалистов</h3></div>
                    <p>Обучающий косметологический центр “MEDEYA GROUP” проводит базовые семинары и повышающие курсы по всем
                        косметологическим методикам.</p>
                    <a href="#" class="btn btn-secondary">подробнее</a>
                </div>
                <div class="col-7"><img src="img/asset-4.png" alt="" class="img-fluid"></div>
            </div>
            <div class="row flex-row-reverse left">
                <div class="col-5">
                    <div class="text-center"><h3 class="with-underline">Онлайн обучение</h3></div>
                    <p>“Основы косметологии онлайн” от MEDEYA GROUP - курс основ практической косметологии, не требующий
                        специальной подготовки, подойдет даже людям без медицинского образования.
                    </p>
                    <a href="#" class="btn btn-secondary">подробнее</a>
                </div>
                <div class="col-7"><img src="img/asset-5.png" alt="" class="img-fluid"></div>
            </div>
        </div>
    </section>
    <!-- About Us -->
    <section class="section-about-us d-none d-lg-block">
        <div class="container ">
            <div class="row">
                <div class="col-10 row left">
                    <div class="col-7"><img src="img/asset-10.png" alt="" class="img-fluid"></div>
                    <div class="col-5">
                        <h2>MEDEYA GROUP</h2>
                        <p>Косметологический центр основан в 2015 году. Мы создали идеальную платформу для обучения
                            квалифицированных специалистов индустрии красоты и наполнения рынка Украине профессиональной
                            космологической продукцией высокого качества, известных мировых брендов.
                        </p>
                        <a href="#" class="btn btn-secondary">подробнее</a>
                    </div>
                </div>
                <div class="col-2">
                    <p class="vertical-text with-underline">О НАС</p>
                </div>
            </div>
            <div class="row justify-content-center ">
                <div class="col-6 video-box">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Bqops9HqDbE"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- why we -->
    <section class="section-why-we">
        <div class="container ">
            <div class="col-12 col-lg-8">
                <div class="text-center d-none d-lg-inline-block"><h3 class="with-underline">Почему выбирают нас</h3></div>
                <div class="text-center d-lg-none"><h3 class="with-underline">Выбирая нас
                    Вы выбираете:</h3></div>
                <div class="row diamond">
                    <div class="col-12 col-lg-1">
                        <span class="icon-diamond"></span>
                    </div>
                    <p>80% практических занятий и 20% теории</p>
                </div>
                <div class="row diamond">
                    <div class="col-12 col-lg-1">
                        <span class="icon-diamond"></span>
                    </div>
                    <p>Только дипломированные тренера с опытом работы от 10 лет</p></div>
                <div class="row diamond">
                    <div class="col-12 col-lg-1">
                        <span class="icon-diamond"></span>
                    </div>
                    <p>Диплом с приложение государственного образца</p></div>
                <div class="row diamond">
                    <div class="col-12 col-lg-1">
                        <span class="icon-diamond"></span>
                    </div>
                    <p>Дальнейшее сопровождение и помощь в трудоустройстве</p></div>
                <div class="row diamond">
                    <div class="col-12 col-lg-1">
                    <span class="icon-diamond"></span>
                </div>
                    <p>Гибкий график обучения и индивидуальный подход</p></div>
                <div class="row diamond">
                    <div class="col-12 col-lg-1">
                        <span class="icon-diamond"></span>
                    </div>
                    <p>Бонусы в виде скидок на косметику, семинары и другие бонусы</p></div>
                <h4 class="d-none d-lg-inline-block">Делимся знаниями и успехом</h4>

                <div class="row d-none d-lg-flex">
                    <div class="col">
                        <div class="anim-numb" data-duration="5000">6</div>
                        <p>Лет работы</p></div>
                    <div class="col">
                        <div class="anim-numb" data-duration="6000">54</div>
                        <p>Курсов запущено</p></div>
                    <div class="col">
                        <div class="anim-numb" data-duration="7000">124</div>
                        <p>Учеников выпущено</p></div>
                    <div class="col">
                        <div class="anim-numb" data-duration="8000">7</div>
                        <p>Всего экспертов</p></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trainers-->
    <section class="section-trainers">
        <div class="container">

            <div class="title"><h3 class="with-underline">Тренера</h3></div>
            <!-- карусель -->
            <div id="carouselExampleIndicators3" class="d-lg-none carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                        <span class="icon-circle-1"></span>
                        <span class="icon-circle-2"></span>
                    </li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1">
                        <span class="icon-circle-1"></span>
                        <span class="icon-circle-2"></span>
                    </li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2">
                        <span class="icon-circle-1"></span>
                        <span class="icon-circle-2"></span>
                    </li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="col-12 active"><img src="img/wanina.png" class="img-fluid" alt="">
                            <h5>ВАНИНА ИРИНА</h5>
                            <p>Практикующий косметолог, сертифицированный тренер компании "ANUBIS", тренер испанских массажных
                                техник, тренер курса “Косметолог эстетист”.
                            </p></div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-12"><img src="img/asset-7.png" class="img-fluid" alt="">
                            <h5>Шилова Татьяна</h5>
                            <p>Практикующий косметолог, сертифицированный тренер компании "ANUBIS", тренер по пилингам и
                                практическим занятиям.
                            </p></div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-12"><img src="img/asset-6.png" class="img-fluid" alt="">
                            <h5>Кардава Оксана</h5>
                            <p>Косметолог, дерматолог, тренер компании
                                "MEDEYA GROUP". </p></div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="row d-none d-lg-flex">
                <div class="col-3 trainer-1"><img src="img/wanina.png" class="img-fluid" alt="">
                    <h5>ВАНИНА ИРИНА</h5>
                    <p>Практикующий косметолог, сертифицированный тренер компании "ANUBIS", тренер испанских массажных
                        техник, тренер курса “Косметолог эстетист”.
                    </p></div>
                <div class="col-3 trainer-2"><img src="img/asset-7.png" class="img-fluid" alt="">
                    <h5>Шилова Татьяна</h5>
                    <p>Практикующий косметолог, сертифицированный тренер компании "ANUBIS", тренер по пилингам и
                        практическим занятиям.
                    </p></div>
                <div class="col-3 trainer-3"><img src="img/asset-6.png" class="img-fluid" alt="">
                    <h5>Кардава Оксана</h5>
                    <p>Косметолог, дерматолог, тренер компании
                        "MEDEYA GROUP". </p></div>
            </div>
        </div>
    </section>
    <!-- The Form-->
    <section class="section-form">
        <div class="d-lg-none text-center">
            <img src="img/asset-f.png" class="img-fluid" alt="">
        </div>
        <div class="container">
            <div class="d-lg-none"></div>
            <div class="text-center"><h3 class="with-underline">Регистрируйтесь на сайте и получайте
                скидочный купон на Ваш Email</h3></div>
            <div class="row right">
                <div class="col-10 col-lg-5">
                    <form>
                        <h4>Заполните форму</h4>
                        <div class="form-group">
                            <label for="validationCustom01">Имя, фамилия:<span>*</span></label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Имя, фамилия:" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email:<span>*</span></label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                   placeholder="Введите Ваш Email" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <small>*поля обязательны для заполнения </small>
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input is-invalid"
                                       id="exampleCheck3" required>
                                <label class="form-check-label" for="exampleCheck3">Я принимаю условия <a href="#"
                                                                                                          title="Terms of Use">пользовательского
                                    соглашения
                                    и политику конфиденциальности.</a></label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-secondary">ОТПРАВИТЬ</button>
                        <p>Спасибо ,что заполнили форму.</p>
                    </form>
                </div>
                <div class="col-7 d-none d-lg-block"><img src="img/asset-8.png" class="img-fluid" alt="image in form"></div>
            </div>
        </div>
        <div class="row upper-img d-none d-lg-block"><img src="img/asset-9.png" class="img-fluid col-8" alt="image in form"></div>
    </section>

    <!-- отзывы -->
    <section class="section-review">
        <div class="container">
            <div class="row-fluid">
                <div class="text-center">
                    <h3 class="with-underline">Отзывы</h3>
                </div>
            </div>
            <!-- карусель -->
            <div class="news-section-carousel carousel slide" data-ride="carousel" data-min-items="3" id="testimonials">
                <div class="container">
                    <div class="carousel-extra-wrap">
                        <div class="carousel-wrap">
                            <!-- item -->
                            <div class="news-section__item item col-12 col-md-4">
                                <div class="news-section__item_thumbnail thumbnail">
                                    <img src="img/Ellipse-1.png" alt="Photo">
                                    <h5>Светлана</h5>
                                    <h6>25.02.2020</h6>
                                    <p>Вера, хотела с вами поделиться касательно
                                        пилингов Falthy. Детали TCA c минимальной
                                        выдержкой, но даже за одну процедуру
                                        клиентка увидела как размылись границы
                                        пигментных пятен и с 3 по 5 день очень
                                        комфортно реабилитировалась мелким
                                        шелушением) </p>
                                </div>
                            </div>
                            <div class="news-section__item item col-12 col-md-4">
                                <div class="news-section__item_thumbnail thumbnail">
                                    <img src="img/Ellipse-2.png" alt="Photo">
                                    <h5>Анна</h5>
                                    <h6>02.03.2020</h6>
                                    <p>Вера, хотела с вами поделиться касательно
                                        пилингов Falthy. Детали TCA c минимальной
                                        выдержкой, но даже за одну процедуру
                                        клиентка увидела как размылись границы
                                        пигментных пятен и с 3 по 5 день очень
                                        комфортно реабилитировалась мелким
                                        шелушением) </p>
                                </div>
                            </div>
                            <div class="news-section__item item col-12 col-md-4">
                                <div class="news-section__item_thumbnail thumbnail">
                                    <img src="img/Ellipse-3.png" alt="Photo">
                                    <h5>Екатерина</h5>
                                    <h6>14.03.2020</h6>
                                    <p>Вера, хотела с вами поделиться касательно
                                        пилингов Falthy. Детали TCA c минимальной
                                        выдержкой, но даже за одну процедуру
                                        клиентка увидела как размылись границы
                                        пигментных пятен и с 3 по 5 день очень
                                        комфортно реабилитировалась мелким
                                        шелушением) </p>
                                </div>
                            </div>
                            <div class="news-section__item item col-12 col-md-4">
                                <div class="news-section__item_thumbnail thumbnail">
                                    <img src="img/Ellipse-1.png" alt="Photo">
                                    <h5>Светлана</h5>
                                    <h6>25.02.2020</h6>
                                    <p>Вера, хотела с вами поделиться касательно
                                        пилингов Falthy. Детали TCA c минимальной
                                        выдержкой, но даже за одну процедуру
                                        клиентка увидела как размылись границы
                                        пигментных пятен и с 3 по 5 день очень
                                        комфортно реабилитировалась мелким
                                        шелушением) </p>
                                </div>
                            </div>
                            <div class="news-section__item item col-12 col-md-4">
                                <div class="news-section__item_thumbnail thumbnail">
                                    <img src="img/Ellipse-2.png" alt="Photo">
                                    <h5>Анна</h5>
                                    <h6>02.03.2020</h6>
                                    <p>Вера, хотела с вами поделиться касательно
                                        пилингов Falthy. Детали TCA c минимальной
                                        выдержкой, но даже за одну процедуру
                                        клиентка увидела как размылись границы
                                        пигментных пятен и с 3 по 5 день очень
                                        комфортно реабилитировалась мелким
                                        шелушением) </p>
                                </div>
                            </div>
                            <div class="news-section__item item col-12 col-md-4">
                                <div class="news-section__item_thumbnail thumbnail">
                                    <img src="img/Ellipse-3.png" alt="Photo">
                                    <h5>Екатерина</h5>
                                    <h6>14.03.2020</h6>
                                    <p>Вера, хотела с вами поделиться касательно
                                        пилингов Falthy. Детали TCA c минимальной
                                        выдержкой, но даже за одну процедуру
                                        клиентка увидела как размылись границы
                                        пигментных пятен и с 3 по 5 день очень
                                        комфортно реабилитировалась мелким
                                        шелушением) </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Элементы управления -->
                <div class="carousel-controls">
                    <a href="#" class="arrow prev" data-direction="prev"><span class="sr-only">arrow</span></a>
                    <a href="#" class="arrow next" data-direction="next"><span class="sr-only">arrow</span></a>
                </div>
                <div class="row justify-content-center">
                    <a title="Select course" href="#" class="btn btn-secondary">Выбрать курс</a></div>
                <!-- Индикаторы -->
                <ol class="carousel-indicators">
                    <li data-target="#testimonials" data-slide-to="0" class="active">
                        <span class="icon-circle-1"></span>
                        <span class="icon-circle-2"></span>
                    </li>
                    <li data-target="#testimonials" data-slide-to="1">
                        <span class="icon-circle-1"></span>
                        <span class="icon-circle-2"></span>
                    </li>
                    <li data-target="#testimonials" data-slide-to="2">
                        <span class="icon-circle-1"></span>
                        <span class="icon-circle-2"></span>
                    </li>
                    <li data-target="#testimonials" data-slide-to="3">
                        <span class="icon-circle-1"></span>
                        <span class="icon-circle-2"></span>
                    </li>
                    <li data-target="#testimonials" data-slide-to="4">
                        <span class="icon-circle-1"></span>
                        <span class="icon-circle-2"></span>
                    </li>
                </ol>
            </div><!-- /.carousel-wrap -->
        </div>
    </section>
    <section class="section-contact">
        <div class="container">
            <div class="text-center"><h3 class="text-center with-underline">Контакты</h3></div>
            <div class="mobile-city text-center d-lg-none">
                <p>Выбрать город:</p>
                <div class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                       aria-haspopup="true" aria-expanded="false">Днепропетровск</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Киев</a>
                        <a class="dropdown-item" href="#">Харьков</a>
                    </div>
                </div>
                <p>
                    Пр-т. Дмитрия Яворницкого, 107а <br>
                    Днепропетровск <br>
                    Украина, 49038
                </p>
            </div>
            <div class="row d-none d-lg-flex">
                <div class="col-12 col-md-3 col-lg-3">
                    <h5>АДРЕС:</h5>
                    <p>Проспект Дмитрия Яворницкого, 107а <br>
                        Днепропетровск <br>
                        Украина, 49038</p>
                    <h5>Режим работы:</h5>
                    <p>С понедельника по пятницу с 9:00 до 17:00</p>
                </div>
                <div class="col-12 col-md-3 col-lg-3 under">
                    <h5>ТЕЛЕФОН:</h5>
                    <p>+48 066 947 6096 <span>НАТАЛЬЯ </span></p>
                    <h5>EMAIL:</h5>
                    <a title="Send contact e-mail" href="mailto:natalypo88@gmail.com">natalypo88@gmail.com</a>
                </div>
            </div>
            <div class="row d-none d-lg-flex">
                <div class="col-8">
                    <div class="col-12"><p>Мы в социальных сетях:</p></div>
                    <a title="Go to Youtube" href="#">YOUTUBE</a>
                    <a title="Go to INSTAGRAM" href="#">INSTAGRAM</a>
                    <a title="Go to Facebook" href="">FACEBOOK</a>
                </div>
            </div>
        </div>
        <div class="container-fluid map">
            <div class="row">
                <div class="col-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2645.1292421177623!2d35.02394551574699!3d48.473234535701835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dbe2f9e857fccb%3A0x9aaf6cfdd50a697e!2sDmytra%20Yavornytskoho%20Avenue%2C%20107%2C%20Dnipropetrovs&#39;k%2C%20Dnipropetrovs&#39;ka%20oblast%2C%20Ukraina%2C%2049000!5e0!3m2!1spl!2spl!4v1595524161808!5m2!1spl!2spl"
                            style="border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                </div>
            </div>
        </div>
        <div class="mobile-contact d-lg-none">
            <div class="text-center"><p class="with-underline">Пн - Пт : 09:00 - 17:00</p></div>
            <p>+48 066 947 6096</p>
            <a title="Send contact e-mail"
               href="mailto:natalypo88@gmail.com">natalypo88@gmail.com</a>
        </div>
    </section>
    <button onclick="topFunction()" id="myBtn" title="Go to top" class="d-lg-none">
        <span class="icon-arr-up"><span class="path1"></span><span class="path2"></span></span>
    </button>
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
@endsection
