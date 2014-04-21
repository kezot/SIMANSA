<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TSiswaAbsensis'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TSiswaAbsensis', 'url'=>array('index')),
	array('label'=>'Create TSiswaAbsensi', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tSiswaAbsensigrid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage TSiswaAbsensis</h1>

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
    'id'=>'tSiswaAbsensigrid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'NIS',
        'KD_TAHUN_AJARAN',
        'KD_TINGKAT_KELAS',
        'KD_PROGRAM_PENGAJARAN',
        'KD_ROMBEL',
        'TANGGAL',
        'KD_PERIODE_BELAJAR',
        'STATUS_ABSEN',
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
                    'Yii::app()->createUrl("tSiswaAbsensi/view/", 
                                            array("nis"=>$data->nis, "kd_tahun_ajaran"=>$data->kd_tahun_ajaran, "kd_tingkat_kelas"=>$data->kd_tingkat_kelas, "kd_program_pengajaran"=>$data->kd_program_pengajaran, "kd_rombel"=>$data->kd_rombel, "tanggal"=>$data->tanggal
											))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("tSiswaAbsensi/update/", 
                                            array("nis"=>$data->nis, "kd_tahun_ajaran"=>$data->kd_tahun_ajaran, "kd_tingkat_kelas"=>$data->kd_tingkat_kelas, "kd_program_pengajaran"=>$data->kd_program_pengajaran, "kd_rombel"=>$data->kd_rombel, "tanggal"=>$data->tanggal
											))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("tSiswaAbsensi/delete/", 
                                            array("nis"=>$data->nis, "kd_tahun_ajaran"=>$data->kd_tahun_ajaran, "kd_tingkat_kelas"=>$data->kd_tingkat_kelas, "kd_program_pengajaran"=>$data->kd_program_pengajaran, "kd_rombel"=>$data->kd_rombel, "tanggal"=>$data->tanggal
											))',
                ),
            ),
        ),
    ),
)); ?>
