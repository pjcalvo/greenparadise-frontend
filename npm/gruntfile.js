'use strict';

module.exports = function (grunt) {
	var libsJS = [
		"../assets/vendor/jquery/jquery.js",
		"../assets/vendor/bootstrap/js/bootstrap.min.js",
        "../assets/vendor/bootstrap-select/js/bootstrap-select.min.js",
		"../assets/vendor/bootstrap/components/affix.js",
		"../assets/vendor/bootstrap/components/tab.js",
        "../assets/vendor/bootstrap/components/carousel.js",
		//"../assets/js/plugins/icons/icons.js"
	];

	var projectJS = [
		"../assets/js/_main.js"
	];
	projectJS = libsJS.concat(projectJS);

	grunt.initConfig({
		less: {
			dev: {
				options: {
					sourceMap: false,
					sourceMapBasepath: "../assets/less/",
					sourceMapRootpath: "/",
					compress: true,
					yuicompress: true,
					optimization: 2
				},
				paths: ["../assets/less", "../assets/vendor"],
				files: {
					"../assets/dist/main.css": "../assets/less/app.less"
				}
			}
		},
		concat: {
			dev: {
				options: {
					sourceMap: false
				},
				files: [{
					src: projectJS,
					dest: "../assets/dist/scripts.js"
				}]
			}
		},
		uglify: {
			release: {
				options: {
					sourceMap: false
				},
				files: [{
					src: ['../assets/dist/scripts.js'],
					dest: '../.tmp/scripts.js'
				}]
			}
		},
		copy: {
			js: {
				src: ['../.tmp/scripts.js'],
				dest: '../assets/dist/scripts.js'
			},
            font:{
                expand: true,
                flatten: true,
                src: ['../assets/vendor/bootstrap/fonts/*'],
				dest: '../assets/fonts/'
            }
		},
		watch: {
			files: ["../assets/less/**/*.less", '../assets/js/**/*.js'],
			tasks: ["less", "concat:dev"]
		},
		clean: {
			options: { force: true },
			src: ['../assets/dist/**.**']
		},
		bower: {
			install: {
				options: {
					targetDir: '../assets/vendor',
					cleanup: true,
					layout: 'byComponent'
				}
			}
		}
});
	require('load-grunt-tasks')(grunt);
	grunt.registerTask('default', ['dev']);
	grunt.registerTask('dev', ['clean','less','concat:dev', 'copy:font']);
	//grunt.registerTask('release-qa', ['clean', 'bower:install', 'less', 'concat:dev', 'uglify:release', 'copy:js', 'ftp-deploy:qa']);
	//grunt.registerTask('release-production', ['clean', 'bower:install', 'less', 'concat:dev', 'uglify:release', 'copy:js', 'msbuild:production', 'ftp-deploy:production']);
};
