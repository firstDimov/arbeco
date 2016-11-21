$(document).ready(function(){

    // global vars

    var ua = navigator.userAgent,
        transitionLoad = new TimelineMax,
        style = [
        {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#e9e9e9"
                },
                {
                    "lightness": 17
                }
            ]
        },
        {
            "featureType": "landscape",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#f5f5f5"
                },
                {
                    "lightness": 20
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "color": "#ffffff"
                },
                {
                    "lightness": 17
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry.stroke",
            "stylers": [
                {
                    "color": "#ffffff"
                },
                {
                    "lightness": 29
                },
                {
                    "weight": 0.2
                }
            ]
        },
        {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#ffffff"
                },
                {
                    "lightness": 18
                }
            ]
        },
        {
            "featureType": "road.local",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#ffffff"
                },
                {
                    "lightness": 16
                }
            ]
        },
        {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#f5f5f5"
                },
                {
                    "lightness": 21
                }
            ]
        },
        {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#dedede"
                },
                {
                    "lightness": 21
                }
            ]
        },
        {
            "elementType": "labels.text.stroke",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "color": "#ffffff"
                },
                {
                    "lightness": 16
                }
            ]
        },
        {
            "elementType": "labels.text.fill",
            "stylers": [
                {
                    "saturation": 36
                },
                {
                    "color": "#333333"
                },
                {
                    "lightness": 40
                }
            ]
        },
        {
            "elementType": "labels.icon",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "transit",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#f2f2f2"
                },
                {
                    "lightness": 19
                }
            ]
        },
        {
            "featureType": "administrative",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "color": "#fefefe"
                },
                {
                    "lightness": 20
                }
            ]
        },
        {
            "featureType": "administrative",
            "elementType": "geometry.stroke",
            "stylers": [
                {
                    "color": "#fefefe"
                },
                {
                    "lightness": 17
                },
                {
                    "weight": 1.2
                }
            ]
        }
    ];

    // width determination

    var widthDoc = $(window).width();

    $(window).resize(function(){
        widthDoc = $(window).width();
    });

    // ie

    if (ua.search(/MSIE/) > -1 || ua.search(/Trident/) > -1) {
        $('body').addClass('IE');
    }

    // common start inset pages

    var commonIn = function(){
        $('.startIn').addClass('is-start');
    };

    // check the page

    var animateP = function(event){
        if(event.search('portfolio') == 1 || event == 'portfolio') {
            var startPort = $('.port-cart:first-child'),
                startPort2 = $('.port-cart:nth-child(2)');

            startPort.find('.animateIMG').addClass('is-visible');
            startPort.find('.animateText').addClass('is-active');
            startPort2.find('.animateIMG').addClass('is-visible');
            startPort2.find('.animateText').addClass('is-active');

        } else if(event.search('services') == 1 || event == 'services') {
            $('.inset-services:first-child .animateText').addClass('is-active');
        } else if(event.search('materials') == 1 || event == 'materials') {
            var startMat = $('.material-blk:first-child').addClass('startMat');

            startMat.find('.animateText').addClass('is-active');
            startMat.find('.animateIMG').addClass('is-visible');
        } else if (event.search('articles') == 1 || event == 'articles') {
            var startArt = $('.article-blk:first-child');

            startArt.find('.animateIMG').addClass('is-visible');
            startArt.find('.animateText').addClass('is-active');
        } else if(event.search('production') == 1 || event == 'production') {
            var startPro = $('.prod-blk:first-child');

            $('.desc-production .animateText').addClass('is-active');

            startPro.find('.animateIMG').addClass('is-visible');
            startPro.find('.animateText').addClass('is-active');
        } else if(event.search('contacts') == 1 || event == 'contacts') {
            if(!($('body').hasClass('device-styles'))) {
                conMap();
            } else {
                $('.map-con').remove();
            }
        } else {
            $('.left-image-mtc').addClass('is-active');
            $('.right-image-mtc').addClass('is-visible');
        }
    };

    // scroll all animation

    var scllAnim = function(offsetEvent){
        var $window = $(window),
            $animation_elements = $('.animFuncs');

        function check_if_in_view(wh, wtp, wbp) {
            var window_height = $window.height() - offsetEvent,
                window_top_position = $window.scrollTop(),
                window_bottom_position = (window_top_position + window_height);

            $.each($animation_elements, function() {
                var $element = $(this),
                    element_height = $element.outerHeight(),
                    element_top_position = $element.offset().top,
                    element_bottom_position = (element_top_position + element_height);

                if((element_bottom_position >= window_top_position) &&
                    (element_top_position <= window_bottom_position)) {

                        $element.find('.animateIMG').addClass('is-visible');
                        $element.find('.animateText').addClass('is-active');
                }
            });
        }

        $('#load-cnt-m').on('mousewheel', function(event) {
            check_if_in_view();
        });

        $('body').on({
            'touchmove': function(e) { 
                check_if_in_view();
            }
        });
    };

    // scroll animation for main page

    var scllIn = function(){
        var $window = $(window),
            $animation_elements = $('.animMain');

        function check_if_in_view(wh, wtp, wbp) {
            var window_height = $window.height() - 100,
                window_top_position = $window.scrollTop(),
                window_bottom_position = (window_top_position + window_height);

            $.each($animation_elements, function() {
                var $element = $(this),
                    element_height = $element.outerHeight(),
                    element_top_position = $element.offset().top,
                    element_bottom_position = (element_top_position + element_height);

                if((element_bottom_position >= window_top_position) &&
                    (element_top_position <= window_bottom_position)) {
                        $element.addClass('is-title');
                }
            });
        }

        $('#load-cnt-m').on('mousewheel', function() {
            check_if_in_view();
        });

        $('body').on({
            'touchmove': function(e) { 
                check_if_in_view();
            }
        });
    };

    // title & meta tags

    /*var metaT = function(content){
        var insertData = $('#meta-tags').html(content.find('head')),
            newTitle = insertData.find('title').text();

        $('title').text(newTitle);
    };*/

    // blockquote

    var blockquoteF = function(){
        if($('blockquote').length) {
            var i, block = $('blockquote');

            for(i = 0; i < block.length; i++) {
                var textB = block.eq(i).text();
                block.eq(i).empty();

                block.eq(i).append('<p>' + textB + '</p>');
            }
        }
    };

    // loader

    var loader = function(){
        setTimeout(function(){
            $('#loader').addClass('active-loader-c');
        }, 500);

        setTimeout(function(){
            $('.loader-blk').addClass('active-ld');
            TweenLite.to($('.wr-li-lines > div'), 0.5, {autoAlpha: 0});
        }, 2500);

        setTimeout(function(){
            $('#loader').fadeOut(300);

            TweenLite.fromTo($('#content-wr'), 0.5, {x: 100}, {autoAlpha: 1, x: 0});
        }, 3900);
    };

    // fix footer

    var fixFT = function(){
        if($('.contact-blk').length && widthDoc <= 1280) {
            console.log(widthDoc);
            $('#footer').addClass('fix-ft');
        } else {
            $('#footer').removeClass('fix-ft');
        }
    };

    // back button

    var backB = function(){
        var bb = $('.back-button'),
            wl = window.location.pathname;

        if(wl.search('articles') || wl.search('portfolio')) {
            var spPath = wl.split('/');

            if(spPath[2] != undefined) {
                bb.addClass('fix-bb');
                bb.attr('href', '/' + spPath[1]);
            } else {
                bb.removeClass('fix-bb');
            }
        }
    };

    // route of redirect

    var router = new Router();

    var routerLoad = function (linkLoad){
        $.get(
            linkLoad,
            function(data){
                var $html = $('<div/>');
                $html.html(data);

                setTimeout(function(){
                    $('#load-cnt-m').html($html.find('#load-cnt-m').html());

                    loader();
                    commonIn(); // common start animation
                    galleryI(); // gallery
                    scllAnim(0); // common scroll function
                    fixFT(); // fix footer
                    // metaT($html); // meta tags for CEO
                    blockquoteF(); // blockquote
                    backB(); // back button
                }, 1000);

                setTimeout(function(){
                    animateP(linkLoad); // check the page
                }, 5000);
            }
        );
    };

    var routeSide = function(oldLink){
        var i = 0;

        for(i; i < $('#menu-sidebar li').length; i++) {
            var hrefL = $('#menu-sidebar li').eq(i).children('a').attr('href');

            if(hrefL == oldLink) {
                $('#menu-sidebar li').eq(i).addClass('active');

                break;
            }
        }
    };

    var routeNav = function(oldLink){
        var i = 0;

        for(i; i < $('#nav ul li').length; i++) {
            var hrefL = $('#nav ul li').eq(i).children('a').attr('href');

            if(hrefL == oldLink) {
                $('#nav ul li').eq(i).addClass('active');
                $('#ul-m-clk li').eq(i).addClass('active');
                break;
            }
        }
    };

    var newUrl = window.location.pathname.split('/'),
        linkLoad;

    if(newUrl[0] == '' && newUrl[2] == undefined) {
        // load main page
        linkLoad = '';

        commonIn(); // common start animation
        scllIn(); // main function scroll
        scllAnim(0); // common scroll function
        blockquoteF(); // blockquote
        backB(); // back button
    }

    if(newUrl[0] == '' && newUrl[1] == '') {
        // load main page
        linkLoad = '';

        loader();

        commonIn(); // common start animation
        scllIn(); // main function scroll
        scllAnim(0); // common scroll function
        blockquoteF(); // blockquote
        backB(); // back button

        setTimeout(function(){
            animateP(linkLoad); // check the page
        }, 4500);
    }

    if(newUrl[1] != '' && newUrl[2] == undefined) {
        linkLoad = '/' + newUrl[1] + '.php';

        routeNav('/' + newUrl[1]);
        routerLoad(linkLoad);
    }

    if(newUrl[1] != '' && newUrl[2] != undefined) {
        if(newUrl[2].search('portfolio') && newUrl[1] == 'portfolio') {
            linkLoad = '/api/portfolio/' + newUrl[2] + '.php';
            $('#nav ul li:first-child').addClass('active');

            routeSide('/portfolio/' + newUrl[2]);
        } else if(newUrl[2].search('articles') && newUrl[1] == 'articles') {
            linkLoad = '/api/articles/' + newUrl[2] + '.php';
            $('#nav ul li:nth-child(5)').addClass('active');
        }

        routeNav('/' + newUrl[1]);
        routerLoad(linkLoad);
    }

    // iOS

    if(/iPhone|iPad|iPod/i.test(ua) ) {
        $('body').addClass('iOS');
    }

    // scroll

    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(ua) ) {
        $('body').addClass('device-styles');
        console.log('!! device');
        $('#main-wr').removeClass('mCustomScrollbar'); 
    } else {
        $('.mCustomScrollbar').mCustomScrollbar({
            callbacks:{
                whileScrolling: function(){
                    var $window = $(window),
                        $animation_elements = $('.animFuncs'),
                        $animation_elements2 = $('.animMain');

                    function check_scll_view() {
                        var window_height = $window.height(),
                            window_top_position = $window.scrollTop(),
                            window_bottom_position = (window_top_position + window_height);

                        $.each($animation_elements, function() {
                            var $element = $(this),
                                element_height = $element.outerHeight(),
                                element_top_position = $element.offset().top,
                                element_bottom_position = (element_top_position + element_height);

                            if((element_bottom_position >= window_top_position) &&
                                (element_top_position <= window_bottom_position)) {

                                    $element.find('.animateIMG').addClass('is-visible');
                                    $element.find('.animateText').addClass('is-active');
                            }
                        });
                    }

                    function check_main() {
                        var window_height = $window.height() - 100,
                            window_top_position = $window.scrollTop(),
                            window_bottom_position = (window_top_position + window_height);

                        $.each($animation_elements2, function() {
                            var $element = $(this),
                                element_height = $element.outerHeight(),
                                element_top_position = $element.offset().top,
                                element_bottom_position = (element_top_position + element_height);

                            if((element_bottom_position >= window_top_position) &&
                                (element_top_position <= window_bottom_position)) {
                                    $element.addClass('is-title');
                            }
                        });
                    }

                    check_main();
                    check_scll_view();
                }
            }
        });
    }

    // modal window

    $('body').on('click', '.modal-open', function(event){
        event.preventDefault();
        $('#overlay').fadeIn(400,
            function(){
                $('#modal-form') 
                    .css('display', 'block')
                    .animate({opacity: 1, top: '50vh'}, 200);
        });
    });

    $('body').on('click', '#close-modal, #overlay', function(){
        $('#modal-form')
            .animate({opacity: 0, top: '50vh'}, 200,
                function(){
                    $(this).css('display', 'none');
                    $('#overlay').fadeOut(400);
                }
            );
    });

    // all clicks for routes

    $('body').on('click', '#nav ul li a', function(){

        if($('#menu-tm').hasClass('is-opened')) {
            $('#menu-tm').removeClass('is-opened');
        }

        var inspect = window.location.pathname.split('/'),
            searchN = $(this).attr('href').split('/');

        if(inspect[1] == searchN[1] && inspect[2] == undefined) {
            console.log('Transition is forbidden!');
        } else {
            $('#nav ul li, #menu-sidebar li').removeClass('active');
            $(this).parent('li').addClass('active');

            transitionLoad.to($('#load-cnt-m'), 0.5, {y: 100, autoAlpha: 0, onComplete: fixLoad});

            function fixLoad() {
                $('#loader-inside').addClass('fade-li');
                $('#load-cnt-m').empty();
            }

            var attrA = $(this).attr('href');
            router.navigate(attrA);
        }

        return false;
    });

    $('body').on('click', '#menu-sidebar li a', function(){
        var inspect = window.location.pathname.split('/'),
            searchN = $(this).attr('href').split('/');

        if(inspect[2] != searchN[2]) {
            $('#menu-sidebar li, #nav ul li').removeClass('active');
            $(this).parent('li').addClass('active');
            $('#nav ul li:first-child').addClass('active');

            transitionLoad.to($('#load-cnt-m'), 0.5, {y: 100, autoAlpha: 0});

            setTimeout(function(){
                $('#loader-inside').addClass('fade-li');
                $('#load-cnt-m').empty();
            }, 500);

            var attrA = $(this).attr('href');
            router.navigate(attrA);
        }

        return false;
    });

    $('body').on('click', '.bottom-port-cart a', function(){
        var attrA = $(this).attr('href');
        $('#menu-sidebar li').removeClass('active');

        routeSide(attrA);

        transitionLoad.to($('#load-cnt-m'), 0.5, {y: 100, autoAlpha: 0, onComplete: fixLoad});
        
        function fixLoad() {
            $('#loader-inside').addClass('fade-li');
            $('#load-cnt-m').empty();
        }

        var attrL = attrA;
        router.navigate(attrL);

        return false;
    });

    $('body').on('click', '.wr-text-art > p a', function(){
        var attrA = $(this).attr('href');

        transitionLoad.to($('#load-cnt-m'), 0.5, {y: 100, autoAlpha: 0, onComplete: fixLoad});
        
        function fixLoad() {
            $('#loader-inside').addClass('fade-li');
            $('#load-cnt-m').empty();
        }

        var attrL = attrA;
        router.navigate(attrL);

        return false;
    });

    $('body').on('click', '.crumbs a', function(){
        $('#menu-sidebar li').removeClass('active');
        
        transitionLoad.to($('#load-cnt-m'), 0.5, {y: 100, autoAlpha: 0, onComplete: fixLoad});
        
        function fixLoad() {
            $('#loader-inside').addClass('fade-li');
            $('#load-cnt-m').empty();
        }

        var linkCrumb = $(this).attr('href');

        routeNav(linkCrumb);
        router.navigate(linkCrumb);

        return false;
    });

    $('body').on('click', '.logo', function(){
        var inspect = window.location.pathname.split('/');

        if(inspect[0] == '' && inspect[1] != '') {
            transitionLoad.to($('#load-cnt-m'), 0.5, {y: 100, autoAlpha: 0, onComplete: fixLoad});
        
            function fixLoad() {
                $('#loader-inside').addClass('fade-li');
                $('#load-cnt-m').empty();
            }

            var linkCrumb = $(this).attr('href');
            router.navigate(linkCrumb);
        }

        return false;
    });

    $('body').on('click', '.back-button', function(){
        var attrA = $(this).attr('href');

        transitionLoad.to($('#load-cnt-m'), 0.5, {y: 100, autoAlpha: 0, onComplete: fixLoad});
        
        function fixLoad() {
            $('#loader-inside').addClass('fade-li');
            $('#load-cnt-m').empty();
        }

        var attrL = attrA;
        router.navigate(attrL);

        return false;
    });

    // routes

    router.route('/', function(){
        $.get(
            'index.php',
            function(data){
                var $html = $('<div/>'), actPage = 'home';
                $html.html(data);

                setTimeout(function(){
                    $('#nav ul li, #menu-sidebar li').removeClass('active');

                    $('#load-cnt-m').html($html.find('#load-cnt-m').html());
                    $('#loader-inside').removeClass('fade-li');
                    transitionLoad.to($('#load-cnt-m'), 0.5, {y: 0, autoAlpha: 1});
                }, 2500);

                setTimeout(function(){
                    animateP(actPage); // check the page

                    scllAnim(0); // common scroll function
                    scllIn(); // main scroll function
                    // metaT($html); // meta tags for CEO
                    blockquoteF(); // blockquote
                    backB(); // back button
                }, 3000);
            }
        );
    });

    router.route('/:page', function(page){
        $.get(
            '/'+ page + '.php',
            function(data){
                var $html = $('<div/>');
                $html.html(data);

                setTimeout(function(){
                    $('#load-cnt-m').html($html.find('#load-cnt-m').html());
                    $('#loader-inside').removeClass('fade-li');
                    transitionLoad.to($('#load-cnt-m'), 0.5, {y: 0, autoAlpha: 1});
                }, 2500);

                setTimeout(function(){
                    animateP(page); // check the page
                    scllAnim(0); // common scroll function
                    commonIn(); // common start animation
                    // metaT($html); // meta tags for CEO
                    fixFT(); // fix footer
                    blockquoteF(); // blockquote
                    backB(); // back button
                }, 3000);
            }
        );
    });

    router.route('/portfolio/:page', function(page){
        $.get(
            '/api/portfolio/'+ page + '.php',
            function(data){
                var $html = $('<div/>');
                $html.html(data);

                setTimeout(function(){
                    $('#load-cnt-m').html($html.find('#load-cnt-m').html());
                    transitionLoad.to($('#load-cnt-m'), 0.5, {y: 0, autoAlpha: 1});
                }, 2500);

                setTimeout(function(){
                    galleryI(); // gallery init
                    commonIn(); // common start animation
                    scllAnim(0); // common scroll function
                    // metaT($html); // meta tags for CEO
                    backB(); // back button
                }, 3000);
            }
        );
    });

    router.route('/articles/:page', function(page){
        $.get(
            '/api/articles/'+ page + '.php',
            function(data){
                var $html = $('<div/>');
                $html.html(data);

                setTimeout(function(){
                    $('#load-cnt-m').html($html.find('#load-cnt-m').html());
                    $('#loader-inside').removeClass('fade-li');
                    transitionLoad.to($('#load-cnt-m'), 0.5, {y: 0, autoAlpha: 1});
                }, 2500);

                setTimeout(function(){
                    animateP(page); // check the page
                    commonIn(); // common start animation
                    scllAnim(0); // common scroll function
                    // metaT($html); // meta tags for CEO
                    blockquoteF(); // blockquote
                    backB(); // back button
                }, 3000);
            }
        );
    });

    // gallery portfolio

    var galleryI = function(){

        var grid = $('.photos-port').masonry({
            itemSelector: '.grid-item',
            gutter: 25
        });

        grid.masonry('on', 'layoutComplete', function() {
            $('#loader-inside').removeClass('fade-li');
            $('.grid-item').addClass('actived-grid');
        });

        grid.masonry();
    };

    function conMap() {
        var m_z = 17;
        var latitude = 46.435779,
            longitude = 30.756221,
            map_zoom = m_z;

        var marker_url = '/imgs/marker.png';

        var map_options = {
            center: new google.maps.LatLng(latitude, longitude),
            zoom: map_zoom,
            panControl: false,
            zoomControl: false,
            mapTypeControl: false,
            streetViewControl: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false,
            styles: style
        };

        var map = new google.maps.Map(document.getElementById('map'), map_options);

        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(46.435779, 30.756221),
            map: map,
            visible: true,
            icon: marker_url
        });
    }

    // menu tablet & mobile

    $('body').on('click', '#menu-tm', function(){
        $(this).toggleClass('is-opened');

        $('body').toggleClass('is-open-m');
    });

    // validation form

    $('body').on('keyup','input', function() {
        var nameInput = $(this).attr('id');

        $('#' + nameInput).removeClass('error-input');

        if($('#' + nameInput).val() != '') {
            $(this).addClass('filled');
        } else {
            $(this).removeClass('filled');
        }
    });

    $('body').on('click', '#submit-form', function(){
        var namePort = $('body').find('.pols-port input[name=name-port]').val(),
            emailPort = $('body').find('.pols-port input[name=email-port]').val(),
            messagePort = $('body').find('.pols-port input[name=message-port]').val();

        if(!isValidName(namePort)) {
            $('input[name=name-port]').addClass('error-input');
        } else {
            $('input[name=name-port]').removeClass('error-input');
        }

        if(!isValidEmailAddress(emailPort)) {
            $('input[name=email-port]').addClass('error-input');   
        } else {
            $('input[name=email-port]').removeClass('error-input');
        }

        if(messagePort == '') {
            $('input[name=message-port]').addClass('error-input');
        } else {
            $('input[name=message-port]').removeClass('error-input');
        }
    });

    // regular expressions

    function isValidEmailAddress(emailAddress) {
        var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
        return pattern.test(emailAddress);
    }

    function isValidName(name) {
        var pattern = new RegExp(/^[a-zA-Zа-яА-Я'][a-zA-Zа-яА-Я-' ]+[a-zA-Zа-яА-Я']?$/gi);
        return pattern.test(name);
    }
});