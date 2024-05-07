<?php
$current_route = $_SERVER['REQUEST_URI'];
?>

<aside class="main-sidebar sidebar-dark-info elevation-4 position-fixed">
    <!-- Logo de la marque -->
    <a href="/view/home.php" class="brand-link">
        <img src="/view/assets/images/logo.png" class="brand-image " alt="Image de groupe">
        <span class="brand-text font-weight-light text-center h6">CNMH</span>
    </a>

    <!-- Barre latérale -->
    <div class="sidebar">
        <!-- Menu latéral -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/view/home.php"
                        class="nav-link <?php echo (strpos($current_route, 'home') !== false) ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Accueil
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/view/Pole-social/GestionProjets/projets/index.php"
                        class="nav-link <?php echo (strpos($current_route, 'projets') !== false) ? 'active' : ''; ?>">
                        <i class="fa-solid fa-hospital-user"></i>
                  <p>Dossier bénéficiaires</p>
                    </a>
                </li>

                
               
              

                <!-- Authorisation -->
                <li class="nav-item has-treeview">
                    <a href="#"
                        class="nav-link <?php echo (strpos($current_route, 'autorisation') !== false) ? 'active' : ''; ?>">
                        <i class="fa-solid fa-gears"></i>
                        <p class="pl-2">
                           Service Social 
     
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/view/Pole-social/autorisation/Actions/index.php"
                                class="nav-link <?php echo (strpos($current_route, 'utilisateurs') !== false) ? 'active' : ''; ?>">
                                <i class="fa-solid fa-users pl-1 pr-1"></i>
                                <p>List d'attente</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/view/Pole-social/autorisation/Autorisations/index.php"
                                class="nav-link <?php echo (strpos($current_route, 'Autorisations') !== false) ? 'active' : ''; ?>">
                                <i class="far fa-check-circle nav-icon"></i>
                                <p>Rendez vous </p>
                            </a>
                        </li>
                      
                      
                      
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>