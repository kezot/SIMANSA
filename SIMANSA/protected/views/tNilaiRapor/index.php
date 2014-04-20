<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TNilairapors',
);

$this->menu=array(
	array('label'=>'Create TNilairapor', 'url'=>array('create')),
	array('label'=>'Manage TNilairapor', 'url'=>array('admin')),
);
?>

<h1>TNilairapors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
