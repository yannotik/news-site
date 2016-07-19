</main>
<footer id="footer" class="clearfix">
    <div class=" size_content clearfix">
        <nav id="footer_navigation" >
            <ul>
                <li class="item_menu active"><a href="/">Main</a></li>
                <li class="item_menu "><a href="/about">About</a></li>
                <li class="item_menu "><a href="/news">News</a></li>
                <li class="item_menu "><a href="/contacts">Contact us</a></li>
            </ul>
        </nav>

        <div class="address">
            г. Киев, м. Кловская, пер. Ивана Марьяненко 119
        </div>
        <div class="phone">
            <span><a href="tel:380660000000">+38 (066) 000-00-00</a></span><br>
            Работаем: с 10:00 до 19:00
        </div>
    </div>
    <div class="copyright center"> &copy; 2015 <!--?php echo ' - '. $date_now; ?--> All Rights Reserved.</div>



</footer>

<div id="top"></div>

<div class="wrapper_click_me">
    <div class="wrapper">
        <div class="popup">
            <h2 class="center"> Registration</h2>
            <form action="" method="post">
                <div class="item_form">
                    <input type="text" name="name" placeholder="Enter name">
                </div>

                <div class="item_form">
                    <input type="email" name="email" placeholder="Enter email">
                </div>

                <div class="item_form">
                    <input type="password" name="password" placeholder="Enter password">
                </div>

                <div class="item_form">
                    <input type="submit" name="registration">
                </div>
            </form>
            <div class="btn-close" title="close" unselectable="on"></div>
        </div>
    </div>
    <div class="hide-layout" ></div>
</div>


</body>
<script>
    $(function() {
        $('.popup').hide();
        $('.hide-layout').css({opacity: .6});
        alignCenter($('.popup'));

        $(window).resize(function() {
            alignCenter($('.popup'));
        })
        $('.click-me').click(function() {
            $('.hide-layout, .popup').fadeIn(300);
        })
        $('.btn-close, .hide-layout').click(function() {
            $('.hide-layout, .popup').fadeOut(300);
        })
        $('.btn-yes, .btn-no').click(function() {

            $('.hide-layout, .popup').fadeOut(300);
        })

        function alignCenter(elem) {
            elem.css({
                left: ($(window).width() - elem.width()) / 2 + 'px',
                top: ($(window).height() - elem.height()) / 2 + 'px'
            })
        }
    })
</script>
</html>