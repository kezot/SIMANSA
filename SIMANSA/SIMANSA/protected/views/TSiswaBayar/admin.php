<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TSiswaBayars'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TSiswaBayars', 'url'=>array('index')),
	array('label'=>'Create TSiswaBayar', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tSiswaBayargrid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage TSiswaBayars</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 
$this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'tSiswaBayargrid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'NIS',
        'KD_TAHUN_AJARAN',
        'KD_TINGKAT_KELAS',
        'KD_PROGRAM_PENGAJARAN',
        'KD_ROMBEL',
        'ID_PEMBAYARAN_SISWA',
        'TANGGAL_BAYAR',
        'JUMLAH_BAYAR',
        'KETERANGAN',
        'USERNAME',
        'TANGGAL_AKSES',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
            'buttons'=>array
            (
                'view' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("tSiswaBayar/view/", 
                                            array("NIS"=>$data->NIS, "KD_TAHUN_AJARAN"=>$data->KD_TAHUN_AJARAN, "KD_TINGKAT_KELAS"=>$data->KD_TINGKAT_KELAS, "KD_PROGRAM_PENGAJARAN"=>$data->KD_PROGRAM_PENGAJARAN, "KD_ROMBEL"=>$data->KD_ROMBEL, "ID_PEMBAYARAN_SISWA"=>$data->ID_PEMBAYARAN_SISWA, "TANGGAL_BAYAR"=>$data->TANGGAL_BAYAR
											))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("tSiswaBayar/update/", 
                                            array("NIS"=>$data->NIS, "KD_TAHUN_AJARAN"=>$data->KD_TAHUN_AJARAN, "KD_TINGKAT_KELAS"=>$data->KD_TINGKAT_KELAS, "KD_PROGRAM_PENGAJARAN"=>$data->KD_PROGRAM_PENGAJARAN, "KD_ROMBEL"=>$data->KD_ROMBEL, "ID_PEMBAYARAN_SISWA"=>$data->ID_PEMBAYARAN_SISWA, "TANGGAL_BAYAR"=>$data->TANGGAL_BAYAR
											))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("tSiswaBayar/delete/", 
                                            array("NIS"=>$data->NIS, "KD_TAHUN_AJARAN"=>$data->KD_TAHUN_AJARAN, "KD_TINGKAT_KELAS"=>$data->KD_TINGKAT_KELAS, "KD_PROGRAM_PENGAJARAN"=>$data->KD_PROGRAM_PENGAJARAN, "KD_ROMBEL"=>$data->KD_ROMBEL, "ID_PEMBAYARAN_SISWA"=>$data->ID_PEMBAYARAN_SISWA, "TANGGAL_BAYAR"=>$data->TANGGAL_BAYAR
											))',
                ),
            ),
        ),
    ),
)); ?>
