@extends('template.user')
@section('content')
<body>
    @include('components.navbarBack')
    <main class="main main__diagnosa">
        <header class="main__diagnosa-header">
            <p><strong>Pilih Gejala</strong> Pada Kucing Kamu</p>
        </header>

        <div class="main__diagnosa-container">
            <div class="diagnosa__wrapper">
                <form action="{{ route('post-diagnosa') }}" method="post" class="form">
                    @csrf
                    <div class="form__wrapper">
                        <div class="form__input">
                            @for ($i=0; $i<$max_loop; $i++) <div class="input">
                                <p class="input__title">{{ $daftar_gejala[$i]['Deskripsi'] }}</p>

                                <div class="input__radio">
                                    <div class="radio">
                                        <input type="radio" name="{{ 'question' . $i }}" id="question1" value=1>
                                        <label for="question1">
                                            <div class="label">Ya</div>
                                        </label>
                                    </div>

                                    <div class="radio">
                                        <input type="radio" name="{{ 'question' . $i }}" id="question2" value=0>
                                        <label for="question2">
                                            <div class="label label--outline">Tidak</div>
                                        </label>
                                    </div>
                                </div>
                        </div>
                        @endfor
                    </div>
                    <div class="form__input-overlay"></div>
            </div>

            <button type="submit" class="form__button">
                <p>Diagnosa Sekarang</p>
                <i class="fas fa-chevron-right"></i>
            </button>
            </form>
        </div>

        <div class="diagnosa__wrapper">
            <div class="result__wrapper">
                <div class="result">
                    @if ($penyakit != '')
                    <div class="result__image">
                        <img src="../images/gambar-1.png" alt="gambar">
                    </div>

                    <div class="result__penyakit">
                        <p>Jenis Penyakit :</p>
                        <div class="box">
                            <p>{{ $penyakit }}</p>
                        </div>
                    </div>

                    <div class="result__gejala">
                        <p>Info Penyakit :</p>
                        <div class="box">
                            <p>{{ $info }}</p>
                        </div>
                    </div>

                    <div class="result__gejala">
                        <p>Solusi Penyakit :</p>
                        <div class="box">
                            <p>{{ $solusi }}</p>
                        </div>
                    </div>

                    <div class="result__gejala">
                        <p>Dengan Gejala :</p>
                        <div class="box">
                            <p><span>1</span>Mual-Mual dan Muntah</p>
                        </div>
                        <div class="box">
                            <p><span>2</span>Mual-Mual dan Muntah</p>
                        </div>
                        <div class="box">
                            <p><span>3</span>Mual-Mual dan Muntah</p>
                        </div>
                        <div class="box">
                            <p><span>4</span>Mual-Mual dan Muntah</p>
                        </div>
                        <div class="box">
                            <p><span>5</span>Mual-Mual dan Muntah</p>
                        </div>
                    </div>
                    @else
                    <div class="result__image">
                        <img src="../images/gambar-1.png" alt="gambar">
                    </div>

                    <div class="result__penyakit">
                        <p>Result :</p>
                        <div class="box">
                            <p>Data Tidak Ditemukan</p>
                        </div>
                    </div>

                    <div class="result__gejala">
                        <p>Data Tidak Ditemukan DiSebabkan Oleh :</p>
                        <div class="box">
                            <p><span>1</span>Data yang dimasukkan tidak benar</p>
                        </div>
                        <div class="box">
                            <p><span>2</span>Seluruh form input tidak dipilih</p>
                        </div>
                        <div class="box">
                            <p><span>3</span>Kecocokan data yang di input user tidak ada di database</p>
                        </div>
                    </div>

                   <div class="result__penyakit">
                        <div class="box">
                            <p>Maaf Atas Ketidak Nyamanannya</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            <div class="form__input-overlay"></div>
        </div>
        </div>
    </main>
    @include('components.footer')
</body>
@endsection
