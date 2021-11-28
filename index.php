<?php
/**
 * Copyright (c) 2013 - 2021 OktoDark Studios
 * Website: https://www.oktodark.com
 *
 * Author: Razvan George H. (Viruzzz)
 *
 * File date of modification: 08.11.2021, 17:56
 */

/**
 * Session expires
 */
session_cache_expire(30);
$cache_expire = session_cache_expire(); // if want to show to the page

ob_start();
session_start();

define('OktoDark', true);
define('__DIR__', dirname(dirname(__FILE__)));
define('__INC_DIR__', __DIR__."/config");
define('__THEME_DIR__', __DIR__."/templates");

define ('BASE_HREF' , 'https://' . $_SERVER['HTTP_HOST'] . dirname( $_SERVER['PHP_SELF'] ) . '/');

/**
 * File Includes
 */
require_once(__INC_DIR__ .'/configuration.php');
require_once(__INC_DIR__ .'/function.php');

getSettings();

$value = 'member_login';

setcookie("mvt3am", $value);
setcookie("mvt3am", $value, time()+3600);  /* expire in 1 hour */

/**
 * Website Theme
 */
include(__THEME_DIR__.'/'.$theme.'/'.$theme. '.php');