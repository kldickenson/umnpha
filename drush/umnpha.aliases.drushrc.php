<?php

$aliases['develop'] = array(
  'uri' => 'develop-umnpha.pantheonsite.io',
  'db-url' => 'mysql://pantheon:2942683933f3489cb2714209916afb66@dbserver.develop.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5.drush.in:25260/pantheon',
  'db-allows-remote' => TRUE,
  'remote-host' => 'appserver.develop.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5.drush.in',
  'remote-user' => 'develop.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5',
  'ssh-options' => '-p 2222 -o "AddressFamily inet"',
  'path-aliases' => array(
    '%files' => 'files',
    '%drush-script' => 'drush',
  ),
);

$aliases['wtwdesign'] = array(
  'uri' => 'wtwdesign-umnpha.pantheonsite.io',
  'db-url' => 'mysql://pantheon:357a1c036a8641578684b77887f44e23@dbserver.wtwdesign.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5.drush.in:16293/pantheon',
  'db-allows-remote' => TRUE,
  'remote-host' => 'appserver.wtwdesign.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5.drush.in',
  'remote-user' => 'wtwdesign.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5',
  'ssh-options' => '-p 2222 -o "AddressFamily inet"',
  'path-aliases' => array(
    '%files' => 'files',
    '%drush-script' => 'drush',
  ),
);

$aliases['dev'] = array(
  'uri' => 'dev-umnpha.pantheonsite.io',
  'db-url' => 'mysql://pantheon:2b9d615a893f4b708b8f04e23ce5d6c4@dbserver.dev.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5.drush.in:26725/pantheon',
  'db-allows-remote' => TRUE,
  'remote-host' => 'appserver.dev.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5.drush.in',
  'remote-user' => 'dev.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5',
  'ssh-options' => '-p 2222 -o "AddressFamily inet"',
  'path-aliases' => array(
    '%files' => 'files',
    '%drush-script' => 'drush',
  ),
);

$aliases['test'] = array(
  'uri' => 'test-umnpha.pantheonsite.io',
  'db-url' => 'mysql://pantheon:da5dd3cdd95c4dd3ac4575decf6bec01@dbserver.test.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5.drush.in:13681/pantheon',
  'db-allows-remote' => TRUE,
  'remote-host' => 'appserver.test.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5.drush.in',
  'remote-user' => 'test.6d63fa88-8632-4f72-84ec-f0b61ea7b0f5',
  'ssh-options' => '-p 2222 -o "AddressFamily inet"',
  'path-aliases' => array(
    '%files' => 'files',
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
    '%files' => 'files',
    '%drush-script' => 'drush',
  ),
);
