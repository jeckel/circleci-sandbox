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
	@docker-compose run --rm codeception wait-for.sh selenium:4444 -- ./vendor/bin/codecept run --coverage --coverage-xml
#	@docker-compose run --rm codeception wait-for.sh selenium:4444 -- ./vendor/bin/codecept run --coverage --coverage-html --coverage-xml

circle:
	@circleci local execute --job build
