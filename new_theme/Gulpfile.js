var gulp = require('gulp');
var sass = require('gulp-sass');
var plugins = require('gulp-load-plugins')();

gulp.task('sass', function() {
  gulp.src('./development/style.sass')
      .pipe(plugins.sass())
      .pipe(plugins.autoprefixer())
      .pipe(plugins.csso())
      .pipe(plugins.rename({
        suffix: '.min'
      }))
      .pipe(gulp.dest('./'))
});

gulp.task('watch', function () {
    gulp.watch('./development/**/style.sass', ['sass'] );
});

gulp.task('default', ['watch']);
