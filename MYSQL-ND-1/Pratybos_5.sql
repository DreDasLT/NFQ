SELECT `Books`.`authorId`, `Books`.`title`
FROM `Books`
UNION
SELECT `Authors`.`authorId`, `Authors`.`name`
FROM `Authors`;