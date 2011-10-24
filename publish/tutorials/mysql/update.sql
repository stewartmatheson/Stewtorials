-- General syntax 
UPDATE tableName
SET columnName1 = value1, columnName2 = value2, …
WHERE condition;

-- Updating a user email address
UPDATE users
SET email = ‘funnyboy@gmail.com’
WHERE userID = 7;