@extends('template.user')
@section('content')
<body>
	@include('components.navbarBack')
	<main class="main main__about">
		<header class="main__about-header">
			<p>Team Dev</p>
		</header>

		<div class="main__about-container">
			<div class="main__about-card">
				<div class="card__image">
					<img src="../images/gambar-3.png" alt="gambar">
				</div>
				<div class="card__member">
					<p>Fafa</p>
					<p>Frontend Dev</p>
				</div>
				<div class="card__link">
					<a href="https://www.instagram.com/faisal.frhan/" target="_blank">
						<i class="fab fa-instagram"></i>
					</a>
					<a href="https://www.linkedin.com/in/muhammad-faisal-frhn/" target="_blank">
						<i class="fab fa-linkedin"></i>
					</a>
					<a href="https://github.com/uzivurt0" target="_blank">
						<i class="fab fa-github"></i>
					</a>
				</div>
			</div>

			<div class="main__about-card">
				<div class="card__image">
					<img src="../images/gambar-4.png" alt="gambar">
				</div>
				<div class="card__member">
					<p>Ran</p>
					<p>Backend Dev</p>
				</div>
				<div class="card__link">
					<a href="https://www.instagram.com/dekrannn/" target="_blank">
						<i class="fab fa-instagram"></i>
					</a>
					<a href="https://www.linkedin.com/in/kharansyahts/" target="_blank">
						<i class="fab fa-linkedin"></i>
					</a>
					<a href="https://github.com/rans0" target="_blank">
						<i class="fab fa-github"></i>
					</a>
				</div>
			</div>

			<div class="main__about-card">
				<div class="card__image">
					<img src="../images/gambar-5.png" alt="gambar">
				</div>
				<div class="card__member">
					<p>Fadla</p>
					<p>Frontend Dev & UI/UX</p>
				</div>
				<div class="card__link">
					<a href="https://www.instagram.com/ifadla_/" target="_blank">
						<i class="fab fa-instagram"></i>
					</a>
					<a href="https://www.linkedin.com/in/fadla-ichsan-a4a067207/" target="_blank">
						<i class="fab fa-linkedin"></i>
					</a>
					<a href="https://github.com/IFadla" target="_blank">
						<i class="fab fa-github"></i>
					</a>
				</div>
			</div>
		</div>
	</main>
	@include('components.footer')
</body>
@endsection