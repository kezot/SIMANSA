<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TNilaiRapors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TNilaiRapors', 'url'=>array('index')),
    array('label'=>'Manage TNilaiRapor', 'url'=>array('admin')),
);
?>

<h1>Create TNilaiRapor</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
