DBcrm
============================

Database project on Wroclaw University of Technology

DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources


REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.4.0.


INSTALLATION
------------

Serve web folder (not root!) with any webserver like Apache or even with
`php -S localhost:8888 -t BDcrm/web`


CONFIGURATION
-------------

### Database

Setup local MySql database, and create table called 'bdcrm'. Run `bdcrm.sql` initialization script to get it up and running.

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=bdcrm',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8',
];
```

