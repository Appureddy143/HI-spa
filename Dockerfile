# Use an official PHP image with Apache
FROM php:8.2-apache

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy the index.php file into the container
COPY index.php .

# Copy the assets folder into the container (if it exists)
COPY assets/ ./assets/

# Expose port 80 (Apache's default)
EXPOSE 80
