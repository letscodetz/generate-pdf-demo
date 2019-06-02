

## Genate PDF from HTML Demo

this Demo generates pdf file from an html table view, here is how to run this demo locally

- git clone url
- composer install
- create .env and setup database connection(database name, database user and password)
- php artisan migrate (this will generate required database tables)
-  php artisan db:seed (this will put test data in your database)
- php artisan serve
- open your browser and visit [http://localhost:8000](http://localhost:8000).
- click Download PDF link to download your pdf file.

