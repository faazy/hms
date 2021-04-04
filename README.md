# HMS

## Deployment Server Initial Setup Instructions

```
// copy the .env file
cp .env.example .env

// generate app key
php artisan key:generate

// link the storage folder
php artisan storage:link
```
Database Configurion

You may find the database.sqlite file in database directory which in root folder. 
If you couldn't find the particular you need to create `database.sqlite`
```
// edit the .env file with the database settings as follows
DB_CONNECTION=sqlite
DB_DATABASE=`absolute path of database` 
//home/project/hms/database/database.sqlite
```

### Development Instructions

Migrate and seed the database
```
php artisan db:refresh
```

Run the local development watcher
```
npm run watch
```
### Default Users
```
UserName: admin@hms.com
Password: 12345678
```

Run PHPUnit Tests
```
./vendor/bin/phpunit
```

Before releasing to production, compile the assets
```
npm run production
```

## Licence

Project Licenced to HMS. [Copyright FaAzI](https://www.faaziahamed.com)

## Copyright

Copyright (c) FaAzI.


## Local Development Setup Instructions
 
- `php artisan db:refresh` - Migrate and seed the database
- `npm install` - Install NPM packages. Check if Node.js is installed with `npm -v`
- `npm run dev` - Compile and build. If you get first time error, run it again.
- `npm run watch` - Run and watch the application on browser (Does NOT work with Homestead)
