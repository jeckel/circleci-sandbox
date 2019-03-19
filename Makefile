.PHONY: up codecept circle

CODECEPTION=docker-compose run --rm codeception ./vendor/bin/codecept

up:
	@docker-compose up -d

codecept:
	@${CODECEPTION} ${CMD}

test: up
	@${CODECEPTION} run

test-cover: up
	@${CODECEPTION} run --coverage --coverage-html

circle:
	@circleci local execute --job build
