<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<title>Arbeko</title>
    
	<!-- favicon tag -->

    <link rel="icon" type="image/png" href="/imgs/favicon/16.ico" sizes="16x16">
    <link rel="icon" type="image/png" href="/imgs/favicon/32.ico" sizes="32x32">
    <link rel="icon" type="image/png" href="/imgs/favicon/96.ico" sizes="96x96">

    <!-- add to homescreen for chrome on android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Web Starter Kit">
    <link rel="icon" sizes="192x192" href="/imgs/favicon/192.ico">
    <link rel="icon" sizes="512x512" href="/imgs/favicon/512.ico">
	
    <!-- add to homescreen for safari on ios -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Web Starter Kit">
    <link rel="apple-touch-icon" href="/imgs/favicon/152.ico">

    <!-- tile icon for Win8 (144x144 + title color) -->
    <meta name="msapplication-TileImage" content="/imgs/favicon/144.ico">
    <meta name="msapplication-TileColor" content="#C19B4C">

    <!-- color the status bar on mobile devices -->
    <meta name="theme-color" content="#C19B4C">

    <!-- css -->
	<link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/main.css">
</head>
<body>
	<div id="meta-tags"></div>
	<!-- begin connection sidebar -->
	<? include($_SERVER['DOCUMENT_ROOT'].'/includes/sidebar.php') ?>
	<!-- end connection sidebar -->

	<div id="main-wr" class="mCustomScrollbar" data-mcs-theme="dark">
		<div id="loader">
			<div class="loader-blk"></div>
			<div class="li-lines2">
				<div class="wr-li-lines">
					<div class="line-li1"></div>
					<div class="line-li2"></div>
					<div class="line-li3"></div>
				</div>
			</div>
		</div>
		<div id="loader-inside">
			<div class="li-lines">
				<div class="wr-li-lines2">
					<div class="line-li1"></div>
					<div class="line-li2"></div>
					<div class="line-li3"></div>
				</div>
			</div>
		</div>
		<div id="content-wr">
			
			<!-- begin connection header -->
			<? include($_SERVER['DOCUMENT_ROOT'].'/includes/header.php') ?>
			<!-- end connection header -->

			<div id="load-cnt-m">
				<div id="content-load">
					<div class="main-top-content animFuncs">
						<div class="left-image-mtc animateText">
							<h1>
								Декоративное оформление фасадов и интерьеров.
							</h1>
							<p>
								Компания ARBEKO специализируется на производстве облегчённого архитектурного декора из стеклофибробетона, предлагая полный цикл производства: от генерации идеи до конечного монтажа и обслуживания. Начав свою деятельность в 2005 году, к настоящему моменту мы накопили большое количество практического опыта, так что высокий профессионализм и отлаженная система работы являются неотъемлемыми качествами наших услуг.
							</p>
							<a href="#" class="modal-open" data-hover-link="отправить заявку">отправить заявку</a>
						</div>
						<div class="right-image-mtc animateIMG parallaxS">
							<div class="black-wr"></div>
							<img src="/images/mtc-image.jpg" alt="mtc image">
						</div>
					</div>
					<div class="services-mc animMain">
						<p>Услуги</p>
						<div class="carts-smc">
							<div class="cart-ser-wr">
								<div class="cart-service-mc animFuncs parallaxS">
									<div class="image-cs-mc animateIMG">
										<div class="black-wr"></div>
										<img src="/images/image-sc1.jpg" alt="image sc">
									</div>
									<div class="info-cs-mc animateText">
										<p>
											Проектирование
										</p>
										<div class="desc-info-cs-mc">
											<p>
												Разработка дизайнерских решений, создание визуальных концептов, подбор материалов для будущего производства.
											</p>
										</div>
									</div>
									<div class="line-abs labs-ver animateText"></div>
								</div>
							</div>
							<div class="cart-ser-wr">
								<div class="cart-service-mc animFuncs parallaxS">
									<div class="image-cs-mc animateIMG">
										<div class="black-wr"></div>
										<img src="/images/image-sc2.jpg" alt="image sc">
									</div>
									<div class="info-cs-mc animateText">
										<p>
											Производство
										</p>
										<div class="desc-info-cs-mc">
											<p>
												Непосредственное создание изделий, проходящее в несколько этапов, в зависимости от специфики изделия. 
											</p>
										</div>
									</div>
									<div class="line-abs labs-hor animateText"></div>
								</div>
							</div>
							<div class="cart-ser-wr">
								<div class="cart-service-mc animFuncs parallaxS">
									<div class="image-cs-mc animateIMG">
										<div class="black-wr"></div>
										<img src="/images/image-sc3.jpg" alt="image sc">
									</div>
									<div class="info-cs-mc animateText">
										<p>
											Монтаж
										</p>
										<div class="desc-info-cs-mc">
											<p>
												Установка элементов внешнего и внутреннего декора в места их конечного назначения.
											</p>
										</div>
									</div>
									<div class="line-abs labs-ver animateText"></div>
								</div>
							</div>
						</div>
						<div class="vetical-title-ser animMain">
							<div class="insser-vts">
								<div class="inner-vert"></div>
							</div>
							<span>Услуги</span>
						</div>
						<div class="modal-tm">
							<a href="#" class="modal-open">отправить заявку</a>
						</div>
					</div>
					<div class="benefits animMain">
						<p>Преимущества</p>
						<div class="benefits-carts">
							<div class="bef-cart animFuncs">
								<div class="inner-bef-cart animateText">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="bef-icon1" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve">
									<style type="text/css">
										#bef-icon1 .st0{fill:none;stroke:#C19B4C;stroke-width:3;stroke-linecap:square;stroke-miterlimit:10;}
										#bef-icon1 .st1{fill:#C19B4C;}
										#bef-icon1 .st2{fill:none;stroke:#C19B4C;stroke-width:3;stroke-linejoin:round;stroke-miterlimit:10;}
										#bef-icon1 .st3{opacity:0.5;fill:#C19B4C;enable-background:new    ;}
										#bef-icon1 .st4{fill:none;stroke:#C19B4C;stroke-width:3;stroke-miterlimit:10;}
										#bef-icon1 .st5{fill:#FFFFFF;stroke:#C19B4C;stroke-width:3;stroke-linecap:square;stroke-miterlimit:10;}
									</style>
									<g class="arrowRotate">
										<g>
											<path class="st1 roundBef1" d="M85,200.6c1.7,0,3,1.3,3,3s-1.3,3-3,3s-3-1.3-3-3C82,202,83.3,200.6,85,200.6 M85,197.6c-3.3,0-6,2.7-6,6    s2.7,6,6,6s6-2.7,6-6S88.3,197.6,85,197.6L85,197.6z"></path>
										</g>
										<g>
											<path class="st1 roundBef1" d="M219,120.6c1.7,0,3,1.3,3,3s-1.3,3-3,3s-3-1.3-3-3S217.3,120.6,219,120.6 M219,117.6c-3.3,0-6,2.7-6,6    s2.7,6,6,6s6-2.7,6-6S222.3,117.6,219,117.6L219,117.6z"></path>
										</g>
										<path class="st2" d="M128.4,233.4l-4.9-9.5l9.8-3.3"></path>
										<path class="st2" d="M160,66.6l7.2,7.9l-8.6,5.8"></path>
										<path class="st3 starBef1" d="M89.7,185.7l3.2-3c0.5-0.5,0.5-1.2,0-1.7s-1.2-0.5-1.7,0l-3.2,3l-3.2-3.1c-0.5-0.5-1.2-0.4-1.7,0   c-0.5,0.5-0.4,1.2,0,1.7l3.2,3l-3.2,3c-0.5,0.5-0.5,1.2,0,1.7c0.2,0.2,0.6,0.4,0.9,0.4s0.6-0.1,0.8-0.3l3.2-3.1l3.2,3.1   c0.2,0.2,0.5,0.3,0.8,0.3s0.6-0.1,0.9-0.4c0.5-0.5,0.4-1.2,0-1.7L89.7,185.7z"></path>
										<path class="st3 starBef1" d="M212.3,109l1.5-4.1c0.2-0.6-0.1-1.3-0.7-1.6c-0.6-0.2-1.3,0.1-1.6,0.7l-1.6,4.2l-4.3-1.4   c-0.6-0.2-1.3,0.1-1.5,0.8c-0.2,0.6,0.1,1.3,0.8,1.5l4.1,1.3l-1.5,4.1c-0.2,0.6,0.1,1.3,0.7,1.6c0.3,0.1,0.7,0.1,1,0   s0.5-0.4,0.6-0.7l1.6-4.2l4.3,1.4c0.3,0.1,0.6,0.1,0.9-0.1c0.3-0.1,0.5-0.4,0.6-0.7c0.2-0.6-0.1-1.3-0.8-1.5L212.3,109z"></path>
										<path class="st4" d="M228,151.8c-0.1,3.6-0.4,7.2-0.9,10.8"></path>
										<path class="st4" d="M72.3,157.4c-0.4-4.8-0.4-9.6,0-14.3"></path>
										<path class="st4" d="M224.2,173.7c-5.6,18.2-17.8,34.5-35.6,44.8c-20.5,11.9-44.1,13.3-64.8,6.1"></path>
										<path class="st4" d="M73,136c4.1-21.5,17.2-41.2,37.6-53c17.6-10.2,37.6-12.7,56-8.6"></path>
									</g>
									<path class="st4 mnb" d="M162,203.5v-42c0-3.2,2.8-5.9,6-5.9s6,2.6,6,5.9v42"></path>
									<path class="st4 mnf" d="M144.5,203.5v-42c0-3.2,2.8-5.9,6-5.9s6,2.6,6,5.9v42"></path>
									<path class="st4 mnv" d="M126.9,203.7v-42.1c0-3.2,2.8-5.9,6-5.9s6,2.6,6,5.9v42.1"></path>
									<path class="st4" d="M118.9,144.7c1.5,0,64.1,0,64.1,0"></path>
									<path class="st4" d="M183,135.9v67.6"></path>
									<path class="st4" d="M119,135.2v68.4"></path>
									<path class="st4" d="M119,135.2h63.3"></path>
									<path class="st4" d="M132.9,121.8H168"></path>
									<path class="st1 et" d="M175.9,97h-27.5h-2.1H125c-6.9,0-22.2,5.1-22.2,20.1c0,15.9,12.5,19.4,17.3,19.4c5.5,0,13.9-5.9,13.9-13.2  c0-6.9-4.4-11.8-10.4-11.8c-6.1,0-7.9,3.2-9,6.6c-1.2,3.9,0.7,7.3,0.8,7.4c0.4,0.7,1.3,0.9,2,0.5s1-1.3,0.5-2c0,0-1.4-2.4-0.6-5  c1-3,2.1-4.5,6.1-4.5c4.4,0,7.4,3.6,7.4,8.8c0,5.3-6.8,10.2-10.9,10.2c-4,0-14.3-2.9-14.3-16.4c0-14.1,15.4-17.1,19.2-17.1h21.3h2.1  h27.5c3.8,0,19.2,3,19.2,17.1c0,13.5-10.3,16.4-14.3,16.4c-4.1,0-10.9-4.9-10.9-10.2c0-5.2,3.1-8.8,7.5-8.8c4,0,5.2,1.4,6.1,4.5  c0.8,2.5-0.5,4.9-0.6,5c-0.4,0.7-0.2,1.6,0.5,2s1.6,0.2,2.1-0.5c0.1-0.1,2-3.5,0.8-7.4c-1.1-3.4-2.9-6.6-9-6.6s-10.5,5-10.5,11.8  c0,7.3,8.4,13.2,13.9,13.2c4.8,0,17.3-3.5,17.3-19.4C198,102.1,182.8,97,175.9,97z"></path>
									</svg>
									<p>
										Полный цикл производства
									</p>
								</div>
							</div>
							<div class="bef-cart animFuncs">
								<div class="inner-bef-cart animateText">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="bef-icon2" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve">
										<style type="text/css">
											#bef-icon2 .st0{fill:#C19B4C;}
											#bef-icon2 .st1{fill-rule:evenodd;clip-rule:evenodd;fill:none;stroke:#C19B4C;stroke-width:3;stroke-linejoin:round;stroke-miterlimit:10;}
											#bef-icon2 .st2{opacity:0.5;fill:#C19B4C;}
											#bef-icon2 .st3{fill-rule:evenodd;clip-rule:evenodd;fill:none;stroke:#C19B4C;stroke-width:3;stroke-miterlimit:10;}
											#bef-icon2 .st4{fill-rule:evenodd;clip-rule:evenodd;fill:none;stroke:#C19B4C;stroke-width:3;stroke-linecap:square;stroke-miterlimit:10;}
											
												#bef-icon2 .st5{fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;stroke:#C19B4C;stroke-width:3;stroke-linecap:square;stroke-miterlimit:10;}
										</style>
										<path class="st4 we" d="M88.3,98.7c-1.9,6.9-9,11.1-15.9,9.2"/>
										<path class="st4 we" d="M140.1,119.8c13.6,3.6,21.8,17.2,18.3,30.3c-3.5,13.1-17.4,20.7-31,17.1c-13.6-3.6-21.8-17.2-18.3-30.3  C112.7,123.8,126.5,116.1,140.1,119.8z"/>
										<path class="st4 we" d="M73.1,93.6L209.3,130l-17.1,63.8L56,157.3L73.1,93.6z"/>
										<path class="st4" d="M197.8,214.7h17.3"/>
										<path class="st5" d="M74.2,128.7h141v66h-141V128.7z"/>
										<path class="st4" d="M74.2,214.7h114.6"/>
										<path class="st4" d="M74.2,204.7h141"/>
										<path class="st4 dollar" d="M145.2,149.7v-4"/>
										<path class="st4 dollar" d="M145.2,176.7v-4"/>
										<path class="st4" d="M99.4,156.2c2.8,0,5,2.2,5,5c0,2.8-2.2,5-5,5c-2.8,0-5-2.2-5-5C94.4,158.4,96.7,156.2,99.4,156.2z"/>
										<path class="st4" d="M90.2,194.7c0-8.3-6.7-15-15-15"/>
										<path class="st4" d="M199.2,194.7c0-8.8,7.2-16,16-16"/>
										<path class="st4" d="M215.2,144.7c-8.8,0-16-7.2-16-16"/>
										<path class="st4" d="M90.7,128.7c0,8.8-7.2,16-16,16"/>
										<path class="st4 bef-a2-line bef-a2-line1" d="M223.3,114.2l10-11.2"/>
										<path class="st4 bef-a2-line bef-a2-line2" d="M242,140.3l12.6-2.2"/>
										<path class="st4 bef-a2-line bef-a2-line3" d="M245,171.2l12.8,2.1"/>
										<path class="st4 bef-a2-line bef-a2-line4" d="M194.8,98.1l0.7-12.8"/>
										<path class="st4 bef-a2-line bef-a2-line5" d="M163.6,98.4l-3.5-12.6"/>
										<g>
											<path class="st0 round-bef-a2" d="M45.2,169.7c1.7,0,3,1.3,3,3c0,1.7-1.3,3-3,3c-1.7,0-3-1.3-3-3C42.2,171,43.5,169.7,45.2,169.7 M45.2,166.7   c-3.3,0-6,2.7-6,6c0,3.3,2.7,6,6,6c3.3,0,6-2.7,6-6C51.2,169.4,48.5,166.7,45.2,166.7L45.2,166.7z"/>
										</g>
										<path class="st4" d="M145.7,136.7c14.1,0,25.5,11,25.5,24.5s-11.4,24.5-25.5,24.5c-14.1,0-25.5-11-25.5-24.5  S131.6,136.7,145.7,136.7z"/>
										<path class="st4" d="M190.5,156.3c2.7,0.7,4.2,3.5,3.5,6.1c-0.7,2.7-3.5,4.3-6.1,3.5c-2.7-0.7-4.3-3.5-3.5-6.1  C185.1,157.2,187.8,155.6,190.5,156.3z"/>
										<g>
											<path class="st0" d="M138.3,169.5c1.4,0.9,3.5,1.6,5.7,1.6c3.2,0,5.1-1.7,5.1-4.2c0-2.3-1.3-3.6-4.6-4.9c-4-1.4-6.4-3.5-6.4-6.9   c0-3.8,3.2-6.6,7.9-6.6c2.5,0,4.3,0.6,5.4,1.2l-0.9,2.6c-0.8-0.4-2.4-1.2-4.6-1.2c-3.3,0-4.6,2-4.6,3.7c0,2.3,1.5,3.4,4.9,4.7   c4.1,1.6,6.2,3.6,6.2,7.2c0,3.8-2.8,7-8.5,7c-2.4,0-4.9-0.7-6.2-1.6L138.3,169.5z"/>
										</g>
										</svg>
									<p>
										Доступные цены
									</p>
								</div>
							</div>
							<div class="bef-cart animFuncs">
								<div class="inner-bef-cart animateText">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="bef-icon3" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve">
										<style type="text/css">
											#bef-icon3 .st0{fill:#C19B4C;}
											#bef-icon3 .st1{fill-rule:evenodd;clip-rule:evenodd;fill:none;stroke:#C19B4C;stroke-width:3;stroke-linejoin:round;stroke-miterlimit:10;}
											#bef-icon3 .st2{opacity:0.5;fill:#C19B4C;}
											#bef-icon3 .st3{fill-rule:evenodd;clip-rule:evenodd;fill:none;stroke:#C19B4C;stroke-width:3;stroke-miterlimit:10;}
											#bef-icon3 .st4{fill-rule:evenodd;clip-rule:evenodd;fill:none;stroke:#C19B4C;stroke-width:3;stroke-linecap:square;stroke-miterlimit:10;}
											
												#bef-icon3 .st5{fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;stroke:#C19B4C;stroke-width:3;stroke-linecap:square;stroke-miterlimit:10;}
											#bef-icon3 .st6{fill:none;stroke:#C19B4C;stroke-width:3;stroke-linecap:square;stroke-miterlimit:10;}
										</style>
										<path class="st2" d="M91.2,214l4.4,0.1c0.7,0,2.2-0.5,2.2-1.2c0-0.7-1.5-1.2-2.2-1.2l-4.5-0.1l-0.1-4.5c0-0.7-0.6-1.2-1.2-1.2  c-0.7,0-1.2,0.6-1.2,1.2l0.1,4.4l-4.4-0.1c-0.7,0-1.2,0.5-1.2,1.2c0,0.3,0.1,0.7,0.4,0.9c0.2,0.2,0.5,0.3,0.8,0.4l4.5,0.1l0.1,4.5  c0,0.3,1.1,0.6,1.4,0.8c0.2,0.2,0.5,0.4,0.9,0.4c0.7,0,0.2-0.6,0.2-1.2L91.2,214z"></path>
										<path class="st2" d="M240.4,150.8l4,1.7c0.6,0.3,1.3,0,1.6-0.6c0.3-0.6,0-1.3-0.6-1.6l-4.1-1.8l1.6-4.2c0.2-0.6-0.1-1.3-0.7-1.6  c-0.6-0.2-1.3,0.1-1.6,0.7l-1.5,4.1l-4-1.7c-0.6-0.3-1.3,0-1.6,0.6c-0.1,0.3-0.1,0.7,0,1c0.1,0.3,0.3,0.5,0.6,0.6l4.1,1.8l-1.6,4.2  c-0.1,0.3-0.1,0.6,0,0.9c0.1,0.3,0.4,0.5,0.7,0.7c0.6,0.2,1.3-0.1,1.6-0.7L240.4,150.8z"></path>
										<path class="st4" d="M159.4,206.2c-5.3,1.4-10.8,2.1-16.5,2.1c-5.8,0-11.3-0.8-16.6-2.2 M94,186.8c-10-11.3-16.1-26.1-16.1-42.4  c0-8.4,1.6-16.3,4.5-23.6 M142.9,80.4 M203.7,120.9c3.4,7.8,5.3,16.4,5.3,25.5c0,15.6-5.6,29.9-14.8,40.9"></path>
										<path class="st4" d="M207.9,110.2h-22"></path>
										<path class="st4" d="M101.9,110.2h-22"></path>
										<path class="st6 starBef3" d="M164.7,136.2l-10.2,9.1l2.3,13l-11.9-6.3l-12.2,6.5l2.9-13l-9.9-9l13.7-1.8l6.1-12l5.6,11.9L164.7,136.2z"></path>
										<path class="st4" d="M144.9,112.4c16.6,0,30,13.4,30,30c0,16.6-13.4,30-30,30s-30-13.4-30-30C114.9,125.8,128.4,112.4,144.9,112.4z"></path>
										<path class="st4" d="M110.4,90.4h67"></path>
										<path class="st4" d="M185,88.4c0,0,0.3-8,9.8-8"></path>
										<path class="st4" d="M103.2,88.4c0,0,0.3-8-10.2-8"></path>
										<path class="st4" d="M93.4,80.4h101"></path>
										<path class="st4 lineBef3 lineBef31" d="M85.3,193.9l-10.9,10.3"></path>
										<path class="st4 lineBef3 lineBef32" d="M67.8,165.4l-12.7,1.1"></path>
										<path class="st4 lineBef3 lineBef33" d="M67.5,134.3l-12.6-3.1"></path>
										<path class="st4 lineBef3 lineBef34" d="M213.4,204.2l-10.9-10.3"></path>
										<path class="st4 lineBef3 lineBef35" d="M232.7,166.5l-12.7-1.1"></path>
										<path class="st4 lineBef3 lineBef36" d="M232.9,131.2l-12.6,3.1"></path>
										<g>
											<path class="st0" d="M81.9,91.4c1.7,0,3,1.3,3,3c0,1.7-1.3,3-3,3c-1.7,0-3-1.3-3-3C78.9,92.7,80.3,91.4,81.9,91.4 M81.9,88.4   c-3.3,0-6,2.7-6,6c0,3.3,2.7,6,6,6c3.3,0,6-2.7,6-6C87.9,91.1,85.3,88.4,81.9,88.4L81.9,88.4z"></path>
										</g>
										<polyline class="st4" points="103.2,89 103.2,200.9 143.9,188.3 185,200.4 185,89 "></polyline>
										</svg>
									<p>
										Гарантии качества
									</p>
								</div>
							</div>
							<div class="bef-cart animFuncs">
								<div class="inner-bef-cart animateText">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="bef-icon4" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve">
										<style type="text/css">
											#bef-icon4 .st0{fill:#C19B4C;}
											#bef-icon4  .st1{fill-rule:evenodd;clip-rule:evenodd;fill:none;stroke:#C19B4C;stroke-width:3;stroke-linejoin:round;stroke-miterlimit:10;}
											#bef-icon4  .st2{opacity:0.5;fill:#C19B4C;}
											#bef-icon4  .st3{fill-rule:evenodd;clip-rule:evenodd;fill:none;stroke:#C19B4C;stroke-width:3;stroke-miterlimit:10;}
											#bef-icon4  .st4{fill-rule:evenodd;clip-rule:evenodd;fill:none;stroke:#C19B4C;stroke-width:3;stroke-linecap:square;stroke-miterlimit:10;}
											
												#bef-icon4  .st5{fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;stroke:#C19B4C;stroke-width:3;stroke-linecap:square;stroke-miterlimit:10;}
											#bef-icon4  .st6{fill:none;stroke:#C19B4C;stroke-width:3;stroke-linecap:square;stroke-miterlimit:10;}
										</style>
										<g>
											<path class="st2" d="M226.5,177.7l4.4,0c0.7,0,1.2-0.5,1.2-1.2c0-0.7-0.5-1.2-1.2-1.2l-4.5,0l-0.2-4.5c0-0.7-0.6-1.2-1.3-1.2   c-0.7,0-1.2,0.6-1.2,1.3l0.2,4.4l-4.4,0c-0.7,0-1.2,0.5-1.2,1.2c0,0.3,0.1,0.7,0.4,0.9c0.2,0.2,0.5,0.3,0.8,0.3l4.5,0l0.2,4.5   c0,0.3,0.2,0.6,0.4,0.8c0.2,0.2,0.5,0.4,0.9,0.3c0.7,0,1.2-0.6,1.2-1.3L226.5,177.7z"></path>
											<path class="st4 em em1" d="M143.9,84.5v-15"></path>
											<path class="st4 em em2" d="M175.2,91.4l7.9-10"></path>
											<path class="st4 em em3" d="M198.1,112.4l10.9-7"></path>
											<path class="st4 em em4" d="M206,146.5h12.9"></path>
											<path class="st4 em em5" d="M111.9,91.5l-8-10"></path>
											<path class="st4 em em6" d="M88.9,112.5l-11-7"></path>
											<path class="st4 em em7" d="M80.9,146.5h-13"></path>
											
											<path class="st4 rt" d="M98.9,218.5h71"></path>
											<path class="st4 rt" d="M92.4,208.5l-15,22h134l-15-22"></path>
											<path class="st4 rt2" d="M92.4,184.5l-15,22h134l-15-22"></path>
											<path class="st4 rts" d="M112.6,157.5H95.4l-17,25h132l-12-25h-24"></path>
											<path class="st4" d="M143.9,178.5l-47-45l21-22h53l22,22L143.9,178.5z"></path>
											
											<path class="st4 rt2" d="M106.4,190.5h56"></path>
											<path class="st4 rt" d="M176.2,218.5h6.3"></path>
											<path class="st4 rt2" d="M169.6,190.5h6.7"></path>
											<path class="st4" d="M190.9,133.5h-92"></path>
											<path class="st4" d="M150.6,112l12,21.1l-17.9,43.4"></path>
											<path class="st4" d="M133.9,113.5l-11,19l21,44"></path>
										</g>
										</svg>
									<p>
										Большой выбов материалов
									</p>
								</div>
							</div>
							<div class="bef-cart animFuncs">
								<div class="inner-bef-cart animateText">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="bef-icon5" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve">
										<style type="text/css">
											#bef-icon5 .st0{fill:#C19B4C;}
											#bef-icon5 .st1{fill-rule:evenodd;clip-rule:evenodd;fill:none;stroke:#C19B4C;stroke-width:3;stroke-linejoin:round;stroke-miterlimit:10;}
											#bef-icon5 .st2{opacity:0.5;fill:#C19B4C;}
											#bef-icon5 .st3{fill-rule:evenodd;clip-rule:evenodd;fill:none;stroke:#C19B4C;stroke-width:3;stroke-miterlimit:10;}
											#bef-icon5 .st4{fill-rule:evenodd;clip-rule:evenodd;fill:none;stroke:#C19B4C;stroke-width:3;stroke-linecap:square;stroke-miterlimit:10;}
											
												#bef-icon5 .st5{fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;stroke:#C19B4C;stroke-width:3;stroke-linecap:square;stroke-miterlimit:10;}
											#bef-icon5 .st6{fill:none;stroke:#C19B4C;stroke-width:3;stroke-linecap:square;stroke-miterlimit:10;}
											#bef-icon5 .st7{fill-rule:evenodd;clip-rule:evenodd;fill:#C19B4C;}
										</style>
										<g>
											<path class="st2 starBef5" d="M83.6,158.7l4,1.7c0.6,0.3,1.3,0,1.6-0.6c0.3-0.6,0-1.3-0.6-1.6l-4.1-1.8l1.6-4.2c0.2-0.6-0.1-1.3-0.7-1.6   c-0.6-0.2-1.3,0.1-1.6,0.7l-1.5,4.1l-4-1.7c-0.6-0.3-1.3,0-1.6,0.6c-0.1,0.3-0.1,0.7,0,1c0.1,0.3,0.3,0.5,0.6,0.6l4.1,1.8l-1.6,4.2   c-0.1,0.3-0.1,0.6,0,0.9c0.1,0.3,0.4,0.5,0.7,0.7c0.6,0.2,1.3-0.1,1.6-0.7L83.6,158.7z"></path>
											<path class="st3" d="M150.2,105.9c2.2,0,3.9,1.8,3.9,3.9s-1.8,3.9-3.9,3.9c-2.2,0-3.9-1.8-3.9-3.9S148,105.9,150.2,105.9z"></path>
											<path class="st3 roundBef5" d="M78.9,173.1c2.2,0,3.9,1.8,3.9,3.9s-1.8,3.9-3.9,3.9c-2.2,0-3.9-1.8-3.9-3.9S76.8,173.1,78.9,173.1z"></path>
											<path class="st7 airUp airUp1" d="M167,174h3v7h-3V174z"></path>
											<path class="st7 airUp airUp2" d="M176,176h3v9h-3V176z"></path>
											<path class="st7 airUp airUp3" d="M184,174h3v6h-3V174z"></path>
											<path class="st7 airUp airUp4" d="M112,174h3v7h-3V174z"></path>
											<path class="st7 airUp airUp5" d="M121,176h3v9h-3V176z"></path>
											<path class="st7 airUp airUp6" d="M129,174h3v6h-3V174z"></path>
											<path class="st0" d="M223.5,225h-147c-0.8,0-1.5-0.7-1.5-1.5c0-0.8,0.7-1.5,1.5-1.5h147c0.8,0,1.5,0.7,1.5,1.5   C225,224.3,224.3,225,223.5,225z"></path>
											<path class="st0 smokeBef5" d="M207.3,225H92.7v-1.5c0-11.1,8.5-20.5,19.5-21.6c3-6.3,9.2-10.3,16.2-10.3c0.3,0,0.5,0,0.8,0   c1.3-3.6,3.8-4.6,6.4-5.8c1.1-0.5,2.2-1,3.4-1.7c0.7-0.4,1.6-0.2,2.1,0.5c0.4,0.7,0.2,1.6-0.5,2.1c-1.4,0.8-2.6,1.3-3.8,1.8   c-2.7,1.2-4.2,1.8-5,5l-0.3,1.3l-1.3-0.2c-0.6-0.1-1.2-0.1-1.7-0.1c-6.1,0-11.5,3.6-13.8,9.3l-0.4,0.9l-0.9,0.1   c-9.4,0.6-16.8,8-17.5,17.2h108.4c-0.7-9.2-8.2-16.6-17.5-17.2l-0.9-0.1l-0.4-0.9c-2.3-5.6-7.8-9.3-13.8-9.3c-0.5,0-1.1,0-1.7,0.1   l-1.3,0.2l-0.3-1.3c-0.8-3.2-2.3-3.8-5-5c-1.1-0.5-2.4-1-3.8-1.8c-0.7-0.4-1-1.3-0.5-2.1c0.4-0.7,1.3-1,2-0.5   c1.2,0.7,2.3,1.2,3.4,1.7c2.6,1.1,5.1,2.2,6.4,5.8c0.3,0,0.6,0,0.8,0c7,0,13.3,4,16.2,10.3c11,1.2,19.5,10.5,19.5,21.6V225z"></path>
											<path class="st0" d="M164.8,177h-29.5l6.1-18h17.4L164.8,177z M139.4,174h21.2l-4.1-12.2h-13L139.4,174z"></path>
											<path class="st0" d="M200,164.2l-33.6-0.2l-4.7-13h-23.3l-5.1,13H98v-9.8l40.1-22.8v-21.9c0-5.4,2.2-10.7,5.6-14.9l1.9-2.3   c1.1-1.4,2.8-2.2,4.5-2.2c1.8,0,3.4,0.8,4.5,2.2l1.9,2.3c3.4,4.2,5.4,9.5,5.4,14.9v22l38.2,22.8V164.2z M168.8,161l28.2,0.2v-5.3   l-38.2-22.8v-23.7c0-4.7-1.8-9.4-4.7-13.1l-1.9-2.3c-0.5-0.7-1.3-1-2.2-1c-0.9,0-1.6,0.4-2.2,1l-1.9,2.3c-3,3.7-4.9,8.3-4.9,13.1   v23.7l-40.2,22.8v5.2h30.6l4.9-13.2h27.4L168.8,161z"></path>
											<path class="st0" d="M169.1,139.5l-10.3-6.4v-23.7c0-4.7-1.8-9.4-4.7-13.1l-1.9-2.3c-0.5-0.7-1.3-1-2.2-1c-0.9,0-1.6,0.4-2.2,1   l-1.9,2.3c-3,3.7-4.9,8.3-4.9,13.1v23.7l-10.1,6V94c0-10.5,8.5-19,19.1-19c10.6,0,19.1,8.5,19.1,19V139.5z M161.8,131.4l4.3,2.8V94   c0-9-7-16-16.1-16c-9.1,0-16.1,7-16.1,16v40l4.1-2.6v-21.9c0-5.4,2.2-10.7,5.6-14.9l1.9-2.3c1.1-1.4,2.8-2.2,4.5-2.2   c1.8,0,3.4,0.8,4.5,2.2l1.9,2.3c3.4,4.2,5.4,9.5,5.4,14.9V131.4z M139.5,132.3L139.5,132.3L139.5,132.3z"></path>
											<path class="st0 raket" d="M189,151.6l-22.9-14V98.5c0-1.6,0.5-3.1,1.3-4.4l6.7-9.8c0.8-1.3,2.3-2,3.8-2c1.5,0,3,0.8,3.8,2l6,9.8   c0.9,1.3,1.3,2.8,1.3,4.4V151.6z M169.1,136l16.9,10.4V98.5c0-1-0.3-1.9-0.8-2.7l-6-9.8c-0.6-0.9-2-0.9-2.6,0l-6.7,9.8   c-0.5,0.8-0.8,1.8-0.8,2.7V136z"></path>
											<path class="st0" d="M189,171.9h-24.1l1.3-10.9H189V171.9z M168.9,168.9H186V164h-17.1V168.9z"></path>
											<path class="st0 raket2" d="M110,150.5v-52c0-1.6,0.5-3.1,1.3-4.4l7-9.8c0.8-1.3,2.3-2,3.8-2c1.5,0,3,0.8,3.8,2l6.7,9.8   c0.9,1.3,1.3,2.8,1.3,4.4v38.9L110,150.5z M122.1,85.3c-0.5,0-1,0.3-1.3,0.7l-7,9.8c-0.5,0.8-0.8,1.8-0.8,2.7v46.9l17.9-9.7V98.5   c0-1-0.3-1.9-0.8-2.7l-6.7-9.8C123.1,85.5,122.7,85.3,122.1,85.3z M132.4,136.5L132.4,136.5L132.4,136.5z"></path>
											<path class="st0" d="M133.8,171.8H111v-10.6h22.8V171.8z M114,168.9h16.9V164H114V168.9z"></path>
											<path class="st7 airUp airUp7" d="M148,185h3v9h-3V185z"></path>
											<path class="st7 airUp airUp8" d="M141,192h3v11h-3V192z"></path>
											<path class="st7 airUp airUp9" d="M154,193h3v8h-3V193z"></path>
										</g>
										</svg>
									<p>
										Высокая скорость работы
									</p>
								</div>
							</div>
						</div>
						<div class="vetical-title-bef animMain">
							<div class="insser-vts">
								<div class="inner-vert"></div>
							</div>
							<span>преимущества</span>
						</div>
					</div>
					<div class="quote-mc animMain">
						<blockquote>
							Мы не ограничиваем свою деятельность художественными стилями  и направлениями — имеют значение лишь конкретный замысел  и оптимальные пути его реализации. В работе мы опираемся на существующий исторический и мировой опыт, не забывая и про здравый смысл.
						</blockquote>
					</div>
					
					<!-- begin connection footer -->
                    <? include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php') ?>
                    <!-- end connection footer -->

				</div>
			</div>
		</div>
	</div>

	<!-- modal window -->
	<div id="modal-form">
	    <div id="close-modal"></div>
	    <div class="form-port">
	        <p>
	            Оформить заявку
	        </p>
	        <div class="pols-port">
	            <div class="pol-port-inset">
	                <input type="text" name="name-port" id="name-port" placeholder="Имя*">
	                <label for="name-port">Имя*</label>
	            </div>
	            <div class="pol-port-inset">
	                <input type="text" name="email-port" id="email-port" placeholder="Email или телефон*">
	                <label for="email-port">Email или телефон*</label>
	            </div>
	            <div class="pol-port-inset">
	                <input type="text" name="message-port" id="message-port" placeholder="Ваше сообщение*">
	                <label for="message-port">Ваше сообщение*</label>
	            </div>
	            <div class="file-upload">
	                <label>
	                    <input type="file" name="file" id="uploade-file">
	                    <span>Прикрепить фаил</span>
	                </label>
	            </div>
	        </div>
	        <div class="sub-form-wr">
	            <input type="submit" name="submit-form" value="отправить заявку" id="submit-form">
	        </div>
	    </div>
	</div>
	<div id="overlay"></div>

	<!-- scripts -->
	<script src="/js/router.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2sjE-O8JMB2YokReKS5I92OXHG5sRdPE"></script>
	<script src="/js/jquery-2.2.3.min.js"></script>
	<script src="/js/masonry.min.js"></script>
	<script src="/js/scroll.min.js"></script>
	<script src="/js/TweenMax.min.js"></script>
	<script src="/js/main.js"></script>
</body>
</html>