<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Doktora-Yüksek Lisans Seçim Ekranı</title>

	<!-- Site favicon -->
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/okul-logo.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/okul-logo.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
</head>
<body class="login-page">
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="vendors/images/firat_logo.png" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 style="color:#922147;" class="text-center">Lütfen Seçim Yapınız</h2>
						</div>
						<form>
							<div class="select-role">
								<div class="btn-group btn-group-toggle" data-toggle="buttons">
									<label id="yuksekLisans" class="btn active">
										<input type="radio" name="options" id="admin">
										<div class="icon"><img src="vendors/images/briefcase.svg" class="svg" alt=""></div>
										<span>Yüksek</span>
										Lisans
									</label>
									<label id="doktora" class="btn">
										<input type="radio" name="options" id="user">
										<div class="icon"><img src="vendors/images/person.svg" class="svg" alt=""></div>
										<div style="margin-top:8px;" >
											Doktora
										</div>
									</label>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script>
		
		$(document).ready(function(){
$("#doktora").click(function(){
window.location.href='ayrintilar.php';
})
$("#yuksekLisans").click(function(){
window.location.href='tezoneri.php';
})
		});
	</script>
</body>
</html>