#!/bin/bash

composer config repositories.oxid-esales/oxideshop-ee vcs https://github.com/OXID-eSales/oxideshop_ee
composer config repositories.oxid-esales/oxideshop-pe vcs https://github.com/OXID-eSales/oxideshop_pe

composer config repositories.oxid-esales/facts path /var/www/oxideshop/packages/facts
composer config repositories.oxid-esales/edition-facts path /var/www/oxideshop/packages/edition_facts
composer config repositories.oxid-esales/migration-facts path /var/www/oxideshop/packages/migration_facts
composer config repositories.oxid-esales/doctrine-migration-wrapper path /var/www/oxideshop/packages/doctrine_migration_wrapper
composer config repositories.oxid-esales/phinx-migration-wrapper path /var/www/oxideshop/packages/phinx_migration_wrapper
composer config repositories.oxid-esales/db-migration path /var/www/oxideshop/packages/db_migration

patch -p0 < composer.json.scripts.patch

composer require oxid-esales/oxideshop-pe:dev-sql_migrations_spike-ESDEV-3816 \
    oxid-esales/oxideshop-ee:dev-sql_migrations_spike-ESDEV-3816 \
    oxid-esales/db-migration:*

composer install
