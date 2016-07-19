#!/bin/bash

[ -f vendor/bin/reset-shop ] && vendor/bin/reset-shop

git checkout -- composer.json
rm -rf composer.lock
rm -rf vendor/
