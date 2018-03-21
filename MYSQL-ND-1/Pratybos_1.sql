SELECT * FROM Books;
SELECT title FROM Books ORDER BY title DESC;
SELECT authorId, COUNT(*)FROM Books GROUP BY authorId;