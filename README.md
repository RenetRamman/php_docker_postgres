# Products

This is an application that displays information about various products from a database. New products can be added and existing ones can be edited or deleted using the UI.

## Startup

To start the application, ensure that you have [docker](https://www.docker.com) installed.

If docker is installed on your pc and the repo has been cloned, navigate to [...]/php_docker_postgres/docker and run the following commands:
~~~
docker-compose build
docker-compose up
~~~

Running the above commands will start the docker container with the required images with the postgres database and php-apache.

Once the commands have finished processing their tasks, open a web-browser and navigate to the address [localhost:8080](http://localhost:8080).

## Approach

The allpication dependencies are stored in a docker container to simplify sharing the program. In the src folder are php files which handle the database connection and html creation as well as the css file. An apache server was used to host the application. A postgres database was used to store the products data.

The biggest challenge during the creation of the application was learning php and how to used docker. As I have previously only learned some php through https://www.w3schools.com/php/default.asp, I lacked the knowledge to deploy a php application myself.

The application filters products through the search bar above the products table on the home page. Upon entering a string to the search bar and pressing enter, all of the columns of the products are compared to the submitted search string. This includes price and quantity. For example submitting *10* through the search bar will return the products that contain *10* somewhere within their name or description, price or quantity.

the products can be sorted by clicking on the *id, name, description, quantity* or *price* buttons. The products will be sorted in an ascending order by the value of the selected column.

New products can be added on the *Add product* page. Existing products can be modified or deleted by clicking on the *Edit* or *Delete* buttons to the right of each product listing.