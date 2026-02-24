<!-- script for create city
CREATE TABLE cities (
    cid SMALLINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    city_name VARCHAR(36) NOT NULL,
    province ENUM('AB', 'BC', 'MB', 'NB', 'NL', 'NS', 'ON', 'PE', 'QC', 'SK', 'NT', 'NU', 'YT') NOT NULL,
    population INT UNSIGNED NOT NULL,
    is_capital BOOLEAN NOT NULL DEFAULT FALSE,
    trivia VARCHAR(255) NULL
); -->
 