// The input SCSS files and the SCSS output path
const scssInput = [
        'scss/style.scss'
    ],
    jsInput = [
        'scripts/domain/*.js',
        'scripts/domain/**/*.js'
    ],
    vendorInput = [
        'scripts/vendor/**/jquery-1.10.2.min.js',
        'scripts/vendor/**/*.js',
        'scripts/vendor/**/*.js'
    ],
    scssOutput = 'macola.rs/wp-content/themes/macola-theme/css',
    jsOutput = 'macola.rs/wp-content/themes/macola-theme/scripts';

// Start everything up.
const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const babel = require('gulp-babel');
const concat = require('gulp-concat');
const rename = require('gulp-rename');
const uglify = require('gulp-uglify');

// Watch SASS.
gulp.task('sass', function() {
    return gulp
        .src(scssInput)
        .pipe(sourcemaps.init())
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(scssOutput))
});

gulp.task('domainScripts', function() {
    return gulp.src(jsInput)
        .pipe(sourcemaps.init())
        .pipe(babel({
            presets: ['env']
        }))
        .pipe(concat('scripts.js'))
        .pipe(gulp.dest(jsOutput))
        .pipe(rename('scripts.min.js'))
        .pipe(uglify()).on('error', sass.logError)
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(jsOutput));
});

gulp.task('vendorScripts', function() {
    return gulp.src(vendorInput)
        .pipe(concat('vendor.js'))
        .pipe(gulp.dest(jsOutput));
});

gulp.task('watch', ['sass', 'domainScripts', 'vendorScripts'], function (){
    gulp.watch('scss/**/*.scss', ['sass']);
    gulp.watch('scripts/domain/**/*.js', ['domainScripts']);
    gulp.watch('scripts/vendor/**/*.js', ['vendorScripts']);
});
