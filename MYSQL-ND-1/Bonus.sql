SELECT `News`.`newsId`, `News`.`date` AS News_date, c2.`text` AS Comment_text,  c2.`date` AS Comment_date
FROM `News`
LEFT JOIN `Comments` c1 ON c1.newsId = `News`.`newsId`
LEFT JOIN `Comments` c2 ON c1.`date` < c2.`date`
GROUP BY `News`.newsId  ORDER BY `News`.`date` DESC LIMIT 10;

