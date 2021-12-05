<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\KamusGejala;
use App\DescGejala;
use App\ListPenyakit;

class PageController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function diagnosa_page()
    {
        $daftar_gejala = DescGejala::get();
        $max_loop = count($daftar_gejala);
        $penyakit = '';
        $info = '';
        $solusi = '';
        // dd($daftar_gejala);

        return view('diagnosa', compact('daftar_gejala', 'max_loop', 'penyakit', 'info', 'solusi'));
    }

    public function diagnosa_proses(Request $request)
    {
        $input_all = $request->all();

        $this->validate($request, [
            'question0' => 'required',
            'question1' => 'required',
            'question2' => 'required',
            'question3' => 'required',
            'question4' => 'required',
            'question5' => 'required',
            'question6' => 'required',
            'question7' => 'required',
            'question8' => 'required',
            'question9' => 'required',
        ]);

        $values = array();
        for ($i = 0; $i < count($input_all) - 1; $i++) {
            $values[] = $input_all['question' . $i];
        }

        $query = DB::table('kamus_gejalas')
            ->select('*')
            ->where('G001', '=', $values[0])
            ->where('G002', '=', $values[1])
            ->where('G003', '=', $values[2])
            ->where('G004', '=', $values[3])
            ->where('G005', '=', $values[4])
            ->where('G006', '=', $values[5])
            ->where('G007', '=', $values[6])
            ->where('G008', '=', $values[7])
            ->where('G009', '=', $values[8])
            ->where('G010', '=', $values[9])
            ->get();

        $penyakit = '';
        $info = '';
        $solusi = '';
        // dd(!empty($query));
        if (!empty($query)) {
            $result = DB::table('list_penyakits')
                ->select('*')
                ->where('id', '=', $query[0]->id)
                ->get();
            // dd($result);
            $penyakit = $result[0]->Penyakit;
            $info = $result[0]->Info;
            $solusi = $result[0]->Solusi;
        }

        $daftar_gejala = DescGejala::get();
        $max_loop = count($daftar_gejala);

        return view('diagnosa', compact('daftar_gejala', 'max_loop', 'penyakit', 'info', 'solusi'));
    }

    public function info_page()
    {
        $penyakits = ListPenyakit::get();

        return view('info', compact('penyakits'));
    }

    public function about_page()
    {
        return view('about');
    }
}
