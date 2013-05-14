
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- student
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `student`;


CREATE TABLE `student`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255),
	`grade` INTEGER,
	`teacher_id` INTEGER,
	`created_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `student_FI_1` (`teacher_id`),
	CONSTRAINT `student_FK_1`
		FOREIGN KEY (`teacher_id`)
		REFERENCES `teacher` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- teacher
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `teacher`;


CREATE TABLE `teacher`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255),
	`type` VARCHAR(255),
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
