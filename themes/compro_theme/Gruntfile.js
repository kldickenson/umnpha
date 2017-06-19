

module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    watch: {

      css: {
        files: ['sass/**/*.scss'],
        tasks: ['sass', 'postcss']
      },

      templates: {
        files: 'templates/**/*.html.twig',
        tasks: ['drush:cc_theme_registry']
      }
    },

    sass: {
      dist: {
        files: [{
          expand: true,
          cwd: 'sass/',
          src: ['**/*.scss'],
          dest: 'css/',
          ext: '.css'
        }],
        options: {
          sourcemap: 'auto'
        }
      }
    },

    browserSync: {
      dist: {
        bsFiles: {
          src: ['css/*.css']
        },
        options: {
          watchTask: true,
          injectChanges: false,
          proxy: 'localhost:8000',
          notify: false
        }
      }
    },

    drush: {
      cc_theme_registry: {
        args: ['cc', 'theme-registry']
      }
    },

    postcss: {
      options: {
        map: true, // inline sourcemaps

        processors: [
          require('autoprefixer') // add vendor prefixes
        ]
      },
      dist: {
        src: 'css/*.css'
      }
    }

  });

  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-browser-sync');
  grunt.loadNpmTasks('grunt-drush');
  grunt.loadNpmTasks('grunt-postcss');

  grunt.registerTask('default', ['browserSync', 'watch']);

};
