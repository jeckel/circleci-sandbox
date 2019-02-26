FROM php:7-fpm-alpine

# Install nginx and supervisor
RUN apk --no-cache add nginx supervisor

# Configure nginx
COPY docker/supervisor-nginx-fpm/nginx.conf /etc/nginx/nginx.conf

# Configure supervisord
COPY docker/supervisor-nginx-fpm/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Configure php-fpm
COPY docker/supervisor-nginx-fpm/zz-docker.conf /usr/local/etc/php-fpm.d/zz-docker.conf
RUN mkdir -p /var/run/php/ && chmod -R +X /var/run/php && chmod 777 /var/run/php

# Add launcher
COPY docker/supervisor-nginx-fpm/launcher.sh /usr/local/bin/

COPY . /var/www/project
WORKDIR /var/www/project

EXPOSE 80

CMD launcher.sh
