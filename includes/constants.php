<?php
/**
*
* @package reader
* @version $Id$
* @copyright Copyright (c) 2013, Firat Akandere
* @author Firat Akandere <f.akandere@gmail.com>
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License, version 3
*
*/

/**
* @ignore
*/
if (!defined('IN_MANGAREADER'))
{
    exit;
}

define('ANONYMOUS', 0);


// User activation types
define('NO_ACTIVATION', 0);
define('USER_ACTIVATION_SELF', 1);
define('USER_ACTIVATION_ADMIN', 2);

// Group IDs
define('INACTIVE_USERS', 1);
define('REGISTERED_USERS', 2);
define('MODERATORS', 3);
define('ADMINISTRATORS', 4);

define('CONFIG_TABLE', $dbprefix . 'config');
define('MANGA_TABLE', $dbprefix . 'manga');
define('CATEGORY_TABLE', $dbprefix . 'category');
define('GROUPS_TABLE', $dbprefix . 'groups');
define('USERS_TABLE', $dbprefix . 'users');

//ACL Tables
define('GROUP_PERM_TABLE', $dbprefix . 'group_perm');
define('PERMISSIONS_TABLE', $dbprefix . 'permissions');

?>
