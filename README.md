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

Once the commands have finished processing their tasks, open a web-browser and navigate to the address [localhost:8080](localhost:8080).

**Include a brief README explaining your approach, challenges faced, and any additional features you implemented, including details about the filtering and sorting functionalities you added.**