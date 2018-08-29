var gulp = require('gulp'),
    connect = require('gulp-connect-php'),
    browserSync = require('browser-sync');

var paths = {
    cssOutput: './',
    testingOutput: './testing-templates/src/'
};

// production sftp variables

var buildProd = {
    host: '104.197.241.213',
    port: 2222,
    auth: 'production'
}

// staging sftp variables

var buildStage = {
    host: '104.197.241.213',
    port: 2222,
    auth: 'stage'
}

var jsBlob = ['js/*.js', 
'!js/animation.gsap.min.js', 
'!js/debug.addIndicators.min.js', 
'!js/flickity.min.js', 
'!js/flipclock.min.js', 
'!js/imgix.min.js', 
'!js/jquery.fullpage.js', 
'!js/jquery.lazyload.js', 
'!js/jquery.prettyPhoto.js', 
'!js/oauth.min.js', 
'!js/magnific-popup.min.js', 
'!js/owl.carousel.min.js', 
'!js/ScrollMagic.min.js', 
'!js/ScrollMagic.js', 
'!js/openlayers.debug.js', 
'!js/openlayers.js'
]

// build the css

gulp.task('scss', function() {
    var sourcemaps = require('gulp-sourcemaps');
    return gulp.src('src/scss/*.scss')
        .pipe(sourcemaps.init())
        .pipe(require('gulp-debug')())
        .pipe(require('gulp-sass')({
            errLogToConsole: true
        }))
        .pipe(require('gulp-autoprefixer')({
            browsers: ['last 3 versions']
        }))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(paths.cssOutput))
        .pipe(gulp.dest(paths.testingOutput))
        .pipe(browserSync.stream());
});

// begin production tasks

gulp.task('prod:css', ['scss'], function() {
    return gulp.src(['*.css'])
        .pipe(require('gulp-sftp')({
            host: buildProd.host,
            port: buildProd.port,
            auth: buildProd.auth,
            remotePath: 'wp-content/themes/afsp'
        }));
});

gulp.task('prod:hackCss', function() {
    return gulp.src('src/hacks/*.css')
        .pipe(require('gulp-sftp')({
            host: buildProd.host,
            port: buildProd.port,
            auth: buildProd.auth,
            remotePath: 'wp-content/themes/afsp/css'
        }));
});

gulp.task('prod:root', function() {
    return gulp.src(['*.php'])
        .pipe(require('gulp-sftp')({
            host: buildProd.host,
            port: buildProd.port,
            auth: buildProd.auth,
            remotePath: 'wp-content/themes/afsp'
        }));
});

gulp.task('prod:inc', function() {
    return gulp.src('inc/*.php')
        .pipe(require('gulp-sftp')({
            host: buildProd.host,
            port: buildProd.port,
            auth: buildProd.auth,
            remotePath: 'wp-content/themes/afsp/inc'
        }));
});

gulp.task('prod:js', function() {
    return gulp.src(jsBlob)
        .pipe(require('gulp-sftp')({
            host: buildProd.host,
            port: buildProd.port,
            auth: buildProd.auth,
            remotePath: 'wp-content/themes/afsp/js'
        }));
});

gulp.task('prod:languages', function() {
    return gulp.src('languages/*.*')
        .pipe(require('gulp-sftp')({
            host: buildProd.host,
            port: buildProd.port,
            auth: buildProd.auth,
            remotePath: 'wp-content/themes/afsp/languages'
        }));
});

gulp.task('prod:layouts', function() {
    return gulp.src('layouts/*.css')
        .pipe(require('gulp-sftp')({
            host: buildProd.host,
            port: buildProd.port,
            auth: buildProd.auth,
            remotePath: 'wp-content/themes/afsp/layouts'
        }));
});

gulp.task('prod:page-templates', function() {
    return gulp.src('page-templates/**/*.php')
        .pipe(require('gulp-sftp')({
            host: buildProd.host,
            port: buildProd.port,
            auth: buildProd.auth,
            remotePath: 'wp-content/themes/afsp/page-templates'
        }));
});

gulp.task('prod:template-parts', function() {
    return gulp.src('template-parts/**/*.php')
        .pipe(require('gulp-sftp')({
            host: buildProd.host,
            port: buildProd.port,
            auth: buildProd.auth,
            remotePath: 'wp-content/themes/afsp/template-parts'
        }));
});

gulp.task('prod:geo-my-wp-search', function() {
    return gulp.src('geo-my-wp/posts/search-forms/afsp-template/*.php')
        .pipe(require('gulp-sftp')({
            host: buildProd.host,
            port: buildProd.port,
            auth: buildProd.auth,
            remotePath: 'wp-content/themes/afsp/geo-my-wp/posts/search-forms/afsp-template'
        }));
});

gulp.task('prod:geo-my-wp-results', function() {
    return gulp.src('geo-my-wp/posts/search-results/afsp-template/*.php')
        .pipe(require('gulp-sftp')({
            host: buildProd.host,
            port: buildProd.port,
            auth: buildProd.auth,
            remotePath: 'wp-content/themes/afsp/geo-my-wp/posts/search-results/afsp-template'
        }));
});

gulp.task('prod:imports', function() {
    return gulp.src('imports/*.php')
        .pipe(require('gulp-sftp')({
            host: buildProd.host,
            port: buildProd.port,
            auth: buildProd.auth,
            remotePath: 'wp-content/themes/afsp/imports'
        }));
});

gulp.task('prod:tests', function() {
    return gulp.src('tests/*.php')
        .pipe(require('gulp-sftp')({
            host: buildProd.host,
            port: buildProd.port,
            auth: buildProd.auth,
            remotePath: 'wp-content/themes/afsp/tests'
        }));
});

gulp.task('build:prod', ['prod:css', 'prod:root', 'prod:inc', 'prod:js', 'prod:languages', 'prod:layouts', 'prod:page-templates', 'prod:template-parts', 'prod:geo-my-wp-search', 'prod:geo-my-wp-results', 'prod:imports', 'prod:tests']);

// begin staging tasks

gulp.task('stage:css', ['scss'], function() {
    return gulp.src(['*.css'])
        .pipe(require('gulp-sftp')({
            host: buildStage.host,
            port: buildStage.port,
            auth: buildStage.auth,
            remotePath: 'wp-content/themes/afsp'
        }));
});

gulp.task('stage:hackCss', function() {
    return gulp.src('src/hacks/*.css')
        .pipe(require('gulp-sftp')({
            host: buildStage.host,
            port: buildStage.port,
            auth: buildStage.auth,
            remotePath: 'wp-content/themes/afsp/css'
        }));
});

gulp.task('stage:root', function() {
    return gulp.src(['*.php'])
        .pipe(require('gulp-sftp')({
            host: buildStage.host,
            port: buildStage.port,
            auth: buildStage.auth,
            remotePath: 'wp-content/themes/afsp'
        }));
});

gulp.task('stage:inc', function() {
    return gulp.src('inc/*.php')
        .pipe(require('gulp-sftp')({
            host: buildStage.host,
            port: buildStage.port,
            auth: buildStage.auth,
            remotePath: 'wp-content/themes/afsp/inc'
        }));
});

gulp.task('stage:js', function() {
    return gulp.src(jsBlob)
        .pipe(require('gulp-sftp')({
            host: buildStage.host,
            port: buildStage.port,
            auth: buildStage.auth,
            remotePath: 'wp-content/themes/afsp/js'
        }));
});

gulp.task('stage:languages', function() {
    return gulp.src('languages/*.*')
        .pipe(require('gulp-sftp')({
            host: buildStage.host,
            port: buildStage.port,
            auth: buildStage.auth,
            remotePath: 'wp-content/themes/afsp/languages'
        }));
});

gulp.task('stage:layouts', function() {
    return gulp.src('layouts/*.css')
        .pipe(require('gulp-sftp')({
            host: buildStage.host,
            port: buildStage.port,
            auth: buildStage.auth,
            remotePath: 'wp-content/themes/afsp/layouts'
        }));
});

gulp.task('stage:page-templates', function() {
    return gulp.src('page-templates/**/*.php')
        .pipe(require('gulp-sftp')({
            host: buildStage.host,
            port: buildStage.port,
            auth: buildStage.auth,
            remotePath: 'wp-content/themes/afsp/page-templates'
        }));
});

gulp.task('stage:template-parts', function() {
    return gulp.src('template-parts/**/*.php')
        .pipe(require('gulp-sftp')({
            host: buildStage.host,
            port: buildStage.port,
            auth: buildStage.auth,
            remotePath: 'wp-content/themes/afsp/template-parts'
        }));
});

gulp.task('stage:geo-my-wp-search', function() {
    return gulp.src('geo-my-wp/posts/search-forms/afsp-template/*.php')
        .pipe(require('gulp-sftp')({
            host: buildStage.host,
            port: buildStage.port,
            auth: buildStage.auth,
            remotePath: 'wp-content/themes/afsp/geo-my-wp/posts/search-forms/afsp-template'
        }));
});

gulp.task('stage:geo-my-wp-results', function() {
    return gulp.src('geo-my-wp/posts/search-results/afsp-template/*.php')
        .pipe(require('gulp-sftp')({
            host: buildStage.host,
            port: buildStage.port,
            auth: buildStage.auth,
            remotePath: 'wp-content/themes/afsp/geo-my-wp/posts/search-results/afsp-template'
        }));
});

gulp.task('stage:imports', function() {
    return gulp.src('imports/*.php')
        .pipe(require('gulp-sftp')({
            host: buildStage.host,
            port: buildStage.port,
            auth: buildStage.auth,
            remotePath: 'wp-content/themes/afsp/imports'
        }));
});

gulp.task('stage:tests', function() {
    return gulp.src('tests/*.php')
        .pipe(require('gulp-sftp')({
            host: buildStage.host,
            port: buildStage.port,
            auth: buildStage.auth,
            remotePath: 'wp-content/themes/afsp/tests'
        }));
});

gulp.task('build:stage', ['stage:css', 'stage:root', 'stage:inc', 'stage:js', 'stage:languages', 'stage:layouts', 'stage:page-templates', 'stage:template-parts', 'stage:geo-my-wp-search', 'stage:geo-my-wp-results', 'stage:imports', 'stage:tests']);

// watch task for production

gulp.task('watch', ['prod:css'], function() {
    gulp.watch(['src/**/*.scss'], ['prod:css']);
    gulp.watch(['src/hacks/*.css'], ['prod:hackCss']);
    gulp.watch(['*.php'], ['prod:root']);
    gulp.watch(['page-templates/**/*.php'], ['prod:page-templates']);
    gulp.watch(['template-parts/**/*.php'], ['prod:template-parts']);
    gulp.watch(['inc/*.php'], ['prod:inc']);
    gulp.watch(['geo-my-wp/posts/search-forms/afsp-template/*.php'], ['prod:geo-my-wp-search']);
    gulp.watch(['geo-my-wp/posts/search-results/afsp-template/*.php'], ['prod:geo-my-wp-results']);
    gulp.watch(['js/*.js'], ['prod:js']);
    gulp.watch(['imports/*.php'], ['prod:imports']);
    gulp.watch(['tests/*.php'], ['prod:tests']);
});

// watch task for stage

gulp.task('watchStage', ['stage:css'], function() {
    gulp.watch(['src/**/*.scss'], ['stage:css']);
    gulp.watch(['src/hacks/*.css'], ['stage:hackCss']);
    gulp.watch(['*.php'], ['stage:root']);
    gulp.watch(['page-templates/**/*.php'], ['stage:page-templates']);
    gulp.watch(['template-parts/**/*.php'], ['stage:template-parts']);
    gulp.watch(['inc/*.php'], ['stage:inc']);
    gulp.watch(['geo-my-wp/posts/search-forms/afsp-template/*.php'], ['stage:geo-my-wp-search']);
    gulp.watch(['geo-my-wp/posts/search-results/afsp-template/*.php'], ['stage:geo-my-wp-results']);
    gulp.watch(['js/*.js'], ['stage:js']);
    gulp.watch(['imports/*.php'], ['stage:imports']);
    gulp.watch(['tests/*.php'], ['stage:tests']);
});

// watch task for local

gulp.task('watchScss', ['scss'], function() {
    gulp.watch(['src/**/*.scss'], ['scss']);
})

gulp.task('connect-sync', function() {
    connect.server({
        port: 8000,
        base: './testing-templates/'
    }, function() {
        browserSync({
            proxy: '127.0.0.1:8000'
        });
    });
    gulp.watch('src/**/*.scss', ['scss']);
    gulp.watch('testing-templates/**/*.*').on('change', function() {
        browserSync.reload();
    });
});