

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/9.x/installation)

Clone the repository

    git clone https://github.com/fahadchy24/uihut-assignment.git

Switch to the repo folder

    cd uihut-assignment

Install all the node package dependencies using composer

    composer install

Install node packages using npm

    npm install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate


Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

Start the frontend scaffolding 

    npm run dev

You can now access the server at http://localhost:8000

**TL;DR command list**

    git clone git@github.com:fahadchy24/uihut-assignment.git
    cd uihut-assignment
    composer install
    cp .env.example .env
    php artisan key:generate
    
**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate
    php artisan serve

    npm install
    npm run dev

## Database seeding & backup


Run the database seeder

    php artisan db:seed

***Note*** : It's recommended to have a clean database before seeding. You can refresh your migrations at any point to clean the database by running the following command

    php artisan migrate:refresh 

    
----------


## Environment variables

- `.env` - Environment variables can be set in this file



<br>

***Note*** : You can quickly set the database information and other variables in this file and have the application fully working.

----------

# Testing API

Run the laravel development server

    php artisan serve

The api can now be accessed at

    http://localhost:8000/api/v1/products/{product}

----------
