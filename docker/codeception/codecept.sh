#!/usr/bin/env bash

wait-for.sh ${SELENIUM_HOST} -- ./vendor/bin/codecept run --coverage --coverage-html
