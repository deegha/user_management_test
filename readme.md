# User management system

## Setting up the environment

### Setting up Application

- Clone the repository
- Run the `composer install` to install all the depandancies
- Rename `.env.example` to `.env` or Create a file `.env` in the root directory, copy and past text from `.env.example` file
- Run `php artisan key:generate` command to generate the APP-KEY
- Give permission to the `storage` directory `sudo chmod 777 -R storage/`

### Setting up Database

- Create a database
- Edit .env file and add the relavent database 
	
	`DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=your_database_name
	DB_USERNAME=your_database_user_name
	DB_PASSWORD=your_database_password`

- Run `php artisan migrate` to migrate database;
- Run `php artisan db:seed` to add the initial seeds


## Running the app

- navigate to `http://localhost/datamanagment/public/`




