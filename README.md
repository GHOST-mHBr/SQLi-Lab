# SQL injection lab

## Requirements

- MySQL Server running on localhost
- MySQL Employees sample database
- PHP (tested with PHP 8.1)

## Installation

### Step1: PHP, web server and MySQL installation

<details open><summary><h3>Linux</h3></summary>

on a linux system you can install apache as web server Mysql-Server, PHP8.1 and PHP8.1-mysql packages.

in order to install PHP8.1, MySQL-server,mysql-server and apache you can run the following command:

```shell
sudo apt install php8.1,mysql-server,php8.1-mysql,apache2
```

</details>

<details><summary><h3>Windows</h3></summary>

on windows we have [xampp](https://www.apachefriends.org/), which is able to install and run apache web server and php. i don't know if there is a better or alternative solution, but xampp should work properly.

you can download xampp from [here](https://www.apachefriends.org/download.html)

in order to install MySQL server on windows you can use the free version of mysql.

[this](https://dev.mysql.com/downloads/installer/) is the download page of mysql installer.

</details>

### Step2: Installing the Employee sample database

in order to install the Employee sample database, refer to its installation [page](https://dev.mysql.com/doc/employee/en/employees-installation.html) on MySQL website.

:warning: ***In order to connect php-mysql and mysql server you should insert your database credentials inside php files(all levels). just scroll down inside them and read the comments.***

### Step3: Clone and copying

Now you should clone the repository, then just copy the entire "SQLi Lab" folder and paste it in one of the following paths:

for linux: `/var/www/html/`

and for Windows and xampp: `C:/xampp/htdocs/`

Now you can reach the lab by opening a browser and entering the following address :`127.0.0.1/SQLi%20Lab/level1.php`
