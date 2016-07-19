<?php

namespace OxidMigrationsCE;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

class Version20160718142843_oxarticle_oxean_index extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $this->addSql("ALTER TABLE `oxarticles` ADD INDEX `OXEAN` (`OXEAN`)");
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $this->addSql("ALTER TABLE `oxarticles` DROP INDEX `OXEAN`");
    }
}
