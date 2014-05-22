<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'TNilaiRaporKepribadians'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TNilaiRaporKepribadians', 'url'=>array('index')),
    array('label'=>'Manage TNilaiRaporKepribadian', 'url'=>array('admin')),
);
?>

<h1>Create TNilaiRaporKepribadian</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
