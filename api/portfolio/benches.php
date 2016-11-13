<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<title>Arbeco</title>
    
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
    <!-- begin connection sidebar -->
    <? include($_SERVER['DOCUMENT_ROOT'].'/includes/sidebar.php') ?>
    <!-- end connection sidebar -->

	<div id="main-wr">
		<div id="content-wr">

			<!-- begin connection header -->
            <? include($_SERVER['DOCUMENT_ROOT'].'/includes/header.php') ?>
            <!-- end connection header -->
            
            <div id="load-cnt-m">
                <div class="inset-port-m">
                    <div class="crumbs">
                        <a href="/" title="Главная">Главная</a>
                        <a href="/portfolio" title="Портфолио">Портфолио</a>
                    </div>
                    <div class="title-inside">
                        <h2>Скамьи</h2>
                    </div>
                    <div class="photos-port">
                        <div class="grid-item">
                            <img src="/images/flow1.jpg" alt="flowerpots image">
                        </div>
                        <div class="grid-item">
                            <img src="/images/flow3.jpg" alt="flowerpots image">
                        </div>
                        <div class="grid-item">
                            <img src="/images/flow2.jpg" alt="flowerpots image">
                        </div>
                        <div class="grid-item">
                            <img src="/images/flow4.jpg" alt="flowerpots image">
                        </div>
                        <div class="grid-item">
                            <img src="/images/flow5.jpg" alt="flowerpots image">
                        </div>
                        <div class="grid-item">
                            <img src="/images/flow1.jpg" alt="flowerpots image">
                        </div>
                        <div class="grid-item">
                            <img src="/images/flow3.jpg" alt="flowerpots image">
                        </div>
                        <div class="grid-item">
                            <img src="/images/flow2.jpg" alt="flowerpots image">
                        </div>
                        <div class="grid-item">
                            <img src="/images/flow4.jpg" alt="flowerpots image">
                        </div>
                        <div class="grid-item">
                            <img src="/images/flow5.jpg" alt="flowerpots image">
                        </div>
                    </div>
                    <div class="form-services">
                        <div class="form-inset-s">
                            <div class="form-port">
                                <p>
                                    Оформить заявку
                                </p>
                                <div class="pols-port">
                                    <div class="pol-port-inset">
                                        <input type="text" name="name-port" id="name-port">
                                        <label for="name-port">Имя*</label>
                                    </div>
                                    <div class="pol-port-inset">
                                        <input type="text" name="email-port" id="email-port">
                                        <label for="email-port">Email или телефон*</label>
                                    </div>
                                    <div class="pol-port-inset">
                                        <input type="text" name="message-port" id="message-port">
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
                    </div>

                    <!-- begin connection footer -->
                    <? include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php') ?>
                    <!-- end connection footer -->

                </div>
            </div>
        </div>
    </div>

    <!-- scripts -->
    <script src="/js/jquery-2.2.3.min.js"></script>
    <script src="/js/masonry.min.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>