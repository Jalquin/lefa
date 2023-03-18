<header id="navbar" class="header-one navbar-fixed">
    <div class="site-navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <nav class="navbar navbar-expand-lg p-0">
                        <a href="index"><img alt="LEFA Servis Logo"
                                                     class="<?php if ($page == 'index') echo 'active-png'; ?>" loading="lazy"
                                                     src="images/lefaservis_white.svg"></a>

                        <button aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation"
                                class="navbar-toggler" data-target=".navbar-collapse" data-toggle="collapse"
                                type="button">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbar-collapse">
                            <ul class="nav navbar-nav mr-auto">

                                <li class="nav-item <?php if ($page == 'o-nas') echo 'active'; ?>"><a class="nav-link"
                                                                                                      href="o-nas">O
                                        nás</a></li>

                                <li class="nav-item dropdown <?php if ($page == 'zaluzie-horizontalni' || $page == 'zaluzie-vertikalni' || $page == 'plise' || $page == 'rolety' || $page == 'shrnovaci-dvere-drevene' || $page == 'shrnovaci-dvere-kozenkove' || $page == 'shrnovaci-dvere-pvc' || $page == 'zaclony' || $page == 'delici-steny' || $page == 'japonske-steny' || $page == 'zatemneni') echo 'active'; ?>">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="interier">Interiér
                                        <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu <?php if ($page == 'zaluzie-horizontalni' || $page == 'zaluzie-vertikalni') echo 'active'; ?>">
                                            <a class="dropdown-toggle" data-toggle="dropdown"
                                               href="zaluzie">Žaluzie </a>
                                            <ul class="dropdown-menu">
                                                <li class="<?php if ($page == 'zaluzie-horizontalni') echo 'active'; ?>">
                                                    <a href="zaluzie-horizontalni">Horizontální</a></li>
                                                <li class="<?php if ($page == 'zaluzie-vertikalni') echo 'active'; ?>">
                                                    <a href="zaluzie-vertikalni">Vertikální</a></li>
                                            </ul>
                                        </li>
                                        <li class="<?php if ($page == 'plise') echo 'active'; ?>"><a
                                                    href="plise">Plisé</a></li>
                                        <li class="<?php if ($page == 'rolety') echo 'active'; ?>"><a href="rolety">Rolety</a>
                                        </li>
                                        <li class="dropdown-submenu <?php if ($page == 'shrnovaci-dvere-drevene' || $page == 'shrnovaci-dvere-kozenkove' || $page == 'shrnovaci-dvere-pvc') echo 'active'; ?>">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="shrnovaci-dvere">Shrnovací
                                                dveře </a>
                                            <ul class="dropdown-menu">
                                                <li class="<?php if ($page == 'shrnovaci-dvere-drevene') echo 'active'; ?>">
                                                    <a href="shrnovaci-dvere-drevene">Dřevěné</a></li>
                                                <li class="<?php if ($page == 'shrnovaci-dvere-kozenkove') echo 'active'; ?>">
                                                    <a href="shrnovaci-dvere-kozenkove">Koženkové</a></li>
                                                <li class="<?php if ($page == 'shrnovaci-dvere-pvc') echo 'active'; ?>">
                                                    <a href="shrnovaci-dvere-pvc">PVC</a></li>
                                            </ul>
                                        </li>
                                        <li class="<?php if ($page == 'zaclony') echo 'active'; ?>"><a href="zaclony">Záclony</a>
                                        </li>
                                        <li class="<?php if ($page == 'delici-steny') echo 'active'; ?>"><a
                                                    href="delici-steny">Dělící stěny</a></li>
                                        <li class="<?php if ($page == 'japonske-steny') echo 'active'; ?>"><a
                                                    href="japonske-steny">Japonské stěny</a></li>
                                        <li class="<?php if ($page == 'zatemneni') echo 'active'; ?>"><a
                                                    href="zatemneni">Zatemnění</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown <?php if ($page == 'venkovni-zaluzie' || $page == 'venkovni-rolety-hlinikove' || $page == 'venkovni-rolety-drevene' || $page == 'markyzy' || $page == 'garazova-vrata' || $page == 'site-proti-hmyzu' || $page == 'eurookna-a-dvere') echo 'active'; ?>">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="exterier">Exteriér
                                        <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="<?php if ($page == 'venkovni-zaluzie') echo 'active'; ?>"><a
                                                    href="venkovni-zaluzie">Venkovní žaluzie</a></li>
                                        <li class="dropdown-submenu <?php if ($page == 'venkovni-rolety-hlinikove' || $page == 'venkovni-rolety-drevene') echo 'active'; ?>">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="venkovni-rolety">Venkovní
                                                rolety </a>
                                            <ul class="dropdown-menu">
                                                <li class="<?php if ($page == 'venkovni-rolety-hlinikove') echo 'active'; ?>">
                                                    <a href="venkovni-rolety-hlinikove">Hliníkové</a></li>
                                                <li class="<?php if ($page == 'venkovni-rolety-drevene') echo 'active'; ?>">
                                                    <a href="venkovni-rolety-drevene">Dřevěné</a></li>
                                            </ul>
                                        </li>
                                        <li class="<?php if ($page == 'markyzy') echo 'active'; ?>"><a href="markyzy">Markýzy</a>
                                        </li>
                                        <li class="<?php if ($page == 'garazova-vrata') echo 'active'; ?>"><a
                                                    href="garazova-vrata">Garážová vrata</a></li>
                                        <li class="<?php if ($page == 'site-proti-hmyzu') echo 'active'; ?>"><a
                                                    href="site-proti-hmyzu">Sítě proti hmyzu</a></li>
                                        <li class="<?php if ($page == 'eurookna-a-dvere') echo 'active'; ?>"><a
                                                    href="eurookna-a-dvere">Eurookna a dveře</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item <?php if ($page == 'reference') echo 'active'; ?>"><a
                                            class="nav-link" href="reference">Reference</a></li>

                                <li class="nav-item <?php if ($page == 'kontakt') echo 'active'; ?>"><a class="nav-link"
                                                                                                        href="kontakt">Kontakt</a>
                                </li>

                            </ul>
                            <ul class="nav navbar-nav float-right">
                                <li class="nav-item">
                                    <a class="nav-link" href="tel:+420775914918"><i class="fas fa-phone"></i>&ensp; 775
                                        914 918</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="mailto:info@lefaservis.cz"><i class="fas fa-envelope"></i>&ensp;
                                        info@lefaservis.cz</a>
                                </li>
                            </ul><!-- Ul end -->
                        </div>
                    </nav>

                </div>
                <!--/ Col end -->
            </div>
            <!--/ Row end -->
        </div>
        <!--/ Container end -->
    </div>
    <!--/ Navigation end -->
</header>
<!--/ Header end -->