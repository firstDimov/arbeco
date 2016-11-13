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

    // ie

    if (ua.search(/MSIE/) > -1 || ua.search(/Trident/) > -1) {
        $('body').addClass('IE');
    }

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
                    $('#loader-inside').removeClass('fade-li');
                    transitionLoad.to($('#load-cnt-m'), 0.5, {y: 0, autoAlpha: 1});
                }, 1000);
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

                break;
            }
        }
    };

    var newUrl = window.location.pathname.split('/'),
        linkLoad;

    if(newUrl[1] != '' && newUrl[2] == undefined) {
        if(!newUrl[1].search('portfolio')) {
            linkLoad = '/' + newUrl[1] + '.php';
        } else {
            linkLoad = '/' + newUrl[1] + '.php';
        }

        routeNav('/' + newUrl[1]);
        routerLoad(linkLoad);
    } else {
        linkLoad = '/api/portfolio/' + newUrl[2] + '.php';

        if(newUrl[1] != '') {
            $('#nav ul li:first-child').addClass('active');
        }

        routeSide('/portfolio/' + newUrl[2]);
        routerLoad(linkLoad);
    }

    // scroll

    $('.mCustomScrollbar').mCustomScrollbar();

    // modal window

    $('.left-image-mtc a').click( function(event){
        event.preventDefault();
        $('#overlay').fadeIn(400,
            function(){
                $('#modal-form') 
                    .css('display', 'block')
                    .animate({opacity: 1, top: '50%'}, 200);
        });
    });

    $('#close-modal, #overlay').click( function(){
        $('#modal-form')
            .animate({opacity: 0, top: '50%'}, 200,
                function(){
                    $(this).css('display', 'none');
                    $('#overlay').fadeOut(400);
                }
            );
    });

    // all clicks for routes

    $('body').on('click', '#nav ul li a', function(){
        $('#nav ul li, #menu-sidebar li').removeClass('active');
        $(this).parent('li').addClass('active');

        transitionLoad.to($('#load-cnt-m'), 0.5, {y: 100, autoAlpha: 0, onComplete: fixLoad});

        function fixLoad() {
            $('#loader-inside').addClass('fade-li');
            $('#load-cnt-m').empty();
        }

        var attrA = $(this).attr('href');
        router.navigate(attrA);

        return false;
    });

    $('body').on('click', '#menu-sidebar li a', function(){
        $('#menu-sidebar li, #nav ul li').removeClass('active');
        $(this).parent('li').addClass('active');
        $('#nav ul li:first-child').addClass('active');

        transitionLoad.to($('#load-cnt-m'), 0.5, {y: 100, autoAlpha: 0, onComplete: fixLoad});
        
        function fixLoad() {
            $('#loader-inside').addClass('fade-li');
            $('#load-cnt-m').empty();
        }

        var attrA = $(this).attr('href');
        router.navigate(attrA);

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
        transitionLoad.to($('#load-cnt-m'), 0.5, {y: 100, autoAlpha: 0, onComplete: fixLoad});
        
        function fixLoad() {
            $('#loader-inside').addClass('fade-li');
            $('#load-cnt-m').empty();
        }

        var linkCrumb = $(this).attr('href');
        router.navigate(linkCrumb);

        return false;
    });

    // routes

    router.route('/', function(){
        $.get(
            'index.php',
            function(data){
                var $html = $('<div/>');
                $html.html(data);

                setTimeout(function(){
                    $('#nav ul li, #menu-sidebar li').removeClass('active');

                    $('#load-cnt-m').html($html.find('#load-cnt-m').html());
                    $('#loader-inside').removeClass('fade-li');
                    transitionLoad.to($('#load-cnt-m'), 0.5, {y: 0, autoAlpha: 1});
                }, 2500);
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
            }
        );
    });

    router.route('/portfolio/:page', function(page){
        $.get(
            '/api/portfolio/'+ page + '.php',
            function(data){
                var $html = $('<div/>');
                $html.html(data);
                console.log($html);

                setTimeout(function(){
                    $('#load-cnt-m').html($html.find('#load-cnt-m').html());
                    $('#loader-inside').removeClass('fade-li');
                    transitionLoad.to($('#load-cnt-m'), 0.5, {y: 0, autoAlpha: 1});
                }, 2500);
            }
        );
    });

    // contacts functional

    if($('#map').length) {
        conMap();
    }

    // gallery portfolio

    if($('.photos-port').length) {
        setTimeout(function(){
            var grid = $('.photos-port').masonry({
                itemSelector: '.grid-item',
                gutter: 50
            });

            grid.masonry( 'on', 'layoutComplete', function() {
                console.log('active page & remove loader');
            });

            grid.masonry();

        }, 1000);
    }

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

    // validation form

    $('body').on('keyup','input', function() {
        var nameInput = $(this).attr('name');

        $('input[name=' + nameInput + ']').removeClass('error-input');

        if($('input[name=' + nameInput + ']').val() != '') {
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