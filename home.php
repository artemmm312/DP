<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>

<div class="shadow"></div>

<main class="main">

  <section class="top-main">
    <div class="left-img">
      <img src="<?php bloginfo('template_url'); ?>/app/img/main/illustrations-left.svg">
    </div>
    <div class="right-img">
      <img src="<?php bloginfo('template_url'); ?>/app/img/main/illustrations-right.svg">
    </div>
    <div class="container top-main__container">
      <div class="top-main__slider">
        <div class="top-main__slider-item">
          <div class="top-main__slider-content">
            <h1 class="top-main__slider-title">
              Заголовок слайдера
            </h1>
            <p class="top-main__slider-text">
              Внезапно, действия представителей оппозиции,
              взависимости от их уровня, должны быть призваны
              к ответу, мы вынуждены отталкиваться от этого.
            </p>
            <button class="top-main__slider-btn" type="button">
              <a class="top-main__slider-btn-link" href="#">
                Подробнее
              </a>
            </button>
          </div>
          <div class="top-main__slider-img">
            <img src="<?php bloginfo('template_url'); ?>/app/img/main/slider/img.png">
          </div>
        </div>
        <div class="top-main__slider-item">
          <div class="top-main__slider-content">
            <h1 class="top-main__slider-title">
              Заголовок слайдера
            </h1>
            <p class="top-main__slider-text">
              Внезапно, действия представителей оппозиции,
              взависимости от их уровня, должны быть призваны
              к ответу, мы вынуждены отталкиваться от этого.
            </p>
            <button class="top-main__slider-btn" type="button">
              <a class="top-main__slider-btn-link" href="#">
                Подробнее
              </a>
            </button>
          </div>
          <div class="top-main__slider-img">
            <img src="<?php bloginfo('template_url'); ?>/app/img/main/slider/img.png">
          </div>
        </div>
        <div class="top-main__slider-item">
          <div class="top-main__slider-content">
            <h1 class="top-main__slider-title">
              Заголовок слайдера
            </h1>
            <p class="top-main__slider-text">
              Внезапно, действия представителей оппозиции,
              взависимости от их уровня, должны быть призваны
              к ответу, мы вынуждены отталкиваться от этого.
            </p>
            <button class="top-main__slider-btn" type="button">
              <a class="top-main__slider-btn-link" href="#">
                Подробнее
              </a>
            </button>
          </div>
          <div class="top-main__slider-img">
            <img src="<?php bloginfo('template_url'); ?>/app/img/main/slider/img.png">
          </div>
        </div>
        <div class="top-main__slider-item">
          <div class="top-main__slider-content">
            <h1 class="top-main__slider-title">
              Заголовок слайдера
            </h1>
            <p class="top-main__slider-text">
              Внезапно, действия представителей оппозиции,
              взависимости от их уровня, должны быть призваны
              к ответу, мы вынуждены отталкиваться от этого.
            </p>
            <button class="top-main__slider-btn" type="button">
              <a class="top-main__slider-btn-link" href="#">
                Подробнее
              </a>
            </button>
          </div>
          <div class="top-main__slider-img">
            <img src="<?php bloginfo('template_url'); ?>/app/img/main/slider/img.png">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="center-main">
    <div class="container center-main__container">
      <div class="news">
        <nav class="news__navbar">
          <input id="ads" type="radio" name="news__navbar-input">
          <label class="news__navbar-item ads" for="ads">
            <a class="news__navbar-link" href="/">Объявления</a>
          </label>
          <input id="news" type="radio" name="news__navbar-input" checked>
          <label class="news__navbar-item m-news" for="news">
            <a class="news__navbar-link" href="/">Новости</a>
          </label>
          <input id="sport" type="radio" name="news__navbar-input">
          <label class="news__navbar-item sport" for="sport">
            <a class="news__navbar-link" href="/">Спортивные события</a>
          </label>
          <input id="all-news" type="radio" name="news__navbar-input">
          <label class="news__navbar-item all-news" for="all-news">
            <a class="news__navbar-link" href="/">Все новости</a>
          </label>
        </nav>
        <div class="news__contents">
          <div class="news__content">
            <img class="news__img " src="<?php bloginfo('template_url'); ?>/app/img/main/news/img.png">
            <div class="news__text">
              <p class="news__text-date">15.07.2021</p>
              <a class="news__text-header" href="#">
                Предварительная регистрация абитуриентов
              </a>
              <p class="news__text-preview">
                А ещё интерактивные прототипы могут быть
                превращены в посмешище, хотя само их
                существование приносит несомненную пользу.
              </p>
              <a class="news__text-more" href="/">
                Подробнеее
              </a>
            </div>
          </div>
          <div class="news__content">
            <img class="news__img " src="<?php bloginfo('template_url'); ?>/app/img/main/news/img.png">
            <div class="news__text">
              <p class="news__text-date">15.07.2021</p>
              <a class="news__text-header" href="#">
                Предварительная регистрация абитуриентов
              </a>
              <p class="news__text-preview">
                А ещё интерактивные прототипы могут быть
                превращены в посмешище, хотя само их
                существование приносит несомненную пользу.
              </p>
              <a class="news__text-more" href="/">
                Подробнеее
              </a>
            </div>
          </div>
          <div class="news__content">
            <img class="news__img " src="<?php bloginfo('template_url'); ?>/app/img/main/news/img.png">
            <div class="news__text">
              <p class="news__text-date">15.07.2021</p>
              <a class="news__text-header" href="#">
                Предварительная регистрация абитуриентов
              </a>
              <p class="news__text-preview">
                А ещё интерактивные прототипы могут быть
                превращены в посмешище, хотя само их
                существование приносит несомненную пользу.
              </p>
              <a class="news__text-more" href="/">
                Подробнеее
              </a>
            </div>
          </div>
          <div class="news__content">
            <img class="news__img " src="<?php bloginfo('template_url'); ?>/app/img/main/news/img.png">
            <div class="news__text">
              <p class="news__text-date">15.07.2021</p>
              <a class="news__text-header" href="#">
                Предварительная регистрация абитуриентов
              </a>
              <p class="news__text-preview">
                А ещё интерактивные прототипы могут быть
                превращены в посмешище, хотя само их
                существование приносит несомненную пользу.
              </p>
              <a class="news__text-more" href="/">
                Подробнеее
              </a>
            </div>
          </div>
          <div class="news__content">
            <img class="news__img " src="<?php bloginfo('template_url'); ?>/app/img/main/news/img.png">
            <div class="news__text">
              <p class="news__text-date">15.07.2021</p>
              <a class="news__text-header" href="#">
                Предварительная регистрация абитуриентов
              </a>
              <p class="news__text-preview">
                А ещё интерактивные прототипы могут быть
                превращены в посмешище, хотя само их
                существование приносит несомненную пользу.
              </p>
              <a class="news__text-more" href="/">
                Подробнеее
              </a>
            </div>
          </div>
          <div class="news__content">
            <img class="news__img " src="<?php bloginfo('template_url'); ?>/app/img/main/news/img.png">
            <div class="news__text">
              <p class="news__text-date">15.07.2021</p>
              <a class="news__text-header" href="#">
                Предварительная регистрация абитуриентов
              </a>
              <p class="news__text-preview">
                А ещё интерактивные прототипы могут быть
                превращены в посмешище, хотя само их
                существование приносит несомненную пользу.
              </p>
              <a class="news__text-more" href="/">
                Подробнеее
              </a>
            </div>
          </div>
        </div>
      </div>

      <?php get_sidebar(); ?>

    </div>
  </section>

  <section class="bottom-main">
    <div class="container bottom-main__container">
      <div class="bottom-main__content">
        <h1 class="bottom-main__content-header">
          Специальности — 2022
        </h1>
        <p class="bottom-main__content-text">
          Приятно, граждане, наблюдать, как независимые государства
          подвергнуты целой серии независимых!
        </p>
      </div>
      <img class="bottom-main__img" src="<?php bloginfo('template_url'); ?>/app/img/main/foot/img.png">
    </div>
  </section>
</main>

<?php get_footer(); ?>