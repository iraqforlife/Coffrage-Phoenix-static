<div class="header">
      <nav class="backgroundcolor-white" style="box-shadow: none;width: 100%;display: block;height: auto;">
          <div class="header-menu">
              <div style="display: flex;">
                  <a href="/"><img class="header-logo imagehover-01" src="/assets/img/coffrages-phoenix.webp" alt="Coffrages-Phoenix"></a>
                  <a href="#" data-target="slide-out" class="mobile-nav-toggle sidenav-trigger"><i class="fa-solid fa-bars"></i></a>
              </div>
              <div class="alignright">
                  <div class="navfont-menu fonthover-03">
                      <a href="/">Home</a>&nbsp;&nbsp;&nbsp;
                      
                      <div class="dropdown">
                          <a href="/services"  class='dropdown-trigger' href='#' data-target='dropdown1'>Services <i class="fa-solid fa-chevron-down"></i></a>
                          <div id='dropdown1' class="dropdown-content">
                              <a href="/en/services/formwork">Formwork</a>
                              <a href="/en/services/house-foundation">House foundations</a>
                              <a href="/en/services/house-extension">House extension</a>
                              <a href="/en/services/concrete-balcony">Concrete balcony</a>
                              <a href="/en/services/concrete-basement">Concrete basement entrance</a>
                              <a href="/en/services/concrete-step">Concrete steps</a>
                              <a href="/en/services/concrete-slab">Concrete slabs</a>
                          </div>
                        <!-- Dropdown Structure -->
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                var elems = document.querySelectorAll('.dropdown-trigger');
                                var options = { "hover":"true"};
                                var instances = M.Dropdown.init(elems, options);
                            });
                        </script>
                      </div>&nbsp;&nbsp;&nbsp;
                      <a href="/en/realisation">Realizations</a>&nbsp;&nbsp;&nbsp;
                      <a href="/en/about">Company</a>&nbsp;&nbsp;&nbsp;
                      <a href="/en/soumission">Quote</a>&nbsp;&nbsp;&nbsp;
                      <a href="/en/contact">Contact</a>&nbsp;&nbsp;&nbsp;
                      <a href="<?php echo  $englishUrl?>" style="cursor: pointer;">Français</a>
                  </div>
              </div>
          </div>
      </nav>
  </div>

<ul id="slide-out" class="sidenav">
        <div class="mobile-nav">
            <div style="margin: 20px;">
                <a href="/"><img src="/assets/img/coffrages-phoenix.webp" alt="Coffrages-Phoenix"></a>
            </div>
            <div style="border-top-color:lightgray;border-top-color: lightgray;margin: 0;border-top-style: solid;border-width: thin;">
                <a href="/">Home</a></div>
            <div style="border-top-color:lightgray;border-top-color: lightgray;margin: 0;border-top-style: solid;border-width: thin;">
                <a href="/services">Services</a></div>
            <div style="border-top-color:lightgray;border-top-color: lightgray;margin: 0;border-top-style: solid;border-width: thin;">
                <a href="/realisation">Realizations</a></div>
            <div style="border-top-color:lightgray;border-top-color: lightgray;margin: 0;border-top-style: solid;border-width: thin;">
                <a href="/about">Company</a></div>
            <div style="border-top-color:lightgray;border-top-color: lightgray;margin: 0;border-top-style: solid;border-width: thin;">
                <a href="/soumission">Quote</a></div>
            <div style="border-top-color:lightgray;border-top-color: lightgray;margin: 0;border-top-style: solid;border-width: thin;">
                <a href="/contact" data-target="slide-out">Contact</a></div>
            <div style="border-top-color:lightgray;border-top-color: lightgray;margin: 0;border-top-style: solid;border-width: thin;">
                <a href="<?php echo  $englishUrl?>" style="cursor: pointer;">Français</a>
            </div>
            <a class="sidenav-close" href="#!" style="color: black; background-color: white;font-size: 45px;margin-top: 300px;"><i class="fa-solid fa-x"></i></a>
        </div>
</ul>
  
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var options = { "edge":"right"};
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