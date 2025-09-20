# Use official PHP image with Apache
FROM php:8.2-apache

# Set the working directory to Apache's web root
WORKDIR /var/www/html

# Copy your PHP files and assets into the container
COPY index.php .
COPY assets/ ./assets/

# Enable Apache modules (optional, e.g. mod_rewrite)
RUN a2enmod rewrite

# Expose the default Apache port
EXPOSE 80
