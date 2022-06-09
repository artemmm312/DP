<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Faculty of Production Technologies</title>

  <?php wp_head(); ?>

</head>

<body>
  <header class="header">
    <section class="top-header">
      <div class="container top-header__container">
        <div class="top-header__date" id="header-date"></div>
        <nav class="top-header__navbar">
          <ul class="top-header__navbar-menu">
            <li class="top-header__navbar-menu-item"><a href="/">УО «ВГТУ»</a></li>
            <li class="top-header__navbar-menu-item"><a href="/">Абитуриент ВГТУ</a></li>
            <li class="top-header__navbar-menu-adaptiv">
              <div class="item">
                <a href="/">ФЭБУ</a>
                <img class="stroke-down"
                  src="<?php bloginfo('template_url'); ?>/app/img/header/top-header/stroke/stroke-down.svg">
                <img class="stroke-up"
                  src="<?php bloginfo('template_url'); ?>/app/img/header/top-header/stroke/stroke-up.svg">
              </div>
              <div class="dropdown-top">
                <a class="dropdown-top__link" href="/">ФИТР</a>
                <a class="dropdown-top__link" href="/">ФД</a>
                <a class="dropdown-top__link" href="/">ЗФ</a>
                <a class="dropdown-top__link" href="/">ФПК и ПК</a>
              </div>
            </li>
            <li class="top-header__navbar-menu-item"><a href="/">ФЭБУ </a></li>
            <li class="top-header__navbar-menu-item"><a href="/">ФИТР</a></li>
            <li class="top-header__navbar-menu-item"><a href="/">ФД</a></li>
            <li class="top-header__navbar-menu-item"><a href="/">ЗФ</a></li>
            <li class="top-header__navbar-menu-item"><a href="/">ФПК и ПК</a></li>
            <li class="top-header__navbar-menu-item"><a href="/">Контакты</a></li>
          </ul>
          <div class="top-header__tools">
            <img class="search-icon" src="<?php bloginfo('template_url'); ?>/app/img/header/top-header/search.svg">
            <img class="eye-icon" src="<?php bloginfo('template_url'); ?>/app/img/header/top-header/eye.svg">
          </div>
        </nav>
      </div>
    </section>
    <section class="bottom-header">
      <div class="container bottom-header__container">
        <img class="bottom-header__logo"
          src="<?php bloginfo('template_url'); ?>/app/img/header/bottom-header/logo/logo-header.svg">
        <nav class="bottom-header__navbar">
          <ul class="bottom-header__nav-menu">
            <li class="bottom-header__nav-menu-item">
              <a class="bottom-header__nav-menu-link">Главная</a>
            </li>
            <li class="bottom-header__nav-menu-item">
              <a class="bottom-header__nav-menu-link">Деканат</a>
            </li>
            <li class="bottom-header__nav-menu-item drop">
              <a class="bottom-header__nav-menu-link">Факультет</a>
              <img class="stroke-down"
                src="<?php bloginfo('template_url'); ?>/app/img/header/bottom-header/stroke/stroke-down.svg">
              <img class="stroke-up"
                src="<?php bloginfo('template_url'); ?>/app/img/header/bottom-header/stroke/stroke-up.svg">
              <div class="dropdown">
                <div class="dropdown__content-left">
                  <h1 class="dropdown__title">
                    Факультет
                  </h1>
                  <p class="dropdown__text">
                    Факультет единственный в Республике Беларусь
                    осуществляет подготовку специалистов высшей
                    квалификации
                    для предприятий текстильной, швейной
                    и обувной промышленности.
                  </p>
                  <img class="dropdown__img"
                    src="<?php bloginfo('template_url'); ?>/app/img/header/bottom-header/img.png">
                </div>
                <div class="dropdown__content-middle">
                  <a class="dropdown__link" href="">Кафедры</a>
                  <a class="dropdown__link" href="">Специальности</a>
                  <a class="dropdown__link" href="">Магистратура</a>
                  <a class="dropdown__link" href="">Аспирантура</a>
                  <a class="dropdown__link" href="">Научные школы</a>
                </div>
                <div class="dropdown__content-right">
                  <p class="dropdown__text">
                    Факультет производственных технологий основан 1
                    февраля 2017 года на базе «Конструкторско-
                    технологического факультета», организованного в
                    июне 1987 года в результате слияния
                    двух факультетов: «Швейного производства» и «Обувного
                    производства».
                  </p>
                  <p class="dropdown__text">
                    На факультете работают 85 преподавателей, в том
                    числе: 6 докторов наук, профессоров, 48
                    преподавателей имеют ученые степе-ни кандидата
                    наук и звания доцента.
                  </p>
                  <div class="dropdown__elements">
                    <div class="social-icon bottom-header__social-icon">
                      <a class="social-icon__vk" href="https://vk.com/vstu_by">
                        <img src="<?php bloginfo('template_url'); ?>/app/img/header/bottom-header/social-icon/vk.svg">
                      </a>
                      <a class="social-icon__instagram" href="https://www.instagram.com/vstu_vitebsk/">
                        <img
                          src="<?php bloginfo('template_url'); ?>/app/img/header/bottom-header/social-icon/instagram.svg">
                      </a>
                      <a class="social-icon__youtube" href="https://www.youtube.com/channel/UC5lAaVyyvZt_d-K17kjr3cg">
                        <img
                          src="<?php bloginfo('template_url'); ?>/app/img/header/bottom-header/social-icon/youtube.svg">
                      </a>
                    </div>
                    <div class="language bottom-header__language">
                      <input id="RU1" type="radio" name="bottom-header__language" checked>
                      <label for="RU1">RU</label>
                      <input id="BY1" type="radio" name="bottom-header__language">
                      <label for="BY1">BY</label>
                      <input id="EN1" type="radio" name="bottom-header__language">
                      <label for="EN1">EN</label>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="bottom-header__nav-menu-item">
              <a class="bottom-header__nav-menu-link">Абитуриенту</a>
              <img class="stroke-down"
                src="<?php bloginfo('template_url'); ?>/app/img/header/bottom-header/stroke/stroke-down.svg">
              <img class="stroke-up"
                src="<?php bloginfo('template_url'); ?>/app/img/header/bottom-header/stroke/stroke-up.svg">
            </li>
            <li class="bottom-header__nav-menu-item">
              <a class="bottom-header__nav-menu-link">Студенту</a>
              <img class="stroke-down"
                src="<?php bloginfo('template_url'); ?>/app/img/header/bottom-header/stroke/stroke-down.svg">
              <img class="stroke-up"
                src="<?php bloginfo('template_url'); ?>/app/img/header/bottom-header/stroke/stroke-up.svg">
            </li>
            <li class="bottom-header__nav-menu-item">
              <a class="bottom-header__nav-menu-link">Новости</a>
            </li>
            <li class="bottom-header__nav-menu-item">
              <a class="bottom-header__nav-menu-link">Медиа</a>
              <img class="stroke-down"
                src="<?php bloginfo('template_url'); ?>/app/img/header/bottom-header/stroke/stroke-down.svg">
              <img class="stroke-up"
                src="<?php bloginfo('template_url'); ?>/app/img/header/bottom-header/stroke/stroke-up.svg">
            </li>
          </ul>
          <label class="burger" for="burger">
            <input type="checkbox" id="burger">
            <img class="checked"
              src="<?php bloginfo('template_url'); ?>/app/img/header/bottom-header/burger/burger-menu.svg">
            <img class="unchecked"
              src="<?php bloginfo('template_url'); ?>/app/img/header/bottom-header/burger/btn-close.svg">
            <div class="burger-menu">
              <div class="burger-menu__header">
                <h1 class="burger-title">Меню</h1>
                <a class="feedback-link" href="/">Форма обратной связи</a>
              </div>
              <div class="burger-menu__element">
                <a class="burger-menu__element-link" href="/">Главная</a>
              </div>
              <div class="burger-menu__element">
                <a class="burger-menu__element-link" href="/">Деканат</a>
              </div>
              <div class="burger-menu__element">
                <input type="checkbox" id="element1" checked="false">
                <label for="element1">
                  Факультет
                  <img class="stroke-down"
                    src="<?php bloginfo('template_url'); ?>/app/img/header/bottom-header/burger/stroke/stroke-down.svg">
                  <img class="stroke-up"
                    src="<?php bloginfo('template_url'); ?>/app/img/header/bottom-header/burger/stroke/stroke-up.svg">
                </label>
                <div class="burger-menu-dropdown">
                  <a href="/">Специальности</a>
                  <a href="/">Кафедры</a>
                  <a href="/">Деканат</a>
                  <a href="/">Достижения</a>
                  <a href="/">Доска почета</a>
                </div>
              </div>
              <div class="burger-menu__element">
                <input type="checkbox" id="element2" checked="false">
                <label for="element2">
                  Абитуриенту
                  <img class="stroke-down"
                    src="<?php bloginfo('template_url'); ?>/app/img/header/bottom-header/burger/stroke/stroke-down.svg">
                  <img class="stroke-up"
                    src="<?php bloginfo('template_url'); ?>/app/img/header/bottom-header/burger/stroke/stroke-up.svg">
                </label>
                <div class="burger-menu-dropdown">
                  <a href="https://abiturient.vstu.by/ru/category/news/">Новости</a>
                  <a href="https://abiturient.vstu.by/ru/category/podgotovka/">Подготовка</a>
                  <a href="https://abiturient.vstu.by/ru/category/testirovanie/">Тестирование</a>
                  <a href="https://abiturient.vstu.by/ru/category/postuplenie/">Поступление</a>
                  <a href="https://abiturient.vstu.by/ru/kontakty/">Контакты</a>
                </div>
              </div>
              <div class="burger-menu__element">
                <input type="checkbox" id="element3" checked="false">
                <label for="element3">
                  Студенту
                  <img class="stroke-down"
                    src="<?php bloginfo('template_url'); ?>/app/img/header/bottom-header/burger/stroke/stroke-down.svg">
                  <img class="stroke-up"
                    src="<?php bloginfo('template_url'); ?>/app/img/header/bottom-header/burger/stroke/stroke-up.svg">
                </label>
                <div class="burger-menu-dropdown">
                  <a href="https://vstu.by/studentam-ru/raspisanie">Расписание</a>
                  <a href="https://vstu.by/studentam-ru/student-hall-fame">Доска почта</a>
                  <a href="https://cntr.vstu.by/">Центр развития карьеры</a>
                  <a href="https://vstu.by/studentam-ru/ideologicheskaya-i-vospitatelnaya-rabota">Отдел воспитательной
                    работы</a>
                  <a href="https://ovr.vstu.by/socialno-psihologicheskaja-sluzhba/">Психологическая помощь</a>
                  <a href="https://stud.vstu.by/">Студенческий клуб</a>
                </div>
              </div>
              <div class="burger-menu__element">
                <a class="burger-menu__element-link" href="/">Новости</a>
              </div>
              <div class="burger-menu__element">
                <input type="checkbox" id="element5" checked="false">
                <label for="element5">
                  Медиа
                  <img class="stroke-down"
                    src="<?php bloginfo('template_url'); ?>/app/img/header/bottom-header/burger/stroke/stroke-down.svg">
                  <img class="stroke-up"
                    src="<?php bloginfo('template_url'); ?>/app/img/header/bottom-header/burger/stroke/stroke-up.svg">
                </label>
                <div class="burger-menu-dropdown">
                  <a href="/">1 пункт</a>
                  <a href="/">2 пункт</a>
                  <a href="/">3 пункт</a>
                </div>
              </div>
              <div class="burger-menu__footer">
                <div class="social-icon burger__social-icon">
                  <a class="social-icon__vk" href="https://vk.com/vstu_by">
                    <img
                      src="<?php bloginfo('template_url'); ?>/app/img/header/bottom-header/burger/social-icon/vk.svg">
                  </a>
                  <a class="social-icon__instagram" href="https://www.instagram.com/vstu_vitebsk/">
                    <img
                      src="<?php bloginfo('template_url'); ?>/app/img/header/bottom-header/burger/social-icon/instagram.svg">
                  </a>
                  <a class="social-icon__youtube" href="https://www.youtube.com/channel/UC5lAaVyyvZt_d-K17kjr3cg">
                    <img
                      src="<?php bloginfo('template_url'); ?>/app/img/header/bottom-header/burger/social-icon/youtube.svg">
                  </a>
                </div>
                <div class="language burger__language">
                  <input id="RU2" type="radio" name="burger__language" checked>
                  <label for="RU2">RU</label>
                  <input id="BY2" type="radio" name="burger__language">
                  <label for="BY2">BY</label>
                  <input id="EN2" type="radio" name="burger__language">
                  <label for="EN2">EN</label>
                </div>
              </div>
            </div>
          </label>
        </nav>
      </div>
    </section>
  </header>