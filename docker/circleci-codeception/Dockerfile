FROM php:7-alpine

ENV SELENIUM_HOST=selenium:444

# Install PECL xdebug extensions
RUN pecl install xdebug && docker-php-ext-enable xdebug

# Add wait-for-it
COPY docker/circleci-codeception/wait-for-it.sh /usr/local/bin/

COPY . /app
WORKDIR /app

CMD wait-for-it.sh ${SELENIUM_HOST} -- ./vendor/bin/codecept run --coverage --coverage-html
