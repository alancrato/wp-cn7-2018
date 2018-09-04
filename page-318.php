<?php get_header();?>

<br/>
<div class="container">

    <div class="row hide-on-med-and-down">
        <div class="col s12 m1 l1"></div>
        <div class="col s12 m10 l10">
            <div class="pub-top"></div>
        </div>
        <div class="col s12 m1 l1"></div>
    </div>
</div>

<div class="container">
    <div class="row float-category">

    </div>
    <div class="row float-category">
        <div class="col s12 m8 l8">

            <div class="row">
                <div class="col s4">
                    <div class="mais-destaque padding-ajustes-mais-lidas">
                        Mais Lidas de Hoje
                    </div>
                </div>
                <div class="col s8">
                    <div class="border-mais-destaques"></div>
                </div>
            </div>

            <?php
                $args = array(
                    'range' => 'last24hours',
                    'limit' => 10
                );
            ?>

            <div class="row">
                <div class="col s2">
                    <div class="date-single">
                        <?php
                            for($i = 1; $i <= 10; $i++){
                                $result = $i;
                                echo "<h3 class='number'>$result °</h3>";
                            }
                        ?>
                    </div>
                </div>
                <div class="col s10">
                    <div class="title-mais-lidas padding-ajustes">
                        <?php
                            wpp_get_mostpopular( $args );
                        ?>
                    </div>
                </div>
            </div>

        </div>
        <div class="col s12 m4 l4">
            <div class="title-publicidade center">
                Publicidade
            </div>
            <div class="pub-category"></div>
            <br/>
            <div class="line-sidebar-category"></div>
            <br/>
            <div class="facebook-page center hide-on-med-and-down">
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.1&appId=1719551754798065&autoLogAppEvents=1';
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script>
                <div class="fb-page" data-href="https://www.facebook.com/cearanews7/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/cearanews7/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cearanews7/">Ceará News 7</a></blockquote></div>
            </div>
            <br/>
            <div class="line-sidebar-category hide-on-med-and-down"></div>
        </div>
    </div>
</div>

<?php get_footer();?>

