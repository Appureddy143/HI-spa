FROM php:8.2-apache

# Copy all your site files (including PHP and assets)
WORKDIR /var/www/html
COPY . .

# Optional: enable Apache rewrite module if needed
RUN a2enmod rewrite

# Set correct permissions (if needed)
# but often not needed inside container since files are copied by root
# You can also add e.g. RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
