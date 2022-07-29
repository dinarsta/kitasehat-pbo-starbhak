<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catatans')->insert([
            'tanggal' => '2013-12-31',
            'waktu' => '09.00',
            'lokasi' => 'smk taruna',
            'suhutubuh' => '36.3'
            
        ]);
        
        
    }
}