<?php
/**
 * Created by PhpStorm.
 * User: cjam
 * Date: 8/23/2018
 * Time: 8:29 p.m.
 */

namespace FastCode\Commands;

use CodeIgniter\CLI\CLI;
use CodeIgniter\CLI\BaseCommand;
use FastCode\Libraries\Generate;

class CreateMigration extends BaseCommand
{
    use Generate;
    protected $group = 'FastCodeCI';
    protected $name = 'create:migration';
    protected $description = 'Create a  Migration file';


    public function run(array $params)
    {
        $nameMigration = array_shift($params);

        if (empty($nameMigration)) {
            $nameMigration = CLI::prompt('Migration name');
        }

        if (empty($namespace)) {
            $namespace = CLI::prompt('Namespace');
        }

        if (empty($namespace) || $namespace == "") {
            $namespace = "App";
        }

        if (empty($nameTable)) {
            $nameTable = CLI::prompt('Table name');
        }

        $data = [
            'nameMigration'     => $nameMigration,
            'namespace'         => $namespace,
            'nameTable'         => $nameTable
        ];

        $content = $this->render('Migration', $data);
        $path    = $this->getPathOutput('Database/Migrations', $namespace) . $data['nameMigration'] . '.php';

        $this->copyFile($path, $content);

        echo "File created :" . $path . $data['nameMigration'] . '.php';
    }
}
