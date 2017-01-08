'use strict'

// Gulp & Utils
const gulp         = require('gulp');
const browserSync  = require('browser-sync').create();
const concat       = require('gulp-concat');
const gutil        = require('gulp-util');
const sourcemaps   = require('gulp-sourcemaps');

// CSS
const sass         = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS     = require('gulp-clean-css');

// JS
const browserify   = require('browserify');
const source       = require('vinyl-source-stream');
const buffer       = require('vinyl-buffer');
const uglify       = require('gulp-uglify');

// Images
const imagemin     = require('gulp-imagemin');

// Configs
const configs = {
  sync: {
    files: './**/*.php',
    proxy: 'http://localhost:8888/wordpress/'
  },
  scss: { 
    src: './assets/sass/**/*.scss', 
    dest: '.'
  }, 
  imgs: { 
    src: './assets/imgs/**/*.{gif,jpg,jpeg,png}', 
    dest: './dist/imgs'
  },
  js: {
    src: './assets/js/index.js', 
    dest: './dist/js'
  }
};

// SASS Rendering
gulp.task('build-scss', () => gulp
  .src(configs.scss.src)
  .pipe(sourcemaps.init()) // Add the map to modified source.
    .pipe(sass({
      errLogToConsole: true,
      outputStyle: 'compact',
    }))
    .pipe(autoprefixer({
      browsers: ['last 3 versions']
    }))
    .pipe(cleanCSS())
  .pipe(sourcemaps.write(configs.scss.dest))
  .pipe(gulp.dest(configs.scss.dest))
);

gulp.task('build-js', () => browserify({
    extensions: ['.js', '.jsx'],
    entries: configs.js.src,
    paths: ['./node_modules', './assets/js/'],
    debug: true
  })
  .bundle()
  .pipe(source('main.js'))
  .pipe(buffer())
  .pipe(sourcemaps.init({loadMaps: true}))
    .pipe(uglify())
    .on('error', gutil.log)
  .pipe(sourcemaps.write('.'))
  .pipe(gulp.dest(configs.js.dest))
);

gulp.task('build-imgs', () => gulp
  .src(configs.imgs.src)
  .pipe(imagemin({
    optimizationLevel: 7,
    progressive: true
  }))
  .pipe(gulp.dest(configs.imgs.dest)) 
);

// Watch task
gulp.task('watch', ['default'], () => {
  browserSync.init(configs.sync);
  gulp.watch(configs.scss.src, ['build-scss', browserSync.reload]);
  gulp.watch(configs.imgs.src, ['build-imgs', browserSync.reload]);
  gulp.watch(configs.js.src,   ['build-js',   browserSync.reload]);
});

// Default task
gulp.task('default', [
  'build-scss',
  'build-imgs',
  'build-js',
]);

/*
 * https://premium.wpmudev.org/blog/gulp-for-wordpress
 * https://ahmadawais.com/introducing-wpgulp-an-easy-to-use-wordpress-gulp-boilerplate/
 * https://gist.github.com/sturobson/8343865
 */