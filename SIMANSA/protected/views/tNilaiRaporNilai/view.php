<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TNilaiRaporNilais'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List TNilaiRaporNilai', 'url'=>array('index')),
	array('label'=>'Create TNilaiRaporNilai', 'url'=>array('create')),
	array('label'=>'Update TNilaiRaporNilai', 'url'=>array('update', 'NIS'=>$model->NIS, 'KD_TAHUN_AJARAN'=>$model->KD_TAHUN_AJARAN, 'KD_TINGKAT_KELAS'=>$model->KD_TINGKAT_KELAS, 'KD_PROGRAM_PENGAJARAN'=>$model->KD_PROGRAM_PENGAJARAN, 'KD_ROMBEL'=>$model->KD_ROMBEL, 'KD_KURIKULUM'=>$model->KD_KURIKULUM, 'KD_PERIODE_BELAJAR'=>$model->KD_PERIODE_BELAJAR, 'KD_MATA_PELAJARAN_DIAJARKAN'=>$model->KD_MATA_PELAJARAN_DIAJARKAN)),
	array('label'=>'Delete TNilaiRaporNilai', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'NIS'=>$model->NIS, 'KD_TAHUN_AJARAN'=>$model->KD_TAHUN_AJARAN, 'KD_TINGKAT_KELAS'=>$model->KD_TINGKAT_KELAS, 'KD_PROGRAM_PENGAJARAN'=>$model->KD_PROGRAM_PENGAJARAN, 'KD_ROMBEL'=>$model->KD_ROMBEL, 'KD_KURIKULUM'=>$model->KD_KURIKULUM, 'KD_PERIODE_BELAJAR'=>$model->KD_PERIODE_BELAJAR, 'KD_MATA_PELAJARAN_DIAJARKAN'=>$model->KD_MATA_PELAJARAN_DIAJARKAN),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TNilaiRaporNilai', 'url'=>array('admin')),
);
?>

<h1>View TNilaiRaporNilai</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
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
	),
)); ?>
