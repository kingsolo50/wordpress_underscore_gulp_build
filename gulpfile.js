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
const del = require( 'del' );
const cleanCSS = require( 'gulp-clean-css' );
const autoprefixer = require( 'autoprefixer' );
const gutil = require( 'gulp-util' );
const ftp = require( 'vinyl-ftp' );


// Configuration file to keep your code DRY
const cfg = require( './gulpconfig.json' );
const paths = cfg.paths;

//scss2css
function sassTask() {
	
	return 	src( './assets/scss/styles.scss' )
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
			.pipe( 	dest( paths.css ) );
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
	return src( paths.imgSrc + '/**' )
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
		.pipe( dest( paths.imgSrc ));
}

//cleanDistFolder
function cleanProdTask() {
	return del([paths.distprod]);
}

//copyFiles
function copyTask() {

		const srcFiles = 	[	
						'inc/**', 
						'js/**',
						'pages/**',
						'template-parts/**',
						'languages/**',
						'assets/**',
						'*.css',
						'*.php', 
						'./*.png' ];

		const dist = paths.distprod;

		// Copy all folders and .php file
		return src(srcFiles, { base: './'}).
		pipe(plumber()).
		pipe(dest(dist));
}
//miniCopy
function miniCopyTask() {

		const dist = paths.distprod;
		const srcFiles = [ 'js/**', '*.css', '*.php' ];

		// Copy all folders and .php file
		return src(srcFiles, { base: './'}).
		pipe(plumber()).
		pipe(dest(dist));
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

	const uploadDir = paths.hostDir;
	const conn = ftp.create( {
	    host:     paths.host,
	    user:     paths.user,
	    password: paths.password,
	    parallel: 10,
	    log:      gutil.log
    });

    var siteFiles = paths.productionFiles;

    // using base = '.' will transfer everything to /public_html correctly
    // turn off buffering in gulp.src for best performance

    return 	src( siteFiles, { buffer: false }).
    		pipe( plumber()).
    		pipe( conn.newer ( uploadDir )).
    		pipe( conn.dest( uploadDir ));
}


/**/
exports.bs 			= bsTask;
/**/
exports.sass 		= sassTask;
/**/
exports.images 		= imageTask;
/**/
exports.copy 		= copyTask;
/**/
exports.deploy 		= deployTask;
/**/
exports.build 		= series( sassTask, jsTask, imageTask, cleanProdTask, copyTask, deployTask);
/*
	Updates .php and .css file on server on save
*/
exports.update   	= function() { watch([ './*.php', './assets/scss/*.scss', './assets/js/*.js' ], series(sassTask, jsTask, cleanProdTask, copyTask, deployTask)) };
/**/
exports.default 	= function() { watch([ './assets/scss/*.scss' ], series(sassTask, bsTask)) };
// exports.default 	= series(sassTask, jsTask);



