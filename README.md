
PHP COMPOSE AND TWIG DOCKER
====================  

From the root run this command:
`docker-compose -f config/docker/docker-compose.yml up --build`



http://localhost/

To remote into the running Docker Container:  
`docker ps` - this will list your running containers. Find the PHP one and copy it's ID.

then:  
`$docker exec -it <id> /bin/bash`