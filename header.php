<div class="header">
    <nav style="box-shadow: none;width: 100%;display: block;height: auto;background-color: #ffffff;">
        <div class="header-menu">
            <div style="display: flex;">
                <a href="/"><img class="header-logo imagehover-01" src="/assets/img/coffrages-phoenix.webp" alt="Coffrages-Phoenix"></a>
                <a href="#" data-target="slide-out" class="mobile-nav-toggle sidenav-trigger">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="black" width="30px" height="30px"><!--! Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2024 Fonticons, Inc. -->
                        <path d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z" />
                    </svg>
                </a>
            </div>
            <div class="alignright">
                <div class="navfont-menu fonthover-03">
                    <a href="/" style="color: var(--primaryColor);">Accueil</a>&nbsp;&nbsp;&nbsp;

                    <div class="dropdown" style="color:var(--primaryColor)">
                        <a style="color: var(--primaryColor) !important;" href="/services/">Services</a>
                        <a class='dropdown-trigger' href='#' data-target='dropdown1' style="color: var(--primaryColor);">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="var(--primaryColor)" width="16px" height="16px"><!--! Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2024 Fonticons, Inc. -->
                                <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                            </svg>
                        </a>
                        <div id='dropdown1' class="dropdown-content" style="top:50px !important;">
                            <a href="/services/balcon-en-beton/" style="color:var(--primaryColor)">Balcons en béton</a>
                            <a href="/services/coffrage/" style="color: var(--primaryColor);">Coffrage</a>
                            <a href="/services/marche-de-beton/" style="color: var(--primaryColor);">Marche en béton</a>
                            <a href="/services/dalle-de-beton/" style="color: var(--primaryColor);">Dalles en béton</a>
                            <a href="/services/fondation-maison/" style="color: var(--primaryColor);">Fondations de maison</a>
                            <a href="/services/agrandissement-maison/" style="color:var(--primaryColor)">Agrandissement de maison</a>
                            <a href="/services/descente-sous-sol-beton/" style="color:var(--primaryColor)">Descente de sous-sol en béton</a>
                            <a href="/services/mur-de-soutenement/" style="color:var(--primaryColor)">Mur de soutènement</a>
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
        <a class="sidenav-close" style="color: black; background-color: white;font-size: 45px;margin-top: 300px;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"  fill="black" width="45px" height="45px"><!--! Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2024 Fonticons, Inc. -->
                <path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z" />
            </svg>
        </a>
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