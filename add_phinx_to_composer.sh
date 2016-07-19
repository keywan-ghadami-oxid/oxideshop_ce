#!/bin/bash

composer require --update-with-dependencies oxid-esales/phinx-migration-wrapper:*

composer reset-db

composer install
