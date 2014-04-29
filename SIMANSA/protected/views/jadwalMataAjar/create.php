<?php
/* @var $this JadwalMataAjarController */
/* @var $model JadwalMataAjar */

$this->breadcrumbs=array(
	'Jadwal Mata Ajar'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JadwalMataAjar', 'url'=>array('index')),
	array('label'=>'Manage JadwalMataAjar', 'url'=>array('admin')),
);
?>

<h1>Create JadwalMataAjar</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>