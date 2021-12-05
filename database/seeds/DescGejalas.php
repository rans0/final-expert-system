<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DescGejalas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('desc_gejalas')->insert(
            [
                [
                    'Code' => 'G001',
                    'Deskripsi' => 'Tubuh Lemas',
                ],
                [
                    'Code' => 'G002',
                    'Deskripsi' => 'Flu',
                ],
                [
                    'Code' => 'G003',
                    'Deskripsi' => 'Kesulitan Bernafas',
                ],
                [
                    'Code' => 'G004',
                    'Deskripsi' => 'Diare',
                ],
                [
                    'Code' => 'G005',
                    'Deskripsi' => 'Dehidrasi',
                ],
                [
                    'Code' => 'G006',
                    'Deskripsi' => 'Muntah',
                ],
                [
                    'Code' => 'G007',
                    'Deskripsi' => 'Berat Badan Menurun',
                ],
                [
                    'Code' => 'G008',
                    'Deskripsi' => 'Tinja Hitam',
                ],
                [
                    'Code' => 'G009',
                    'Deskripsi' => 'Tinja Cacingan',
                ],
                [
                    'Code' => 'G010',
                    'Deskripsi' => 'Tinja Berdarah',
                ]
            ]
        );
    }
}
