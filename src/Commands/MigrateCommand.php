<?php

namespace Pangolinkeys\BackupMigrations\Commands;

use Illuminate\Database\Console\Migrations\MigrateCommand as BaseMigrateCommand;
use Illuminate\Database\Migrations\Migrator;

class MigrateCommand extends BaseMigrateCommand
{
    public function __construct(Migrator $migrator)
    {
        parent::__construct($migrator);
    }

    public function handle()
    {
        
        return parent::handle(); // TODO: Change the autogenerated stub
    }
}