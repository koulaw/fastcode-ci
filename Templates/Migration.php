@php namespace {namespace}\Database\Migrations;
use CodeIgniter\Database\Migration;

class Migration_{nameMigration} extends Migration
{
    public function up()
    {
        $this->forge->addField([
            '`created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
            '`updated_at` TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
        ]);
        
        $this->forge->createTable('{nameTable}');
    }


    public function down()
    {
        $this->forge->dropTable('{nameTable}');
    }
}