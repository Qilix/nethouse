CREATE TABLE `news` (
    `id` mediumint(10) unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `text` TEXT NOT NULL,
    `created_at` TIMESTAMP,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE INDEX created_at_index ON news(created_at);
