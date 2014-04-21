<?php
/* @var $this RPembayaranSiswaController */

$this->breadcrumbs=array(
	'R Pembayaran Siswa',
);
$this->menu=array(
	array('label'=>'Create Pembayaran Siswa', 'url'=>array('create')),
	array('label'=>'Manage Pembayaran Siswa', 'url'=>array('admin')),
);
?>

<h1>Siswa</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
