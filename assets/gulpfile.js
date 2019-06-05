var gulp = require('gulp');
var sass = require('gulp-sass');
var cssWrap = require('gulp-css-wrap');

var gutil = require('gulp-util');
var $    = require('gulp-load-plugins')();
var sourcemaps = require('gulp-sourcemaps');

var concat = require('gulp-concat');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');
var wait = require('gulp-wait2');
var pump = require('pump');
var browserSync = require('browser-sync').create();

var sassPaths = [
  'node_modules/foundation-sites/scss',
  'node_modules/motion-ui/src'
];

var jsFiles = [
    'js/app.js',
    'js/new.js',
];

// Static Server + watching scss/html files
gulp.task('serve', ['sass'], function() {

    browserSync.init({
        // server: "./app"
        // or
        proxy: 'http://localhost:8888/normalize'
    });

    gulp.watch("app/scss/*.scss", ['sass']);
    
    // Rafraichissement au changement html
    // gulp.watch("../site/**/*.php").on('change', browserSync.reload);
});

// Main Site SASS
gulp.task('sass', function() {
  return gulp.src('scss/*.scss')
    .pipe(sourcemaps.init())
    .pipe($.sass({
      includePaths: sassPaths,
      outputStyle: 'compressed' // if css compressed **file size**
    })
    .on('error', $.sass.logError))
    .pipe(sourcemaps.write('/'))
    .pipe(gulp.dest('css'))
    .pipe(browserSync.stream());
});


// Builder CSS Wrap
gulp.task('builder_css_wrap', function() {
  setTimeout(function(){

    return gulp.src('css/app.css')
      //.pipe(wait(1000))
      .pipe(cssWrap({selector:'.builder-entry-content'}))
      .pipe(gulp.dest('../site/fields/builder/assets/css'));

  }, 1000);

});


// Scripts
var jsDest = 'js/min';

// App
gulp.task('script_app', function (cb) {
  pump([
        gulp.src('js/app.js'),
        uglify(),
        gulp.dest(jsDest)
    ],
    cb
  );
});

// All Scripts compiled
var jsDestCompile = 'js/compiled';

gulp.task('scripts', function(cb) {
  pump([
        gulp.src(jsFiles),
        concat('global.js'),
        rename('global.min.js'),
        //uglify(),
        gulp.dest(jsDestCompile)
    ],
    cb
  );

});



// Watch
gulp.task('watch', ['sass','scripts','builder_css_wrap', 'serve'], function() {
  gulp.watch(['scss/**/*.scss'], ['sass','builder_css_wrap', 'serve']);
  gulp.watch(jsFiles, ['scripts']);
});
