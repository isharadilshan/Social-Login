# Social Login

Laravel sample project to understand social login with laravel/socialite package

## Getting Started

clone or download the repository 

```
git clone https://github.com/isharadilshan/Social-Login.git
```

### Prerequisites

#### Composer

composer is a tool for dependency management in PHP and it must be installed before working with Laravel


[You can download composer from here](https://getcomposer.org/doc/00-intro.md "Getcomposer Homepage")

### Installing

composer install

```
composer install
```

copy .env.example to .env

```
cp .env.example .env
```
 
Create an empty database for your project using any database tools you prefer

Configure your .env file to allow a connection to the database

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=loginsocial
DB_USERNAME=root
DB_PASSWORD=
```
Add the tables and contents of your database with migrations or in SQL

```
php artisan migrate
```

generate your encryption key

```
php artisan key:generate
```

set the right permissions on all directories and files 

```
chmod 755 -R nameofyourproject/
or
chmod -R o+w nameofyourproject/storage
```

clean up your project

```
php artisan cache:clear
php artisan view:clear
php artisan config:clear
```

## Running the development server

Starting Laravel Development server

```
php artisan serve
```

Something port 8000 is already used, in that case, you can specify a different port by using --port option

```
php artisan serve --port=8082
```

## Built With

* [Laravel](https://laravel.com/) - The web framework used
* [Composer](https://getcomposer.org/) - Dependency Management

## Contributing

Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of conduct, and the process for submitting pull requests to us.

## Authors

* **Ishara Dilshan** - *Initial work* - [isharadilshan](https://github.com/isharadilshan)

See also the list of [contributors](https://github.com/your/project/contributors) who participated in this project.

## License

This project is licensed under the MIT License

## Acknowledgments

* Hat tip to anyone whose code was used
* Inspiration
* etc