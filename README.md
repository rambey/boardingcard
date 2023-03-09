# Boardingcard

## Installation
To  install dependencies with `Composer` first:

```bash
$ composer install
```
To  update dependencies with `Composer` first:

```bash
$ composer update
```

```bash
$ composer dump-autoload
```

To run the tests use `phpunit`:

```bash
$ ./vendor/bin/phpunit [function_to_run][path_to_file]
```
sample to test a specific function : 

```bash
$ ./vendor/bin/phpunit --filter testSortBoardingCards Tests/BoardingCardSorterTest.php

```

## Using Docker
To run project using Docker:

Just run:

```bash
$ docker-compose  --build
```
```bash
$ docker-compose  up -d
```
Go to [http://localhost:8660/](http://localhost:8660)

