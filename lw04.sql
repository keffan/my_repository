CREATE DATABASE rental;

USE rental;
CREATE TABLE dvd 
(
    dvd_id INT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    title VARCHAR(250),
    production_year YEAR
);

CREATE TABLE customer 
(
    customer_id INT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    first_name VARCHAR(20),
    last_name VARCHAR(20),
    passport_code VARCHAR(20),
    registration_date DATE
);

CREATE TABLE offer
(
    offer_id INT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    dvd_id INT(20) UNSIGNED,
    customer_id INT(20),
    offer_date DATE,
    return_date DATE
);

INSERT INTO dvd (title, production_year) 
VALUES 
  ('Transformers', 2010), 
  ('Transformers 2', 2011), 
  ('Mad Max', 2015), 
  ('Garage', 1999);

INSERT INTO customer (first_name, last_name, passport_code, registration_date)
VALUES 
  ('Dima', 'Bilan', '8805 123456', '2015-01-12'), 
  ('Ivan', 'Susanin', '8801 654321', '1956-10-21'),
  ('Vadim', 'Ivanov', '7812 123456', '2014-01-11'),
  ('Boris', 'Moiseev', '8871 564321', '2005-05-04');

INSERT INTO offer (dvd_id, customer_id, offer_date, return_date)
VALUES 
  (1, 2, '2015-05-12', NULL),
  (4, 4, '2010-11-23', '2011-01-10'),
  (4, 1, '2012-06-01', '2012-07-01'),
  (2, 3, '2015-05-20', NULL);

SELECT * FROM dvd WHERE production_year = 2010 ORDER BY title;

SELECT * FROM dvd WHERE dvd_id IN (SELECT dvd_id FROM offer WHERE return_date IS NULL);

SELECT customer.first_name, customer.last_name, offer.offer_date, dvd.title 
FROM customer 
INNER JOIN offer ON customer.customer_id = offer.customer_id 
INNER JOIN dvd ON dvd.dvd_id = offer.dvd_id
WHERE YEAR(offer.offer_date) = YEAR(NOW());