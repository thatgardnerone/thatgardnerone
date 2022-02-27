<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name

set('application', 'thatgardnerone.com');

// Config

set('repository', 'git@github.com:thatgardnerone/thatgardnerone');
set('branch', 'main');
set('tag', 'v0.1');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('web01.production.tgo')
    ->set('deploy_path', '/srv/{{application}}');

// Tasks

task('npm:build', function () {
    cd('{{release_path}}');
    run('npm ci && npm run prod');
});

before('deploy:symlink', 'npm:build');

after('deploy:failed', 'deploy:unlock');
