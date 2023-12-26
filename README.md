#Authentication
#feature 
1)Register,Login & Logout functionlality
2)role based login function (in development process)
3)only authenticated user can access the pages (except=> /login,/register and '/') & it is done using filter



#('/')
![Screenshot (448)](https://github.com/NabinGhimire0/CodeIgniter4-simpleAuthentication/assets/88672935/bf6e9652-8c6a-4a8e-8067-9f09c887f4ed)

#('/register')
![Screenshot (449)](https://github.com/NabinGhimire0/CodeIgniter4-simpleAuthentication/assets/88672935/9e4d48b3-3ad2-41a4-9d95-046a8870bd6e)

#('/login')
![Screenshot (450)](https://github.com/NabinGhimire0/CodeIgniter4-simpleAuthentication/assets/88672935/c7b5fb77-12dd-4a37-be97-2831d796e209)

#('/dashboard')
![Screenshot (451)](https://github.com/NabinGhimire0/CodeIgniter4-simpleAuthentication/assets/88672935/d6a6a622-8eb7-4f36-90b7-57ec47278549)


#note
This project focus to implement simple authentication. you can use it as your starter and customize the code in your own way.



## Installation & updates

`composer create-project codeigniter4/appstarter` then `composer update` whenever
there is a new release of the framework.

When updating, check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

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
