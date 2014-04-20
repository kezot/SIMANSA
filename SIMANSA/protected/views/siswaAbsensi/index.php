<?php
/* @var $this SiswaAbsensiController */

$this->breadcrumbs=array(
	'Siswa Absensi',
);


$this->menu=array(
	array('label'=>'Create SiswaAbsensi', 'url'=>array('create')),
	array('label'=>'Manage SiswaAbsensi', 'url'=>array('admin')),
);
?>

<h1>Siswa</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
