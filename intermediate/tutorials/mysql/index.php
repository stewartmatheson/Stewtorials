<?php include "../../header.php"; ?>

<h1>MySQL</h1>

<h3 class="add_to_toc">Databases</h3>

<p>Databases are used in MySQL to store tables. These tables have columns that describe the kind of data that is stored in them. MySQL is typed meaning that it very strictly checks the type of data thats being inserted in to a given table column. When designing databases its important to consider what kind of data will be stored in a database.</p>

<?php render_code_block('mysql', "databases.sql", "Running Database Commands"); ?>

<p>Its worth noting that MySQL regards different databases as their own scope. When performing operations on a database we must first tell MySQL what database we wish to perform our operations on. Note when using PHP we can do this by setting a database in our connection function however when working with the bare MySQL we might first use the "use" statement</p>

<?php render_code_block('mysql', "use.sql", "Selecting a database to work on"); ?>

<h3 class="add_to_toc">Tables</h3>

<p>Tables in MySQL and other relational databases store data. There can be many tables in one database. We can create tables using the create table statement.</p>

<?php render_code_block('mysql', "table.sql", "Table Statements"); ?>

<h3 class="add_to_toc">Users</h3>

<p>As MySQL runs as a server connections must be first made before users and programs can interact with it's data. This is done in a number of ways depending on platform and programming language. What ever the method of connecting some information must be known before hand.  Part of this information is the user account we wish to connect with. This user account is stored by MySQL. MySQL can have many different user accounts that have different rules about what databases/tables they can access. The default account that is set up in MySQL is user name "root" with an empty password.</p>

<?php render_code_block('mysql', "users.sql", "Creating, Editing, Updating and Deleting Users"); ?>

<h3 class="add_to_toc">Create</h3>

<p>When creating records in MySQL we use the insert statement. Make sure when inserting data that you have selected a database before hand using the "use command".</p>

<?php render_code_block('mysql', "insert.sql", "The insert statement in MySQL"); ?>

<h3 class="add_to_toc">Read</h3>

<p>To fetch data from a database we use the select statement.</p>

<?php render_code_block('mysql', "select.sql", "The select statement in MySQL"); ?>

<h3 class="add_to_toc">Update</h3>

<p>The update statement can update existing data in our database make sure to always include a where clause as if we don't all of the data in our database will be updated.</p>

<?php render_code_block('mysql', "update.sql", "The update statement in MySQL"); ?>

<h3 class="add_to_toc">Delete</h3>

<p>Removing data can be done in one of two ways. The first is with the delete statement and the second is with the truncate statement. Delete allows us to include a where so we can remove data row by row where as truncate table simply clears a database of all its information. Remember deleting data in this way there is no turning back. MySQL does not have a recycle bin and data can not be fetched back once its been deleted.</p>

<?php render_code_block('mysql', "delete.sql", "The delete statement in MySQL"); ?>

<h3 class="add_to_toc">Functions</h3>

<p>MySQL makes it possible to to both use functions and define them. While defining functions goes beyond the scope of this guide it is quite handy to know a couple of MySQL functions. Two such functions are "now()" and "sha()". These functions can both be called from MySQL quires. NOW will return the current system time where the MySQL installation is running. Note as you can use MySQL remotely the time returned form this function might not match your own system time.</p>

<p>The other of these functions worth noting is SHA. SHA is an acronym for secure hash algorithm and can be used to store raw passwords in the database. This means that passwords are never stored in the database directly making system more secure. Note that the result of SHA will be 40 characters so make sure the column you have created is big enough to store the SHA password. When MySQL encounters data that it can not fit in a column it will simply truncate the data with out causing an error. If your saving passwords while they are being truncated they will never match the SHA result of the password attempt. See below for examples.</p>

<?php render_code_block('mysql', "functions.sql", "Using functions in MySQL"); ?>

<?php include "../../disqus.php"; ?>
<?php include "../../footer.php"; ?>
