FROM php:8.0.13-apache-buster

LABEL org.opencontainers.image.authors="Soeren Helms <soeren.helms@repronik.it>"
LABEL org.opencontainers.image.source="https://github.com/HSoeren/is-it-wichtel-zeit"

ADD . /var/www/html

# EXPOSE 80 (already exposed by base image)
