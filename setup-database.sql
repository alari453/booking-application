DROP TABLE IF EXISTS schedule;

/*information table for user's inpur*/
CREATE TABLE schedule(
  bookingID INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
  fName varchar(25) NOT NULL, 
  lName varchar(25) NOT NULL, 
  email varchar(100) NOT NULL, 
  bookingtTime varchar(10) NOT NULL UNIQUE
) 

/*auto generate/increment id number starting from 1000*/
AUTO_INCREMENT=1000;

/*initial databse information*/
INSERT INTO schedule (fName, lName, email, bookingtTime)
             VALUES ('Riya', 'Alagh', 'alari@student.otago.ac.nz', '13:00');
INSERT INTO schedule(fName, lName, email, bookingtTime)
              VALUES ('Mike', 'Cui', 'cuimi@student.otago.ac.nz','14:00');
INSERT INTO schedule(fName, lName, email, bookingtTime)
              VALUES ('Scott', 'Smith', 'smisc@student.otago.ac.nz', '15:00');
INSERT INTO schedule(fName, lName, email, bookingtTime)
              VALUES ('Maura', 'Higgins', 'higma53@student.otago.ac.nz','16:00');