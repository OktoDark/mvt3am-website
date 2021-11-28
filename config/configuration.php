<?php
/**
 * Copyright (c) 2013 - 2021 OktoDark Studios
 * Website: https://www.oktodark.com
 *
 * Author: Razvan George H. (Viruzzz)
 *
 * File date of modification: 08.11.2021, 18:24
 */

/**
 * Database Connection
 * Construction: host | username | password | database
 */
$db_website = mysqli_connect("", "", "", "");

if (!$db_website) {
    echo "Failed to connect to MySQLi: " . mysqli_connect_error();
}

/**
 * Website Configuration
 */
$write_to_log = true;

/**
 * E-mail configuration
 */
define("mail_hostname", "");
define("mail_address", "");
define("mail_password", "");

/**
 * Site URL
 */
define("SITE_URL", '');

/**
 * Maintenance Configuration
 * 1 - offline
 * 0 - online
 */
/** MainPage **/
define("SCHEDULED_MAINTENANCE", 0);
define("UNDER_CONSTRUCTION_PAGE", SITE_URL.'maintenance.html');
/** MemberPage **/
define("SCHEDULED_MAINTENANCE_MEMBER_PAGE",0);
define("UNDER_CONSTRUCTION_MEMBER_PAGE", SITE_URL.'maintenance.html');
