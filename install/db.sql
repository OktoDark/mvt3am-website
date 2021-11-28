-- ----------------------------
-- Table structure for web_settings
-- ----------------------------
DROP TABLE IF EXISTS `web_settings`;
CREATE TABLE `web_settings` (
    `siteName` varchar(100) NOT NULL,
    `url` varchar(100) DEFAULT NULL,
    `lang` varchar(100) DEFAULT NULL,
    `keywords` varchar(1000) DEFAULT NULL,
    `description` varchar(1000) DEFAULT NULL,
    `copyright` varchar(100) DEFAULT NULL,
    `twitter` varchar(200) DEFAULT NULL,
    `discord` varchar(200) DEFAULT NULL,
    `theme` varchar(100) DEFAULT NULL,
    `ntfm` varchar(1000) DEFAULT NULL,
    `contact_email` varchar(100) DEFAULT '',
    PRIMARY KEY (`siteName`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of web_settings
-- ----------------------------
INSERT INTO `web_settings` VALUES ('mvt3am', 'http://www.oktodark.com/mvt3am/', 'English', 'games streaming twitch youtube', 'mvt3am Stream Website', 'mvt3am', 'http://www.twitter.com/mvt3am', 'https://discord.gg/x8GRPhq', 'default', 'default', '#');