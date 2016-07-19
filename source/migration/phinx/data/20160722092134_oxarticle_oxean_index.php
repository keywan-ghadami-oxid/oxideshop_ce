<?php

use Phinx\Migration\AbstractMigration;

class OxarticleOxeanIndex extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('oxarticles');
        $table->addIndex(array('OXEAN'));
        $table->save();
    }
}
