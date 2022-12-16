<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>Kalkulator Panjar PA Waingapu</title>
		<meta name="description" content="The small framework with powerful features">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?php echo base_url(); ?>/public/css/bootstrap.min.css" rel="stylesheet">
		<script src="<?php echo base_url(); ?>/public/js/jquery-3.6.1.min.js"></script>
		<script src="<?php echo base_url(); ?>/public/js/bootstrap.min.js"></script> 
		
		<link rel="stylesheet" href="<?php echo base_url();?>/public/css/style2.css">

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

		<!-- autocoplete -->
		<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
		<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
		<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
		<!-- end autocomplete -->

		<style>
			div.scroll {
				/* background-color: #fed9ff; */
				height: 70vh;
				overflow: auto;
				text-align: justify;
				padding: 20px;
			}

			@media screen {
				#printSection {
					display: none;
				}
			}

			@media print {
				body * {
					visibility:hidden;
				}
				#printSection, #printSection * {
					visibility:visible;
				}
				#printSection {
					position:absolute;
					left:0;
					top:0;
				}
			}
		</style>

		<style>
		.ui-autocomplete {
			max-height: 100px;
			overflow-y: auto;
			/* prevent horizontal scrollbar */
			overflow-x: hidden;
		}
		/* IE 6 doesn't support max-height
		* we use height instead, but this forces the menu to always be this tall
		*/
		* html .ui-autocomplete {
			height: 100px;
		}
		</style>

		<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
		<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
	</head>

	<body style="background: radial-gradient( circle farthest-corner at 92.3% 71.5%,  rgba(83,138,214,1) 0%, rgba(134,231,214,1) 90% );">
		<div class="container-fluid">
			<div class="mb-1 mt-2" align="center">
				<img src="<?= base_url()?>/public/images/logo-pa-waingapu.png" width="60" height="75" alt="">
			</div>
			<div class="row justify-content-md-center">
				<div class="col-sm-6 col-md-offset-3">
					<div class="card mb-4" style="background: radial-gradient( circle 621px at 25.3% 13.8%,  rgba(255,255,255,1) 0%, rgba(234,236,255,1) 90% );">
						<div class="card-body">
							<p class="card-title">
								<h3>Kalkulator Panjar Perkara Pengadilan Agama Waingapu</h3>
							</p>
							<div class="form-floating">
								<select class="form-select" id="jenisperkara" aria-label="Default select example" name="jenisperkara">
								<option selected disabled>Pilih jenis perkara</option>
									<?php foreach($jenisPerkara as $row){?>
									<option value="<?= $row->IdJenisPerkara;?>"><?= $row->NamaPerkara;?></option>
									<?php };
									?>
								</select>
								<label for="floatingSelect">Jenis Perkara</label>
							</div>
						</div>
					</div>
					<div class="card mb-4" style="background: radial-gradient( circle 621px at 25.3% 13.8%,  rgba(255,255,255,1) 0%, rgba(234,236,255,1) 90% );">
						<div class="card-body">
							<p class="card-title">
								<h3>Perhitungan Panjar</h3>
							</p>
							<div class="card">
								<div class="card-header">
									Data Pemohon / Penggugat
								</div>
								<div class="card-body">
									<!-- <div class="form-floating">
										<select class="form-select" id="kecamatanp" aria-label="Default select example" name="kecamatanp">
											<option selected disabled>Pilih Kecamatan</option>
											<?php //foreach($kecamatan as $row){?>
											<option value="<?//= $row->IdKecamatan;?>"><?//= $row->NamaKecamatan;?></option>
											<?php //};
											?>
										</select>
										<label for="floatingSelect">Kecamatan</label>
									</div>
									<br/>
									<div class="form-floating">
										<select class="form-select" id="kelurahanp" aria-label="Default select example" name="kelurahanp">
											<option value="" selected disabled>Pilih Kelurahan</option>
										</select>
										<label for="floatingSelect">Kelurahan</label>
									</div> -->

									<div class="form-floating mb-3">
										<input type="text" class="form-control" id="kelurahankomdanasp" placeholder="" name="kelurahankomdanasp">
										<label for="floatingInput">Ketik nama kelurahan Penggugat</label>
									</div>

								</div>
							</div>
							<br/>
							<div class="card">
								<div class="card-header">
									Data Termohon / Tergugat
								</div>
								<div class="card-body">
								<!-- <div class="form-floating">
										<select class="form-select" id="kecamatant" aria-label="Default select example" name="kecamatant">
											<option selected disabled>Pilih Kecamatan</option>
											<?php //foreach($kecamatan as $row){?>
											<option value="<?//= $row->IdKecamatan;?>"><?//= $row->NamaKecamatan;?></option>
											<?php //};
											?>
										</select>
										<label for="floatingSelect">Kecamatan</label>
									</div>
									<br/>
									<div class="form-floating">
										<select class="form-select" id="kelurahant" aria-label="Default select example" name="kelurahant">
											<option value="" selected disabled>Pilih Kelurahan</option>
										</select>
										<label for="floatingSelect">Kelurahan</label>
									</div> -->

									<div class="form-floating mb-3">
										<input type="text" class="form-control" id="kelurahankomdanast" placeholder="" name="kelurahankomdanast">
										<label for="floatingInput">Ketik nama kelurahan Tergugat</label>
									</div>

								</div>
							</div>
							<br/>
							<div class="card">
								<div class="card-header">
									Jika ada tambahan biaya POS
								</div>
								<div class="card-body">
									<!-- <div class="form-floating mb-3">
										<input type="text" class="form-control" id="biayadiluar" placeholder="" name="biayadiluar">
										<label for="floatingInput">Ketik nama kelurahan</label>
									</div>
									<p style="color:green">Contoh : 330000, Silahkan tanya kepada petugas informasi untuk biaya radius + ongkos kirim dengan cara Chat ke Nomor Whatsapp PA Waingapu atau klik live chat pada pojok kiri bawah website PA Waingapu Kosongkan jika tidak berada di luar daerah</p> -->
									<div class="form-floating mb-3">
										<input type="number" class="form-control" id="biayapos" placeholder="" name="biayapos">
										<label for="floatingInput">Biaya POS</label>
									</div>
								</div>
							</div>
							<div class="row" style="padding-top: 1vh;">
								<div class="col">
								<button type="button" class="btn btn-primary btn-block" style="width: 100%;" data-bs-toggle="modal" data-bs-target="#hitungModal" name="btnhitung" id="btnhitung">Hitung</button>
								</div>
							</div>				
						</div>
					</div>
				</div>
				<br/>
				<!-- modal hasil perhitungan -->
				<form action="">
					<div class="modal fade" id="hitungModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="hitungModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" style="max-width: 40%;">
							<div class="modal-content">
								<!-- <div class="modal-header"> -->
									<div class="modal-header">
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btnmodalclose">
										</button>
									</div>
									<div class="modal-body">
										<div>
											<!-- <div id="cetakhasil"> -->
												<div class="card" style="padding: 2vh; background: linear-gradient( 174.2deg,  rgba(255,244,228,1) 7.1%, rgba(240,246,238,1) 67.4% ); width: 100%;">
													<div id="cetakhasil">
														<div id="judulstruk">
															<!-- <h3>Hasil Perhitungan</h3> -->
														</div>
														<div class="scroll">
															<table class="table" id="tblkombiaya">
																<thead class="thead-dark">
																	<tr>
																	<th scope="col" style="text-align:left">No</th>
																	<th scope="col" style="text-align:left">Komponen Biaya</th>
																	<th scope="col" style="text-align:right">Jumlah</th>
																	</tr>
																</thead>
															</table>
															
															<table class="table" id="tblradius">
																<thead class="thead-dark">
																	<tr>
																	<th scope="col" style="text-align:left">No</th>
																	<th scope="col" style="text-align:left">Detail Radius Biaya</th>
																	<th scope="col" style="text-align:right">Jumlah</th>
																	</tr>
																</thead>															
															</table>

															<table class="table" id="tblpos">
																<thead class="thead-dark">
																	<tr>
																	<th scope="col" style="text-align:left">No</th>
																	<th scope="col" style="text-align:left">Komponen Biaya POS</th>
																	<th scope="col" style="text-align:right">Jumlah</th>
																	</tr>
																</thead>
															</table>

															<table class="table" id="tbltotal">
																<thead class="thead-dark">
																	<tr>
																	<th scope="col" style="text-align:left"></th>
																	</tr>
																</thead>
															</table>
															<br/>
															<!-- <button type="button" class="btn btn-primary btn-block" style="width: 100%;">Cetak</button> -->
														</div>
													</div>
												</div>
											<!-- </div> -->
											<br/>
											<button type="button" class="btn btn-primary btn-block" style="width: 100%;" id="btncetak">Cetak</button>
										</div>
									</div>
								<!-- </div> -->
							</div>
						</div>
					</div>
				</form>
				<!-- end modal hasil perhitungan -->
			</div>
		</div>
	</body>
</html>


<!-- load script -->
<script>
	var biayap = 0;
	var biayat = 0;
	var biayal = 0;
	var biayapos = 0;
	var kompbiaya = 0;
	var panggilanpg = 0;
	var panggilantg = 0;
	var judulmodal = 'a';
	var biayakomdanasl = 0;
	var biayakomdanasp = 0;
	var biayakomdanast = 0;

	$(document).ready(function(){
		loadjenisperkara();
		loadkelurahanp();
		loadkelurahant();
		loadkomponenbiaya();
		loadradiusp();
		loadbtnmodalclose();
		autobiayadiluar();
		getnilaikomdanas();
	});

	function autobiayadiluar(){
		$("#kelurahankomdanast").autocomplete({
			minLength: 3,
			source: "<?php echo base_url('/kelurahankomdanas/list_kelurahan'); ?>",
		});

		$("#kelurahankomdanasp").autocomplete({
			minLength: 3,
			source: "<?php echo base_url('/kelurahankomdanas/list_kelurahan'); ?>",
		});
	}

	function getnilaikomdanas(){
		$('#kelurahankomdanast').change(function(){
			var term = $("#kelurahankomdanast").val();

			if (term != '')
			{
				$.ajax({
					url: "<?= base_url('/KelurahanKomdanas/getnilaikomdanas') ?>",
					method: "POST",
					data: {term: term},
					dataType: 'JSON',
					success: function(data)
					{
						for(var count=0; count < data.length; count++)
						{
							biayakomdanast = data[count].nilai;
						}
						console.log('biayakomdanast: ', biayakomdanast)

						var html = $('<tr><td scope="row" style="vertical-align: top">2</td><td scope="row" style="padding-right: 30px; vertical-align: top">Tergugat alamat: ' + term + ', ' + panggilantg + ' x ' + new Intl.NumberFormat('in-ID', {style: 'currency', currency: 'IDR'}).format(biayakomdanast) + '</td><td scope="row" style="text-align: right; vertical-align: top">' + new Intl.NumberFormat('in-ID', {style: 'currency', currency: 'IDR'}).format(panggilantg*biayakomdanast) + '</td></tr>');
						biayat = (panggilantg*biayakomdanast);
						$('#tblradius').append(html);

						console.log('alamat: ', $('#biayadiluar').text())
					},
					error: function(jqXHR, textStatus, errorThrown)
					{
						alert('Error: ' + textStatus + ' - ' + errorThrown);
					}
				});
			}
			else
			{
				biayakomdanast = 0;
				console.log('biayakomdanast: ', biayakomdanast);
				$('#tblradius').val('');
			}
		});

		$('#kelurahankomdanasp').change(function(){
			var term = $("#kelurahankomdanasp").val();

			if (term != '')
			{
				$.ajax({
					url: "<?= base_url('/KelurahanKomdanas/getnilaikomdanas') ?>",
					method: "POST",
					data: {term: term},
					dataType: 'JSON',
					success: function(data)
					{
						for(var count=0; count < data.length; count++)
						{
							biayakomdanasp = data[count].nilai;
						}
						console.log('biayakomdanasp: ', biayakomdanasp)

						var html = $('<tr><td scope="row" style="vertical-align: top;">1</td><td scope="row" style="padding-right: 30px; vertical-align: top;">Penggugat alamat ' + term + ', ' + panggilanpg + ' x ' + new Intl.NumberFormat('in-ID', {style: 'currency', currency: 'IDR'}).format(biayakomdanasp) + '</td><td scope="row" style="text-align: right; vertical-align: top;">' + new Intl.NumberFormat('in-ID', {style: 'currency', currency: 'IDR'}).format(panggilanpg*biayakomdanasp) + '</td></tr>');
						biayap = (panggilanpg*biayakomdanasp);
						$('#tblradius').append(html);
					},
					error: function(jqXHR, textStatus, errorThrown)
					{
						alert('Error: ' + textStatus + ' - ' + errorThrown);
					}
				});
			}
			else
			{
				biayakomdanasp = 0;
				console.log('biayakomdanasp: ', biayakomdanasp);
				$('#tblradius').val('');
			}
		});
	}

	function loadkelurahanp(){
		$("#kecamatanp").change(function(){
			var IdKecamatan = $("#kecamatanp").val();
			var aksi = 'getKelurahanP';

			if (IdKecamatan != '')
			{
				$.ajax({
					url: "<?php echo base_url('/beranda/aksi'); ?>",
					method: "POST",
					data: {IdKecamatan:IdKecamatan, aksi:aksi},
					dataType: 'JSON',
					success: function(data)
					{
						var html = '<option value="" selected disabled> Pilih Kelurahan</option>';

						for(var count = 0; count < data.length; count++)
						{
							html += '<option value="'+data[count].IdKelurahan+'">'+data[count].NamaKelurahan+'</option>';
						}
						console.log($("#kelurahanp").val());
						$('#kelurahanp').html(html);
					}
				});
			} 
			else
			{
				$('#kelurahanp').val('');
			}
		});
	}

	function loadkelurahant(){
		$("#kecamatant").change(function(){
			var IdKecamatan = $("#kecamatant").val();
			var aksi = 'getKelurahanT';

			if (IdKecamatan != '')
			{
				$.ajax({
					url: "<?php echo base_url('/beranda/aksi'); ?>",
					method: "POST",
					data: {IdKecamatan:IdKecamatan, aksi:aksi},
					dataType: 'JSON',
					success: function(data)
					{
						var html = '<option value="" selected disabled> Pilih Kelurahan</option>';

						for(var count = 0; count < data.length; count++)
						{
							html += '<option value="'+data[count].IdKelurahan+'">'+data[count].NamaKelurahan+'</option>';
						}
						console.log($("#kelurahant").val());
						$('#kelurahant').html(html);
					}
				});
			} 
			else
			{
				$('#kelurahant').val('');
			}
		});
	}

	function loadkomponenbiaya(){
		$("#btnhitung").click(function(){
			$.ajax({
				url: "<?= base_url('/komponenbiaya'); ?>",
				dataType: 'JSON',
				success: function(data)
				{	
					var urut = 1;
					for(var count=0; count < data.length; count++)
					{
						var html = $('<tr><td scope="row">' + urut + '</td><td scope="row">' + data[count].NamaKomponen + '</td><td style="text-align: right" scope="row">' + new Intl.NumberFormat('in-ID', {style: 'currency', currency: 'IDR'}).format(data[count].Biaya) + '</td></tr>');
						$('#tblkombiaya').append(html);
						urut = urut+1;
					}
				},
				error: function(jqXHR, textStatus, errorThrown)
				{
					alert('Error: ' + textStatus + ' - ' + errorThrown);
				}
			});
		});
	}

	function loadbtnmodalclose(){
		$("#btnmodalclose").click(function(){
			location.reload();
		});
	}

	function loadradiusp(){
		// $("#kelurahanp").change(function(){
		// 	var IdKelurahanp = $("#kelurahanp").val();

		// 	if (IdKelurahanp != '')
		// 	{
		// 		$.ajax({
		// 			url: "<?php //echo base_url('/allradius'); ?>",
		// 			method: "POST",
		// 			data: {IdKelurahan:IdKelurahanp},
		// 			dataType: 'JSON',
		// 			success: function(data)
		// 			{						
		// 				for(var count = 0; count < data.length; count++)
		// 				{
		// 					var html = $('<tr><td scope="row">1</td><td scope="row" style="padding-right: 30px;">Penggugat alamat ' + data[count].NamaKelurahan + ', ' + panggilanpg + ' x ' + new Intl.NumberFormat('in-ID', {style: 'currency', currency: 'IDR'}).format(data[count].Biaya) + '</td><td scope="row" style="text-align: right">' + new Intl.NumberFormat('in-ID', {style: 'currency', currency: 'IDR'}).format(panggilanpg*data[count].Biaya) + '</td></tr>');
		// 					biayap = (panggilanpg*data[count].Biaya);
		// 				}
		// 				$('#tblradius').append(html);
		// 			},
		// 			error: function(jqXHR, textStatus, errorThrown)
		// 			{
		// 				alert('Error: ' + textStatus + ' - ' + errorThrown);
		// 			}
		// 		});
		// 	} 
		// 	else
		// 	{
		// 		$('#tblradius').val('');
		// 	}
		// });

		$("#kelurahant").click(function(){
			var IdKelurahant = $("#kelurahant").val();

			if (IdKelurahant != '')
			{
				$.ajax({
					url: "<?php echo base_url('/allradius'); ?>",
					method: "POST",
					data: {IdKelurahan:IdKelurahant},
					dataType: 'JSON',
					success: function(data)
					{						
						for(var count = 0; count < data.length; count++)
						{
							var html = $('<tr><td scope="row">2</td><td scope="row" style="padding-right: 30px;">Tergugat alamat ' + data[count].NamaKelurahan + ', ' + panggilantg + ' x ' + new Intl.NumberFormat('in-ID', {style: 'currency', currency: 'IDR'}).format(data[count].Biaya) + '</td><td scope="row" style="text-align: right">' + new Intl.NumberFormat('in-ID', {style: 'currency', currency: 'IDR'}).format(panggilantg*data[count].Biaya) + '</td></tr>');
							biayat = (panggilantg*data[count].Biaya);
						}
						$('#tblradius').append(html);
					},
					error: function(jqXHR, textStatus, errorThrown)
					{
						alert('Error: ' + textStatus + ' - ' + errorThrown);
					}
				});
			} 
			else
			{
				$('#tblradius').val('');
			}
		});

		$("#biayapos").change(function(){
			var BiayaPos = $("#biayapos").val();

			if (BiayaPos != '')
			{
				$.ajax({
					success: function(data)
					{	
						var html = $('<tbody><tr><td scope="row">1</td><td scope="row" style="padding-right: 30px;">Biaya Pos, ' + panggilantg + ' x ' + new Intl.NumberFormat('in-ID', {style: 'currency', currency: 'IDR'}).format($("#biayapos").val()) + '</td><td scope="row" style="text-align: right">' + new Intl.NumberFormat('in-ID', {style: 'currency', currency: 'IDR'}).format(panggilantg*$("#biayapos").val()) + '</td></tr></tbody>');
						biayapos = (panggilantg*$("#biayapos").val());
						$('#tblpos').append(html);
					},
					error: function(jqXHR, textStatus, errorThrown)
					{
						alert('Error: ' + textStatus + ' - ' + errorThrown);
					}
				});
			} 
			else
			{
				$('#tblpos').val('');
			}
		});

		$("#btnhitung").click(function(){
			var IdJenisPerkara = $("#jenisperkara").val();

			$.ajax({
				url: "<?php echo base_url('/allradius/sumkompbiaya'); ?>",
				method: "POST",
				dataType: 'JSON',
				success: function(data)
				{	
					for(var count = 0; count < data.length; count++)
					{
						kompbiaya = data[count].jmlkompbiaya*1;
					}
					var jmlkombiaya = biayap + biayat + kompbiaya + biayapos;
					var html = $('<tbody><tr><td scope="row" colspan="3" style="text-align:right">Jumlah Total Yang Harus Dibayar : <b>' + new Intl.NumberFormat('in-ID', {style: 'currency', currency: 'IDR'}).format(jmlkombiaya)  + '</b></td></tr></tbody>');

					var judulstruk = $('<h3>Hasil Perhitungan Perkara ' + judulmodal + '</h3>');

					$('#tbltotal').append(html);
					$('#judulstruk').append(judulstruk);

					console.log('biayap-hitung: ', biayap);
					console.log('biayat-hitung: ', biayat);
					console.log('komponen-hitung: ', kompbiaya);
					console.log('biayapos-hitung: ', biayapos);
				},
				error: function(jqXHR, textStatus, errorThrown)
				{
					alert('Error: ' + textStatus + ' - ' + errorThrown);
				}
			});
		});
	}

	function loadjenisperkara(){
		$("#jenisperkara").change(function(){
			var IdJenisPerkara = $("#jenisperkara").val();

			if (IdJenisPerkara != '')
			{
				$.ajax({
					url: "<?php echo base_url('/jenisperkara'); ?>",
					method: "POST",
					data: {IdJenisPerkara:IdJenisPerkara},
					dataType: 'JSON',
					success: function(data)
					{
						for(var count = 0; count < data.length; count++)
						{
							panggilanpg = data[count].PanggilanP;
							panggilantg = data[count].PanggilanT;
							judulmodal = data[count].NamaPerkara;
						};
					}
				});
			} 
		});
	}


</script>
<!-- end load script -->

<script>
	document.getElementById("btncetak").onclick = function () {
    	printElement(document.getElementById("cetakhasil"));
	}

	function printElement(elem) {
		var domClone = elem.cloneNode(true);
		
		var $printSection = document.getElementById("printSection");
		
		if (!$printSection) {
			var $printSection = document.createElement("div");
			$printSection.id = "printSection";
			document.body.appendChild($printSection);
		}
		
		$printSection.innerHTML = "";
		$printSection.appendChild(domClone);
		window.print();
	}
</script>

<script>
	$(".search").select2({
		placeholder: '--- Search User ---',
		ajax: {
			url: '<?php echo base_url('kelurahankomdanas/list_kelurahan');?>',
			dataType: 'json',
			delay: 250,
			processResults: function(data){
				return {
					results: data
				};
			},
			cache: true
		}
	});
</script>