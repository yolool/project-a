<?php

namespace Database\Seeders;

use App\Models\Livre;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LivreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('livres')->insert([
        //     [
        //         'id'=>'1',
        //         'titre'=>'The rules of the queen'
        //     ]
        // ]);
        Livre::factory(20)->create();
    }
}
