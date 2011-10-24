-- Delete a user by their email
DELETE FROM 'Users' WHERE email = 'fred@hotmail.com';

-- Delete a user by their id
DELETE FROM 'Users' WHERE id = 343;

-- Empty a whole table of data
TRUNCATE Table 'Users';
