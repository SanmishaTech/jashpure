
# Webly CMS

Custom made CMS made by Sanmisha with Love

## Installation Steps

```
composer create-project webly/webly <your_website_folder>

composer update
```

copy env file to .env and enter Database Details

then run

```
php spark migrate -all

php spark webly:setup
```

And follow the instructions

To run Webly CMS
```
php spark serve
```

## Updation
```
git pull

composer update
```

