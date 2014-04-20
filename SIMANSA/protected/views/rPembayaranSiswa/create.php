<?php
/* @var $this RPembayaranSiswaController */
/* @var $model RPembayaranSiswa */

$this->breadcrumbs=array(
	'Rpembayaran Siswas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RPembayaranSiswa', 'url'=>array('index')),
	array('label'=>'Manage RPembayaranSiswa', 'url'=>array('admin')),
);
?>

<h1>Create RPembayaranSiswa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>