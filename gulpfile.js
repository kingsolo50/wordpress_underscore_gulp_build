require('dotenv').config();

const gulp = require( 'gulp' ); 
const { dest, src, watch, series, parallel } = require('gulp');
const plumber = require( 'gulp-plumber' );
const cssnano = require('gulp-cssnano');
const sass = require( 'gulp-sass' );
const postcss = require( 'gulp-postcss' );
const rename = require( 'gulp-rename' );
const gulpCopy = require('gulp-copy');
const concat = require( 'gulp-concat' );
const uglify = require( 'gulp-uglify' );
const pipeline = require('readable-stream').pipeline;
const imagemin = require( 'gulp-imagemin' );
const sourcemaps = require( 'gulp-sourcemaps' );
const browserSync = require( 'browser-sync' ).create();
const server = browserSync;
const del = require( 'del' );
const cleanCSS = require( 'gulp-clean-css' );
const autoprefixer = require( 'autoprefixer' );
const gutil = require( 'gulp-util' );
const ftp = require( 'vinyl-ftp' );


// Configuration file to keep your code DRY
const cfg = require( './gulpconfig.json' );
const paths = cfg.paths;

// /* --------------------------------- DEPLOY --------------------------------- */
// gulp.task( 'deploy', function () {
 	
//  	let uploadDir = process.env.FTPDIR;

//     var conn = ftp.create( {
//         host:     process.env.FTPHOSTNAME,
//         user:     process.env.FTPUSERNAME,
//         password: process.env.FTPPASSWORD,
//         parallel: 10,
//         log:      gutil.log
//     } );
 
//     var globs = paths.distprod;
 
//     // using base = '.' will transfer everything to /public_html correctly
//     // turn off buffering in gulp.src for best performance
	
// 	gulp.series([ 'distprod' ], function() {
// 		return gulp.src( globs, { base: '.', buffer: false } )
// 			.pipe( conn.newer( uploadDir ) ) // only upload newer files
// 			.pipe( conn.dest( uploadDir ) );
// 	});
 
// } );

//scss2css
function sassTask() {
	
	return gulp
		.src( './assets/scss/styles.scss' )
		.pipe(	plumber(
			{
				errorHandler( err ) {
					console.log( err );
					this.emit( 'end' );
				},
			})
		)
		.pipe( 	sourcemaps.init( { loadMaps: true } ) )
		.pipe( 	sass( { errLogToConsole: true } ) )
		.pipe( 	postcss( [ autoprefixer() ] ) )
		.pipe( 	cssnano() )
        .pipe( 	sourcemaps.write( undefined, { sourceRoot: '.' } ) )
        .pipe( 	rename("style.css") )
		.pipe( 	gulp.dest( paths.css ) );
}

//concat&minifyJSfiles
function jsTask() {
	let scripts = './assets/js/*.js';
	return gulp
		.src( scripts, { allowEmpty: true } )		
		.pipe( concat( 'scripts.min.js' ))
		.pipe( uglify())
		.pipe( gulp.dest( paths.js ) );
}

//minifyImages
function imageTask() {
	gulp.src( paths.imgSrc + '/**' )
		.pipe(
			imagemin(
				[
					// Bundled plugins
					imagemin.gifsicle( {
						interlaced: true,
						optimizationLevel: 3,
					} ),
					imagemin.mozjpeg( {
						quality: 100,
						progressive: true,
					} ),					
					imagemin.optipng(),
					imagemin.svgo(),
				],
				{
					verbose: true,
				}
			)
		)
		.pipe( gulp.dest( paths.imgSrc ) )
}

//cleanDistFolder
function cleanProdTask() {

	return del([paths.distprod]);
}

//copyFiles
function copyTask() {

		let srcFiles = 	[	
						'*.php', 
						'./inc', 
						'./js',
						'./pages',
						'./template-parts',
						'./languages',
						'./assets',
						'./*.css',
						'./*png' ];

		let dist = paths.distprod;

		// Copy all folders and .php file
		return src(srcFiles).pipe(plumber()).pipe(dest(dist))
}

//browserSync
function bsTask() {
	return browserSync.init( cfg.browserSyncOptions );
}

//refresh browser Sync
function reload() {
	browserSync.reload();
}

//deployTask
function deployTask() {
}

	
//
exports.bs = bsTask;
//
exports.sass 	= sassTask;
//
exports.images 	= imageTask;
//
exports.copy = series(cleanProdTask, copyTask);
//
exports.build 	= series( parallel(sassTask, jsTask), imageTask, cleanProdTask, copyTask, deployTask);

// exports.default = series(sassTask, jsTask);
exports.default = function() {

	watch([ './assets/scss/*.scss' ], series(sassTask, bsTask))
	
};



