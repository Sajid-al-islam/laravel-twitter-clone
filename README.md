# laravel-twitter-clone
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>



## Laravel Twitter clone

This is a twitter clone I made mostly using Laravel ^8.3

| [Features][] | [Requirements][] | [Install][] | [How to setting][] | [License][] |


## Features 
- login, registration
- Tweets
- follow, unfollow

## Requirements

	PHP = ^7.3|^8.0
    node js = ^16.00

## Install

Clone repo

```
git clone https://github.com/Sajid-al-islam/laravel-twitter-clone.git
```

Change directory to backend

#Backend setup

```
cd backend
```

Install Composer


[Download Composer](https://getcomposer.org/download/)


composer update/install 

```
composer install
```

Go into .env file and change Database and Email credentials.

Go into .env file and change Database and Email credentials.

```
php artisan migrate
```

```
php artisan db:seed
```
	
Generating a New Application Key
```
php artisan key:generate
```

Install passport
```
php artisan passport:install
```


Install Nodejs


[Download Node.js](https://nodejs.org/en/download/)


NPM dependencies
```
npm install
```

Using Laravel Mix 

```
npm run dev
```

## How to setting 

Go into .env file and change Database and Email credentials.

```
php artisan migrate
```

```
php artisan db:seed --class=UserSeeder
php artisan db:seed --class=UserRoleSeeder
php artisan db:seed --class=DatabaseSeeder
```
	
Generating a New Application Key
```
php artisan key:generate
```


## License

> Copyright (C) 2021 HungryCoders.  
**[⬆ back to top](#laravel-ecommerce-platform)**

[Features]:#features
[Requirements]:#requirements
[Install]:#install
[How to setting]:#how-to-setting
[License]:#license
