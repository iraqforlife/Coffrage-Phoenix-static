<div class="header">
      <nav class="backgroundcolor-white" style="box-shadow: none;width: 100%;display: block;height: auto;">
          <div class="header-menu">
              <div style="display: flex;">
                  <a href="https://coffragesphoenix.com/en"><img class="header-logo imagehover-01" src="https://coffragesphoenix.com/assets/img/coffrages-phoenix.png" alt="Coffrages-Phoenix"></a>
                  <a href="#" data-target="slide-out" class="mobile-nav-toggle sidenav-trigger"><i class="fa-solid fa-bars"></i></a>
              </div>
              <div class="alignright">
                  <div class="navfont-menu fonthover-03">
                      <a href="https://coffragesphoenix.com/en">Home</a>&nbsp;&nbsp;&nbsp;
                      
                      <div class="dropdown">
                          <a href="https://coffragesphoenix.com/services"  class='dropdown-trigger' href='#' data-target='dropdown1'>Services <i class="fa-solid fa-chevron-down"></i></a>
                          <div id='dropdown1' class="dropdown-content">
                              <a href="https://coffragesphoenix.com/en/services/coffrage">Formwork</a>
                              <a href="https://coffragesphoenix.com/en/services/fondation-maison">House foundations</a>
                              <a href="https://coffragesphoenix.com/en/services/agrandissement-maison">House extension</a>
                              <a href="https://coffragesphoenix.com/en/services/balcon-en-beton">Concrete balcony</a>
                              <a href="https://coffragesphoenix.com/en/services/descente-sous-sol-beton">Concrete basement entrance</a>
                              <a href="https://coffragesphoenix.com/en/services/marche-de-beton">Concrete steps</a>
                              <a href="https://coffragesphoenix.com/en/services/dalle-de-beton">Concrete slabs</a>
                              <a href="https://coffragesphoenix.com/en/services/excavation-services">Mini excavation</a>
                              <a href="https://coffragesphoenix.com/en/services/concrete-repair">Concrete repair</a>
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
                      <a href="https://coffragesphoenix.com/en/realisation">Realizations</a>&nbsp;&nbsp;&nbsp;
                      <a href="https://coffragesphoenix.com/en/about">Company</a>&nbsp;&nbsp;&nbsp;
                      <a href="https://coffragesphoenix.com/en/soumission">Quote</a>&nbsp;&nbsp;&nbsp;
                      <a href="https://coffragesphoenix.com/en/contact">Contact</a>&nbsp;&nbsp;&nbsp;
                      <a href="<?php echo  $englishUrl?>" style="cursor: pointer;">Français</a>
                  </div>
              </div>
          </div>
      </nav>
  </div>

<ul id="slide-out" class="sidenav">
        <div class="mobile-nav">
            <div style="margin: 20px;">
                <a href="https://coffragesphoenix.com/en"><img src="https://coffragesphoenix.com/assets/img/coffrages-phoenix.png" alt="Coffrages-Phoenix"></a>
            </div>
            <div style="border-top-color:lightgray;border-top-color: lightgray;margin: 0;border-top-style: solid;border-width: thin;">
                <a href="https://coffragesphoenix.com/en">Home</a></div>
            <div style="border-top-color:lightgray;border-top-color: lightgray;margin: 0;border-top-style: solid;border-width: thin;">
                <a href="https://coffragesphoenix.com/en/services" >Services</a></div>
            <div style="border-top-color:lightgray;border-top-color: lightgray;margin: 0;border-top-style: solid;border-width: thin;">
                <a href="https://coffragesphoenix.com/en/realisation" >Realizations</a></div>
            <div style="border-top-color:lightgray;border-top-color: lightgray;margin: 0;border-top-style: solid;border-width: thin;">
                <a href="https://coffragesphoenix.com/en/about" >Company</a></div>
            <div style="border-top-color:lightgray;border-top-color: lightgray;margin: 0;border-top-style: solid;border-width: thin;">
                <a href="https://coffragesphoenix.com/en/soumission" >Quote</a></div>
            <div style="border-top-color:lightgray;border-top-color: lightgray;margin: 0;border-top-style: solid;border-width: thin;">
                <a href="https://coffragesphoenix.com/en/contact" data-target="slide-out">Contact</a></div>
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