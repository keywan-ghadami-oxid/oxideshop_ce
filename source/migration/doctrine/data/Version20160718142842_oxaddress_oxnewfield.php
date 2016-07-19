<?php

namespace OxidMigrationsCE;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

class Version20160718142842_oxaddress_oxnewfield extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $this->addSql("
            ALTER TABLE `oxaddress`
              ADD `OXNEWFIELD` varchar(64)
              COLLATE 'latin1_general_cs'
              NOT NULL DEFAULT 'new value'
              COMMENT 'New field'
        ");
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $this->addSql("ALTER TABLE `oxaddress` DROP `OXNEWFIELD`");
    }
}
