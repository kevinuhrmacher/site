var gulp = require('gulp');

require('require-dir')(
    './gulp/tasks',
    { recurse: true }
);

gulp.task('default', [
    'browserSync'
]);