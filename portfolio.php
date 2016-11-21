<!-- <!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<title>Arbeko | Portfolio</title>
    
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
                    <div class="crumbs startIn">
                        <a href="/" title="Главная">Главная</a>
                    </div>
                    <div class="title-inside startIn">
                        <h2>Портфолио</h2>
                    </div>
                    <div class="port-carts">
                        <div class="port-cart animFuncs">
                            <div class="image-port-cart animateIMG parallaxS">
                                <div class="black-wr"></div>
                                <img src="/images/port1.jpg" alt="portfolio image">
                            </div>
                            <div class="bottom-port-cart animateText">
                                <p>
                                    <a href="/portfolio/interior-decor" title="Интерьерный декор">Интерьерный декор</a>
                                    <span class="arrow-article"></span>
                                </p>
                                <div class="desc-port-cart">
                                    <p>
                                        Неповторимый стиль, создающий уникальную атмосферу
                                    </p>
                                </div>
                                <a href="/portfolio/interior-decor">посмотреть работы</a>
                                <div class="line-port"></div>
                            </div>
                        </div>
                        <div class="port-cart animFuncs">
                            <div class="image-port-cart animateIMG">
                                <div class="black-wr"></div>
                                <img src="/images/port2.jpg" alt="portfolio image">
                            </div>
                            <div class="bottom-port-cart animateText">
                                <p>
                                    <a href="/portfolio/facade-decor" title="Фасадный декор">Фасадный декор</a>
                                    <span class="arrow-article"></span>
                                </p>
                                <div class="desc-port-cart">
                                    <p>
                                        Индивидуальное обличие любого здания
                                    </p>
                                </div>
                                <a href="/portfolio/facade-decor">посмотреть работы</a>
                                <div class="line-port"></div>
                            </div>
                        </div>
                        <div class="port-cart animFuncs">
                            <div class="image-port-cart animateIMG">
                                <div class="black-wr"></div>
                                <img src="/images/port3.jpg" alt="portfolio image">
                            </div>
                            <div class="bottom-port-cart animateText">
                                <p>
                                    <a href="/portfolio/iconostases" title="Иконостасы">Иконостасы</a>
                                    <span class="arrow-article"></span>
                                </p>
                                <div class="desc-port-cart">
                                    <p>
                                        Изысканное материальное украшение духовных святынь
                                    </p>
                                </div>
                                <a href="/portfolio/iconostases">посмотреть работы</a>
                                <div class="line-port"></div>
                            </div>
                        </div>
                        <div class="port-cart animFuncs">
                            <div class="image-port-cart animateIMG">
                                <div class="black-wr"></div>
                                <img src="/images/port4.jpg" alt="portfolio image">
                            </div>
                            <div class="bottom-port-cart animateText">
                                <p>
                                    <a href="/portfolio/furniture" title="Мебель">Мебель</a>
                                    <span class="arrow-article"></span>
                                </p>
                                <div class="desc-port-cart">
                                    <p>
                                        Удобное и необычное решение для меблировки
                                    </p>
                                </div>
                                <a href="/portfolio/furniture">посмотреть работы</a>
                                <div class="line-port"></div>
                            </div>
                        </div>
                        <div class="port-cart animFuncs">
                            <div class="image-port-cart animateIMG">
                                <div class="black-wr"></div>
                                <img src="/images/port5.jpg" alt="portfolio image">
                            </div>
                            <div class="bottom-port-cart animateText">
                                <p>
                                    <a href="/portfolio/sculptures" title="Скульптуры">Скульптуры</a>
                                    <span class="arrow-article"></span>
                                </p>
                                <div class="desc-port-cart">
                                    <p>
                                        Традиционные элементы декора в классической и современной интерпретации
                                    </p>
                                </div>
                                <a href="/portfolio/sculptures">посмотреть работы</a>
                                <div class="line-port"></div>
                            </div>
                        </div>
                        <div class="port-cart animFuncs">
                            <div class="image-port-cart animateIMG">
                                <div class="black-wr"></div>
                                <img src="/images/port6.jpg" alt="portfolio image">
                            </div>
                            <div class="bottom-port-cart animateText">
                                <p>
                                    <a href="/portfolio/benches" title="Скамьи">Скамьи</a>
                                    <span class="arrow-article"></span>
                                </p>
                                <div class="desc-port-cart">
                                    <p>
                                        Функциональные и эстетичные изделия для дворика и сада
                                    </p>
                                </div>
                                <a href="/portfolio/benches">посмотреть работы</a>
                                <div class="line-port"></div>
                            </div>
                        </div>
                        <div class="port-cart animFuncs">
                            <div class="image-port-cart animateIMG">
                                <div class="black-wr"></div>
                                <img src="/images/port7.jpg" alt="portfolio image">
                            </div>
                            <div class="bottom-port-cart animateText">
                                <p>
                                    <a href="/portfolio/front-panels" title="Фасадные панели">Фасадные панели</a>
                                    <span class="arrow-article"></span>
                                </p>
                                <div class="desc-port-cart">
                                    <p>
                                        Реализуемое на практике стремление запомниться
                                    </p>
                                </div>
                                <a href="/portfolio/front-panels">посмотреть работы</a>
                                <div class="line-port"></div>
                            </div>
                        </div>
                        <div class="port-cart animFuncs">
                            <div class="image-port-cart animateIMG">
                                <div class="black-wr"></div>
                                <img src="/images/port8.jpg" alt="portfolio image">
                            </div>
                            <div class="bottom-port-cart animateText">
                                <p>
                                    <a href="/portfolio/fixtures" title="Светильники">Светильники</a>
                                    <span class="arrow-article"></span>
                                </p>
                                <div class="desc-port-cart">
                                    <p>
                                        Тот случай, когда привычные всем элементы могут удивлять
                                    </p>
                                </div>
                                <a href="/portfolio/fixtures">посмотреть работы</a>
                                <div class="line-port"></div>
                            </div>
                        </div>
                        <div class="port-cart animFuncs">
                            <div class="image-port-cart animateIMG">
                                <div class="black-wr"></div>
                                <img src="/images/port9.jpg" alt="portfolio image">
                            </div>
                            <div class="bottom-port-cart animateText">
                                <p>
                                    <a href="/portfolio/flowerpots" title="Вазоны">Вазоны</a>
                                    <span class="arrow-article"></span>
                                </p>
                                <div class="desc-port-cart">
                                    <p>
                                        Камень, как хранилище жизни
                                    </p>
                                </div>
                                <a href="/portfolio/flowerpots">посмотреть работы</a>
                                <div class="line-port"></div>
                            </div>
                        </div>
                        <div class="port-cart animFuncs">
                            <div class="form-port animateText">
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
    <script src="/js/main.js"></script>
</body>
</html> -->