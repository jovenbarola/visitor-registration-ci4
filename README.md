# Visitor Registration Demo (CI4)

# Built With
- CodeIgniter 4 Framework
- PHP
- MySQL
- Composer
- Visual Studio Code


## Server Requirements
- Apache2
- MySQL
- Web hosting (You can select what you preferred Linode, Vultr, CloudWays, Godaddy etc.)
- Cloud hosting (You can select what you preferred AWS, Azure etc.)

PHP version 7.4 or higher is required, with the following extensions installed:
- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

# Steps running this app for development
- Cloned this repository example:
`git clone  https://<repository>/visitor-registration.git`
- Install needed library / components using composer
`composer install`
- Install migration, though i much prefer DATABASE-first, this migration is only use for CI4 Shield Library
`php spark migrate --all`
- Once installed, type the command below to run your project
`php spark serve`
