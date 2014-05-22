<?php
/* @var $this JadwalMataAjarController */
/* @var $model JadwalMataAjar */

$this->breadcrumbs=array(
	'Jadwal Mata Ajars'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List JadwalMataAjar', 'url'=>array('index')),
	array('label'=>'Create JadwalMataAjar', 'url'=>array('create')),
	array('label'=>'View JadwalMataAjar', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage JadwalMataAjar', 'url'=>array('admin')),
);
?>

<h1>Update JadwalMataAjar <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>