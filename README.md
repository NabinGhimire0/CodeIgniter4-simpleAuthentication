#Authentication
#feature 
1)Register,Login & Logout functionlality
2)role based login function (in development process)
3)only authenticated user can access the pages (except=> /login,/register and '/') & it is done using filter



#('/')
![Alt text][Screenshot (448)](https://github.com/NabinGhimire0/CodeIgniter4-simpleAuthentication/assets/88672935/bf6e9652-8c6a-4a8e-8067-9f09c887f4ed)

#('/register')
![Screenshot (449)](https://github.com/NabinGhimire0/CodeIgniter4-simpleAuthentication/assets/88672935/9e4d48b3-3ad2-41a4-9d95-046a8870bd6e)

#('/login')
![Screenshot (450)](https://github.com/NabinGhimire0/CodeIgniter4-simpleAuthentication/assets/88672935/c7b5fb77-12dd-4a37-be97-2831d796e209)

#('/dashboard')
![Screenshot (451)](https://github.com/NabinGhimire0/CodeIgniter4-simpleAuthentication/assets/88672935/d6a6a622-8eb7-4f36-90b7-57ec47278549)


#note
This project focus to implement simple authentication. you can use it as your starter and customize the code in your own way.





# CodeIgniter 4 Application Starter

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds a composer-installable app starter.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

The user guide corresponding to the latest version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).

## Installation & updates

`composer create-project codeigniter4/appstarter` then `composer update` whenever
there is a new release of the framework.

When updating, check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> **Warning**
> The end of life date for PHP 7.4 was November 28, 2022. If you are
> still using PHP 7.4, you should upgrade immediately. The end of life date
> for PHP 8.0 will be November 26, 2023.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
#   C o d e I g n i t e r 4 - s i m p l e A u t h e n t i c a t i o n 
 
 
