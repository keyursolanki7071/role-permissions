Laravel Project Setup

Prerequisites

Ensure you have the following installed on your system:

PHP (latest version recommended)

Composer

Node.js & NPM

MySQL or any other database you prefer

Laravel CLI

Installation Steps

Clone the repository

git clone <repository-url>
cd <project-folder>

Install PHP dependencies

composer install

Install JavaScript dependencies

npm install

Build frontend assets

npm run build

Set up the environment file

Configure the .env file with your database and application settings.

Generate application key

php artisan key:generate

Run database migrations

php artisan migrate

Seed the database (if applicable)

php artisan db:seed

Start the development server

php artisan serve

The application should now be accessible at http://127.0.0.1:8000.

License

This project is licensed under the MIT License.

