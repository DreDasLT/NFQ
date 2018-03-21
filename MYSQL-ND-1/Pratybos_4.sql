SELECT Authors.name, Count(*) 
FROM Books 
LEFT JOIN Authors 
ON Authors.authorId = Books.authorId 
GROUP BY Authors.authorId ;

SELECT Authors.name, Count(*) 
FROM Books 
INNER JOIN Authors 
ON Authors.authorId = Books.authorId 
GROUP BY Authors.authorId ;


DELETE Authors
FROM Authors 
LEFT JOIN Books 
ON Books.authorId = Authors.authorId 
WHERE Books.bookId IS NULL;