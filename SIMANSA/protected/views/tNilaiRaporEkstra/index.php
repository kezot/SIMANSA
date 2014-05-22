<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TNilaiRaporEkstras',
);

$this->menu=array(
	array('label'=>'Create TNilaiRaporEkstra', 'url'=>array('create')),
	array('label'=>'Manage TNilaiRaporEkstra', 'url'=>array('admin')),
);
?>

<h1>TNilaiRaporEkstras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
