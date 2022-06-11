<?php
/*
Template Name: faculty
*/
?>

<?php get_header(); ?>

<div class="shadow"></div>

<main class="main">

  <section class="faculty">
    <div class="container faculty__container">
      <div class="faculty__contents">
        <div class="faculty__content">
          <img class="faculty__content-img" src="<?php bloginfo('template_url'); ?>/app/img//main/faculty/chairs.png"
            alt="">
          <a class="faculty__content-link" href="#">Кафедры</a>
        </div>
        <div class="faculty__content">
          <img class="faculty__content-img"
            src="<?php bloginfo('template_url'); ?>/app/img//main/faculty/specialties.png" alt="">
          <a class="faculty__content-link" href="#">Специальности</a>
        </div>
        <div class="faculty__content">
          <img class="faculty__content-img"
            src="<?php bloginfo('template_url'); ?>/app/img//main/faculty/magistracy.png" alt="">
          <a class="faculty__content-link" href="#">Магистратура</a>
        </div>
        <div class="faculty__content">
          <img class="faculty__content-img"
            src="<?php bloginfo('template_url'); ?>/app/img//main/faculty/graduate-school.png" alt="">
          <a class="faculty__content-link" href="#">Аспирантура</a>
        </div>
        <div class="faculty__content">
          <img class="faculty__content-img"
            src="<?php bloginfo('template_url'); ?>/app/img//main/faculty/scientific-schools.png" alt="">
          <a class="faculty__content-link" href="#">Научные школы</a>
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