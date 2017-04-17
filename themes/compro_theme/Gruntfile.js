
module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    watch: {

      css: {
        files: ['sass/**/*.scss'],
        tasks: ['sass']
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
        }]
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
    }

  });

  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-browser-sync');
  grunt.loadNpmTasks('grunt-drush');

  grunt.registerTask('default', ['browserSync', 'watch']);

};
