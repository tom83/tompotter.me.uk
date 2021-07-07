const { src, dest } = require('gulp');

function defaultTask(cb: () => void) {
  // place code for your default task here
  cb();
}

function css(cb: () => void) {
  const postcss = require('gulp-postcss');
  const sourcemaps = require('gulp-sourcemaps');

  src('src/**/*.css')
    .pipe(sourcemaps.init())
    .pipe(postcss([require('tailwindcss'), require('autoprefixer')]))
    .pipe(sourcemaps.write('.'))
    .pipe(dest('build/'));

  cb();
}

exports.css = css;
exports.default = defaultTask;