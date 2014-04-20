<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TNilairapors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TNilairapors', 'url'=>array('index')),
    array('label'=>'Manage TNilairapor', 'url'=>array('admin')),
);
?>

<h1>Create TNilairapor</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
