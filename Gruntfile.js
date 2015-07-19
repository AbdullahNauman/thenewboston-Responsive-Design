var paths = {
	js_src: 'javascripts/',
	js_dest: 'responsive/assets/javascripts/',
	css_src: 'styles/',
	css_dest: 'responsive/assets/stylesheets/'
};

module.exports = function (grunt) {

	require('load-grunt-tasks')(grunt);

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		coffee: require('./tasks/coffee')(paths.js_src),
		concat: require('./tasks/concat')(paths.js_src, paths.js_dest),
		uglify: require('./tasks/uglify')(paths.js_dest),
		sass: require('./tasks/sass')(paths.css_src, paths.css_dest),
		cssmin: require('./tasks/cssmin')(paths.css_dest)
	});

	grunt.registerTask('default', ['sass:build', 'cssmin:minify']);
	grunt.registerTask('compile-js', ['coffee:compile', 'concat:build', 'uglify:minify']);
};
