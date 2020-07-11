# Ci3-demo1

## Introduction

This is a very simple CI application based on the Tutorial in the official CI Document.

Here's the link of the tutorial:
https://codeigniter.com/userguide3/tutorial/index.html

## Notes
- The application configuration is located at the application/config

## Configuration
Edit the application config at 'application/config/config.php'
```
$config['base_url'] = "http://localhost:8888/php/ci3-demo/";
```

Edit the database config
```
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => '<your username',
	'password' => '<your password>',
	'database' => 'cidemo_db',

```

Code_Ignite

## Database Setup
### Create Database
```
CREATE DATEBASE 'cidemo_db'
```

### Create Table
```
CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
```

## Entry URL
Testing URI
http://localhost:8888/php/ci3-demo/index.php/news


## Where to modify the Code
- Mainly at application folder
- Configuration :    application/config/config.php
- Controller Logic : application/controllers/*.php
- View :  application/views/*.php
- Stylesheet : css/*.css
