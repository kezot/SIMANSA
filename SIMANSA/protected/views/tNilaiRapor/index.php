<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Nilai Rapor',
);

$this->menu=array(
	array('label'=>'Create Nilai Rapor', 'url'=>array('create')),
	array('label'=>'Manage Nilai Rapor', 'url'=>array('admin')),
);
?>

<h1>Nilai Rapor</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
