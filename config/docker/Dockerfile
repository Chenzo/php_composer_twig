FROM php:7.2.5-apache

RUN apt-get update

# 1. development packages
RUN apt-get install -y \
    git \
    zip \
    curl \
    sudo \
    unzip \
    wget 

#change root
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# 3. mod_rewrite for URL rewrite and mod_headers for .htaccess extra headers like Access-Control-Allow-Origin-
RUN a2enmod rewrite headers

RUN set -ex \
    && docker-php-ext-install pdo pdo_mysql mysqli \
    && rm -rf /var/cache/apk/*


## adding in composer
RUN wget http://getcomposer.org/composer.phar && mv composer.phar /usr/local/bin/composer
RUN chmod 777 /usr/local/bin/composer
#RUN composer install