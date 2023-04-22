# FROM php:8.2-alpine3.16

# COPY /default.conf /etc/apache2/sites-available/default.conf
# # RUN a2enmod rewrite

# # Copy application source
# COPY . /var/www/
# RUN chown -R www-data:www-data /var/www

# CMD ["start-apache"]
# CMD [ "start-Mysql" ]
# CMD ["start-apache"]
# CMD [ "start-Mysql" ]

FROM php:7.1.23-apache
COPY . /var/www/html
RUN docker-php-ext-install pdo_mysql
CMD ["apache2ctl", "-D", "FOREGROUND"]