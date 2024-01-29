<div class="header">
    <nav class="backgroundcolor-white" style="box-shadow: none;width: 100%;display: block;height: auto;">
        <div class="header-menu">
            <div style="display: flex;">
                <a href="/"><img class="header-logo imagehover-01" src="/assets/img/coffrages-phoenix.webp" alt="Coffrages-Phoenix"></a>
                <a href="#" data-target="slide-out" class="mobile-nav-toggle sidenav-trigger"><i class="fa-solid fa-bars"></i></a>
            </div>
            <div class="alignright">
                <div class="navfont-menu fonthover-03">
                    <a href="/">Accueil</a>&nbsp;&nbsp;&nbsp;

                    <div class="dropdown">
                        <a href="/services">Services</a>
                        <a class='dropdown-trigger' href='#' data-target='dropdown1'> <i class="fa-solid fa-chevron-down"></i></a>
                        <div id='dropdown1' class="dropdown-content" style="top:50px !important;">
                            <a href="/services/coffrage/">Coffrage</a>
                            <a href="/services/fondation-maison/">Fondations de maison</a>
                            <a href="/services/agrandissement-maison/">Agrandissement de maison</a>
                            <a href="/services/balcon-en-beton/">Balcons en béton</a>
                            <a href="/services/descente-sous-sol-beton/">Descente de sous-sol en béton</a>
                            <a href="/services/marche-de-beton/">Marche en béton</a>
                            <a href="/services/dalle-de-beton/">Dalles en béton</a>
                        </div>
                        <!-- Dropdown Structure -->
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                var elems = document.querySelectorAll('.dropdown-trigger');
                                var options = {};
                                var instances = M.Dropdown.init(elems, options);
                            });
                        </script>
                    </div>&nbsp;&nbsp;&nbsp;
                    <a href="/realisation">Réalisations</a>&nbsp;&nbsp;&nbsp;
                    <a href="/entreprise">Entreprise</a>&nbsp;&nbsp;&nbsp;
                    <a href="/soumission">Soumission</a>&nbsp;&nbsp;&nbsp;
                    <a href="/contact">Contact</a>&nbsp;&nbsp;&nbsp;
                    <a href="<?php echo  $englishUrl ?>" style="cursor: pointer;">English</a>
                </div>
            </div>
        </div>
    </nav>
</div>


<ul id="slide-out" class="sidenav">
    <div class="mobile-nav">
        <div style="margin: 20px">
            <a href="/"><img src="/assets/img/coffrages-phoenix.webp" alt="Coffrages-Phoenix"></a>
        </div>

        <div style="border-top-color:lightgray;border-top-color: lightgray;margin: 0;border-top-style: solid;border-width: thin;">
            <a href="/">Accueil</a>
        </div>
        <div style="border-top-color:lightgray;border-top-color: lightgray;margin: 0;border-top-style: solid;border-width: thin;">
            <a href="/services">Services</a>
        </div>
        <div style="border-top-color:lightgray;border-top-color: lightgray;margin: 0;border-top-style: solid;border-width: thin;">
            <a href="/realisation">Réalisations</a>
        </div>
        <div style="border-top-color:lightgray;border-top-color: lightgray;margin: 0;border-top-style: solid;border-width: thin;">
            <a href="/entreprise">Entreprise</a>
        </div>
        <div style="border-top-color:lightgray;border-top-color: lightgray;margin: 0;border-top-style: solid;border-width: thin;">
            <a href="/soumission">Soumission</a>
        </div>
        <div style="border-top-color:lightgray;border-top-color: lightgray;margin: 0;border-top-style: solid;border-width: thin;">
            <a href="/contact" data-target="slide-out">Contact</a>
        </div>
        <div style="border-top-color:lightgray;border-top-color: lightgray;margin: 0;border-top-style: solid;border-width: thin;">
            <a href="<?php echo  $englishUrl ?>" style="cursor: pointer;">English</a>
        </div>
        <a class="sidenav-close" href="#!" style="color: black; background-color: white;font-size: 45px;margin-top: 300px;"><i class="fa-solid fa-x"></i></a>
    </div>
</ul>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var options = {
            "edge": "right"
        };
        var instances = M.Sidenav.init(elems, options);
    });

    function openMenu() {
        var instance = M.Sidenav.getInstance(elems);
        instance.open();
    }

    function closeMenu() {
        var elem = document.querySelectorAll('.sidenav');
        var instance = M.Sidenav.getInstance(elem);
        instance.open();
    }
</script>