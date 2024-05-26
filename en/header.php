<div class="header">
    <nav style="box-shadow: none;width: 100%;display: block;height: auto;background-color: #ffffff;">
        <div class="header-menu">
            <div style="display: flex;">
                <a href="/en/"><img class="header-logo imagehover-01" src="/assets/img/coffrages-phoenix.webp" alt="Coffrages-Phoenix"></a>
                <a href="#" data-target="slide-out" class="mobile-nav-toggle sidenav-trigger"><i class="fa-solid fa-bars"></i></a>
            </div>
            <div class="alignright">
                <div class="navfont-menu fonthover-03">
                    <a href="/en/" style="color:var(--primaryColor)">Home</a>&nbsp;&nbsp;&nbsp;

                    <div class="dropdown">
                        <a href="/en/services/" style="color:var(--primaryColor)">Services </a>
                        <a class='dropdown-trigger' href='#' data-target='dropdown1' style="color:var(--primaryColor)"style="color:var(--primaryColor)"> <i class="fa-solid fa-chevron-down"></i></a>
                        <div id='dropdown1' class="dropdown-content" style="top:50px !important;">
                            <a href="/en/services/formwork/" style="color:var(--primaryColor)">Formwork</a>
                            <a href="/en/services/house-foundation/" style="color:var(--primaryColor)">House foundations</a>
                            <a href="/en/services/house-extension/" style="color:var(--primaryColor)">House extension</a>
                            <a href="/en/services/concrete-balcony/" style="color:var(--primaryColor)">Concrete balcony</a>
                            <a href="/en/services/concrete-basement/" style="color:var(--primaryColor)">Concrete basement entrance</a>
                            <a href="/en/services/concrete-step/" style="color:var(--primaryColor)">Concrete steps</a>
                            <a href="/en/services/concrete-slab/" style="color:var(--primaryColor)">Concrete slabs</a>
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
                    <a href="/en/realizations/" style="color:var(--primaryColor)">Realizations</a>&nbsp;&nbsp;&nbsp;
                    <a href="/en/company/" style="color:var(--primaryColor)">Company</a>&nbsp;&nbsp;&nbsp;
                    <a href="/en/quote/" style="color:var(--primaryColor)">Quote</a>&nbsp;&nbsp;&nbsp;
                    <a href="/en/contact/" style="color:var(--primaryColor)">Contact</a>&nbsp;&nbsp;&nbsp;
                    <a href="<?php echo  $englishUrl ?>" style="cursor: pointer;color:var(--primaryColor)">Français</a>
                </div>
            </div>
        </div>
    </nav>
</div>

<ul id="slide-out" class="sidenav">
    <div class="mobile-nav">
        <div style="margin: 20px;">
            <a href="/en/"><img src="/assets/img/coffrages-phoenix.webp" alt="Coffrages-Phoenix"></a>
        </div>
        <div style="border-top-color:lightgray;border-top-color: lightgray;margin: 0;border-top-style: solid;border-width: thin;">
            <a href="/en/">Home</a>
        </div>
        <div style="border-top-color:lightgray;border-top-color: lightgray;margin: 0;border-top-style: solid;border-width: thin;">
            <a href="/en/services/">Services</a>
        </div>
        <div style="border-top-color:lightgray;border-top-color: lightgray;margin: 0;border-top-style: solid;border-width: thin;">
            <a href="/en/realizations/">Realizations</a>
        </div>
        <div style="border-top-color:lightgray;border-top-color: lightgray;margin: 0;border-top-style: solid;border-width: thin;">
            <a href="/en/company/">Company</a>
        </div>
        <div style="border-top-color:lightgray;border-top-color: lightgray;margin: 0;border-top-style: solid;border-width: thin;">
            <a href="/en/quote/">Quote</a>
        </div>
        <div style="border-top-color:lightgray;border-top-color: lightgray;margin: 0;border-top-style: solid;border-width: thin;">
            <a href="/en/contact/" data-target="slide-out">Contact</a>
        </div>
        <div style="border-top-color:lightgray;border-top-color: lightgray;margin: 0;border-top-style: solid;border-width: thin;">
            <a href="<?php echo  $englishUrl ?>" style="cursor: pointer;">Français</a>
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