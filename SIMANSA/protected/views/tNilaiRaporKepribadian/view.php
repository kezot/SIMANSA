<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TNilaiRaporKepribadians'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List TNilaiRaporKepribadian', 'url'=>array('index')),
	array('label'=>'Create TNilaiRaporKepribadian', 'url'=>array('create')),
	array('label'=>'Update TNilaiRaporKepribadian', 'url'=>array('update', 'NIS'=>$model->NIS, 'KD_TAHUN_AJARAN'=>$model->KD_TAHUN_AJARAN, 'KD_TINGKAT_KELAS'=>$model->KD_TINGKAT_KELAS, 'KD_PROGRAM_PENGAJARAN'=>$model->KD_PROGRAM_PENGAJARAN, 'KD_ROMBEL'=>$model->KD_ROMBEL, 'KD_PERIODE_BELAJAR'=>$model->KD_PERIODE_BELAJAR, 'KD_KEPRIBADIAN'=>$model->KD_KEPRIBADIAN)),
	array('label'=>'Delete TNilaiRaporKepribadian', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'NIS'=>$model->NIS, 'KD_TAHUN_AJARAN'=>$model->KD_TAHUN_AJARAN, 'KD_TINGKAT_KELAS'=>$model->KD_TINGKAT_KELAS, 'KD_PROGRAM_PENGAJARAN'=>$model->KD_PROGRAM_PENGAJARAN, 'KD_ROMBEL'=>$model->KD_ROMBEL, 'KD_PERIODE_BELAJAR'=>$model->KD_PERIODE_BELAJAR, 'KD_KEPRIBADIAN'=>$model->KD_KEPRIBADIAN),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TNilaiRaporKepribadian', 'url'=>array('admin')),
);
?>

<h1>View TNilaiRaporKepribadian</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'NIS',
		'KD_TAHUN_AJARAN',
		'KD_TINGKAT_KELAS',
		'KD_PROGRAM_PENGAJARAN',
		'KD_ROMBEL',
		'KD_PERIODE_BELAJAR',
		'KD_KEPRIBADIAN',
		'KETERANGAN',
		'USERNAME',
		'TANGGAL_AKSES',
	),
)); ?>
