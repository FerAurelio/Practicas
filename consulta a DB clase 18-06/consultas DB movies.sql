/*1*/
SELECT g.name, m.title
FROM genres as g
INNER JOIN movies as m ON genre_id=g.id
ORDER BY name DESC;
/*2*/
SELECT m.title as titulo, g.name as genero, CONCAT (actors.first_name, " ", actors.last_name) as actors
FROM movies as m
INNER JOIN actor_movie AS am ON movie_id = m.id
INNER JOIN actors ON actor_id=actors.id
INNER JOIN genres as g ON genre_id=g.id;
/*3*/
SELECT a.first_name, m.title
FROM movies AS m
INNER JOIN actor_movie AS am ON movie_id=m.id
INNER JOIN actors as a ON actor_id=a.id
ORDER BY a.first_name;
/*4*/
SELECT title, name
FROM movies 
INNER JOIN genres ON genre_id=genres.id
ORDER BY title, name;
/*además*/
SELECT title, name
FROM movies
INNER JOIN genres ON genre_id=genres.id
ORDER BY name, title;
/*5*/
SELECT DISTINCT e.title, seasons.number, series.title, g.name, COUNT(a.id)
FROM episodes AS e
INNER JOIN seasons ON e.season_id = seasons.id
INNER JOIN series ON seasons.serie_id = series.id
INNER JOIN genres AS g ON g.id = series.genre_id
INNER JOIN actor_episode AS ae ON e.id = ae.episode_id
INNER JOIN actors AS a ON a.id = ae.actor_id
GROUP BY e.id;
/*6*/
SELECT g.name, AVG(m.rating)
FROM movies as m
INNER JOIN genres as g ON genre_id = g.id
WHERE m.rating > 5
GROUP BY g.name;
/*7*/
SELECT s.title, COUNT(e.id) as cantidad_capitulos
FROM series as s
INNER JOIN seasons as sea ON s.id = serie_id
INNER JOIN episodes as e ON season_id=sea.id
WHERE e.release_date  BETWEEN '2015-12-31' AND'2017-01-01'
GROUP BY e.season_id;
/*8*/
SELECT s.title, COUNT(e.id) as cantidad_capitulos
FROM series as s
INNER JOIN seasons as sea ON s.id = serie_id
INNER JOIN episodes as e ON season_id=sea.id
WHERE  YEAR(e.release_date) = YEAR(NOW())
GROUP BY e.season_id;

/*SEGUNDA PARTE*/
/*1*/
SELECT DISTINCT CONCAT (a.first_name, " " , a.last_name) as actores, m.title  as peli_favorita
FROM actors as a
INNER JOIN actor_movie ON a.id=actor_id
INNER JOIN movies as m ON m.id=favorite_movie_id
WHERE m.title LIKE '%t%';
/*-----ale-------*/
SELECT CONCAT(first_name, " ", last_name) AS name
FROM actors 
WHERE favorite_movie_id IN
	(SELECT id
    FROM movies as m
    WHERE title LIKE "%t%");
/*2*/

/*3*/
SELECT g.name
FROM genres AS g
INNER JOIN series AS s ON s.genre_id = g.id
WHERE s.id IN
	(SELECT id
    FROM series
    WHERE YEAR(release_date) >= 2013);
/*Ejercicio 4*/
SELECT DISTINCT m.title
FROM movies AS m
INNER JOIN actors AS a ON a.favorite_movie_id = m.id
WHERE m.id NOT IN
	(SELECT DISTINCT favorite_movie_id
    FROM actors
    WHERE favorite_movie_id IS NOT NULL);

/*Ejercicio 5*/
SELECT DISTINCT g.name
FROM genres AS g
WHERE g.id IN
	(SELECT DISTINCT g.id
    FROM genres AS g
    INNER JOIN movies AS m ON g.id = m.genre_id
    INNER JOIN series AS s ON g.id = s.genre_id
    WHERE m.genre_id IS NOT NULL AND s.genre_id IS NOT NULL);

/*Ejercicio 6*/
SELECT DISTINCT g.name
FROM genres AS g
WHERE g.id NOT IN
	(SELECT DISTINCT g.id
    FROM genres AS g
    INNER JOIN series AS s ON g.id = s.genre_id
    WHERE s.genre_id IS NOT NULL);
