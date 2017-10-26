// Include Gulp
var gulp = require('gulp');

// Include Plugins
var eslint = require('gulp-eslint');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var plumber = require('gulp-plumber');
var gulpUtil = require('gulp-util');
var rename = require('gulp-rename');
var sourcemaps = require('gulp-sourcemaps');
var postcss = require('gulp-postcss');
var autoprefixer = require('autoprefixer');
var pixrem = require('pixrem');
var cssnano = require('cssnano');
// var tinify    = require('gulp-tinify');
var browserSync = require('browser-sync').create();

// make noise on js and scss errors
function errorHandler() {
    gulpUtil.beep();
    return true;
}

// Lint JS-Files
gulp.task('lint', function () {
    return gulp
        .src('../src/js/*.js')
        .pipe(eslint({
            configFile: '.eslintrc'
        }))
        .pipe(eslint.format())
        .pipe(eslint.failAfterError());
});

// Concatenate & Minify JS
gulp.task('scripts', function () {
    return gulp
        .src([
            '../src/js/globals/**.js',
            '../src/js/**.js'
        ])
        .pipe(concat('main.js'))
        .pipe(gulp.dest('../js'))
        .pipe(rename('main.min.js'))
        .pipe(plumber(errorHandler))
        .pipe(uglify())
        .pipe(plumber.stop())
        .pipe(gulp.dest('../js'));
});

// Copy & Minify Vendor JS
gulp.task('scripts-vendor', function () {
    return gulp
        .src([
            '../src/js/vendor/**.js'
        ])
        .pipe(gulp.dest('../js/vendor'))
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(plumber(errorHandler))
        .pipe(uglify())
        .pipe(plumber.stop())
        .pipe(gulp.dest('../js/vendor'));
});

// Compile Sass
gulp.task('sass', function () {
    return gulp
        .src('../src/scss/style.scss')
        .pipe(sourcemaps.init())
        .pipe(plumber(errorHandler))
        .pipe(
            sass({
                outputStyle: 'expanded',
                errLogToConsole: true
            }).on('error', sass.logError)
        )
        .pipe(plumber.stop())
        .pipe(sourcemaps.write('maps'))
        .pipe(gulp.dest('../'))
        .pipe(browserSync.stream());
});

// Minify & Autoprefix CSS
gulp.task('css', function () {
    var processors = [
        pixrem(),
        autoprefixer({
            browsers: ['last 4 versions', 'android 4', 'opera 12']
        }),
        cssnano()
    ];
    return gulp
        .src('../style.css')
        .pipe(postcss(processors))
        .pipe(rename('style.min.css'))
        .pipe(gulp.dest('../'));
});

// Watch Files For Changes
gulp.task('watch', function () {
    browserSync.init({
        proxy: 'b-wp-gulp.dev'
    });
    gulp
        .watch('../src/js/**/*.js', ['lint', 'scripts', 'scripts-vendor'])
        .on('change', browserSync.reload);
    gulp.watch('../src/scss/**/*.scss', ['sass']);
    gulp.watch('../**/*.php').on('change', browserSync.reload);
});

// Compress JPG, PNG, GIF and SVG Images
// gulp.task('tinify', function() {
//     gulp.src('src/img/**/*')
//         .pipe(tinify('5sbQH3B1Yvei62VfdgmbTQPcohUkTM8F'))
//         .pipe(gulp.dest('img'));
// });

// Default Tasks
gulp.task('default', ['sass', 'scripts', 'scripts-vendor', 'watch']);

// Build
gulp.task('build', ['sass', 'css', 'lint', 'scripts', 'scripts-vendor']);