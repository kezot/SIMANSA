<?php
/* @var $this TPegawaiController */
/* @var $model TPegawai */

$this->breadcrumbs=array(
	'Tpegawais'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TPegawai', 'url'=>array('index')),
	array('label'=>'Manage TPegawai', 'url'=>array('admin')),
);
?>

<h1>Create TPegawai</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>