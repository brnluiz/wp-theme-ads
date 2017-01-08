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
const jshint       = require('gulp-jshint');
const browserify   = require('browserify');
const source       = require('vinyl-source-stream');
const buffer       = require('vinyl-buffer');
const uglify       = require('gulp-uglify');

// Images
const imagemin     = require('gulp-imagemin');

// Configs
const server = 'http://localhost:8888/wordpress/';
const paths = {
  scss: { src: './assets/sass/**/*.scss', dest: '.'}, 
  imgs: { src: './assets/imgs/**/*.{gif,jpg,jpeg,png}', dest: './dist/imgs' },
  js: { src: './assets/js/index.js', dest: './dist/js' },
  php: { src: './**/*.php', dest: '.' }
};

// SASS Rendering
gulp.task('build-scss', () => gulp
  .src(paths.scss.src)
  .pipe(sourcemaps.init()) // Add the map to modified source.
    .pipe(sass({
      errLogToConsole: true,
      outputStyle: 'compact',
    }))
    .pipe(autoprefixer({
      browsers: ['last 3 versions']
    }))
    .pipe(cleanCSS())
  .pipe(sourcemaps.write(paths.scss.dest))
  .pipe(gulp.dest(paths.scss.dest))
);

gulp.task('build-js', () => browserify({
    extensions: ['.js', '.jsx'],
    entries: paths.js.src,
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
  .pipe(gulp.dest(paths.js.dest))
);

gulp.task('build-imgs', () => gulp
  .src(paths.imgs.src)
  .pipe(imagemin({
    optimizationLevel: 7,
    progressive: true
  }))
  .pipe(gulp.dest(paths.imgs.dest)) 
);

// Watch task
gulp.task('watch', ['default'], () => {
  browserSync.init({
    files: [paths.php.src],
    proxy: server,
  });

  gulp.watch(paths.scss.src, ['build-scss', browserSync.reload]);
  gulp.watch(paths.imgs.src, ['build-imgs', browserSync.reload]);
  gulp.watch(paths.js.src,   ['build-js',   browserSync.reload]);
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