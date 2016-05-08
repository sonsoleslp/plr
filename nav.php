<!-- PRELOADER -->
<div id="st-preloader">
    <div id="pre-status">
        <div class="preload-placeholder"></div>
    </div>
</div>
<!-- /PRELOADER -->

<div style="background-color:white; z-index:999; text-align:center; width:40px; border:10px solid white; height:auto; position:absolute; right:0; top:50%;">
    <a href="?lang=es"><img src="../images/es.png"></a>
    <a href="?lang=en"><img src="../images/en.png"></a>
    <a href="?lang=de"><img src="../images/de.png"></a>

</div>
<!-- HEADER -->
<header id="header">
    <nav class="navbar st-navbar navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#st-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="logo " href="../index.php"><img class="" style="max-width:80%;" src="../images/logo.png" alt=""></a>
            </div>
      <?php  if($mainsection) { ?>
            <div class="collapse navbar-collapse" id="st-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="st-link"><a href="#header"><?php $translate->__('NAV_INICIO'); ?> </a></li>
                    <li class="st-link"><a href="#about"><?php $translate->__('NAV_CV'); ?></a></li>
                    <li class="st-link dropdown">
                        <a href="/index.php#services" style=" display: inline-block;   margin-right: -14px;"><?php $translate->__('NAV_SERVICIOS'); ?></a>
                        <a href="#"  style="display:inline-block;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="st-link"><a href="#our-works"><?php $translate->__('NAV_ARQ'); ?></a></li>
                            <li class="st-link"><a href="#estructuras"><?php $translate->__('NAV_STRUC'); ?></a></li>
                            <li class="st-link"><a href="#pm"><?php $translate->__('NAV_PJT'); ?></a></li>
                            <li class="st-link"><a href="#otros"><?php $translate->__('NAV_OTROS'); ?></a></li>

                        </ul>
                    </li>

                    <li class="st-link"><a href="#contact"><?php $translate->__('NAV_CONTACT'); ?></a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
      <?php }?>
        </div><!-- /.container -->
    </nav>
</header>
<!-- /HEADER -->
