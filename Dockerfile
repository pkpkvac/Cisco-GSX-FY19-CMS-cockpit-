FROM php:7.2-apache AS base

RUN apt-get update \
  && apt-get install -y \
    zip unzip \
    sqlite3 libsqlite3-dev \
    zlib1g-dev \
    libssl-dev \
  && pecl install mongodb \
  && docker-php-ext-install zip pdo_sqlite \
  && a2enmod rewrite expires

RUN echo "extension=mongodb.so" > /usr/local/etc/php/conf.d/mongodb.ini

RUN chown -R www-data:www-data /var/www/html

# Copy cockpit (https://github.com/agentejo/cockpit.git | master)
COPY cockpit /var/www/html

# Copy base API Keys
COPY api.keys.php /var/www/html/storage/api.keys.php

# Copy collections
COPY collections /var/www/html/storage/collections

# Create config folder and set both config and storage to writeable
RUN mkdir -p /var/www/html/config
RUN chmod -R 775 /var/www/html/config
RUN chmod -R 775 /var/www/html/storage
RUN chmod 644 /var/www/html/storage/api.keys.php

COPY entry.sh .

ENTRYPOINT ["sh", "entry.sh"]
CMD ["apache2-foreground"]
