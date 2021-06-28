var gulp         = require('gulp'),
    sass         = require('gulp-sass')(require('sass')),
    plumber      = require('gulp-plumber'),
    notify       = require('gulp-notify'),
    autoprefixer = require('gulp-autoprefixer'),
    minCss       = require('gulp-minify-css'),
    rename       = require('gulp-rename');

var config = {
    src: './css/styles.sass',
    dest: './css/'
};

// Error message
var onError = function (err) {
    notify.onError({
        title   : 'Gulp',
        subtitle: 'Failure!',
        message : 'Error: <%= error.message %>',
        sound   : 'Beep'
    })(err);

    this.emit('end');
};

// Task: `styles`.
gulp.task('styles', function () {
  var stream = gulp
      .src(config.src)
      .pipe(plumber({errorHandler: onError}))

      // output non-minified CSS file
      .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
      .pipe(autoprefixer())
      .pipe(gulp.dest(config.dest))
      
      // output the minified version
      .pipe(minCss())
      .pipe(rename({ extname: '.min.css' }))
      .pipe(gulp.dest(config.dest));

  return stream
      .pipe(gulp.dest('config.dest'))
      .pipe( notify( { message: 'TASK: "styles" Completed! 💯', onLast: true } ) );
});

// Task: `watch`
gulp.task('watch', function() {
    gulp.watch('./css/*.sass', gulp.series('styles'));
});

// Task: `default`
gulp.task('default', gulp.series('watch'));