FROM php:7.4.33-apache
WORKDIR /var/www/html

ENV XDEBUG_VERSION=2.9.2
ENV COMPOSER_ALLOW_SUPERUSER=1
EXPOSE 80

# Mise a jour et installation des packages linux
RUN apt-get update -qq && \
    apt-get install -qy \
    git \
    gnupg \
    unzip \
    zip


RUN pecl install xdebug-${XDEBUG_VERSION} \
	&& docker-php-ext-enable xdebug

# Installation de Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer --version
# RUN composer install --no-dev

# Installation des Extensions PHP
RUN docker-php-ext-install -j$(nproc) opcache pdo_mysql

# Remplacement du fichier de configuration de PHP
COPY conf/php.ini /usr/local/etc/php/conf.d/app.ini

# Remplacement du fichier de configuration du vhost d'apache
COPY conf/vhost.conf /etc/apache2/sites-available/000-default.conf

# Ajout du fichier de configuration d'apache (z- permet d'être chager en dernier)
COPY conf/apache.conf /etc/apache2/conf-available/zzz-app.conf

RUN a2enmod rewrite remoteip && \
    a2enconf zzz-app