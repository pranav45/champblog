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
$databases['default']['default'] = array (
  'database' => 'champ',
  'username' => 'root',
  'password' => 'password',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
$settings['hash_salt'] = 'd4xjpAeumfAM6ZOCkwO_VR1qdDZcqTiN7nB2E5l868vhdpjWF1waVk9arqwXWiUH4z32Dj5bZg';
$settings['install_profile'] = 'champblog';
