<?php
/* @var $this JadwalMataAjarController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jadwal Mata Ajar',
);

$this->menu=array(
	array('label'=>'Create JadwalMataAjar', 'url'=>array('create')),
	array('label'=>'Manage JadwalMataAjar', 'url'=>array('admin')),
);
?>

<h1>Jadwal Mata Ajars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
