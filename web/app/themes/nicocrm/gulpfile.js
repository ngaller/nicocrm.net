var browserSync = require('browser-sync').create(),
    sass = require('gulp-sass'),
    runSequence = require('run-sequence'),
    gulp = require('gulp'),
    del = require('del'),
    imagemin = require('gulp-imagemin');

var config = {
    devUrl: 'nicocrm.local'
};
var source = {
    css: './assets/scss/**/*.scss',
    images: './assets/images/**/*',
    fonts: './node_modules/font-awesome/fonts/*'
};
var outputPrefix = './build/';
var output = {
    css: outputPrefix + 'css',
    images: outputPrefix + 'images',
    fonts: outputPrefix + 'fonts'
};

gulp.task('clean', function(){
    return del(outputPrefix + '**/*');
});

gulp.task('fonts', function() {
    return gulp.src(source.fonts)
        .pipe(gulp.dest(output.fonts));
});

gulp.task('sass', function() {
    return(gulp.src(source.css)
        .pipe(sass({
            outputStyle: 'compact',
            includePaths: ['./node_modules']
        }).on('error', sass.logError))
        .pipe(gulp.dest(output.css)))
        .pipe(browserSync.stream());
});

gulp.task('sass:watch', function() {
    gulp.watch(source.css, ['sass']);
});

//gulp.task('postcss', function() {
//    return gulp.src(source.css).pipe(
//        postcss([
//            require('precss')({ })
//        ], {
//            parser: require('postcss-scss')
//        })
//    ).pipe(gulp.dest(output.css));
//});

gulp.task('images', function() {
    return gulp.src(source.images)
        .pipe(imagemin({
            progressive: true
        }))
        .pipe(gulp.dest(output.images));
});

// browser sync task
gulp.task('watch', ['build', 'sass:watch'], function() {
    browserSync.init({
        proxy: config.devUrl,
        open: false  // don't open the browser by default
    });
});

// main build task (without clean)
gulp.task('build', ['images', 'fonts', 'sass']);

gulp.task('default', function(callback) {
    runSequence('clean', 'build', callback);
});