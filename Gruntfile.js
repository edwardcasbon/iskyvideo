module.exports = function(grunt) {

  grunt.initConfig({

    /* Sass configuration */
    sass: {
      dist: {
        options: {
          style: 'compressed',
          sourcemap: 'auto'
        },
        files: [{
          expand: true,
          cwd: 'css',
          src: ['*.scss', '*/*.scss', '!vendor/**/*'],
          dest: 'css',
          ext: '.css'
        }]
      }
    },

    /* JSHint - Check JS syntax */
    jshint: {
      options: {
		  loopfunc: true,
		  expr: true
      },
      js: ['js/*.js']
    },

    /* Concat - Concatenate files, without minifying - Useful for debug */
    concat: {
      options: {},
      dist: {
        src: ['js/vendor/*.js', '!js/vendor/modernizr.js', 'js/*.js', '!js/iskyvideo.min.js'],
        dest: 'js/iskyvideo.min.js'
      }
    },

    /* Uglify - Concatenate and minify JavaScript */
    uglify: {
      options: {
		  sourceMap: true
      },
      js: {
        files: {
          'js/iskyvideo.min.js' : [
			  'js/vendor/**/*.js', 
			  '!js/vendor/modernizr.js', 
			  'js/base/**/*.js',
			  'js/iskyvideo.js',
			  'js/iskyvideo/**/*.js'
		  ]
        }
      }
    },
	
	/* Automatically add vendor-prefixes to CSS using the "Can I Use" database. */
    // Use '$ npm update caniuse-db' to update the prefixes database.
    autoprefixer: {
        options: {
            browsers: ['last 2 versions', 'ie >= 8'],
            map: true
        },
        css: {
            src: ['css/iskyvideo.css']
        }
    },

    /* Watch scss and js and process when they're updated */
    watch: {
      sass: {
        files: ['css/*.scss', 'css/**/*.scss'],
        tasks: ['sass', 'autoprefixer']
      },
      js: {
        files: ['js/iskyvideo/**/*.js'],
        tasks: ['jshint', 'uglify']
	  }
	}
  });

  	// Load task plugins.
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-autoprefixer');

  // Register the default task.
  grunt.registerTask('default', 'watch');
};
