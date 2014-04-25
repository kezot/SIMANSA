<?php
/* @var $this TSiswaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Siswa',
);

$this->menu=array(
	array('label'=>'Buat Siswa Bar', 'url'=>array('create')),
	array('label'=>'Atur Siswa Baru', 'url'=>array('admin')),
);
?>

<h1>Siswa</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
