@extends('template.user')
@section('content')
<body>
    @include('components.navbarBack')
    <main class="main main__info">
        <header class="main__info-header">
            <p><strong>Kenali Penyakit Pencernaan</strong> Pada Kucing Kamu</p>
        </header>

        <section class="main__info-container">
            <div class="info__accordion">
                @foreach ($penyakits as $penyakit)
                <div class="accordion__head">
                    <p>{{ $penyakit['Penyakit'] }}</p>
                    <div class="info__button">
                        <i class="fas fa-plus icon__toggle icon__toggle--hide"></i>
                        <i class="fas fa-minus icon__toggle"></i>
                    </div>
                </div>

                <div class="accordion__content">
                    <div class="content__text">
                        <p class="text__title">Keterangan :</p>
                        <p>{{ $penyakit['Info'] }}</p>
                    </div>
                    <div class="content__text">
                        <p class="text__title">Penanganan :</p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse nesciunt quo, excepturi sed expedita alias voluptate voluptatum enim sit praesentium?</p>
                    </div>
                    <div class="content__text">
                        <p class="text__title">Gejala :</p>

                        <div class="box">
                            <div class="box__gejala">
                                <p>Cacingan</p>
                            </div>
                            <div class="box__gejala">
                                <p>Diare</p>
                            </div>
                            <div class="box__gejala">
                                <p>Mual dan Muntah</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </section>
    </main>
    @include('components.footer')
    <script>
        const acc = document.getElementsByClassName("accordion__head");

        for (let i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.nextElementSibling.classList.toggle("accordion__content--hide");
                this.querySelector('.icon__toggle').classList.toggle("icon__toggle--hide")
            });
        }

    </script>
</body>
@endsection
