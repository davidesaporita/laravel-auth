# Laravel Auth Blog

> Simple blog with authentication, built with Laravel
> <br>Keywords: Laravel / Blog / Authentication / CRUD / Mailtrap

## :information_source: Description

Simple blog built with Laravel framework. Includes admin authentication, basic CRUD operations to manage posts, and email sending using Mailtrap SMTP server.

## :computer: Built With

### Languages
- HTML 5
- CSS 3
- JavaScript
- PHP 7.2.5
- MySQL 

### Frameworks
- Laravel 7
- Bootstrap 4.5.2

### Libraries
- jQuery 3.2

### Dependency Management
 - Npm | JS Package Manager
 - Composer | PHP Dependency Manager

## :clipboard: Installation

1. Clone this repo to your local machine:
```
git clone https://github.com/davidesaporita/laravel-auth
```
2. CD into project folder
3. Install dependencies:
```
composer install
npm install
```
4. Create a copy of .env file from .env.example
```
cp .env.example .env
```
5. Generate an app encryption key using artisan command:
```
php artisan key:generate
```
6. Create an empty database for the application using phpMyAdmin (or similar tools) and add database information in .env file
7. Migrate and seed (optional) the database:
```
php artisan migrate --seed
```
8. Add to configuration file .env your mailtrap.io account details
9. Now you can start server in your local machine. Don't forget to start the npm watcher in your terminal:
```
php artisan serve
npm run watch
```
