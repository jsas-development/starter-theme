var gulp    = require('gulp'),
    concat  = require('gulp-concat'),
    sass    = require('gulp-sass'),
    uglify  = require('gulp-uglifyjs'),
    smushit = require('gulp-smushit');

gulp.task('scripts', function () {
    return gulp.src(
        [
        // jQuery
        //'../scripts-source/vendor/jquery/jquery-1.12.4.min.js',
        //'../scripts-source/vendor/jquery/jquery.fancybox.min.js',
        //'../scripts-source/vendor/parallax/parallax.min.js',

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
            '../styles-source/styles.all.min.scss',
            '../styles-source/styles.mobile.min.scss',
            '../styles-source/styles.tablet.min.scss',
            '../styles-source/styles.desktop.min.scss'
        ])
    .pipe(sass({outputStyle: 'compressed'})
    .on('error', sass.logError))
    .pipe(gulp.dest('../css/'));
});

gulp.task('images', function () {
    return gulp.src('../images/**/*.{jpg,png}')
    .pipe(smushit())
    .pipe(gulp.dest('../images'));
});

gulp.task('default', function () {
    gulp.watch('../styles-source/**/*', ['sass']);
    gulp.watch('../scripts-source/**/*.js', ['scripts']);
});
