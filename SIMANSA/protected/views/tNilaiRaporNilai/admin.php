<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TNilaiRaporNilais'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TNilaiRaporNilais', 'url'=>array('index')),
	array('label'=>'Create TNilaiRaporNilai', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tNilaiRaporNilaigrid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage TNilaiRaporNilais</h1>

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
    'id'=>'tNilaiRaporNilaigrid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'NIS',
        'KD_TAHUN_AJARAN',
        'KD_TINGKAT_KELAS',
        'KD_PROGRAM_PENGAJARAN',
        'KD_ROMBEL',
        'KD_KURIKULUM',
        'KD_PERIODE_BELAJAR',
        'KD_MATA_PELAJARAN_DIAJARKAN',
        'SKBM',
        'NILAI_KOGNITIF',
        'NILAI_PSIKOMOTOR',
        'ID_NILAI_AFEKTIF',
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
                    'Yii::app()->createUrl("tNilaiRaporNilai/view/", 
                                            array("NIS"=>$data->NIS, "KD_TAHUN_AJARAN"=>$data->KD_TAHUN_AJARAN, "KD_TINGKAT_KELAS"=>$data->KD_TINGKAT_KELAS, "KD_PROGRAM_PENGAJARAN"=>$data->KD_PROGRAM_PENGAJARAN, "KD_ROMBEL"=>$data->KD_ROMBEL, "KD_KURIKULUM"=>$data->KD_KURIKULUM, "KD_PERIODE_BELAJAR"=>$data->KD_PERIODE_BELAJAR, "KD_MATA_PELAJARAN_DIAJARKAN"=>$data->KD_MATA_PELAJARAN_DIAJARKAN
											))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("tNilaiRaporNilai/update/", 
                                            array("NIS"=>$data->NIS, "KD_TAHUN_AJARAN"=>$data->KD_TAHUN_AJARAN, "KD_TINGKAT_KELAS"=>$data->KD_TINGKAT_KELAS, "KD_PROGRAM_PENGAJARAN"=>$data->KD_PROGRAM_PENGAJARAN, "KD_ROMBEL"=>$data->KD_ROMBEL, "KD_KURIKULUM"=>$data->KD_KURIKULUM, "KD_PERIODE_BELAJAR"=>$data->KD_PERIODE_BELAJAR, "KD_MATA_PELAJARAN_DIAJARKAN"=>$data->KD_MATA_PELAJARAN_DIAJARKAN
											))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("tNilaiRaporNilai/delete/", 
                                            array("NIS"=>$data->NIS, "KD_TAHUN_AJARAN"=>$data->KD_TAHUN_AJARAN, "KD_TINGKAT_KELAS"=>$data->KD_TINGKAT_KELAS, "KD_PROGRAM_PENGAJARAN"=>$data->KD_PROGRAM_PENGAJARAN, "KD_ROMBEL"=>$data->KD_ROMBEL, "KD_KURIKULUM"=>$data->KD_KURIKULUM, "KD_PERIODE_BELAJAR"=>$data->KD_PERIODE_BELAJAR, "KD_MATA_PELAJARAN_DIAJARKAN"=>$data->KD_MATA_PELAJARAN_DIAJARKAN
											))',
                ),
            ),
        ),
    ),
)); ?>
