<?php
namespace Shonen\DbPeru\Database\Seeds;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RegionsTableSeeder::class);
        $this->call(ProvincesTableSeeder::class);
        $this->call(DistrictsTableSeeder::class);
        $this->call(DistrictsBTableSeeder::class);
        $this->call(DistrictsCTableSeeder::class);
    }
}
