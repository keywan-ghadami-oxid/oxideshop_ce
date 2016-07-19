<?php

use Phinx\Migration\AbstractMigration;

class OxaddressOxnewfield extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('oxaddress');
        $table->addColumn('OXNEWFIELD', 'string', array('limit' => 64, 'default' => 'new value'));
        $table->save();
    }
}
