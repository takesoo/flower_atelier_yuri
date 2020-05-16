FROM php:7.3.6-apache-stretch

RUN apt-get update && apt-get install -y \
    vim \
    less \
    && a2enmod rewrite

ADD ./000-default.conf /etc/apache2/sites-available/000-default.conf