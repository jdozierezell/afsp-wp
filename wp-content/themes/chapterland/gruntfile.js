module.exports = function(grunt) {
  
  // Project Configuration
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    sass: {
      options: {
        sourceMap: true,
        //sourceMapEmbed: true
      },
      dist: {
        files: {
          'build/css/style.css' : 'dev/scss/style.scss'
        }
      }
    },
    autoprefixer: {
      options: {
        map: true, // Create sourcemap
        remove: true // Remove outdated prefixes
      },
      single_file: {
        files: { 
          'build/css/style.css' : 'build/css/style.css'
        }
      },
    },
    cssmin: {
      options: {
        sourceMap: true,
      },
      target: {
        files: {
          'build/css/style.min.css' : 'build/css/style.css'
        },
      }
    },
    watch: {
      sass_to_css: {
        files: ['dev/scss/*.scss'],
        tasks: ['css']
      }
    },
    'sftp-deploy': {
      build: {
        auth: {
          host: '23.253.252.62',
          port: 2222,
          authKey: 'sftpAuth'
        },
        cache: 'sftpCashe.json',
        src: './',
        dest: '/wp-content/themes/chapterland',
        exclusions: ['./node_modules','.ftppass','.gitignore'],
        progress: true
      }
    }
  });
  
  // Load the plugins.
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-sftp-deploy');
  
  // Default task(s).
  grunt.registerTask('default', function(){grunt.log.writeln('Hi, I\'m grunt');});
  grunt.registerTask('css', 'Compile Sass, run Autoprefixer, and Minify', ['sass','autoprefixer','cssmin']);
  grunt.registerTask('build', 'Do everything that css does and send it to the server', ['css','sftp-deploy']);
  
};