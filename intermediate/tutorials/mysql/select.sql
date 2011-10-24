-- Say we have a login system. We can find a users details by doing a WHERE email address.
SELECT *
FROM 'Users'
WHERE 'email' = 'joe@bloggs.com';

-- Lets display a list of users
SELECT first_name, last_name, email, age
FROM 'Users';

-- Consider a database of products. This select statement will select all products that are cheaper than $5.95.
SELECT name, price, description
FROM 'Products'
WHERE 'Price' < 5.95;

-- Say we have a network application that tracks packets moving across a network interface. We can work out how many packets where sent in a single day.
SELECT count(*)
FROM 'Packets';
WHERE created_date >= '2011-10-10' AND created_date <= '2011-12-11'
