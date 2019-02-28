FROM php:7-alpine

ENV SELENIUM_HOST=selenium:444

#RUN apk add --no-cache $PHPIZE_DEPS
## Install PECL xdebug extensions
#RUN pecl install xdebug && docker-php-ext-enable xdebug

RUN apk --update --no-cache add autoconf g++ make && \
    pecl install -f xdebug && \
    docker-php-ext-enable xdebug && \
    apk del --purge autoconf g++ make

# Add wait-for-it
COPY docker/circleci-codeception/*.sh /usr/local/bin/

COPY . /app
WORKDIR /app

ENTRYPOINT /usr/local/bin/codecept.sh
