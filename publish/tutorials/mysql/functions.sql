mysql> SELECT NOW();
+---------------------+
| NOW()               |
+---------------------+
| 2011-10-24 14:04:48 |
+---------------------+
1 row in set (0.00 sec)



mysql> SELECT SHA('hello world!');
+------------------------------------------+
| SHA('hello world!')                      |
+------------------------------------------+
| 430ce34d020724ed75a196dfc2ad67c77772d169 |
+------------------------------------------+
1 row in set (0.00 sec)



-- Here we have a password column stored in a database. The password attempt is the value that the user has entered. We can match this against a user email. If this query returns a row then we know we have a match.

SELECT first_name, last_name
FROM 'Users'
WHERE 'password' = SHA('password_attempt')
AND 'email' = 'someone@somewhere.com';



-- Next we are inserting in to the same user table this time we will use the NOW() function to create the signup date for the user. We know when ever the record is created will be the signup date so its safe to assume.

INSERT INTO 'Users' (first_name, last_name, email, password, signup_date)
VALUES ('john', 'smith', 'john@smith.com', NOW());