<?php

$aliases['stage'] = array(
  'uri' => 'stage-umnpha.pantheonsite.io',
  'db-url' => 'mysql://pantheon:566b5e4051624ce0a62279b6f76ff995@dbserver.stage.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5.drush.in:10836/pantheon',
  'db-allows-remote' => TRUE,
  'remote-host' => 'appserver.stage.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5.drush.in',
  'remote-user' => 'stage.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5',
  'ssh-options' => '-p 2222 -o "AddressFamily inet"',
  'path-aliases' => array(
    '%files' => 'code/sites/default/files',
    '%drush-script' => 'drush',
  ),
);

$aliases['build'] = array(
  'uri' => 'build-umnpha.pantheonsite.io',
  'db-url' => 'mysql://pantheon:c080d3ac1f3148ea852d11637638e803@dbserver.build.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5.drush.in:21879/pantheon',
  'db-allows-remote' => TRUE,
  'remote-host' => 'appserver.build.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5.drush.in',
  'remote-user' => 'build.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5',
  'ssh-options' => '-p 2222 -o "AddressFamily inet"',
  'path-aliases' => array(
    '%files' => 'files',
    '%drush-script' => 'drush',
  ),
);

$aliases['dev'] = array(
  'uri' => 'dev-umnpha.pantheonsite.io',
  'db-url' => 'mysql://pantheon:4e246c8fcdaf4c2994af638c4519f5ba@dbserver.dev.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5.drush.in:10871/pantheon',
  'db-allows-remote' => TRUE,
  'remote-host' => 'appserver.dev.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5.drush.in',
  'remote-user' => 'dev.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5',
  'ssh-options' => '-p 2222 -o "AddressFamily inet"',
  'path-aliases' => array(
    '%files' => 'code/sites/default/files',
    '%drush-script' => 'drush',
  ),
);

$aliases['test'] = array(
  'uri' => 'test-umnpha.pantheonsite.io',
  'db-url' => 'mysql://pantheon:c855bfc62d5646b4a0c21ec03c3dcc27@dbserver.test.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5.drush.in:10853/pantheon',
  'db-allows-remote' => TRUE,
  'remote-host' => 'appserver.test.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5.drush.in',
  'remote-user' => 'test.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5',
  'ssh-options' => '-p 2222 -o "AddressFamily inet"',
  'path-aliases' => array(
    '%files' => 'code/sites/default/files',
    '%drush-script' => 'drush',
  ),
);

$aliases['prod'] = array(
  'uri' => 'www.healthyagingpoll.org',
  'db-url' => 'mysql://pantheon:9e68baf9662445deaefeec930e3bc9bb@dbserver.live.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5.drush.in:10963/pantheon',
  'db-allows-remote' => TRUE,
  'remote-host' => 'appserver.live.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5.drush.in',
  'remote-user' => 'live.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5',
  'ssh-options' => '-p 2222 -o "AddressFamily inet"',
  'path-aliases' => array(
    '%files' => 'code/sites/default/files',
    '%drush-script' => 'drush',
  ),
);