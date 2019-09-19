var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync');
var php = require('gulp-connect-php');
var plumber = require('gulp-plumber');
var notify = require('gulp-notify');
var beeper = require('beeper');

gulp.task('css', function() {
  return gulp.src('src/scss/stylesheet.scss')
    .pipe(plumbError())
    .pipe(sass())
    .pipe(gulp.dest('dist/css/'))
    .pipe(browserSync.reload({stream:true}));
});

gulp.task('default', function() {
  php.server({
    port: 8000,
    keepalive: true // default was true
  }, function() {
    browserSync({
      proxy: '127.0.0.1:8000'
    });
  });

  gulp.watch('*.php').on('change', function() {
    browserSync.reload();
  });

  gulp.watch('src/scss/stylesheet.scss', gulp.series('css'));
});

function plumbError() {
  return plumber({
    errorHandler: function(err) {
      notify.onError({
        templateOptions: {
          date: new Date()
        },
        title: "Gulp error in " + err.plugin,
        message:  err.formatted
      })(err);
      beeper();
      this.emit('end');
    }
  })
}