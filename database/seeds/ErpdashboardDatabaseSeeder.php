<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Fatnaydev\Erpdashboard\Traits\Seedable;

class ErpdashboardDatabaseSeeder extends Seeder
{
    use Seedable;

    protected $seedersPath = __DIR__.'/';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seed(ErpdashboardPermissionSeeder::class);
    }
}
