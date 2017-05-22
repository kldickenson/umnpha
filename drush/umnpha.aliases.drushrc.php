<?php

$aliases['stage'] = array(
  'uri' => 'stage-umnpha.pantheonsite.io',
  'db-url' => 'mysql://pantheon:58e71a3d64db4bcaa576831332001701@dbserver.stage.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5.drush.in:10962/pantheon',
  'db-allows-remote' => TRUE,
  'remote-host' => 'appserver.stage.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5.drush.in',
  'remote-user' => 'stage.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5',
  'ssh-options' => '-p 2222 -o "AddressFamily inet"',
  'path-aliases' => array(
    '%files' => 'code/sites/default/files',
    '%drush-script' => 'drush',
  ),
);
$aliases['prod'] = array(
  'uri' => 'www.healthyagingpoll.org',
  'db-url' => 'mysql://pantheon:b08f1b4d01a444cb9d616b2e9975e397@dbserver.live.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5.drush.in:13164/pantheon',
  'db-allows-remote' => TRUE,
  'remote-host' => 'appserver.live.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5.drush.in',
  'remote-user' => 'live.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5',
  'ssh-options' => '-p 2222 -o "AddressFamily inet"',
  'path-aliases' => array(
    '%files' => 'code/sites/default/files',
    '%drush-script' => 'drush',
  ),
);
$aliases['test'] = array(
  'uri' => 'test-umnpha.pantheonsite.io',
  'db-url' => 'mysql://pantheon:a0eae203f57e436399d715b7570f3fb3@dbserver.test.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5.drush.in:10304/pantheon',
  'db-allows-remote' => TRUE,
  'remote-host' => 'appserver.test.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5.drush.in',
  'remote-user' => 'test.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5',
  'ssh-options' => '-p 2222 -o "AddressFamily inet"',
  'path-aliases' => array(
    '%files' => 'code/sites/default/files',
    '%drush-script' => 'drush',
  ),
);
$aliases['dev'] = array(
  'uri' => 'dev-umnpha.pantheonsite.io',
  'db-url' => 'mysql://pantheon:faf76b2e7880437f827d301b3daf1743@dbserver.dev.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5.drush.in:13163/pantheon',
  'db-allows-remote' => TRUE,
  'remote-host' => 'appserver.dev.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5.drush.in',
  'remote-user' => 'dev.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5',
  'ssh-options' => '-p 2222 -o "AddressFamily inet"',
  'path-aliases' => array(
    '%files' => 'code/sites/default/files',
    '%drush-script' => 'drush',
  ),
);