<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>

        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>



        <link rel="stylesheet/less" href="<?php echo Yii::app()->request->baseUrl; ?>/less/bootstrap.less" type="text/css" />
        <link rel="stylesheet/less" href="<?php echo Yii::app()->request->baseUrl; ?>/less/responsive.less" type="text/css" />
        <script src="js/less-1.3.3.min.js"></script>
        <!--append â€˜#!watchâ€™ to the browser URL, then refresh the page. -->

        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" rel="stylesheet"/>

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png"/>
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png"/>
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png"/>
        <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png"/>
        <link rel="shortcut icon" href="img/favicon.png"/>

        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.10.4.custom.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/scripts.js"></script>
        
    </head>

    <body>

        <div class="container" id="page">

            <!--div id="header">
                <div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
            </div><!-- header -->



            <div class="row clearfix">
                <div class="col-md-12 column">
                    <div class="page-header">
                        <h1>
                            SIMANSA <small>Sistem Informasi SMA Negeri 1 Depok</small>
                        </h1>                        
                    </div>

                </div>
            </div>
            <!--div id="mainmenu" >
            <!--?php
            $this->widget('zii.widgets.CMenu', array(
                'items' => array(
                    array('label' => 'Home', 'url' => array('/site/index'), 'visible' => !Yii::app()->user->isGuest),
                    /*array('label' => 'About', 'url' => array('/site/page', 'view' => 'about')),
                    array('label' => 'Contact', 'url' => array('/site/contact')),*/
                    array('label' => "Siswa", 'url' =>array('/siswa'), 'visible' => Yii::app()->user->isAdmin()),
                    array('label' => "Absensi Siswa", 'url' =>array('/tSiswaAbsensi'), 'visible' => Yii::app()->user->isPiket()),
                    array('label' => "Pembayaran Siswa", 'url' =>array('/rPembayaranSiswa'), 'visible' => Yii::app()->user->isTU()),
                    array('label' => "Nilai Rapor Siswa", 'url' =>array('/tNilaiRapor'), 'visible' => Yii::app()->user->isGuru() || Yii::app()->user->isWaliKelas()),
                    /*array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),*/
                    array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                ),
            ));
            ?-->

            <!--/div--><!-- mainmenu -->

            <div class="row clearfix">
                <div class="col-md-12 column">
                    <ul class="nav nav-pills">
                        <?php
                        //<li class="active">
                        if (!Yii::app()->user->isGuest) {
                            if (Yii::app()->controller->id == 'home') {
                                echo '<li class="active">';
                            } else {
                                echo '<li>';
                            }
                            echo '<a href="' . Yii::app()->request->baseUrl . '/index.php?">Home</a>
                                </li>';
                            
                        }
                        if (!Yii::app()->user->isGuest) {
                           if (Yii::app()->controller->id == 'profil') {
                                echo '<li class="active">';
                            } else {
                                echo '<li>';
                            }
                            echo '<a href="' . Yii::app()->request->baseUrl . '/index.php?r=profil">Profil</a>
                          </li>';
                        }

                        /* <li>
                          <a href="#">Profil</a>
                          </li> */
                        if (Yii::app()->user->isTU()) {
                            if (Yii::app()->controller->id == 'pembayaransiswa') {
                                echo '<li class="active">';
                            } else {
                                echo '<li>';
                            }
                            echo '<a href="' . Yii::app()->request->baseUrl . '/index.php?r=pembayaranSiswa">Pembayaran</a>
                                        </li>';
                        }
                        
                        if (Yii::app()->user->isAdmin()) {
                            if (Yii::app()->controller->id == 'pengumumanakademik') {
                                echo '<li class="active">';
                            } else {
                                echo '<li>';
                            }
                            echo '<a href="' . Yii::app()->request->baseUrl . '/index.php?r=pengumumanAkademik">Pengumuman Akademik</a>
                                        </li>';
                        }
                        
                        if (Yii::app()->user->isPiket()) {
                            if (Yii::app()->controller->id == 'absensi') {
                                echo '<li class="active">';
                            } else {
                                echo '<li>';
                            }
                            echo '<a href="' . Yii::app()->request->baseUrl . '/index.php?r=siswaAbsensi">Absensi</a>
                          </li>';
                        }

                        if (Yii::app()->user->isGuru() || Yii::app()->user->isWaliKelas()) {
                           if (Yii::app()->controller->id == 'nilairapor') {
                                echo '<li class="active">';
                            } else {
                                echo '<li>';
                            }
                            echo '<a href="' . Yii::app()->request->baseUrl . '/index.php?r=tNilaiRapor">Penilaian</a>
                          </li>';
                        }
                        
                        if (Yii::app()->user->isAdmin()) {
                           if (Yii::app()->controller->id == 'user') {
                                echo '<li class="active">';
                            } else {
                                echo '<li>';
                            }
                            echo '<a href="' . Yii::app()->request->baseUrl . '/index.php?r=user">Akun</a>
                          </li>';
                        }
                        
                        if (Yii::app()->user->isAdmin()) {
                           if (Yii::app()->controller->id == 'jadwalmataajar') {
                                echo '<li class="active">';
                            } else {
                                echo '<li>';
                            }
                            echo '<a href="' . Yii::app()->request->baseUrl . '/index.php?r=jadwalMataAjar">Jadwal Mata Ajar</a>
                          </li>';
                        }
                        
                        if (Yii::app()->user->isSiswa() || Yii::app()->user->isOrangTua() ) {
                           if (Yii::app()->controller->id == 'lihatabsensi') {
                                echo '<li class="active">';
                            } else {
                                echo '<li>';
                            }
                            echo '<a href="' . Yii::app()->request->baseUrl . '/index.php?r=lihatAbsensi">Lihat Absensi</a>
                          </li>';
                        }
                        
                        if (Yii::app()->user->isSiswa() || Yii::app()->user->isOrangTua() ) {
                           if (Yii::app()->controller->id == 'lihatnilai') {
                                echo '<li class="active">';
                            } else {
                                echo '<li>';
                            }
                            echo '<a href="' . Yii::app()->request->baseUrl . '/index.php?r=lihatNilai">Lihat Nilai</a>
                          </li>';
                        }
                        
                        if (Yii::app()->user->isSiswa() || Yii::app()->user->isOrangTua() ) {
                           if (Yii::app()->controller->id == 'lihatpembayaran') {
                                echo '<li class="active">';
                            } else {
                                echo '<li>';
                            }
                            echo '<a href="' . Yii::app()->request->baseUrl . '/index.php?r=lihatPembayaran">Lihat Pembayaran</a>
                          </li>';
                        }
                        
                        if (Yii::app()->user->isAdmin()) {
                           if (Yii::app()->controller->id == 'lihatstatistiknilai') {
                                echo '<li class="active">';
                            } else {
                                echo '<li>';
                            }
                            echo '<a href="' . Yii::app()->request->baseUrl . '/index.php?r=lihatStatistikNilai">Lihat Statistik Nilai</a>
                          </li>';
                        }
                        if (Yii::app()->user->isSiswa()) {
                           if (Yii::app()->controller->id == 'lihatjadwalmataajar') {
                                echo '<li class="active">';
                            } else {
                                echo '<li>';
                            }
                            echo '<a href="' . Yii::app()->request->baseUrl . '/index.php?r=lihatJadwalMataAjar">Lihat Jadwal Mata Ajar</a>
                          </li>';
                        }
                        
                        if (Yii::app()->user->isWaliKelas()) {
                           if (Yii::app()->controller->id == 'walilihatabsensi') {
                                echo '<li class="active">';
                            } else {
                                echo '<li>';
                            }
                            echo '<a href="' . Yii::app()->request->baseUrl . '/index.php?r=waliLihatAbsensi">Lihat Absensi Siswa</a>
                          </li>';
                        }
                        
                        if (Yii::app()->user->isWaliKelas()) {
                           if (Yii::app()->controller->id == 'walilihatpembayaran') {
                                echo '<li class="active">';
                            } else {
                                echo '<li>';
                            }
                            echo '<a href="' . Yii::app()->request->baseUrl . '/index.php?r=waliLihatPembayaran">Lihat Pembayaran Siswa</a>
                          </li>';
                        }
                        
                        
                        


                        /* <li>
                          <a href="#">Jadwal</a>
                          </li> */
                        /*
                          <li>
                          <a href="#">Akun</a>
                          </li> */


                        if (!Yii::app()->user->isGuest) {
                            echo ' <li class="pull-right">
                          <a href="' . Yii::app()->request->baseUrl . '/index.php?r=site/logout" >Logout</a>
                          
                        </li> ';
                        }
                        ?>
                    </ul>
                </div>
            </div>

            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                ));
                ?><!-- breadcrumbs -->
            <?php endif ?>

            <?php echo $content; ?>

            <div class="clear"></div>

            <div id="footer">
                Copyright &copy; <?php echo date('Y'); ?> by SMA Negeri 1 Depok.<br/>
                All Rights Reserved.<br/>
                <?php echo Yii::powered(); ?>
            </div><!-- footer -->

        </div><!-- page -->

    </body>
</html>

