FROM php:8.2-apache

# Enable mod_rewrite (optional, only if needed for clean URLs)
RUN a2enmod rewrite

# Copy your site into the web root
COPY . /var/www/html/

# Set correct file permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 (Apache)
EXPOSE 80
