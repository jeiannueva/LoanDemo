# LoanDemo
Loan Application (Under Development)

# Install dependencies
composer install

# Create/Edit file .env
cp .env.example .env

# Generate key
php artisan key:generate

# Run migrations
php artisan migrate

#Run seeding
php artisan db:seed --class=LoanStatusSeeder

# Create Server
php artisan serve

# Access project
http://localhost:8080