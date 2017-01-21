var gulp = require('gulp');
var sass = require('gulp-sass');
var livereload = require('gulp-livereload');


// sass
gulp.task('sass', function () {
  return gulp.src('./scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./'))
    .pipe(livereload());
});

// watches sass
gulp.task('watch', function() {
  gulp.watch('scss/**/*.scss',['sass']);
});


// default
gulp.task('default', function() {
  // place code here
});