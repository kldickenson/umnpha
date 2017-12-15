<?php

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = __DIR__ . '/services.yml';

/**
 * Include the Pantheon-specific settings file.
 *
 * n.b. The settings.pantheon.php file makes some changes
 *      that affect all envrionments that this site
 *      exists in.  Always include this file, even in
 *      a local development environment, to insure that
 *      the site settings remain consistent.
 */
include __DIR__ . "/settings.pantheon.php";

/**
 * If there is a local settings file, then include it.
 */
$local_settings = __DIR__ . "/settings.local.php";
if (file_exists($local_settings)) {
  include $local_settings;
}
$settings['install_profile'] = 'standard';

if (defined('PANTHEON_ENVIRONMENT')) {
  if (in_array($_ENV['PANTHEON_ENVIRONMENT'], array('stage', 'dev', 'test', 'live'))) {
    $settings['trusted_host_patterns'][] = "{$_ENV['PANTHEON_ENVIRONMENT']}-{$_ENV['PANTHEON_SITE_NAME']}.getpantheon.io";
    $settings['trusted_host_patterns'][] = "{$_ENV['PANTHEON_ENVIRONMENT']}-{$_ENV['PANTHEON_SITE_NAME']}.pantheon.io";
    $settings['trusted_host_patterns'][] = "{$_ENV['PANTHEON_ENVIRONMENT']}-{$_ENV['PANTHEON_SITE_NAME']}.pantheonsite.io";
    $settings['trusted_host_patterns'][] = "{$_ENV['PANTHEON_ENVIRONMENT']}-{$_ENV['PANTHEON_SITE_NAME']}.panth.io";

    // Replace value with custom domain(s) added in the site Dashboard.
    $settings['trusted_host_patterns'][] = '^.+\.healthyagingpoll\.org$';
    $settings['trusted_host_patterns'][] = '^healthyagingpoll\.org$';
  }
}
else {
  $settings['trusted_host_patterns'][] = '^localhost$';
}

// Redirect all traffic to https www.
if (isset($_SERVER['PANTHEON_ENVIRONMENT']) && ($_SERVER['PANTHEON_ENVIRONMENT'] === 'live') && (php_sapi_name() != "cli")) {
  if ($_SERVER['HTTP_HOST'] == 'live-umnpha.pantheonsite.io' || $_SERVER['HTTP_HOST'] == 'live-umnpha.pantheon.io' || $_SERVER['HTTP_HOST'] == 'live-umnpha.getpantheon.io' || $_SERVER['HTTP_HOST'] == 'live-umnpha.panth.io') {
    header('HTTP/1.0 301 Moved Permanently');
    header('Location: https://www.healthyagingpoll.org' . $_SERVER['REQUEST_URI']);
    exit();
  }
  if ($_SERVER['HTTP_HOST'] == 'healthyagingpoll.org') {
    header('HTTP/1.0 301 Moved Permanently');
    header('Location: https://www.healthyagingpoll.org' . $_SERVER['REQUEST_URI']);
    exit();
  }
}
