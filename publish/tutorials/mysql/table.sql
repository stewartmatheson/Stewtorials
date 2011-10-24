-- Here we are creating a table called users. Note that we have created a priamry key user id and set it to auto_increment. 

CREATE TABLE users (
    userID MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
    firstName VARCHAR(15) NOT NULL,
    lastName VARCHAR(30) NOT NULL,
    email VARCHAR(40) NOT NULL,
    password CHAR(40) NOT NULL,
    regDate DATE NOT NULL,
    PRIMARY KEY (userID)
);