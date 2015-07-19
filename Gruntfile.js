var paths = {
    html_dir: 'html/',
    js_src: 'javascripts/', js_dest: 'html/assets/javascripts/',
    css_src: 'styles/', css_dest: 'html/assets/stylesheets/'
};

module.exports = function (grunt){

    require('load-grunt-tasks')(grunt);

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: require('./tasks/sass')(paths.css_src, paths.css_dest),
        cssmin: require('./tasks/cssmin')(paths.css_dest)
    });

    grunt.registerTask('default', ['coffee:compile', 'uglify:minify', 'sass:build', 'cssmin:minify']);

};
