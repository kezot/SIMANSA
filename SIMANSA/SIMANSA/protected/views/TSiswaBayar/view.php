<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TSiswaBayars'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List TSiswaBayar', 'url'=>array('index')),
	array('label'=>'Create TSiswaBayar', 'url'=>array('create')),
	array('label'=>'Update TSiswaBayar', 'url'=>array('update', 'NIS'=>$model->NIS, 'KD_TAHUN_AJARAN'=>$model->KD_TAHUN_AJARAN, 'KD_TINGKAT_KELAS'=>$model->KD_TINGKAT_KELAS, 'KD_PROGRAM_PENGAJARAN'=>$model->KD_PROGRAM_PENGAJARAN, 'KD_ROMBEL'=>$model->KD_ROMBEL, 'ID_PEMBAYARAN_SISWA'=>$model->ID_PEMBAYARAN_SISWA, 'TANGGAL_BAYAR'=>$model->TANGGAL_BAYAR)),
	array('label'=>'Delete TSiswaBayar', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'NIS'=>$model->NIS, 'KD_TAHUN_AJARAN'=>$model->KD_TAHUN_AJARAN, 'KD_TINGKAT_KELAS'=>$model->KD_TINGKAT_KELAS, 'KD_PROGRAM_PENGAJARAN'=>$model->KD_PROGRAM_PENGAJARAN, 'KD_ROMBEL'=>$model->KD_ROMBEL, 'ID_PEMBAYARAN_SISWA'=>$model->ID_PEMBAYARAN_SISWA, 'TANGGAL_BAYAR'=>$model->TANGGAL_BAYAR),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TSiswaBayar', 'url'=>array('admin')),
);
?>

<h1>View TSiswaBayar</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
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
	),
)); ?>
