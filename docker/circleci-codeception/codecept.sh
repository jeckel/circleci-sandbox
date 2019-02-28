#!/usr/bin/env bash

wait-for-it.sh ${SELENIUM_HOST} -- ./vendor/bin/codecept $@
