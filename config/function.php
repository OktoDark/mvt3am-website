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
 * Website Settings
 */
function getSettings() {
    global $db_website, $contact_email, $ntfm, $siteName, $keywords, $description, $copyright, $discord, $url, $theme;
    $result = mysqli_query($db_website, "SELECT * FROM web_settings");

    while($row = mysqli_fetch_assoc($result)) {
        $contact_email = $row["contact_email"];
        $ntfm = $row["ntfm"];
        $siteName = $row["siteName"];
        $keywords = $row["keywords"];
        $description = $row["description"];
        $copyright = $row["copyright"];
        $discord = $row["discord"];
        $url = $row["url"];
        $theme = $row["theme"];
    }
}
