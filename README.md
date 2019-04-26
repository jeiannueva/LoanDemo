# LoanDemo

Loan Demo information should go here.

##Read how to install below
##Install MYSQL and Content
1. Edit the .env file with credentials
2. Do php artisan migrate

To *client install
1. Download the zip file and paste in in your htdocs folder
2. Install MYSQL Database and Content

To *developer install
1. Download the zip file
2. Install Laravel but do not create "laravel new"
3. Install MySQL and Content


## Config
```
# Install dependencies
composer install

# Create file .env
cp .env.example .env

# Generate key
php artisan key:generate

# Run migrations (tables and Seeders)
php artisan migrate --seed

# Create Server
php artisan serve

# Access project
http://localhost:8080
```
