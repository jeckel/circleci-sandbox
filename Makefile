.PHONY: up codecept circle

CODECEPTION=docker-compose run --rm codeception ./vendor/bin/codecept

up:
	@docker-compose up -d

codecept:
	@${CODECEPTION} ${CMD}

test: up
	@${CODECEPTION} run

test-cover: up
	@docker-compose run --rm codeception wait-for.sh selenium:4444 -- ./vendor/bin/codecept run --coverage --coverage-html

circle:
	@circleci local execute --job build
