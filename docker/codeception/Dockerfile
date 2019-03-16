#FROM php:7-alpine
#
#ENV SELENIUM_HOST=selenium:444
#
##RUN apk add --no-cache $PHPIZE_DEPS
### Install PECL xdebug extensions
##RUN pecl install xdebug && docker-php-ext-enable xdebug
#
#RUN apk --update --no-cache add autoconf g++ make && \
#    pecl install -f xdebug && \
#    docker-php-ext-enable xdebug && \
#    apk del --purge autoconf g++ make
#
## Add entrypoint
#COPY *.sh /usr/local/bin/
#
##CMD ['/usr/local/bin/codecept.sh']


FROM codeception/codeception
