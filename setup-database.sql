/*initial data for for testing the database*/
DROP TABLE IF EXISTS test;
-- CREATE TABLE test (
--     id INTEGER(10) NOT NULL, 
--     firstName varchar(10) NOT NULL
-- );

-- INSERT INTO test VALUES ('1', 'JAMES');
-- INSERT INTO test VALUES ('2', 'LAURIE');

/*database table for bookings*/
DROP TABLE IF EXISTS schedule;
CREATE TABLE schedule (
  bookingID INTEGER(10) NOT NULL, 
  groupName varchar(10) NOT NULL,
  time varchar(10) NOT NULL UNIQUE
);

INSERT INTO schedule VALUES ('420', 'JAMES', '13:00');
INSERT INTO schedule VALUES ('42069', 'LAURIE','14:00');
INSERT INTO schedule VALUES ('42070', 'JOHNNY', '15:00');
INSERT INTO schedule VALUES ('42071', 'LAUREN','16:00');