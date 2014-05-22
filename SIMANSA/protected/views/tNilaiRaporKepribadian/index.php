<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TNilaiRaporKepribadians',
);

$this->menu=array(
	array('label'=>'Create TNilaiRaporKepribadian', 'url'=>array('create')),
	array('label'=>'Manage TNilaiRaporKepribadian', 'url'=>array('admin')),
);
?>

<h1>TNilaiRaporKepribadians</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
