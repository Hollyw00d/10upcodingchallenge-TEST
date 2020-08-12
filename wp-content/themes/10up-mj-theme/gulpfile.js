// gulp
const gulp = require('gulp');

// JS gulp modules
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');
const babel = require('gulp-babel');

// CSS and Sass gulp modules
const cleanCSS = require('gulp-clean-css');
const sass = require('gulp-sass');

// Theme path modules
const tenUpThemePath = './';

gulp.task('js', () => {
    return gulp.src([
        `${tenUpThemePath}/js/local.js`
    ])
        .pipe( rename({ suffix: '.min' }) )
        .pipe( babel() )
        .pipe( uglify() )
        .pipe(gulp.dest(`${tenUpThemePath}/js`));
});

gulp.task('watchjs', () => {
  return gulp.watch([
    `${tenUpThemePath}/js/local.js`
  ], ['js'])
});

gulp.task('sass', () => {
  return gulp.src(
    `${tenUpThemePath}/**.scss`
  )
    .pipe(sass())
    .pipe(cleanCSS())
    .pipe(gulp.dest(tenUpThemePath));
});

gulp.task('watchsass', () => {
  return gulp.watch(`${tenUpThemePath}/**.scss`, ['sass']);
});

gulp.task('default', () => {
  return gulp.start(['watchjs','watchsass']);
});