UPDATE cities
set population = population + 1000
WHERE province="AB" OR "MB"

DELETE FROM cities WHERE cities_name="Paris"

DELETE FROM cities where population < 10000 