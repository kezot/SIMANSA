<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
<<<<<<< HEAD
	'Nilai Rapor',
);

$this->menu=array(
	array('label'=>'Create Nilai Rapor', 'url'=>array('create')),
	array('label'=>'Manage Nilai Rapor', 'url'=>array('admin')),
);
?>

<h1>Nilai Rapor</h1>
=======
	'TNilairapors',
);

$this->menu=array(
	array('label'=>'Create TNilairapor', 'url'=>array('create')),
	array('label'=>'Manage TNilairapor', 'url'=>array('admin')),
);
?>

<h1>TNilairapors</h1>
>>>>>>> d487b9dc699bcf56014c87e081200d6b40a20cda

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
