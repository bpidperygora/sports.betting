module.exports = function() {
    $.gulp.task('img', function() {
        return $.gulp.src('src/assets/images/img/*.{png,jpg,gif}')
            .pipe($.gulp.dest('public/images/img/'))
    });
};
