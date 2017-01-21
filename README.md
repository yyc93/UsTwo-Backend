# ustwo.com Backend

## Overview

This repository contains all the back end code for the current [ustwo.com-backend][1]
website.
This backend site is to manage the whole blog contents for [ustwo.com-frontend][2]

## Settings for install Wordpress on server

### Settings on Ubuntu 16.04 Using LAMP Stack
We installed Wordpress v4.7.1 on Ubuntu 16.04 for publish. 
For the websit we created wp_myblog db in mySql as following.
mysql> CREATE DATABASE wp_myblog;
mysql> GRANT ALL PRIVILEGES ON wp_myblog.* TO 'root'@'localhost' IDENTIFIED BY 'your_chosen_password_here';
mysql> FLUSH PRIVILEGES;
mysql> EXIT;
[see more][3]

### Settings on Mac Using MAMP Stack
We installed Wordpress on MacOS X Sierra(10.12.2) for development locally. [see more][4]

[1]: http://138.197.213.140/
[2]: http://104.236.177.43/
[3]: http://www.tecmint.com/install-wordpress-on-ubuntu-16-04-with-lamp/
[4]: https://codex.wordpress.org/Installing_WordPress_Locally_on_Your_Mac_With_MAMP