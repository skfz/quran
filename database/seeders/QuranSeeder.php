<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $script = getcwd().'/database/seeders/data.sql';

        $username = config('database.connections.mysql.username');
        $password = config('database.connections.mysql.password'); 
        $database = config('database.connections.mysql.database');
    
        $command = "mysql -u $username -p$password $database < $script";
        exec($command);
    }
}
