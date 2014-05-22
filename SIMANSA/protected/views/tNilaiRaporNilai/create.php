<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TNilaiRaporNilais'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TNilaiRaporNilais', 'url'=>array('index')),
    array('label'=>'Manage TNilaiRaporNilai', 'url'=>array('admin')),
);
?>

<h1>Create TNilaiRaporNilai</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
