FROM php:8.0.13-apache-buster

LABEL maintainer="Soeren Helms <soeren.helms@repronik.it>"

ADD . /var/www/html

# EXPOSE 80 (already exposed by base image)