FROM php:8.2-apache


WORKDIR /Users/elysabeth/devops

RUN apt-get -y update
RUN apt-get -y install git
RUN apt-get -y install zip
RUN docker-php-ext-install pdo_mysql