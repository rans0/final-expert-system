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
				<form action="" class="form">
					<div class="form__wrapper">
						<div class="form__input">
							<div class="input">
								<p class="input__title">Mata Merah</p>

								<div class="input__radio">
									<div class="radio">
										<input type="radio" name="question" id="question1" value="Ya">
										<label for="question1">
											<div class="label">Ya</div>
										</label>
									</div>

									<div class="radio">
										<input type="radio" name="question" id="question2" value="Tidak">
										<label for="question2">
											<div class="label label--outline">Tidak</div>
										</label>
									</div>
								</div>
							</div>

							<div class="input">
								<p class="input__title">Mual-Mual dan Muntah</p>

								<div class="input__radio">
									<div class="radio">
										<input type="radio" name="question" id="question1" value="Ya">
										<label for="question1">
											<div class="label">Ya</div>
										</label>
									</div>

									<div class="radio">
										<input type="radio" name="question" id="question2" value="Tidak">
										<label for="question2">
											<div class="label label--outline">Tidak</div>
										</label>
									</div>
								</div>
							</div>

							<div class="input">
								<p class="input__title">Batuk Berdahak</p>

								<div class="input__radio">
									<div class="radio">
										<input type="radio" name="question" id="question1" value="Ya">
										<label for="question1">
											<div class="label">Ya</div>
										</label>
									</div>

									<div class="radio">
										<input type="radio" name="question" id="question2" value="Tidak">
										<label for="question2">
											<div class="label label--outline">Tidak</div>
										</label>
									</div>
								</div>
							</div>

							<div class="input">
								<p class="input__title">Diare dan Asam Lambung</p>

								<div class="input__radio">
									<div class="radio">
										<input type="radio" name="question" id="question1" value="Ya">
										<label for="question1">
											<div class="label">Ya</div>
										</label>
									</div>

									<div class="radio">
										<input type="radio" name="question" id="question2" value="Tidak">
										<label for="question2">
											<div class="label label--outline">Tidak</div>
										</label>
									</div>
								</div>
							</div>

							<div class="input">
								<p class="input__title">Cacingan</p>

								<div class="input__radio">
									<div class="radio">
										<input type="radio" name="question" id="question1" value="Ya">
										<label for="question1">
											<div class="label">Ya</div>
										</label>
									</div>

									<div class="radio">
										<input type="radio" name="question" id="question2" value="Tidak">
										<label for="question2">
											<div class="label label--outline">Tidak</div>
										</label>
									</div>
								</div>
							</div>

							<div class="input">
								<p class="input__title">Cacingan</p>

								<div class="input__radio">
									<div class="radio">
										<input type="radio" name="question" id="question1" value="Ya">
										<label for="question1">
											<div class="label">Ya</div>
										</label>
									</div>

									<div class="radio">
										<input type="radio" name="question" id="question2" value="Tidak">
										<label for="question2">
											<div class="label label--outline">Tidak</div>
										</label>
									</div>
								</div>
							</div>

							<div class="input">
								<p class="input__title">Cacingan</p>

								<div class="input__radio">
									<div class="radio">
										<input type="radio" name="question" id="question1" value="Ya">
										<label for="question1">
											<div class="label">Ya</div>
										</label>
									</div>

									<div class="radio">
										<input type="radio" name="question" id="question2" value="Tidak">
										<label for="question2">
											<div class="label label--outline">Tidak</div>
										</label>
									</div>
								</div>
							</div>

							<div class="input">
								<p class="input__title">Cacingan</p>

								<div class="input__radio">
									<div class="radio">
										<input type="radio" name="question" id="question1" value="Ya">
										<label for="question1">
											<div class="label">Ya</div>
										</label>
									</div>

									<div class="radio">
										<input type="radio" name="question" id="question2" value="Tidak">
										<label for="question2">
											<div class="label label--outline">Tidak</div>
										</label>
									</div>
								</div>
							</div>
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
						<div class="result__image">
							<img src="../images/gambar-1.png" alt="gambar">
						</div>

						<div class="result__penyakit">
							<p>Jenis Penyakit :</p>
							<div class="box">
								<p>Helminthiasis</p>
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
					</div>
				</div>
				<div class="form__input-overlay"></div>
			</div>
		</div>
	</main>
	@include('components.footer')
</body>
@endsection