/*initial data for for testing the database*/
DROP TABLE IF EXISTS detailstest;
-- CREATE TABLE detailstest (
--     FName varchar(25) NOT NULL, 
--     LName varchar(25) NOT NULL
--     Email varchar(100) NOT NULL
-- );
-- INSERT INTO detailstest VALUES ('RIYA', 'ALAGH');
-- INSERT INTO detailstest VALUES ('MIKE', 'CUI');

DROP TABLE IF EXISTS scheduletest;
-- CREATE TABLE scheduletest (
--     bookingID INTEGER(10) NOT NULL, 
--     bookingName varchar(10) NOT NULL
-- );
-- INSERT INTO detailstest VALUES ('1', 'ALAGH');
-- INSERT INTO detailstest VALUES ('2', 'CUI');

/*database table for bookings*/
DROP TABLE IF EXISTS details;
DROP TABLE IF EXISTS schedule;

CREATE TABLE details ( -- user details
  FName varchar(25) NOT NULL, 
  LName varchar(25) NOT NULL, 
  Email varchar(100) NOT NULL
);

CREATE TABLE schedule (
  bookingID INTEGER(10) NOT NULL, 
  bookingName varchar(10) NOT NULL, -- booking/group reference name
  time varchar(10) NOT NULL UNIQUE
);

INSERT INTO details VALUES ('Riya', 'Alagh', 'alari@student.otago.ac.nz');
INSERT INTO details VALUES ('Mike', 'Cui', 'cuimi@student.otago.ac.nz');
INSERT INTO details VALUES ('Scott', 'Smith', 'smisc@student.otago.ac.nz');
INSERT INTO details VALUES ('Maura', 'Higgins', 'higma53@student.otago.ac.nz');

INSERT INTO schedule VALUES ('420', 'CUI', '13:00');
INSERT INTO schedule VALUES ('42069', 'ALAGH','14:00');
INSERT INTO schedule VALUES ('42070', 'SMITH', '15:00');
INSERT INTO schedule VALUES ('42071', 'HIGGINS','16:00');