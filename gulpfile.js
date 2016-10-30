var gulp 		           = require('gulp'),
     sass 		         = require('gulp-ruby-sass'),
     autoprefixer      = require('gulp-autoprefixer'),
     del  		         = require('del'),
     concat            = require('gulp-concat'),
     browserSync       = require('browser-sync').create();

  var config = {
    bowerDir: 'bower_components',
    npmDir: 'node_modules'
  }

  gulp.task('default', ['clean'],  function() {
    gulp.start('styles', 'browser-sync');
  });

  gulp.task('clean', function(cb) {
      return del(['style.css'], cb)
  });

  gulp.task('styles', function() {
    return sass('app/scss/style.scss', {
      style: 'expanded',
      loadPath:[
         config.bowerDir + '/fontawesome/scss'
      ]
      })
      .pipe(gulp.dest(''))
      .pipe(browserSync.stream());
  });

  gulp.task('browser-sync', function() {
  // Static server
  browserSync.init({
       proxy: "http://localhost/transition/"
  });

  gulp.watch('app/scss/**/*.scss', ['styles']);
  });
