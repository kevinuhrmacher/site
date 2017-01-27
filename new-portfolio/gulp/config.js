var deepExtend = require('deep-extend');
var fs = require('fs');
var quaff = require('quaff');

// Optionally load user configuration options. See this link for more
// information:
// https://github.com/WPMedia/postgraphics/tree/master/_patterns/gulp/wapo-gulp-config
try {
    var userConfig = require('../../../gulp-config-overrides');
    process.stdout.write('Attempting to load custom configuration options\n');
} catch (e) {
}

var config = {
    browserSync: {
        server: {
            baseDir: 'public'
        },
        ghostMode: false
    }
};

if (userConfig) {
    config = deepExtend(config, userConfig);
    process.stdout.write('Successfully loaded custom configuration options\n');
}

module.exports = config;