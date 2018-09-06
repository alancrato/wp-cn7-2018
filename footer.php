<footer class="page-footer amber lighten-1">
    <div class="container">
        <div class="row">
            <div class="col s12 m3">
                <div class="logo-footer">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-footer.png"/>
                </div>
            </div>
            <div class="col s6 m3 border-menu-footer">
                <ul>
                    <li><a class="black-text" href="<?php echo home_url('/');?>ultimas-noticias">Últimas</a></li>
                    <li><a class="black-text" href="<?php echo home_url('/');?>mais-lidas">Mais Lidas</a></li>
                    <li><a class="black-text" href="<?php echo home_url('/');?>contato">Contato</a></li>
                    <li><a class="black-text" href="https://issuu.com/cearanews7/docs/jc-04a10setembro2018" target="_blank">Jornal do Cariri</a></li>
                    <li><a class="black-text" href="http://www.plusfm.com.br" target="_blank">Plus Fm</a></li>
                </ul>
            </div>
            <div class="col s6 m3 border-menu-footer">
                <ul>
                    <li><a class="black-text" href="http://www.facebook.com/cearanews7" target="_blank">Facebook</a></li>
                    <li><a class="black-text" href="http://www.instagram.com/cearanews7" target="_blank">Instagram</a></li>
                    <li><a class="black-text" href="http://www.twitter.com/cearanews7" target="_blank">Twitter</a></li>
                    <li><a class="black-text" href="javascript:void(null)">Whatsapp</a></li>
                    <li><a class="black-text" href="javascript:void(null)">E-mail</a></li>
                </ul>
            </div>
            <div class="col s12 m3">
                <div class="logo-footer-don">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-footer-don.png"/>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Copyright <a class="black-text text-lighten-3" href="http://cearanews7.com">Don7 - Media Group </a> 2000-<?= date('Y'); ?>
        </div>
    </div>
</footer>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/init.js"></script>

<!-- JS Google Adsense -->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<!--  Js e Tag Premmium -->
<div data-premium data-adunit="CEARA_NEWS_RODAPE" data-smart="true" data-sizes-desktop="[[970,90], [728,90]]" data-sizes-mobile="[[320,100, [320,50]]">
</div>
<script type="text/javascript" async="async" src="https://tags.premiumads.com.br/dfp/e9919bb9-5ad5-4e04-8b2a-a1d06485f75b"></script>

<!-- Slider -->
<script>
    $(document).ready(function(){
        $('.slider').slider({
            interval: 10000
        });
    });
</script>

<!-- Search Mobile -->
<script>
    $('.search-icon').click(function () {
        $('.search-mobile').css("display", "block");
    })
</script>

<?php wp_footer();?>

</body>
</html>