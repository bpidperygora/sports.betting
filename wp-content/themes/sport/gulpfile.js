'use strict';

global.$ = {
    gulp: require('gulp'),
    gp: require('gulp-load-plugins')(),

    path: {
        tasks: require('./gulp/config/tasks.js')
    }
};

$.path.tasks.forEach(function (taskPath) {
    require(taskPath)();
});

$.gulp.task('default',$.gulp.series(
    $.gulp.parallel('sass:main','sass:components','scripts:main','scripts:lib','scripts:components','img','fonts', 'svg'),
    $.gulp.parallel('watch')
));

$.gulp.task('build',$.gulp.series(
    $.gulp.parallel('sass:main','sass:components','scripts:main','scripts:lib','scripts:components','img','fonts', 'svg')
));
