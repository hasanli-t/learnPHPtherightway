# Use the official PHP image with Apache
FROM php:8.3-apache

# Install additional PHP extensions if needed (optional)
# RUN docker-php-ext-install pdo pdo_mysql mysqli

# Enable Apache mod_rewrite (useful for modern PHP frameworks)
RUN a2enmod rewrite

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Set the working directory
WORKDIR /var/www/html

# Copy your PHP files to the container (optional - you can also use volumes)
# COPY . /var/www/html/

# Expose port 80
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
