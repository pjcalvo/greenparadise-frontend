'use strict';
module.exports = function(grunt) {

	grunt.initConfig({
		jshint: {
			options: {
				jshintrc: '.jshintrc'
			},
			all: [
				'Gruntfile.js',
				'js/**/*.js',
				'!js/vendor/**/*.js',
				'!js/scripts.min.js'
			]
		},
		less: {
			dist: {
				files: {
					'css/main.min.css': [
						'less/app.less'
					]
				},
				options: {
					compress: true,
					sourceMap: false,
				}
			}
		},
		uglify: {
			dist: {
				options: {
					mangle: false,
					beautify: false,
				},
				files: {
					'js/scripts.min.js': [
						'js/vendor/jquery-1.11.1.js',
						'js/vendor/html5shiv.js',
						'js/*.js'
					]
				}
			}
		},
		watch: {
			less: {
				files: [
					'less/**/*.less'
				],
				tasks: ['less']
			},
			js: {
				files: [
					'<%= jshint.all %>'
				],
				tasks: ['jshint', 'uglify']
			},
			options: {
				spawn: true,
				livereload: true
			}
		},
		clean: {
			dist: [
				'css/main.min.css',
				'js/scripts.min.js'
			]
		},
		connect: {
			server: {
				options: {
					livereload: true,
					base: "",
					hostname: 'localhost',
					port: 6757,
					open: true
				}
			}
		},
	});

	// Load tasks
	grunt.loadNpmTasks('grunt-contrib-clean');
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-connect');

	// Register tasks
	grunt.registerTask('default', [
		'clean',
		'less',
		'uglify',
	]);

	grunt.registerTask('dev', [
		'connect',
		'watch'
	]);

};
