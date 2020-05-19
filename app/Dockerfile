FROM php:7.2-apache
RUN apt-get update && apt-get install -y figlet && docker-php-ext-install mysqli && rm -rf /var/lib/apt/lists/*
ENV TO_JA blebleble
#ONBUILD RUN figlet "project 6"
#RUN figlet "my project4"
#CMD ["figlet", "my project 2", "index.php"]
#ENTRYPOINT exec figlet "my project 3"