var gulp = require('gulp');

function devTask() {
    return (
        gulp.src('./node_modules/bootstrap/dist/css/bootstrap.css')
            .pipe(gulp.dest('./dist/assets'))
    );
}

const dev = gulp.series(devTask);

exports.dev = dev;