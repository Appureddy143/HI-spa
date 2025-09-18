# Use an official PHP image with an Apache web server as a base
# This image includes PHP and Apache, pre-configured to work together.
FROM php:8.2-apache

# Set the working directory to Apache's default web root
WORKDIR /var/www/html

# Copy the application files from your project directory into the container.
# This command assumes your Dockerfile is in the same directory as your project files.
# It copies the 'index.php' file and the entire 'assets' directory.
COPY index.php .
COPY assets/ ./assets/

# The Apache server inside the container listens on port 80 by default.
# This line informs Docker that the container will listen on this port at runtime.
EXPOSE 80
