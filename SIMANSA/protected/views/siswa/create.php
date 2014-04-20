<?php
/* @var $this SiswaController */
/* @var $model Siswa */

$this->breadcrumbs=array(
	'Siswas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Siswa', 'url'=>array('index')),
	array('label'=>'Manage Siswa', 'url'=>array('admin')),
);
?>

<h1>Create Siswa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>