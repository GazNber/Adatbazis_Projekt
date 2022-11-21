CREATE DATABASE Cégem;
USE Cégem;

CREATE TABLE termékek (
    termékkód INT PRIMARY KEY,
    terméknév VARCHAR(20) NOT NULL,
    egységár INT NOT NULL,
    készlet INT NOT NULL
);

CREATE TABLE eladások (
    termékkód INT,
    időpont DATETIME NOT NULL,
    mennyiség INT,
    PRIMARY KEY (termékkód, időpont), 
    FOREIGN KEY termékkód REFERENCES termékek(termékkód)
);

-- Írjon lekérdezést a különböző terméknévvel rendelkező termékek készleten lévő mennyiségének kigyűjtéséhez!
-- Az eredményben tüntesse fel a termék nevét a készleten lévő mennyiséget!
SELECT terméknév, sum(készlet)
FROM termékek
GROUP BY terméknév;

for (i in termék):
    lista[terméknév] += készlet
for (i in lita):
    print(i + ": " + lista[i])

-- Kérdezze le az adatbázisból az azonos terméknévvel rendelkező termékek készleten lévő összértékét!
SELECT terméknév, SUM(készlet * egységár)
FROM termékek
GROUP BY terméknév;

-- Készítsen lekérdezést az elmúlt évben történt eladások összértékére havi bontásban!
SELECT MONTH(időpont), SUM(egységár * mennyiség) AS összérték
FROM termékek, eladások
WHERE termékek.termékkód = eladások.termékkód AND YEAR(időpont) = YEAR(CURRENT_DATE)-1
GROUP BY MONTH(időpont)
ORDER BY MONTH(időpont);

-- Készítsen lekérdezést azokról az árukról, amelyekből még nem történt eladás!
-- A listában tüntesse fel:
-- a termékkódot, a termék nevét, a készleten lévő mennyiséget, a készleten lévő áru összértékét termékenként!
SELECT termékkód, terméknév, készlet, SUM(készlet * egységár) AS összérték
FROM termékek
WHERE termékkód NOT IN (SELECT termékkód FROM eladások)
GROUP BY termékkód, terméknév, készlet;

-- Listázza ki a 2020. januárjában eladott termékek termékkódját, nevét és egységárát! Használjon alkérdést!
SELECT termékkód, terméknév, egységár
FROM termékek
WHERE termékkód IN (SELECT DISTINTCT termékkód FROM eladások WHERE YEAR(időpont) = 2020 AND MONTH(időpont) = 1)
/*
csak azt az oszlopot kell kiválasztani emit meg akarsz jeleníteni, 
de a kiválasztott tábla bármely oszlopával dolgozhatsz, 
megint függetlenül a SELECT utáni soroktól

és az első hónap száma 1
*/

-- Tegyük fel, hogy több azonos nevű termék van különböző termékkóddal és egységárral! 
-- Írjon lekérdezést amely minden termékből a legolcsóbbat listázza ki! 
-- A listában jelenítse meg a termékkódot, a termék nevét és az egységárát!
SELECT termékkód, terméknév, egységár
FROM termékek
