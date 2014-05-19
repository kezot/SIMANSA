<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TNilaiRapors',
);

$this->menu=array(
	array('label'=>'Create TNilaiRapor', 'url'=>array('create')),
	array('label'=>'Manage TNilaiRapor', 'url'=>array('admin')),
);
?>

<h1>TNilaiRapors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
