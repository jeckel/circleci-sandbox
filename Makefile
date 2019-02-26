.PHONY: up codecept circle

CODECEPTION=docker-compose run --rm -u $(shell id -u):$(shell id -g) php-fpm ./vendor/bin/codecept

up:
	@docker-compose up -d

codecept:
	@${CODECEPTION} ${CMD}

test: up
	@${CODECEPTION} run

circle:
	@circleci local execute --job build
