<?php
/* @var $this JadwalMataAjarController */
/* @var $model JadwalMataAjar */


$this->breadcrumbs=array(
	'Jadwal Mata Ajars'=>array('index'),
	$model->NAMA_KELAS,
);

$this->menu=array(
	array('label'=>'List JadwalMataAjar', 'url'=>array('index')),
	array('label'=>'Create JadwalMataAjar', 'url'=>array('create')),
	array('label'=>'Update JadwalMataAjar', 'url'=>array('update', 'id'=>$model->NAMA_KELAS)),
	array('label'=>'Delete JadwalMataAjar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->NAMA_KELAS),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JadwalMataAjar', 'url'=>array('admin')),
);
?>

<h1>View JadwalMataAjar #<?php echo $model->NAMA_KELAS; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'NAMA_KELAS',
		'HARI',
		'JAM',
		'MATA_PELAJARAN',
	),
)); ?>
