module.exports = function () {
    $.gulp.task('scripts:main', function () {
        return $.gulp.src('src/assets/js/main.js')
            .pipe($.gulp.dest('public/js/'))
    });

    $.gulp.task('scripts:lib', function () {
        // return $.gulp.src(['src/static/libs/autosize/autosize.min.js', 'node_modules/jquery/dist/jquery.min.js'])   // If need to set on order
        return $.gulp.src(['src/assets/js/lib/jquery.min.js', 'src/assets/js/lib/**/*.js'])
            .pipe($.gp.concat('libs.min.js'))
            .pipe($.gulp.dest('public/js/lib/'))
    });

    $.gulp.task('scripts:components', function () {
        return $.gulp.src('src/assets/js/components/**/*.js')
            .pipe($.gulp.dest('public/js/components/'))
    });
};
