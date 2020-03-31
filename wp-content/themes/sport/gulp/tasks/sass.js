module.exports = function () {
    $.gulp.task('sass:main', function () {
        return $.gulp.src('src/assets/scss/main.scss')
            .pipe($.gp.sourcemaps.init())
            .pipe($.gp.autoprefixer({
                overrideBrowserslist: ['last 10 versions']
            }))
            .on("error", $.gp.notify.onError({
                message: "Error: <%= error.message %>",
                title: "style"
            }))
            .pipe($.gp.sass({outputStyle: 'compressed'}))
            .pipe($.gp.rename({suffix: '.min'}))
            .pipe($.gulp.dest('public/css/'))
    });

    $.gulp.task('sass:components', function () {
        return $.gulp.src('src/assets/scss/components/**/*.scss')
            .pipe($.gp.sourcemaps.init())
            .pipe($.gp.autoprefixer({
                overrideBrowserslist: ['last 10 versions']
            }))
            .on("error", $.gp.notify.onError({
                message: "Error: <%= error.message %>",
                title: "style"
            }))
            .pipe($.gp.sass({outputStyle: 'compressed'}))
            .pipe($.gp.rename({suffix: '.min'}))
            .pipe($.gulp.dest('public/css/components'))
    });
};