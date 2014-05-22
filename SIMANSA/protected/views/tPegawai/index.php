<?php
/* @var $this TPegawaiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tpegawais',
);

$this->menu=array(
	array('label'=>'Create TPegawai', 'url'=>array('create')),
	array('label'=>'Manage TPegawai', 'url'=>array('admin')),
);
?>

<h1>Tpegawais</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
