const { src, dest, watch, series, parallel } = require('gulp');

const sass          = require('gulp-sass')(require('sass'));
const concat        = require('gulp-concat');
const postcss       = require('gulp-postcss');
const autoprefixer  = require('autoprefixer');
const cssnano       = require('cssnano');
const uglify        = require('gulp-uglify-es').default;

// File paths
const files = {
	scssPath: 'src/scss/**/*.scss',
	jsPath: 'src/js/**/*.js',
};

// Sass task: compiles the style.scss file into style.css
function scssTask() {
	return src(files.scssPath, { sourcemaps: true })
		.pipe(sass())
		.pipe(postcss([autoprefixer(), cssnano()]))
        // .pipe(concat('main.min.css'))
		.pipe(dest('css', { sourcemaps: '.' }));
}

// JS task: concatenates and uglifies JS files to script.js
function jsTask() {
	return src(
		[
			files.jsPath,
			//,'!' + 'includes/js/jquery.min.js', // to exclude any specific files
		],
		{ sourcemaps: true }
	)
		// .pipe(concat('scripts.min.js'))
		.pipe(uglify())
		.pipe(dest('js', { sourcemaps: '.' }));
}

function watchTask() {
	watch(
		[files.scssPath, files.jsPath],
		{ interval: 1000, usePolling: true }, //Makes docker work
		series(parallel(scssTask, jsTask))
	);
}

// Export the default Gulp task so it can be run
// Runs the scss and js tasks simultaneously
// then runs cacheBust, then watch task
exports.default = series(parallel(scssTask, jsTask), watchTask);