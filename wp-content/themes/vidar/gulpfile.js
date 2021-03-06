
var onError = function (err) {  
  gutil.beep();
  console.log(gutil.colors.red(err));
};


// Include gulp
var gulp = require('gulp'); 

// Include Our Plugins
var browserSync = require('browser-sync').create();
var jshint = require('gulp-jshint');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var minifyCss = require('gulp-minify-css');
var reload = browserSync.reload;
var plumber = require('gulp-plumber');
var gutil = require('gulp-util');
var bourbon = require('node-bourbon').includePaths;

// Lint Task
gulp.task('lint', function() {
    gulp.src('assets/js/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});

// Compile Our Sass
gulp.task('sass', function() {
    gulp.src('assets/scss/*.scss')
	    .pipe(plumber({
	      errorHandler: onError,

	    }))

		.pipe(sass({
			includePaths: ['sass'].concat(bourbon)
			}).on('error', sass.logError))
  		.pipe(minifyCss())
		.pipe(gulp.dest('assets/css'))
        .pipe(reload({stream: true}));

});


// Concatenate & Minify JS
gulp.task('scripts', function() {
    gulp.src('assets/js/*.js')
        .pipe(concat('all.js'))
        .pipe(gulp.dest('dist'))
        .pipe(rename('all.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('assets/dist'));
});


// Watch Files For Changes
gulp.task('watch', function() {
   browserSync.init({
        proxy: "dev.vidarlaw.com.10.1.10.19.xip.io:8888",
        host: "localhost",
        port: 8888
    });
    gulp.watch('assets/js/*.js', ['lint', 'scripts']);
    gulp.watch('assets/scss/*.scss', ['sass']);
    gulp.watch("./*.php").on('change', reload);

});





// Default Task
gulp.task('default', ['lint', 'sass', 'scripts', 'watch']);



/*
	
	var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var sass        = require('gulp-sass');
var reload      = browserSync.reload;

// Static Server + watching scss/html files
gulp.task('serve', ['sass'], function() {

   browserSync.init({
        proxy: "local.vidarlaw.com.10.1.10.13.xip.io:8888"
    });

    gulp.watch("assets/scss/*.scss", ['sass']);
    gulp.watch("assets/*.html").on('change', reload);
});

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src("assets/scss/*.scss")
        .pipe(sass())
        .pipe(gulp.dest("assets/css"))
        .pipe(reload({stream: true}));
});

gulp.task('default', ['serve']);

*/

