# Simple blog

Series: Build simple blog with Laravel 5.4 and Vue 2.1

## System requirements
- PHP >= 5.6.4
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

## Series: Build simple blog with Laravel 5 and Vue 2
- Part 1: [Install Laravel + VueJS](https://viblo.asia/huukimit/posts/V3m5WEPEZO7)

## Set up
```$xslt
# Install dependencies:
cp .env.example .env
composer install
npm install

# Set directory permission
chmod -R 777 storage
chmod -R 777 bootstrap

# Generate app key:
php artisan key:generate

# Update application config in .env file:
#

# Build css, js:
npm run dev

# Run machine with docker-compose
# Set up docker-compose before
# docker-compose up -d

# add your domain in file hosts:
# sudo nano /etc/hosts
```
