const gulp = require( 'gulp' ); 
const plumber = require( 'gulp-plumber' );
const sass = require( 'gulp-sass' );
const postcss = require( 'gulp-postcss' );
const rename = require( 'gulp-rename' );
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

//SCSS COMPILE TO CSS

gulp.task( 'sass', function() {
	return gulp
		.src( './assets/scss/styles.scss' )
		.pipe(
			plumber( {
				errorHandler( err ) {
					console.log( err );
					this.emit( 'end' );
				},
			} )
		)
		.pipe( sourcemaps.init( { loadMaps: true } ) )
		.pipe( sass( { errLogToConsole: true } ) )
		.pipe( postcss( [ autoprefixer() ] ) )
        .pipe( sourcemaps.write( undefined, { sourceRoot: '.' } ) )
        .pipe( rename("style.css") )
		.pipe( gulp.dest( paths.css ) );
} );

gulp.task( 'scripts', function() {
	var scripts = './assets/js/scripts/*.js';
		
	return gulp
		.src( scripts, { allowEmpty: true } )		
		.pipe( concat( 'scripts.min.js' ) )
		.pipe( uglify() )
		.pipe( gulp.dest( './js' ) );

} );

/* -------------------------------- IMAGEMIN -------------------------------- */
gulp.task( 'imagemin', () => 
	gulp.src( paths.imgsrc + '/**' )
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
		.pipe( gulp.dest( paths.img ) )
);

/* -------------------------------------------------------------------------- */
/*                                 browserSync                                */
/* -------------------------------------------------------------------------- */
gulp.task( 'browser-sync', function() {
	browserSync.init( cfg.browserSyncOptions );
} );

/* --------------------------------- DEPLOY --------------------------------- */
gulp.task( 'deploy', function () {
 
    var conn = ftp.create( {
        host:     paths.host,
        user:     paths.user,
        password: paths.password,
        parallel: 10,
        log:      gutil.log
    } );
 
    var globs = paths.distprod;
 
    // using base = '.' will transfer everything to /public_html correctly
    // turn off buffering in gulp.src for best performance
	
	gulp.series([ 'dist-product' ], function() {
		return gulp.src( globs, { base: '.', buffer: false } )
			.pipe( conn.newer( '/public_html' ) ) // only upload newer files
			.pipe( conn.dest( '/public_html' ) );
	});
 
} );

gulp.task( 'default', gulp.series( 'sass' ) );
// gulp.task( 'compile', gulp.series( 'styles', 'scripts', 'dist' ) );

