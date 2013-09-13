## Intro

Provides samples of how to include and use doctrine mongodb ODM

## Setup

    composer install

## Run

    php example.php

## Validate Run

In mongo terminal there should be a database named `doctrine` with a collection named Employee
```
	$ mongo
	MongoDB shell version: 2.4.5
	connecting to: test
	> use doctrine
	switched to db doctrine
	> db.Employee.find()
	{ "_id" : ObjectId("5233253853fa07723b8b4568"), "name" : "John Lydon" }
```

## Resources
* [Official Site] (http://docs.doctrine-project.org/projects/doctrine-mongodb-odm/en/latest/)