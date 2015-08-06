var gulp    = require('gulp'),
    less    = require('gulp-less'),
    cssmin  = require('gulp-cssmin'),
    rename  = require('gulp-rename');

gulp.task('watch', function () {
    gulp.watch('./wp-content/themes/buitron/assets/buitron/source/less/*.less', ['less']);
});

gulp.task('less', function(){

    return gulp.src('./wp-content/themes/buitron/assets/buitron/source/less/styles.less')
    .pipe(less().on('error', function (err) {
        console.log(err);
    }))
    .pipe(cssmin().on('error', function(err) {
        console.log(err);
    }))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('./wp-content/themes/buitron/assets/buitron/dist/css/'));

});

gulp.task('default', ['less', 'watch']);