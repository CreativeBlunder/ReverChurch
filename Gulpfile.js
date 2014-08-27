var gulp   = require('gulp'),
    less   = require('gulp-less'),
    notify = require('gulp-notify');

gulp.task('theme', function() {
    gulp.src('less/theme.less')
        .pipe(less())
        .pipe(gulp.dest('css'))
        .pipe(notify("<%= file.relative %> was successfully compiled!"));
});
gulp.task('bootstrap', function() {
    gulp.src('less/bootstrap/bootstrap.less')
        .pipe(less())
        .pipe(gulp.dest('css'))
        .pipe(notify("<%= file.relative %> was successfully compiled!"));
});

gulp.task('watch', function() {
    gulp.watch('less/**/**/*.less', ['theme', 'bootstrap']);
})

gulp.task('default', ['watch']);