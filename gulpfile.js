var gulp = require('gulp');

function devTask() {
    return (
        gulp.src('./node_modules/bootstrap/dist/css/bootstrap.css')
            .pipe(gulp.dest('./dist/assets/css')),
            gulp.src('./css/*')
                .pipe(gulp.dest('./dist/assets/css')),
            gulp.src('./images/*')
                .pipe(gulp.dest('./dist/assets/images'))
    );
}

const dev = gulp.series(devTask);

exports.dev = dev;