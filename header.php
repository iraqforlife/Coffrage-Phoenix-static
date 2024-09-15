<div class="header">
    <nav style="box-shadow: none;width: 100%;display: block;height: auto;background-color: #ffffff;">
        <div class="header-menu">
            <div style="display: flex;">
                <a href="/"><img class="header-logo imagehover-01" src="/assets/img/coffrages-phoenix.webp" alt="Coffrages-Phoenix"></a>
                <a href="#" data-target="slide-out" class="mobile-nav-toggle sidenav-trigger"><i class="fa-solid fa-bars"></i></a>
            </div>
            <div class="alignright">
                <div class="navfont-menu fonthover-03">
                    <a href="/" style="color: var(--primaryColor);">Accueil</a>&nbsp;&nbsp;&nbsp;

                    <div class="dropdown" style="color:var(--primaryColor)">
                        <a style="color: var(--primaryColor) !important;" href="/services/">Services</a>
                        <a class='dropdown-trigger' href='#' data-target='dropdown1' style="color: var(--primaryColor);"> <i class="fa-solid fa-chevron-down"></i></a>
                        <div id='dropdown1' class="dropdown-content" style="top:50px !important;">
                            <a href="/services/balcon-en-beton/" style="color:var(--primaryColor)">Balcons en béton</a>
                            <a href="/services/coffrage/" style="color: var(--primaryColor);">Coffrage</a>
                            <a href="/services/marche-de-beton/"style="color: var(--primaryColor);">Marche en béton</a>
                            <a href="/services/dalle-de-beton/"style="color: var(--primaryColor);">Dalles en béton</a>
                            <a href="/services/fondation-maison/" style="color: var(--primaryColor);">Fondations de maison</a>
                            <a href="/services/agrandissement-maison/" style="color:var(--primaryColor)">Agrandissement de maison</a>
                            <a href="/services/descente-sous-sol-beton/" style="color:var(--primaryColor)">Descente de sous-sol en béton</a>
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
                    <a href="/realisation/" style="color: var(--primaryColor);">Réalisations</a>&nbsp;&nbsp;&nbsp;
                    <a href="/entreprise/" style="color: var(--primaryColor);">Entreprise</a>&nbsp;&nbsp;&nbsp;
                    <a href="/soumission/" style="color: var(--primaryColor);">Soumission</a>&nbsp;&nbsp;&nbsp;
                    <a href="/contact/" style="color: var(--primaryColor);">Contact</a>&nbsp;&nbsp;&nbsp;
                    <a href="<?php echo  $englishUrl ?>" style="cursor: pointer; color: var(--primaryColor);">English</a>
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
            <a href="/services/">Services</a>
        </div>
        <div style="border-top-color:lightgray;border-top-color: lightgray;margin: 0;border-top-style: solid;border-width: thin;">
            <a href="/realisation/">Réalisations</a>
        </div>
        <div style="border-top-color:lightgray;border-top-color: lightgray;margin: 0;border-top-style: solid;border-width: thin;">
            <a href="/entreprise/">Entreprise</a>
        </div>
        <div style="border-top-color:lightgray;border-top-color: lightgray;margin: 0;border-top-style: solid;border-width: thin;">
            <a href="/soumission/">Soumission</a>
        </div>
        <div style="border-top-color:lightgray;border-top-color: lightgray;margin: 0;border-top-style: solid;border-width: thin;">
            <a href="/contact/" data-target="slide-out">Contact</a>
        </div>
        <div style="border-top-color:lightgray;border-top-color: lightgray;margin: 0;border-top-style: solid;border-width: thin;">
            <a href="<?php echo  $englishUrl ?>" style="cursor: pointer;">English</a>
        </div>
        <a class="sidenav-close" style="color: black; background-color: white;font-size: 45px;margin-top: 300px;"><i class="fa-solid fa-x"></i></a>
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