// Node imports
// ****************************************************************************

const path = require('path');

// Working Directory index
// ****************************************************************************

const directory = path.basename(__dirname)+'/www/';

const host = "http://localhost:8080/";

// Gulp imports
// ****************************************************************************

const {
    src,
    dest,
    watch,
    parallel
} = require('gulp');
const babel = require('gulp-babel');
const uglify = require('gulp-uglify');
const concat = require('gulp-concat');
const uglifycss = require('gulp-uglifycss');
const sass = require('gulp-sass');
const include = require('gulp-codekit');
const sourcemaps = require('gulp-sourcemaps');
const bs = require('browser-sync').create();

sass.compiler = require('node-sass');

// Functions
// ****************************************************************************

function buildjs() {
    return src('./app/scripts/index.js')
        .pipe(include())
            .on('error', console.log)
        .pipe(babel({
            presets: ['@babel/env']
        }))
        .pipe(uglify())
        .pipe(concat('app.min.js'))
        .pipe(dest('www/scripts/'))
        .pipe(bs.stream());
}

function buildcss() {
    return src('./app/styles/index.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(sourcemaps.write('.'))
        .pipe(uglifycss({
            "uglyComments": true
          }))
        .pipe(dest('./www/styles/'))
        .pipe(bs.stream());
}

// Exports
// ****************************************************************************

exports.watch = function() {
    bs.init({
        proxy: host+directory
        }
    )

    watch('./app/styles/**/*.scss', buildcss);
    watch('./app/scripts/**/*.js', buildjs);
    watch('./www/*.php').on('change', bs.reload);
}

exports.build = parallel(buildjs, buildcss);