<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'>
	<meta charset="UTF-8">
	<title>Busy - Social Network</title>
	<meta content="Uma rede social feita para você." name="description" />
	<meta name="keywords" content="Busy, Rede Social, SocialNetwork, Social, Network">
	<meta content="Jonas Oliveira" name="author" />
	<meta content="Alexandre Silva" name="author" />
	<meta name="theme-color" content="#000000">
	<link rel="stylesheet" type="text/css" href="../assets/css/busy_welcome.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
</head>
<body>

<div>
	<div class="basicLayout nmLanding dark" lang="pt-BR" dir="ltr">
		<div class="bzHeader signupBasicHeader">
			<a href="#" class="svg-bzLogo signupBasicHeader">
				<img class="svg-icon svg-icon-buzzy-logo" src="../assets/img/busyLogo.png" class="svg-icon-buzzy-logo">
			</a>
			<a href="/entrar" class="authLinks signupBasicHeader">Entrar</a>
		</div>

		<div class="home-wrapper dark">
			<div class="concord concord-with-tin concord-with-title is-former-member">
				<div class="wrap">
					<div class="bg" id="main-creative">
						<div class="creative-wrapper">
							<div class="image active">
								<div class="concord-img-wrapper">
									<img class="concord-img vlv-creative" src="../assets/img/pessoas-conversando.jpeg" srcset="../assets/img/pessoas-conversando.jpeg 1000w, ../assets/img/pessoas-conversando.jpeg 1500w, ../assets/img/pessoas-conversando.jpeg 1800w" alt="">
									<div class="concord-img-gradient"></div>
								</div>
							</div>
						</div>
					</div>
						
					<div class="cta-wrapper">
						<div class="cta-text">
							<h1 class="cta-pitch">BUSY NETWORK</h1>
							<p class="cta-pricing" style="font-weight:bold;">
								<div id="mensagens_boas_vindas"></div>
							</p>
						</div>
						<div></div>
						<div class="cta-link-wrapper">
							<div class="cta-form">
								<a href="/registrar" class="btn hero-cta-btn btn-large btn-blue">
									<span class="hero-cta-btn-txt">REGISTRAR AGORA</span>
									<span class="chevron-right-arrow"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
$(document).ready(function(){
	var textos = ['SEJA BEM-VINDO AO BUSY', 'FAÇA NOVAS AMIZADES', 'CONVERSE COM FAMILIARES', 'COMPARTILHE O QUE QUISER'];
	var quando_aparecer = 0;
	
	$('#mensagens_boas_vindas').text(textos[quando_aparecer++]);
	setInterval(function() {
		$('#mensagens_boas_vindas').fadeOut(function() {
			if (quando_aparecer >= textos.length) quando_aparecer = 0;
			$('#mensagens_boas_vindas').text(textos[quando_aparecer++]).fadeIn();
		});
	}, 2500);
});
</script>
</body>
</html>