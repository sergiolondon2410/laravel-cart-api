## Morsum Assessment API

This simple API consumes an external service to get a list of products and send them from its own endpoint. Once the client sends the checkout request, this API will store the order and every item from on it.


## Stack

This project has been developed with PHP as a backend language, Laravel 9 as Framework, and MySQL as the DB Engine.


## Setup

In order to run the project you must follow the steps below:

- Clone the [repository](https://github.com/sergiolondon2410/laravel-cart-api) from github
- Go to the project`s root folder
- In case you want to change the exposed ports, you can do it by setting the new ones on the docker-compose.yml
- Run the next command: docker run --rm --interactive --tty -v $(pwd):/app composer install
- To run the project you have to type "sail up" in the console


## Test Postman Collection

On this very repository you´ll find a file called MorsumAssessment.postman_collection.json. You can import the collection in your local Postman version and run any of the request.