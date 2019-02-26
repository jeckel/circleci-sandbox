.PHONY: up codecept

CODECEPTION=docker-compose run --rm -u $(shell id -u):$(shell id -g) php-fpm ./vendor/bin/codecept

up:
	@docker-compose up

codecept:
	@${CODECEPTION} ${CMD}
