
CREATE TABLE `BooksAuthors` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`bookId` INT(11) NULL DEFAULT NULL,
	`authorId` INT(11) NULL DEFAULT NULL,
	PRIMARY KEY (`id`)
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB;



ALTER TABLE `Books`
	CHANGE COLUMN `title` `title` VARCHAR(255) NOT NULL COLLATE 'utf8_lithuanian_ci' AFTER `authorId`;
ALTER TABLE `Books`
	DROP COLUMN `authorId`;


UPDATE `Books` SET `title`='Laimėti neužtenka' WHERE  `bookId`=9;
UPDATE `Books` SET `title`='Krepšinio trenerio užrašai. I tomas' WHERE  `bookId`=10;
UPDATE `Books` SET `title`='Krepšinio trenerio užrašai. II tomas' WHERE  `bookId`=11;



INSERT INTO `Authors` (name)
VALUES
	("Vilius Antanavicius"),
	("Sarunas Jasikevicius");


INSERT INTO `BooksAuthors` (bookId, authorId)
VALUES
	(1, 1),
	(1, 2),
	(2, 2),
	(4, 4),
	(9, 11),
	(10, 10),
	(11, 10);


SELECT Books.title, GROUP_CONCAT(Authors.name  SEPARATOR ', ') AS Authors
FROM Books 
LEFT JOIN BooksAuthors ON BooksAuthors.bookId = Books.bookId 
LEFT JOIN Authors ON Authors.authorId = BooksAuthors.authorId 
GROUP BY Books.title;





