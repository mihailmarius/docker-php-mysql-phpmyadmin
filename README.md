# Default Docker enviroment for CRUD Aplication development 
This is an alternative for LAMP setups for backend web development. I hope wil be useful.

# Php
Default php 7.4 with PDO activated.
The folder where you put the php scripts is in "php/public_html"
You can change php.ini parameters in "php/configuration/php.ini"

# Mysql 8.0
If you want to change root password, find and change in "docker-compose.yml" MYSQL_ROOT_PASSWORD and change toor with your password.
You will found in "db-server" and in "phpmyadmin"
You can create table for your application and insert data in mysql/dump and edit "default.sql" file

# phpMyAdmin
Connect with MySql credentials!

# Troubles
Depending on your configuration it may take a while for the mysql server to start. To be able to connect to the database, after starting the server, you have to wait for the period.

