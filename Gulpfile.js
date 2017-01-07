'use strict'

const gulp = require('gulp');
const sass = require('gulp-sass');
const sourcemaps  = require('gulp-sourcemaps');
const concat      = require('gulp-concat');
const gutil       = require('gulp-util');
const browserSync = require('browser-sync');
const imagemin    = require('gulp-imagemin');
const livereload  = require('gulp-livereload');
const jshint      = require('gulp-jshint');
// const source      = require('vinyl-source-stream');
// const browserify  = require('browserify');
// const babel       = require('gulp-babel');
// const babelify    = require('babelify');
// const buffer      = require('vinyl-buffer');

const scssSrcPath = './src/sass/**/*.scss';
const jsSrcPath   = './src/js/**/*.{js,jsx}';
const imgSrcPath  = './src/imgs/**/*.{gif,jpg,jpeg,png}';
const phpSrcPath  = './**/*.php';

const assetsPath  = '.';

// SASS Rendering
gulp.task('build-scss', () => gulp
  .src(scssSrcPath)
  .pipe(sourcemaps.init()) // Add the map to modified source.
  .pipe(sass().on('error', sass.logError))
  .pipe(sourcemaps.write()) // Add the map to modified source.
  .pipe(gulp.dest(assetsPath))
  .pipe(livereload())
);

// JS minify and concat
// gulp.task('build-js', () => browserify({
//     extensions: ['.js', '.jsx'],
//     entries: 'js/index.js',
//     paths: ['./node_modules','./js/']
//   })
//   .transform(babelify.configure({
//       ignore: /(bower_components)|(node_modules)/
//   }))
//   .bundle()
//   .on("error", function (err) { console.log("Error : " + err.message); })
//   .pipe(source('app.js'))
//   // .pipe('buffer')
//   // .pipe(sourcemaps.init())
//   // // .pipe(concat('app.js'))
//   // //only uglify if gulp is ran with '--type production'
//   // .pipe(gutil.env.type === 'production' ? uglify() : gutil.noop())
//   // .pipe(sourcemaps.write())
//   .pipe(gulp.dest(assetsPath + '/js'))
// );

gulp.task('build-js', () => gulp
  .src('src/js/*.js')
  .pipe(jshint())
  .pipe(jshint.reporter('fail'))
  .pipe(concat('main.js'))
  .pipe(gulp.dest(assetsPath + '/js'))
  .pipe(livereload())
);

gulp.task('default', [
  'build-scss',
  'build-imgs',
  'build-js',
]);

gulp.task('build-imgs', () => gulp
  .src(imgSrcPath)
  .pipe(imagemin({
    optimizationLevel: 7,
    progressive: true
  }))
  .pipe(gulp.dest(assetsPath + '/imgs')) 
  .pipe(livereload())
);

gulp.task('build-php', () => gulp
  .src(phpSrcPath)
  .pipe(livereload())
);

// Watch task
gulp.task('watch', ['default'], () => {
  livereload.listen();
  gulp.watch(scssSrcPath, ['build-scss']);
  gulp.watch(imgSrcPath,  ['build-imgs']);
  gulp.watch(jsSrcPath,   ['build-js']);
  gulp.watch(phpSrcPath,  ['build-php']);
});