<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TSiswaAbsensis'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List TSiswaAbsensi', 'url'=>array('index')),
	array('label'=>'Create TSiswaAbsensi', 'url'=>array('create')),
	array('label'=>'Update TSiswaAbsensi', 'url'=>array('update', 'nis'=>$model->nis, 'kd_tahun_ajaran'=>$model->kd_tahun_ajaran, 'kd_tingkat_kelas'=>$model->kd_tingkat_kelas, 'kd_program_pengajaran'=>$model->kd_program_pengajaran, 'kd_rombel'=>$model->kd_rombel, 'tanggal'=>$model->tanggal)),
	array('label'=>'Delete TSiswaAbsensi', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'nis'=>$model->nis, 'kd_tahun_ajaran'=>$model->kd_tahun_ajaran, 'kd_tingkat_kelas'=>$model->kd_tingkat_kelas, 'kd_program_pengajaran'=>$model->kd_program_pengajaran, 'kd_rombel'=>$model->kd_rombel, 'tanggal'=>$model->tanggal),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TSiswaAbsensi', 'url'=>array('admin')),
);
?>

<h1>View TSiswaAbsensi</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
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
	),
)); ?>
