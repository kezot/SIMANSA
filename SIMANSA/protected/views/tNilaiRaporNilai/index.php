<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TNilaiRaporNilais',
);

$this->menu=array(
	array('label'=>'Create TNilaiRaporNilai', 'url'=>array('create')),
	array('label'=>'Manage TNilaiRaporNilai', 'url'=>array('admin')),
);
?>

<h1>TNilaiRaporNilais</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
