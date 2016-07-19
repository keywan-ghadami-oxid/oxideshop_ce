<?php

namespace OxidMigrationsProject;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

class Version20160718142844_leather_belt extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $this->addSql("
    UPDATE `oxarticles`
    SET
      `OXTITLE` = 'Project changed data',
      `OXTITLE_1` = 'Project changed data'
    WHERE `OXID` = 'dc5ffdf380e15674b56dd562a7cb6aec'
");
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $this->addSql("
    UPDATE `oxarticles`
    SET
      `OXTITLE` = 'Kuyichi Ledergürtel JEVER',
      `OXTITLE_1` = 'Kuyichi leather belt JEVER'
    WHERE `OXID` = 'dc5ffdf380e15674b56dd562a7cb6aec'
");
    }
}
