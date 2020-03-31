module.exports = function() {
    $.gulp.task('fonts', function() {
        return $.gulp.src('src/assets/webfonts/**/*')
            .pipe($.gulp.dest('public/webfonts'))
    });
};
