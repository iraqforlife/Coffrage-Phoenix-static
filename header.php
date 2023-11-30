
<div class="header">
      <nav class="backgroundcolor-white" style="box-shadow: none;width: 100%;display: block;height: auto;">
          <div class="header-menu">
              <div style="display: flex;">
                  <a href="https://coffragesphoenix.com/"><img class="header-logo imagehover-01" src="https://coffragesphoenix.com/assets/img/coffrages-phoenix.png" alt="Coffrages-Phoenix"></a>
                  <a href="#" data-target="slide-out" class="mobile-nav-toggle sidenav-trigger"><i class="fa-solid fa-bars"></i></a>
              </div>
              <div class="alignright">
                  <div class="navfont-menu fonthover-03">
                      <a href="https://coffragesphoenix.com/">Accueil</a>&nbsp;&nbsp;&nbsp;
                      
                      <div class="dropdown">
                          <a href="https://coffragesphoenix.com/services"  class='dropdown-trigger' href='#' data-target='dropdown1'>Services <i class="fa-solid fa-chevron-down"></i></a>
                          <div id='dropdown1' class="dropdown-content">
                              <a href="https://coffragesphoenix.com/services/coffrage" >Coffrage</a>
                              <a href="https://coffragesphoenix.com/services/fondation-maison" >Fondations de maison</a>
                              <a href="https://coffragesphoenix.com/services/agrandissement-maison" >Agrandissement de maison</a>
                              <a href="https://coffragesphoenix.com/services/balcon-en-beton" >Balcons en béton</a>
                              <a href="https://coffragesphoenix.com/services/descente-sous-sol-beton" >Descente de sous-sol en béton</a>
                              <a href="https://coffragesphoenix.com/services/marche-de-beton" >Marche en béton</a>
                              <a href="https://coffragesphoenix.com/services/dalle-de-beton" >Dalles en béton</a>
                              <a href="https://coffragesphoenix.com/services/excavation-services" >Mini excavation</a>
                              <a href="https://coffragesphoenix.com/services/fissure-beton" >Réparations de béton</a>
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
                      <a href="https://coffragesphoenix.com/realisation">Réalisations</a>&nbsp;&nbsp;&nbsp;
                      <a href="https://coffragesphoenix.com/about">Entreprise</a>&nbsp;&nbsp;&nbsp;
                      <a href="https://coffragesphoenix.com/soumission">Soumission</a>&nbsp;&nbsp;&nbsp;
                      <a href="https://coffragesphoenix.com/contact">Contact</a>&nbsp;&nbsp;&nbsp;
                      <a href="https://coffragesphoenix.com/english/" style="cursor: pointer;">English</a>
                  </div>
              </div>
          </div>
      </nav>
  </div>


<ul id="slide-out" class="sidenav">
        <div class="mobile-nav">
            <div style="margin: 20px">
                <a href="https://coffragesphoenix.com/"><img src="https://coffragesphoenix.com/assets/img/coffrages-phoenix.png" alt="Coffrages-Phoenix"></a>
            </div>
            <mat-divider style="border-top-color:lightgray;"></mat-divider>
            <div><a href="https://coffragesphoenix.com/">Accueil</a></div>
            <mat-divider style="border-top-color:lightgray;"></mat-divider>
            <div><a href="https://coffragesphoenix.com/services" >Services</a></div>
            <mat-divider style="border-top-color:lightgray;"></mat-divider>
            <div><a href="https://coffragesphoenix.com/realisation" >Réalisations</a></div>
            <mat-divider style="border-top-color:lightgray;"></mat-divider>
            <div><a href="https://coffragesphoenix.com/about" >Entreprise</a></div>
            <mat-divider style="border-top-color:lightgray;"></mat-divider>
            <div><a href="https://coffragesphoenix.com/soumission" >Soumission</a></div>
            <mat-divider style="border-top-color:lightgray;"></mat-divider>
            <div><a href="https://coffragesphoenix.com/contact" data-target="slide-out">Contact</a></div>
            <mat-divider style="border-top-color:lightgray;"></mat-divider>
            <div>
                <a href="#" style="cursor: pointer;">English</a>
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