#!/usr/bin/env php

install:
	composer install

brain-games:
	./bin/brain-games

brain-even:
	./bin/brain-even

validate:
	composer validate

init:
	composer exec --verbose phpcs -- --standard=PSR12 src bin