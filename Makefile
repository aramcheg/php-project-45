#!/usr/bin/env php

install:
	composer install

brain-games:
	./bin/brain-games

validate:
	composer validate