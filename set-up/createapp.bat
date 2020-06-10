@echo off

cls
echo *****************************************************************
echo Moving into parent folder
echo *****************************************************************
cd ..

cls
echo *****************************************************************
echo "Initialise Git"
echo *****************************************************************
call git init

cls
echo *****************************************************************
echo "Copying Predefined GitIgnore"
echo *****************************************************************
copy set-up\2-gitignore.txt .\.gitignore /Y

REM cls
REM echo *****************************************************************
REM echo "Creating Laravel App...""
REM echo *****************************************************************
REM call laravel new .
REM cls
REM echo *****************************************************************
REM echo "Installing Laravel UI and Passport"
REM echo *****************************************************************
REM call composer require laravel/ui
REM call composer require laravel/passport
REM cls
REM echo *****************************************************************
REM echo "Creating Bootstrapped UI with Basic Authentication"
REM echo *****************************************************************
REM call php artisan ui bootstrap --auth

cls
echo *****************************************************************
echo "Installing Laravel Mix"
echo *****************************************************************
call npm install

cls
echo *****************************************************************
echo "Adding Fontawesome 5 Free"
echo *****************************************************************
call npm install @fortawesome/font-awesome-free

cls
echo *****************************************************************
echo "Copying GitIgnore, Predefined Env and SASS"
echo *****************************************************************
copy set-up\2-gitignore.txt .\.gitignore /Y
copy set-up\3-env.txt .\.env /Y
copy set-up\4-app.txt .\resources\scss\app.scss /Y
copy set-up\5-variables.txt .\resources\scss\_variables.scss /Y

cls
echo *****************************************************************
echo "Running Laravel Mix (Dev)""
echo *****************************************************************
call npm run dev

cls
echo *****************************************************************
echo "Running the Database & User Creation"
echo *****************************************************************
call mysql -u root < set-up\1-db.sql

cls
echo *****************************************************************
echo "Dumping Autoload"
echo *****************************************************************
call composer dumpautoload

cls
echo *****************************************************************
echo "Regenerating Application Key"
echo *****************************************************************
call php artisan key:generate

cls
echo *****************************************************************
echo "Perform Initial Migrate"
echo *****************************************************************
call php artisan migrate

cls
echo *****************************************************************
echo "Perform Passport Key Creation"
echo *****************************************************************
call php artisan passport:install --force

cls
echo *****************************************************************
echo "Clearing caches"
echo *****************************************************************
call php artisan cache:clear
call php artisan view:clear
call php artisan route:clear

cls
echo *****************************************************************
echo "Adding and Committing Base Code"
echo *****************************************************************
call git add .
call git commit -m "Updates for Student Copy"

cls
echo *****************************************************************
echo * Completed...                                                  *
echo *****************************************************************
echo * Site:       http://l7-api-passport.test                       *
echo *****************************************************************
echo * Database Details:                                             *
echo * Database  - l7_api_db                                         *
echo * User      - l7_api_user                                       *
echo * Password  - Secret1                                           *
echo * Charset   - utf8mb4                                           *
echo * Collation - utf8mb4_general_ci                                *
echo * Engine    - InnoDB                                            *
echo *****************************************************************

cls
echo *****************************************************************
echo "Perform Passport Client Installation"
echo "IMPORTANT:"
echo "     Give the client a title that is YOUR NAME"
echo "     For example: Jimmy Opendador"
echo "     Copy this client code and put it into your docs"
echo *****************************************************************
call php artisan passport:client --install

@echo on
