DROP TABLE IF EXISTS scheduletest;

-- /*initial test values*/
--   CREATE TABLE scheduletest (
--       bookingID INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
--       fName varchar(25) NOT NULL, 
--       lName varchar(25) NOT NULL, 
--       email varchar(100) NOT NULL, 
--       bookingtTime varchar(10) NOT NULL UNIQUE
--   );

-- INSERT INTO scheduletest(fName, lName, email, bookingtTime)
--              VALUES ('Jane', 'Doe', 'doeja@student.otago.ac.nz', '13:00');
-- INSERT INTO scheduletest(fName, lName, email, bookingtTime)
--               VALUES ('John', 'Doe', 'doejo@student.otago.ac.nz','14:00');

DROP TABLE IF EXISTS schedule;

/*information table for user's inpur*/
CREATE TABLE schedule(
  bookingID INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
  fName varchar(25) NOT NULL, 
  lName varchar(25) NOT NULL, 
  email varchar(100) NOT NULL, 
  bookingtTime varchar(10) NOT NULL UNIQUE
) 

AUTO_INCREMENT=1000; -- auto generate/increment bookingID number starting from 1000

/*initial databse information*/
INSERT INTO schedule (fName, lName, email, bookingtTime)
             VALUES ('Candice', 'Alagh', 'alari@student.otago.ac.nz', '13:00');
INSERT INTO schedule(fName, lName, email, bookingtTime)
              VALUES ('Ligma', 'Cui', 'cuimi@student.otago.ac.nz','14:00');
INSERT INTO schedule(fName, lName, email, bookingtTime)
              VALUES ('Imagine', 'Dragons', 'smisc@student.otago.ac.nz', '15:00');
INSERT INTO schedule(fName, lName, email, bookingtTime)
              VALUES ('Sugma', 'Higgins', 'higma53@student.otago.ac.nz','16:00');