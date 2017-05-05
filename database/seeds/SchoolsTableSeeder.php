<?php

use Illuminate\Database\Seeder;
use App\School;
class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(School::class)->create(['name'=>'Cliente 1','nickname'=>'cli1']);
        factory(School::class)->create(['name'=>'Cliente 2','nickname'=>'cli2']);
        factory(School::class)->create(['name'=>'Cliente 3','nickname'=>'cli3']);
        //factory(School::class,10)->create();
    }
}
