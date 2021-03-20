<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MigrateInOrder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'migrate:order';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Execute the migrations in the order specified in the file app/Console/Comands/MigrateInOrder.php \n Drop all the table.php in db before execute the command.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        /** Specify the names of the migrations files in the order you want to 
        * loaded
        * $migrations =[ 
        *               'xxxx_xx_xx_000000_create_nametable.php_table.php.php',
        *    ];
        */
        $migrations = [ 
            '2021_02_27_090101_create_divisions_table.php',
            '2021_02_27_090244_create_grades_table.php',
            '2021_02_27_090431_create_class_divisions_table.php',
            '2021_02_27_091509_create_roles_table.php',
            '2014_10_12_000000_create_users_table.php',
            '2021_02_27_092329_create_students_table.php',
            '2021_02_27_090855_create_teachers_table.php',
            '2021_02_27_092402_create_addresses_table.php',
            '2021_02_27_092340_create_statements_table.php',
        ];
        foreach($migrations as $migration)
        {
            $basePath = 'database/migrations/';
            $path = $basePath.$migration;
            $this->call('migrate', [
                '--path' => $path,            
            ]);
        }
        $this->call('migrate');
    }
}
