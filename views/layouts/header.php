<!DOCTYPE html>
<html>
<head>
    <title>my project</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/template/style/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:600' rel='stylesheet' type='text/css'>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

    <link rel="stylesheet" href="/template/js/owl-carousel/owl.carousel.css">
    <script src="/template/js/owl-carousel/owl.carousel.js"></script>
    <script src="/template/js/owl-carousel/owl.carousel.min.js"></script>

    <script>
        // jQuery.noConflict(); (function($) {
        $(document).ready(function() {

            $("#owl-demo1").owlCarousel({

                navigation : true,
                autoPlay: 3000, //Set AutoPlay to 3 seconds
                items : 1,
                itemsDesktop : [768,1],
                itemsDesktopSmall : [500,1]
            });
        });

        //})(jQuery);
    </script>
    <script>
        $(function(){
            $('#block_subscriber').delay(15000)
                .show(1);

        });
    </script>
    <script>

        $(document).ready(function() {

            $(".btn_close").click(function(){
                $('#block_subscriber').hide();
            });

        });


    </script>
    <script type="text/javascript">
        var top_show = 150; // В каком положении полосы прокрутки начинать показ кнопки "Наверх"
        var delay = 1000; // Задержка прокрутки
        $(document).ready(function() {
            $(window).scroll(function () { // При прокрутке попадаем в эту функцию
                /* В зависимости от положения полосы прокрукти и значения top_show, скрываем или открываем кнопку "Наверх" */
                if ($(this).scrollTop() > top_show) $('#top').fadeIn();
                else $('#top').fadeOut();
            });
            $('#top').click(function () { // При клике по кнопке "Наверх" попадаем в эту функцию
                /* Плавная прокрутка наверх */
                $('body, html').animate({
                    scrollTop: 0
                }, delay);
            });
        });
    </script>



</head>
<body>
<header id="header">
    <div id="block_subscriber">
        <div class="btn_close">X</div>
        <h3 style="color: #fff;">Подписаться на новостную рассылку</h3>
        <form action="#" method="post">
            <input type="text" name="name_of_subscriber" placeholder="Enter name"><br><br>
            <input type="text" name="email_of_subscriber" placeholder="Enter e-mail"><br><br>
            <input type="submit">
        </form>
    </div>
    <div class="size_content">
        <div class="top_header clearfix">
            <div id="logo">
                <a href="/"><img src="/template/img/logo.svg" alt="logo" width="170"></a>
            </div>
            <div class="address">
                г. Киев, м. Кловская, пер. Ивана Марьяненко 9, офис 1
            </div>
            <div class="phone">
                <span><a href="tel:380660000000">+38 (066) 000-00-00</a></span><br>
                Работаем: с 10:00 до 19:00
            </div>
            <!--div class="btn click-me">
                registration
            </div-->

            <?php if(!User::isGuest()) : ?>
            <div class="btn" style="margin-right: 15px;">
                <a style="color: #fff" href="/login"> login</a>
            </div>
            <div class="btn" style="margin-right: 15px;">
                <a style="color: #fff" href="/register"> registration</a>
            </div>
            <?php else: ?>
            <div class="btn" >
                <a style="color: #fff" href="/logout"> logout</a>
            </div>
            <?php endif; ?>
        </div>

        <div class="bottom_header clearfix">
            <nav id="navigation" class="clearfix" style="float: left;">
                <ul>
                    <li class="item_menu"><a href="/">Main</a></li>
                    <li class="item_menu "><a href="/about">About</a>
                        <ul>
                            <li><a href="#">Our history</a>
                                <ul>
                                    <li><a href="#">More intresting</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="item_menu "><a href="/news">News</a></li>
                    <li class="item_menu "><a href="/contacts">Contact us</a></li>
                </ul>
            </nav>
            <div class="search">
                <form action="" method="get">
                    <input type="text" name="search" placeholder="search">
                    <input type="submit" name="btn_search" value="search">
                </form>
            </div>
        </div>

    </div>
</header>
<main class="size_content">