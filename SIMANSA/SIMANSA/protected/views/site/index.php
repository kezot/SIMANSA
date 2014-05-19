<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>

<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div class="row clearfix">
                
                <div class="col-md-9 column">
                    <h3 class="text-center text-info">
                        Pengumuman Akademik
                    </h3>
                    <?php
                    //$dataProvider = new CActiveDataProvider('PengumumanAkademik');
                    $dataProvider->sort->defaultOrder='tanggal DESC';
                    $dataProvider->pagination->pageSize=10;
                    $this->widget('zii.widgets.CListView', array(
                        'dataProvider' => $dataProvider,
                        'itemView' => '_itemView', // refers to the partial view named '_post'
                        'enableSorting' => true,
                    ));
                    ?>
                </div>
                <div class="col-md-2 column">
                    <h3 class="text-center text-info">
                        Profil Akun
                    </h3><img alt="140x140" src="http://lorempixel.com/140/140/">
                    <dl>
                        <dt>
                        Description lists
                        </dt>
                        <dd>
                            A description list is perfect for defining terms.
                        </dd>
                        <dt>
                        Euismod
                        </dt>
                        <dd>
                            Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.
                        </dd>
                        <dd>
                            Donec id elit non mi porta gravida at eget metus.
                        </dd>
                        <dt>
                        Malesuada porta
                        </dt>
                        <dd>
                            Etiam porta sem malesuada magna mollis euismod.
                        </dd>
                        <dt>
                        Felis euismod semper eget lacinia
                        </dt>
                        <dd>
                            Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
