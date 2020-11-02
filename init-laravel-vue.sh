#!/bin/sh

echo '**** START SETUP LARAVEL-VUE ****'
echo '========================='

cp .env.example .env
echo '**** DONE Copy env ****'

composer install
npm install
echo '**** DONE Install dependencies ****'

npm run dev
echo '**** DONE Build assets ****'

echo '===================='
echo '**** SETUP LARAVEL-VUE SUCCESSFULLY ****'
