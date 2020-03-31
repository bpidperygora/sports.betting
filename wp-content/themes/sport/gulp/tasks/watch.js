module.exports = function() {
    $.gulp.task('watch',function(){
        $.gulp.watch('src/assets/scss/main.scss', $.gulp.series('sass:main'));
        $.gulp.watch('src/assets/scss/components/**/*.scss', $.gulp.series('sass:components'));
        $.gulp.watch('src/assets/js/main.js',$.gulp.series('scripts:main'));
        $.gulp.watch('src/assets/js/lib/**/*.',$.gulp.series('scripts:lib'));
        $.gulp.watch('src/assets/js/components/**/*.js',$.gulp.series('scripts:components'));
        $.gulp.watch('src/assets/webfonts/*',$.gulp.series('fonts'));
        $.gulp.watch('src/assets/images/img/*',$.gulp.series('img'));
        $.gulp.watch('src/assets/images/svg/*',$.gulp.series('svg'));
    });
};
