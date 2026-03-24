SELECT city_name , province  FROM  cities ;
-- selects the city name and province together

SELECT city_name , province 
FROM `cities` LIMIT 5;
-- SELECT FIRST 5 CITY

SELECT city_name FROM `cities` 
WHERE province= "AB";
-- SELECTS only cities form alberta

SELECT city_name , population FROM `cities` 
ORDER by population DESC;
-- sorts the population in descanding  order form smallest to biggest

SELECT city_name  FROM `cities` 
WHERE city_name="On" and population > 1000000;
-- returns only cities with 1000000 over population

SELECT city_name  FROM `cities` 
WHERE is_capital =1;
-- brings the cities who are capital

SELECT city_name  FROM `cities` 
WHERE city_name LIKE '%John%';
-- selects any name that has john