.PHONY: up codecept circle

CODECEPTION=docker-compose run --rm codeception ./vendor/bin/codecept

up:
	@docker-compose up -d

codecept:
	@${CODECEPTION} ${CMD}

composer:
	@docker-compose run --rm --no-deps codeception composer ${CMD}

test: up
	@${CODECEPTION} run

test-cover: up
	@docker-compose run --rm codeception wait-for.sh selenium:4444 -- ./vendor/bin/codecept run --coverage --coverage-html

circle:
	@circleci local execute --job build

stan:
	@docker-compose run --rm --no-deps codeception vendor/bin/phpstan analyse

phpcs:
	@docker-compose run --rm --no-deps codeception vendor/bin/phpcs

phpmd:
	@docker-compose run --rm --no-deps codeception vendor/bin/phpmd src text cleancode,codesize,design,naming,unusedcode
