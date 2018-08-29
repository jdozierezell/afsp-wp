var gulp = require('gulp');

var paths = {
    cssOutput: './'
};

// production sftp variables

var buildProd = {
    host: '23.253.252.62',
    port: 2222,
    auth: 'production'
}

// staging sftp variables

var buildStage = {
    host: '23.253.252.62',
    port: 2222,
    auth: 'stage'
} 

// build the css

gulp.task('scss', function() {
  var sourcemaps = require('gulp-sourcemaps');
  return gulp.src('src/scss/style.scss')
             .pipe(sourcemaps.init())
             .pipe(require('gulp-debug')())
             .pipe(require('gulp-sass')({
               errLogToConsole: true
             }))
            .pipe(require('gulp-autoprefixer')({
              browsers: ['last 3 versions']
            }))
            .pipe(sourcemaps.write())
            .pipe(gulp.dest(paths.cssOutput));
});

// begin production tasks

gulp.task('prod:css', ['scss'], function() {
  return gulp.src(['style.css'])
             .pipe(require('gulp-sftp')({
               host: buildProd.host,
               port: buildProd.port,
               auth: buildProd.auth,
               remotePath: 'wp-content/themes/afspq'
             }));
});

gulp.task('prod:root', function() {
  return gulp.src(['*.php'])
             .pipe(require('gulp-sftp')({
               host: buildProd.host,
               port: buildProd.port,
               auth: buildProd.auth,
               remotePath: 'wp-content/themes/afspq'
             }));
});

gulp.task('prod:inc', function() {
  return gulp.src('inc/*.php')
             .pipe(require('gulp-sftp')({
               host: buildProd.host,
               port: buildProd.port,
               auth: buildProd.auth,
               remotePath: 'wp-content/themes/afspq/inc'
             }));
});

gulp.task('prod:js', function() {
  return gulp.src('js/*.js')
             .pipe(require('gulp-sftp')({
               host: buildProd.host,
               port: buildProd.port,
               auth: buildProd.auth,
               remotePath: 'wp-content/themes/afspq/js'
             }));
});

gulp.task('prod:languages', function() {
  return gulp.src('languages/*.*')
             .pipe(require('gulp-sftp')({
               host: buildProd.host,
               port: buildProd.port,
               auth: buildProd.auth,
               remotePath: 'wp-content/themes/afspq/languages'
             }));
});

gulp.task('prod:layouts', function() {
  return gulp.src('layouts/*.css')
             .pipe(require('gulp-sftp')({
               host: buildProd.host,
               port: buildProd.port,
               auth: buildProd.auth,
               remotePath: 'wp-content/themes/afspq/layouts'
             }));
});

gulp.task('prod:page-templates', function() {
  return gulp.src('page-templates/*.php')
             .pipe(require('gulp-sftp')({
               host: buildProd.host,
               port: buildProd.port,
               auth: buildProd.auth,
               remotePath: 'wp-content/themes/afspq/page-templates'
             }));
});

gulp.task('prod:template-parts', function() {
  return gulp.src('template-parts/*.php')
             .pipe(require('gulp-sftp')({
               host: buildProd.host,
               port: buildProd.port,
               auth: buildProd.auth,
               remotePath: 'wp-content/themes/afspq/template-parts'
             }));
});

gulp.task('build:prod', ['prod:css', 'prod:root', 'prod:inc', 'prod:js', 'prod:languages', 'prod:layouts', 'prod:page-templates', 'prod:template-parts']);

// begin staging tasks

gulp.task('stage:css', ['scss'], function() {
  return gulp.src(['style.css'])
             .pipe(require('gulp-sftp')({
               host: buildStage.host,
               port: buildStage.port,
               auth: buildStage.auth,
               remotePath: 'wp-content/themes/afspq'
             }));
});

gulp.task('stage:root', function() {
  return gulp.src(['*.php'])
             .pipe(require('gulp-sftp')({
               host: buildStage.host,
               port: buildStage.port,
               auth: buildStage.auth,
               remotePath: 'wp-content/themes/afspq'
             }));
});

gulp.task('stage:inc', function() {
  return gulp.src('inc/*.php')
             .pipe(require('gulp-sftp')({
               host: buildStage.host,
               port: buildStage.port,
               auth: buildStage.auth,
               remotePath: 'wp-content/themes/afspq/inc'
             }));
});

gulp.task('stage:js', function() {
  return gulp.src('js/*.js')
             .pipe(require('gulp-sftp')({
               host: buildStage.host,
               port: buildStage.port,
               auth: buildStage.auth,
               remotePath: 'wp-content/themes/afspq/js'
             }));
});

gulp.task('stage:languages', function() {
  return gulp.src('languages/*.*')
             .pipe(require('gulp-sftp')({
               host: buildStage.host,
               port: buildStage.port,
               auth: buildStage.auth,
               remotePath: 'wp-content/themes/afspq/languages'
             }));
});

gulp.task('stage:layouts', function() {
  return gulp.src('layouts/*.css')
             .pipe(require('gulp-sftp')({
               host: buildStage.host,
               port: buildStage.port,
               auth: buildStage.auth,
               remotePath: 'wp-content/themes/afspq/layouts'
             }));
});

gulp.task('stage:page-templates', function() {
  return gulp.src('page-templates/*.php')
             .pipe(require('gulp-sftp')({
               host: buildStage.host,
               port: buildStage.port,
               auth: buildStage.auth,
               remotePath: 'wp-content/themes/afspq/page-templates'
             }));
});

gulp.task('stage:template-parts', function() {
  return gulp.src('template-parts/*.php')
             .pipe(require('gulp-sftp')({
               host: buildStage.host,
               port: buildStage.port,
               auth: buildStage.auth,
               remotePath: 'wp-content/themes/afspq/template-parts'
             }));
});

gulp.task('build:stage', ['stage:css', 'stage:root', 'stage:inc', 'stage:js', 'stage:languages', 'stage:layouts', 'stage:page-templates', 'stage:template-parts']);

// watch task for production

gulp.task('watch', ['prod:css'], function() {
  gulp.watch(['src/**/*.scss'], ['prod:css']);
  gulp.watch(['*.php'], ['prod:root']);
  gulp.watch(['page-templates/*.php'], ['prod:page-templates']);
  gulp.watch(['template-parts/*.php'], ['prod:template-parts']);
  gulp.watch(['inc/*.php'], ['prod:inc']);
  gulp.watch(['js/*.js'], ['prod:js']);
});

// watch task for stage

gulp.task('watchStage', ['stage:css'], function() {
  gulp.watch(['src/**/*.scss'], ['stage:css']);
  gulp.watch(['*.php'], ['stage:root']);
  gulp.watch(['page-templates/*.php'], ['stage:page-templates']);
  gulp.watch(['template-parts/*.php'], ['stage:template-parts']);
  gulp.watch(['inc/*.php'], ['stage:inc']);
  gulp.watch(['js/*.js'], ['stage:js']);
});