<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TNilaiRaporEkstras'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TNilaiRaporEkstras', 'url'=>array('index')),
    array('label'=>'Manage TNilaiRaporEkstra', 'url'=>array('admin')),
);
?>

<h1>Create TNilaiRaporEkstra</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
