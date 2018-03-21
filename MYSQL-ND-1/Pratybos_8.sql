
CREATE TABLE IF NOT EXISTS `BooksAuthors` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`bookId` INT(11) NULL DEFAULT NULL,
	`authorId` INT(11) NULL DEFAULT NULL,
	PRIMARY KEY (`id`)
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB;


INSERT INTO `BooksAuthors`(`bookId`, `authorId`)
SELECT `bookId`, `authorId` FROM `Books`
WHERE authorId IS NOT NULL;


ALTER TABLE `Books`
	CHANGE COLUMN `title` `title` VARCHAR(255) NOT NULL COLLATE 'utf8_lithuanian_ci' AFTER `authorId`;
ALTER TABLE `Books`
	DROP COLUMN `authorId`;






