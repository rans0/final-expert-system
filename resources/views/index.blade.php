@extends('template.user')
@section('content')
<body>
@include('components.navbar')
	<main class="main main__home">
		<header class="main__home-header">
			<p>Meow Doc</p>
			<p>adalah sebuah web aplikasi sistem pakar yang dapat membantu mendiagnosa <span><br/></span> 
				penyakit pada kucing anda khususnya pada penyakit pencernaan kucing. Selamat Mencoba!</p>
		</header>

		<section class="main__home-menu">
			<a href="{{ route('diagnosa') }}" class="main__home-link">
				<div class="main__home-card">
					<p><strong>Diagnosa</strong><br/> Kucing Kamu</p>

					<img src="../images/gambar-1.png" alt="gambar" class="card__image">

					<div class="card__arrow">
						<i class="fas fa-chevron-right"></i>
					</div>
				</div>
			</a>

			<a href="{{ route('info') }}" class="main__home-link">
				<div class="main__home-card">
					<p><strong>Info Penyakit</strong><br/> Kucing</p>

					<img src="../images/gambar-2.png" alt="gambar" class="card__image">

					<div class="card__arrow card__arrow--2">
						<i class="fas fa-chevron-right"></i>
					</div>
				</div>
			</a>
		</section>
	</main>
	@include('components.footer')
</body>
@endsection