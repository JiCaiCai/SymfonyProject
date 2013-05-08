
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- weblog_post
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `weblog_post`;


CREATE TABLE `weblog_post`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(255),
	`excerpt` TEXT,
	`body` TEXT,
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- weblog_comment
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `weblog_comment`;


CREATE TABLE `weblog_comment`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`post_id` INTEGER,
	`author` VARCHAR(255),
	`email` VARCHAR(255),
	`body` TEXT,
	`created_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `weblog_comment_FI_1` (`post_id`),
	CONSTRAINT `weblog_comment_FK_1`
		FOREIGN KEY (`post_id`)
		REFERENCES `weblog_post` (`id`)
)Type=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
