<?php
/* @var $this RPembayaranSiswaController */
/* @var $model RPembayaranSiswa */

$this->breadcrumbs=array(
	'Rpembayaran Siswas'=>array('index'),
	$model->ID_PEMBAYARAN_SISWA,
);

$this->menu=array(
	array('label'=>'List RPembayaranSiswa', 'url'=>array('index')),
	array('label'=>'Create RPembayaranSiswa', 'url'=>array('create')),
	array('label'=>'Update RPembayaranSiswa', 'url'=>array('update', 'id'=>$model->ID_PEMBAYARAN_SISWA)),
	array('label'=>'Delete RPembayaranSiswa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_PEMBAYARAN_SISWA),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RPembayaranSiswa', 'url'=>array('admin')),
);
?>

<h1>View RPembayaranSiswa #<?php echo $model->ID_PEMBAYARAN_SISWA; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_PEMBAYARAN_SISWA',
		'NM_PEMBAYARAN_SISWA',
		'USERNAME',
		'TANGGAL_AKSES',
	),
)); ?>
