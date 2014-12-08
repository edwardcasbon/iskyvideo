module.exports = function(grunt) {

  grunt.initConfig({

    /* Sass configuration */
    sass: {
      dist: {
        options: {
          style: 'compressed',
          sourcemap: 'none'
        },
        files: [{
          expand: true,
          cwd: 'css',
          src: ['*.scss', '*/*.scss'],
          dest: 'css',
          ext: '.css'
        }]
      }
    },

    /* JSHint - Check JS syntax */
    jshint: {
      options: {},
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
      options: {},
      js: {
        files: {
          'js/iskyvideo.min.js' : ['js/vendor/*.js', '!js/vendor/modernizr.js', 'js/*.js', '!js/iskyvideo.min.js']
        }
      }
    },

    /* Watch scss and js and process when they're updated */
    watch: {
      sass: {
        files: ['css/*.scss', 'css/*/*.scss'],
        tasks: ['sass']
      },
      js: {
        files: ['js/*.js', '!js/iskyvideo.min.js'],
        tasks: ['uglify']
	  }
	}
  });

  	// Load task plugins.
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');

  // Register the default task.
  grunt.registerTask('default', 'watch');
};
