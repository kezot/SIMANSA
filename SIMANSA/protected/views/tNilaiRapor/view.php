<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TNilaiRapors'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List TNilaiRapor', 'url'=>array('index')),
	array('label'=>'Create TNilaiRapor', 'url'=>array('create')),
	array('label'=>'Update TNilaiRapor', 'url'=>array('update', 'NIS'=>$model->NIS, 'KD_TAHUN_AJARAN'=>$model->KD_TAHUN_AJARAN, 'KD_TINGKAT_KELAS'=>$model->KD_TINGKAT_KELAS, 'KD_PROGRAM_PENGAJARAN'=>$model->KD_PROGRAM_PENGAJARAN, 'KD_ROMBEL'=>$model->KD_ROMBEL, 'KD_PERIODE_BELAJAR'=>$model->KD_PERIODE_BELAJAR)),
	array('label'=>'Delete TNilaiRapor', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'NIS'=>$model->NIS, 'KD_TAHUN_AJARAN'=>$model->KD_TAHUN_AJARAN, 'KD_TINGKAT_KELAS'=>$model->KD_TINGKAT_KELAS, 'KD_PROGRAM_PENGAJARAN'=>$model->KD_PROGRAM_PENGAJARAN, 'KD_ROMBEL'=>$model->KD_ROMBEL, 'KD_PERIODE_BELAJAR'=>$model->KD_PERIODE_BELAJAR),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TNilaiRapor', 'url'=>array('admin')),
);
?>

<h1>View TNilaiRapor</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'NIS',
		'KD_TAHUN_AJARAN',
		'KD_TINGKAT_KELAS',
		'KD_PROGRAM_PENGAJARAN',
		'KD_ROMBEL',
		'KD_PERIODE_BELAJAR',
		'SAKIT',
		'IJIN',
		'ABSEN',
		'TANGGAL_DIBERIKAN',
		'CATATAN',
		'STATUS_ENTRY',
		'USERNAME',
		'TANGGAL_AKSES',
	),
)); ?>
