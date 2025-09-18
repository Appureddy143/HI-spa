# Use an official PHP image with an Apache server
FROM php:8.2-apache

# Set the working directory to the Apache web root
WORKDIR /var/www/html

# Copy the website files from the current directory to the container's web root
# This assumes your Dockerfile is in the same directory as index.php and the assets folder.
COPY . /var/www/html/

# Enable Apache's rewrite module (good practice for web applications)
RUN a2enmod rewrite

# Expose port 80 to allow traffic to the web server
EXPOSE 80

