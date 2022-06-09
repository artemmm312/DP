const {src, dest, watch, parallel, series} = require('gulp');

const scss          = require('gulp-sass')(require('sass'));
const concat        = require('gulp-concat');
const browserSync   = require('browser-sync').create();
const uglify        = require('gulp-uglify-es').default;
const autoprefixer  = require('gulp-autoprefixer');
const imagemin      = require('gulp-imagemin');
const del           = require('del');
const gulpStylelint = require('gulp-stylelint');

function browsersync() {
  browserSync.init({
    /* server: {
      baseDir: 'app/'
    } */
    proxy: 'http://diplom/',
    host: 'diplom',
    open: 'external'
  });
}

function cleanDist() {
  return del('dist')
}

function images() {
  return src('app/img/**/*')
    .pipe(imagemin(
      [
        imagemin.gifsicle({
          interlaced: true
        }),
        imagemin.mozjpeg({
          quality: 75,
          progressive: true
        }),
        imagemin.optipng({
          optimizationLevel: 5
        }),
        imagemin.svgo({
          plugins: [
            {removeViewBox: true},
            {cleanupIDs: false}
          ]
        })
      ]
    ))
    .pipe(dest('dist/img'))
}

function scripts() {
  return src([
      'node_modules/jquery/dist/jquery.js',
      'app/js/main.js'
    ])
    .pipe(concat('main.min.js'))
    .pipe(uglify())
    .pipe(dest('app/js'))
    .pipe(browserSync.stream())
}

function styles() {
  return src('app/scss/**/*.scss')
    .pipe(scss({
      outputStyle: 'compressed'
    }))
    .pipe(concat('style.min.css'))
    .pipe(autoprefixer({
      overrideBrowserslist: ['last 10 versions'],
      grid: true,

    }))
    .pipe(dest('app/css'))
    .pipe(browserSync.stream())
}

function stylelint() {
  return src('app/scss/**/*.scss')
    .pipe(gulpStylelint({
      reporters: [{
        formatter: 'string',
        console: true
      }]
    }));
}

function build() {
  return src([
      'app/css/style.min.css',
      'app/fonts/**/*',
      'app/js/main.min.js',
      'app/*.html'
    ], {
      base: 'app'
    })
    .pipe(dest('dist'))
}

function watching() {
  watch(['app/scss/**/*.scss'], styles);
  watch(['app/js/**/*.js', '!app/js/main.min.js'], scripts);
  //watch(['app/*.html']).on('change', browserSync.reload);
  watch(['*.php']).on('change', browserSync.reload);
}

exports.browsersync  = browsersync;
exports.styles       = styles;
exports.watching     = watching;
exports.scripts      = scripts;
exports.images       = images;
exports.stylelint    = stylelint;

exports.default = parallel(styles, scripts, browsersync, watching);

exports.build = series(cleanDist, images, build);