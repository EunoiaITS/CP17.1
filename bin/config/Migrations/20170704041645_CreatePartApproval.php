<?php
use Migrations\AbstractMigration;

class CreatePartApproval extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('part_approval');
        $table->addColumn('vendor', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('partName', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('date', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('issued_date', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('drawingNo', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('fullyApprove', 'boolean', [
            'default' => 0,
            'null' => ture,
        ]);
        $table->addColumn('conditionApprove', 'boolean', [
            'default' => 0,
            'null' => ture,
        ]);
        $table->addColumn('notApprove', 'boolean', [
            'default' => 0,
            'null' => ture,
        ]);
        $table->addColumn('remarks', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('upload', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('materialStore', 'boolean', [
            'default' => 0,
            'null' => ture,
        ]);
        $table->addColumn('quantityAssurance', 'boolean', [
            'default' => 0,
            'null' => ture,
        ]);
        $table->addColumn('production', 'boolean', [
            'default' => 0,
            'null' => ture,
        ]);
        $table->addColumn('purchaser', 'boolean', [
            'default' => 0,
            'null' => true,
        ]);
        $table->addColumn('status', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('requestor', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('pic', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('acknowledgedBy', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('approvedBy', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
