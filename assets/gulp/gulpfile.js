var gulp    = require('gulp'),
    concat  = require('gulp-concat'),
    sass    = require('gulp-sass'),
    uglify  = require('gulp-uglifyjs'),
    smushit = require('gulp-smushit'),
    sourcemaps = require('gulp-sourcemaps');

gulp.task('scripts', function () {
    return gulp.src(
        [
        // jQuery
        '../scripts-source/vendor/jquery/jquery-1.12.4.min.js',

        // Slick
        //'../scripts-source/vendor/slick/slick.js',

        // Bootstrap
        //'../scripts-source/vendor/bootstrap-3.3.7/transition.js',
        //'../scripts-source/vendor/bootstrap-3.3.7/alert.js',
        //'../scripts-source/vendor/bootstrap-3.3.7/button.js',
        //'../scripts-source/vendor/bootstrap-3.3.7/carousel.js',
        //'../scripts-source/vendor/bootstrap-3.3.7/collapse.js',
        //'../scripts-source/vendor/bootstrap-3.3.7/dropdown.js',
        //'../scripts-source/vendor/bootstrap-3.3.7/modal.js',
        //'../scripts-source/vendor/bootstrap-3.3.7/tooltip.js',
        //'../scripts-source/vendor/bootstrap-3.3.7/popover.js',
        //'../scripts-source/vendor/bootstrap-3.3.7/scrollspy.js',
        //'../scripts-source/vendor/bootstrap-3.3.7/tab.js',
        //'../scripts-source/vendor/bootstrap-3.3.7/affix.js',

        // Bootstrap 4.1.3
        //'../scripts-source/vendor/bootstrap-3.3.7/index.js',
        //'../scripts-source/vendor/bootstrap-3.3.7/alert.js',
        //'../scripts-source/vendor/bootstrap-3.3.7/button.js',
        //'../scripts-source/vendor/bootstrap-3.3.7/carousel.js',
        //'../scripts-source/vendor/bootstrap-3.3.7/collapse.js',
        //'../scripts-source/vendor/bootstrap-3.3.7/dropdown.js',
        //'../scripts-source/vendor/bootstrap-3.3.7/modal.js',
        //'../scripts-source/vendor/bootstrap-3.3.7/tooltip.js',
        //'../scripts-source/vendor/bootstrap-3.3.7/popover.js',
        //'../scripts-source/vendor/bootstrap-3.3.7/scrollspy.js',
        //'../scripts-source/vendor/bootstrap-3.3.7/tab.js',
        //'../scripts-source/vendor/bootstrap-3.3.7/util.js',

        // Custom
        '../scripts-source/config.js',

    ])
    .pipe(concat('scripts.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('../js/'));
});

gulp.task('sass', function () {
    return gulp.src(
        [
            '../styles-source/styles.min.scss',
            '../styles-source/styles.mobile.min.scss',
            '../styles-source/styles.desktop.min.scss'
        ])
    .pipe(sourcemaps.init())
    .pipe(sass({outputStyle: 'compressed'})
    .on('error', sass.logError))
    .pipe(sourcemaps.write('../css/maps'))
    .pipe(gulp.dest('../css/'));
});

gulp.task('images', function () {
    return gulp.src('../images/**/*.{jpg,png}')
    .pipe(smushit())
    .pipe(gulp.dest('../images'));
});

gulp.task('watch', function () {
    gulp.watch('../styles-source/**/*', ['sass']);
    gulp.watch('../scripts-source/**/*.js', ['scripts']);
});

gulp.task( 'default', ['sass', 'scripts', 'watch']);