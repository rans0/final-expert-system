<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ListPenyakit extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('list_penyakits')->insert(
            [
                [
                    'Penyakit' => 'Helmintiasis/Cacingan',
                    'Info' => 'Helmintiasis/Cacingan, disebabkan oleh beberapa jenis cacing, diantaranya cacing gilig, cacing daun, dan cacing pita.',
                    'Solusi' => '',
                ], [
                    'Penyakit' => 'Feline infectious peritonitis',
                    'Info' => 'Feline infectious peritonitis enyakit yang disebabkan oleh virus ini biasa juga disebut radang selaput rongga perut dan dada. Penularannya terjadi melalui liur atau feses dan melalui plasenta dari induk ke anak. Tingkat',
                    'Solusi' => '',
                ], [
                    'Penyakit' => 'Koksidiosis',
                    'Info' => 'oksidiosis merupakan penyakit protozoa yang menyerang pada
            gastrointestinal. Protozoa (coccidia) tersebut dalam protozoa luminal yang menginvasi kedalam epitel dan enterosit intestinal. Jenis Coccidia yang menyerang kucing yakni Isospora felis.
            ',
                    'Solusi' => '',
                ], [
                    'Penyakit' => 'Hematemesis',
                    'Info' => 'Hematemesis adalah muntah yang terjadi berulangulang dan pada muntahannya ditemukan banyak bekuan darah, atau darah yang tidak
            membeku, dengan demikian muntahan darah tersebut tampilannya diistilahkan dengan kopi bubuk, sebagai akibat dinaturasi darah oleh asam lambung.',
                    'Solusi' => '',
                ], [
                    'Penyakit' => 'Diare',
                    'Info' => 'Diare akut adalah perubahan mendadak pada pola saluran pencernaan, dicirikan dengan meningkatnya keencera/fluiditas, frekuensi, dan volume tinja, walaupun terapi
            empirik dan suportif telah dilakukan',
                    'Solusi' => '',
                ]
            ]
        );
    }
}
