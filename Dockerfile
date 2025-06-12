FROM php:8.2-apache

# Enable Apache mod_rewrite (optional)
RUN a2enmod rewrite

# Copy app files into the Apache root directory
COPY . /var/www/html/

# Expose the default web port
EXPOSE 80
