
## Setting up the database

### Countries, States, Cities

Download the [world.sql](https://github.com/dr5hn/countries-states-cities-database/blob/master/sql/world.sql) script.

Append the following code to the top of the file

    DROP DATABASE IF EXISTS world;
    CREATE DATABASE world;
    USE world;

Launch MySQL Shell 

    $ mysqlsh

Connect to your MySQL server 

    > \connect <username>:<password>@<hostname>

Run the SQL file

    > \source /path/to/world.sql
