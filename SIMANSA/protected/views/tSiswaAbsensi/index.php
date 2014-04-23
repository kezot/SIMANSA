<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Absensi Siswa',
);

$this->menu=array(
	array('label'=>'Create TSiswaAbsensi', 'url'=>array('create')),
	array('label'=>'Manage TSiswaAbsensi', 'url'=>array('admin')),
);
?>

<h1>TSiswaAbsensis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
