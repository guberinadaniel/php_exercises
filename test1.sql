

CREATE TABLE players (BowlerID INT NOT NULL AUTO_INCREMENT,
                      FName VARCHAR (50) DEFAULT NULL ,
                      LName VARCHAR (50) DEFAULT NULL ,
                      Game1 INT DEFAULT NULL ,
                      Game2 INT DEFAULT NULL ,
                      Game3 INT DEFAULT NULL ,
                      Game4 INT DEFAULT NULL ,
                      PRIMARY KEY (BowlerID));

INSERT INTO players (FName, LName, Game1, Game2, Game3, Game4)
                    VALUES
                    ('Daniel' ,'Guberina',121,87,115,124),
                    ('Mitar' ,'Miric',111,99,135,105),
                    ('Sinan' ,'Sakic',75,99,125,141),
                    ('Marko' ,'Kraljevic',115,128,101,84);

SELECT * FROM players;

SELECT  CONCAT (LName,', ',FName) AS Player,
        CONCAT (SUBSTRING (FName,1,1),SUBSTRING (LName,1,1)) AS Initials,
        Game1 AS G1,
        Game2 AS G2,
        Game3 AS G3,
        Game4 AS G4,
        Game1 + Game2 + Game3 + Game4 AS "Tournament Total",
        (Game1 + Game2 + Game3 + Game4)/4 AS "Tournament Average"
        FROM players;


SELECT * FROM movies;
SELECT * FROM movies WHERE title LIKE 'Night%';
SELECT * FROM movies WHERE title LIKE '%er%';
SELECT COUNT(*) AS "Museum Movies" FROM movies WHERE title LIKE "%Museum%";

SELECT MAX(ReleaseYear) FROM movies;
SELECT MIN(ReleaseYear) FROM movies;