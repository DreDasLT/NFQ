INSERT INTO Authors SET name = "Sarunas Jasikevicius";
INSERT INTO Authors SET name = "Vladas Garastas";
INSERT INTO Books SET title = "Laimeti neuztenka", authorId = "9", year = '2015';
INSERT INTO Books SET title = "Krepsinio trenerio uzrasai. I tomas", authorId = "8", year = '2002';
INSERT INTO Books SET title = "Krepsinio trenerio uzrasai. II tomas", authorId = "8", year = '2002';
UPDATE Books SET authorId = 8 WHERE authorId = 9;