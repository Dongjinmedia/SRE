# challenge for SRE

First of create table called "visitor_counter" by executing the below SQL statement.

Step1: Creating Table


CREATE TABLE 'visitor_counter' ( 'counts' int(10) NOT NULL default '0' )


Step2: results.php File

Script Logic

(1) Database Connection
- You just have to provide the database credentials to connect with your database.


(2) Select Total Numbers of Users
- Execute simple select query to get the total count from the database table. if total = 0 means first visitor in this case insert the value in table.


(3) Display Record
- Display the total count as visitor Count


(4) Increment
- Increment the total number by 1 to update the total numbers of counts.

