<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TSiswaBayars',
);

$this->menu=array(
	array('label'=>'Create TSiswaBayar', 'url'=>array('create')),
	array('label'=>'Manage TSiswaBayar', 'url'=>array('admin')),
);
?>

<h1>TSiswaBayars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
