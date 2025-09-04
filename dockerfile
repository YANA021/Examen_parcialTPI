FROM php:8.2-apache
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN a2enmod rewrite \
 && printf "<Directory /var/www/html>\n\tOptions Indexes FollowSymLinks\n\tAllowOverride All\n\tRequire all granted\n</Directory>\n" \
    > /etc/apache2/conf-available/z-override.conf \
 && a2enconf z-override
WORKDIR /var/www/html
EXPOSE 80   

