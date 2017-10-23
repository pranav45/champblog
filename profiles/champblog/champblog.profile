<?php
/**
* @file
* Enables modules and site configuration for a standard site installation.
*/

// Add any custom code here like hook implementations.
function champblog_install_tasks(&$install_state) {
 $tasks = array();
 $tasks['champblog_default_users'] = array();
 return $tasks;
}

/**
*  Function for creating default users.
*/
function champblog_default_users() {
 $user = \Drupal\user\Entity\User::create();
 $user->setPassword('CHAMPION');
 $user->enforceIsNew();
 $user->setEmail('blogger@gmail.com');
 $user->setUsername('Champion');
 $user->addRole('blogger');
 $user->set('status',1);
 $res = $user->save();
}
