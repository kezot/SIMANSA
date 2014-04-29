<?php
/* @var $this JadwalMataAjarController */
/* @var $model JadwalMataAjar */

$this->breadcrumbs=array(
	'Jadwal Mata Ajar'=>array('index'),
	$model->NAMA_KELAS=>array('view','id'=>$model->NAMA_KELAS),
	'Update',
);

$this->menu=array(
	array('label'=>'List JadwalMataAjar', 'url'=>array('index')),
	array('label'=>'Create JadwalMataAjar', 'url'=>array('create')),
	array('label'=>'View JadwalMataAjar', 'url'=>array('view', 'id'=>$model->NAMA_KELAS)),
	array('label'=>'Manage JadwalMataAjar', 'url'=>array('admin')),
);
?>

<h1>Update JadwalMataAjar <?php echo $model->NAMA_KELAS; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>