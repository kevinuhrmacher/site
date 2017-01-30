var gulp = require('gulp');
var swig = require('gulp-swig');

require('require-dir')(
    './gulp/tasks',
    { recurse: true }
);

gulp.task('default', [
    'browserSync'
]);

gulp.task('templates', function() {
  gulp.src('./lib/*.html')
    .pipe(swig())
    .pipe(gulp.dest('./dist/'))
});