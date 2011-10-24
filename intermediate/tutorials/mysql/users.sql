-- Here we are creating a new user called 'web2data' and setting a password of 'nmit'.
GRANT SELECT, INSERT, UPDATE, DELETE
ON web2data.*
TO 'web2user'
IDENTIFIED BY 'nmit';

-- The following statement updates the MySQL cache to reflect any changes you have made. (More secure)
FLUSH PRIVILEGES;
