<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TNilaiRaporEkstras'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List TNilaiRaporEkstra', 'url'=>array('index')),
	array('label'=>'Create TNilaiRaporEkstra', 'url'=>array('create')),
	array('label'=>'Update TNilaiRaporEkstra', 'url'=>array('update', 'NIS'=>$model->NIS, 'KD_TAHUN_AJARAN'=>$model->KD_TAHUN_AJARAN, 'KD_TINGKAT_KELAS'=>$model->KD_TINGKAT_KELAS, 'KD_PROGRAM_PENGAJARAN'=>$model->KD_PROGRAM_PENGAJARAN, 'KD_ROMBEL'=>$model->KD_ROMBEL, 'KD_PERIODE_BELAJAR'=>$model->KD_PERIODE_BELAJAR, 'ID_EKSTRAKURIKULER'=>$model->ID_EKSTRAKURIKULER)),
	array('label'=>'Delete TNilaiRaporEkstra', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'NIS'=>$model->NIS, 'KD_TAHUN_AJARAN'=>$model->KD_TAHUN_AJARAN, 'KD_TINGKAT_KELAS'=>$model->KD_TINGKAT_KELAS, 'KD_PROGRAM_PENGAJARAN'=>$model->KD_PROGRAM_PENGAJARAN, 'KD_ROMBEL'=>$model->KD_ROMBEL, 'KD_PERIODE_BELAJAR'=>$model->KD_PERIODE_BELAJAR, 'ID_EKSTRAKURIKULER'=>$model->ID_EKSTRAKURIKULER),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TNilaiRaporEkstra', 'url'=>array('admin')),
);
?>

<h1>View TNilaiRaporEkstra</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'NIS',
		'KD_TAHUN_AJARAN',
		'KD_TINGKAT_KELAS',
		'KD_PROGRAM_PENGAJARAN',
		'KD_ROMBEL',
		'KD_PERIODE_BELAJAR',
		'ID_EKSTRAKURIKULER',
		'KETERANGAN',
		'CATATAN',
		'USERNAME',
		'TANGGAL_AKSES',
	),
)); ?>
