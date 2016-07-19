<?php

use Phinx\Migration\AbstractMigration;

class LeatherBelt extends AbstractMigration
{
    public function up()
    {
        $this->execute("
    UPDATE `oxarticles`
    SET
      `OXTITLE` = 'Project changed data',
      `OXTITLE_1` = 'Project changed data'
    WHERE `OXID` = 'dc5ffdf380e15674b56dd562a7cb6aec'
");
    }

    public function down()
    {
        $this->execute("
    UPDATE `oxarticles`
    SET
      `OXTITLE` = 'Kuyichi Ledergürtel JEVER',
      `OXTITLE_1` = 'Kuyichi leather belt JEVER'
    WHERE `OXID` = 'dc5ffdf380e15674b56dd562a7cb6aec'
");
    }
}
